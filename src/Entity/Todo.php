<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Todo
 *
 * @ORM\Table(name="todo", indexes={@ORM\Index(name="status", columns={"status"}), @ORM\Index(name="t", columns={"t"})})
 * @ORM\Entity
 */
class Todo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

//Не забываем, что строка в utf8, и русские символы кодируются двумя байтами
    /**
     * @var string
     *
     * @ORM\Column(name="body", type="string", length=2000, nullable=false)
     */
    private $body;

    /**
     * @var int
     *
     * @ORM\Column(name="t", type="integer", nullable=false)
     */
    private $t;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @ORM\Column(type="integer")
     */

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getT(): ?int
    {
        return $this->t;
    }

    public function setT(int $t): self
    {
        $this->t = $t;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }
}
