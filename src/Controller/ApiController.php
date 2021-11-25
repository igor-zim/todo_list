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
		//Получить список выполненных или невыполненных задач
		$undone = $request->get('task_get_undone', false);
		$done = $request->get('task_get_done', false);
		$data = ($done !== false) ? $done : $undone;
		if ($data !== false)
		{
			$limit = is_numeric($data) ? (int) $data : NULL;
			$status = ($undone !== false )? 0 : 1;
			$tasks = $rep->findBy(['status' => $status], ['t' => 'ASC'], $limit);
			$res['STATUS'] = 'OK';
			$res['DATA'] = [];
			foreach ($tasks as $k => $v)
			{
				$res['DATA'][] = ['id' => $v->getId(), 't' => $v->getT(), 'text' => $v->getBody()];
			}
		}
		//Добавить задачу
		$data = $request->get('task_add', false);
		if ($data !== false)
		{
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
		}
		//Пометить задачу как выполненную, или как невыполненную, или удалить задачу
		$done = $request->get('task_set_done', false);
		$undone = $request->get('task_set_undone', false);
		$delete = $request->get('task_delete', false);
		$data = ($done !== false) ? $done : (($undone !== false) ? $undone : $delete);
		if ($data !== false)
		{
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
			if ($delete !== false)
			{
				$manager->remove($task);
				$manager->flush();
				$res['STATUS'] = 'OK';
				$res['DATA'] = [];
			} else
			{
				$status = $undone ? 0 : 1;
				$task->setStatus($status);
				$manager->persist($task);
				$manager->flush();
				$res['STATUS'] = 'OK';
				$res['DATA'][] = ['id' => $task->getId(), 't' => $task->getT(), 'text' => $task->getBody()];
			}
		}
		if (!count($res))
		{
			$res['STATUS'] = 'ERROR';
			$res['ERROR_MESSAGE'] = 'Parameters are unknown or missing';
			return new JsonResponse($res, 400);
		}
		return new JsonResponse($res);
	}
}
?>