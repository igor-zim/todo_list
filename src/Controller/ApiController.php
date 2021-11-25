<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Todo;
use App\Repository\TodoRepository;
use Symfony\Component\HttpFoundation\Request;

class ApiController extends AbstractController
{
	/**
	*@Route("/", methods={"GET", "POST"})
	*/
	public function handleRequest(Request $request, TodoRepository $rep, EntityManagerInterface $manager): Response
	{
		$res = [];
		//Получаем данные запроса, проверяем корректность
		$cnt = 0;
		$commands = ['task_get_undone', 'task_get_done', 'task_add', 'task_set_done', 'task_set_undone', 'task_delete'];
		foreach ($commands as $k => $v)
		{
			//false вернет, только если параметр не задан. Если задан, но значение опущено, будет NULL
			if ($request->get($v, false) !== false)
			{
				$cnt++;
				$command = $v;
				$data = $request->get($v);
			}
		}
		if ($cnt != 1)
		{
			$res['STATUS'] = 'ERROR';
			$res['ERROR_MESSAGE'] = 'Parameters are unknown or missing';
			return new JsonResponse($res, 400);
		}
		switch ($command)
		{
			case 'task_get_undone':
			case 'task_get_done':
				$limit = is_numeric($data) ? (int) $data : NULL;
				$status = ($command == 'task_get_undone' )? 0 : 1;
				$tasks = $rep->findBy(['status' => $status], ['t' => 'ASC'], $limit);
				$res['STATUS'] = 'OK';
				$res['DATA'] = [];
				foreach ($tasks as $k => $v)
				{
					$res['DATA'][] = ['id' => $v->getId(), 't' => $v->getT(), 'text' => $v->getBody()];
				}
				break;
			case 'task_add':
				$l = mb_strlen($data);
				if ($l > 1000)
				{
					$res['STATUS'] = 'ERROR';
					$res['ERROR_MESSAGE'] = 'Text is too long';
					return new JsonResponse($res, 400);
				}
				$t = time();
				$task = new Todo();
				$task->setT($t);
				$task->setBody($data);
				$task->setStatus(0);
				$manager->persist($task);
				$manager->flush();
				$res['STATUS'] = 'OK';
				$res['DATA'][] = ['id' => $task->getId(), 't' => $task->getT(), 'text' => $task->getBody()];
				break;
			case 'task_set_done':
			case 'task_set_undone':
			case 'task_delete':
				if (!is_numeric($data))
				{
					$res['STATUS'] = 'ERROR';
					$res['ERROR_MESSAGE'] = 'Invalid task ID';
					return new JsonResponse($res, 400);
				}
				$task = $rep->findOneBy(['id' => $data]);
				if (!$task)
				{
					$res['STATUS'] = 'ERROR';
					$res['ERROR_MESSAGE'] = 'Task ID '.$data.' not found';
					return new JsonResponse($res, 404);
				}
				if ($command == 'task_delete')
				{
					$manager->remove($task);
					$manager->flush();
					$res['STATUS'] = 'OK';
					$res['DATA'] = [];
				} else
				{
					$status = ($command == 'task_set_done') ? 1 : 0;
					$task->setStatus($status);
					$manager->persist($task);
					$manager->flush();
					$res['STATUS'] = 'OK';
					$res['DATA'][] = ['id' => $task->getId(), 't' => $task->getT(), 'text' => $task->getBody()];
				}
				break;
		}
		return new JsonResponse($res);
	}
}
?>