<?php

namespace App\Entity;

use App\Repository\OrderLogRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderLogRepository::class)
 * @ORM\Table(name="order_log")
 */
class OrderLog
{
    const CREATE = 'Create';
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="smallint")
     */
    private $id;

    /**
     * @ORM\Column(name="action", type="string", length=50)
     */
    private $action;
 
    /**
     * @ORM\Column(name="message", type="STRING")
     */
    private $message;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(string $action): self
    {
        $this->action = $action;
        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(STRING $msg): self
    {
        $this->message = $msg;
        return $this;
    }
}
