<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Entity class representing a task.
 *
 * This class represents a task with various properties such as ID, creation date, title, content, and status.
 * It also includes a relationship with a user (doneBy).
 *
 * @ORM\Entity
 * @ORM\Table
 */
class Task
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="You must enter a title.")
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="You must enter content.")
     */
    private $content;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isDone;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="task")
     */
    private $doneBy;

    /**
     * Task constructor.
     */
    public function __construct()
    {
        $this->createdAt = new \Datetime();
        $this->isDone = false;
    }

    public function setTestId(int $id): void
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function isDone()
    {
        return $this->isDone;
    }


    /**
     * Toggle the status of the task.
     *
     * @param bool $flag The status flag to set.
     */
    public function toggle($flag)
    {
        $this->isDone = $flag;
    }

    public function getUser()
    {
        return $this->doneBy;
    }

    public function setUser($doneBy)
    {
        $this->doneBy = $doneBy;
    }
}
