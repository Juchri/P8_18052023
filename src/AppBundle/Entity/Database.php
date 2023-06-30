<?php
namespace AppBundle\Entity;

use AppBundle\Entity\User;
use AppBundle\Entity\Task;

class Database
{
    private $users = [];

    public function addUser(User $user)
    {
        // Simule l'ajout de l'utilisateur à la base de données
        $this->users[$user->getEmail()] = $user;

        return true; // On suppose que l'ajout est toujours réussi
    }

    public function getUserByEmail($email)
    {
        // Récupère l'utilisateur à partir de l'adresse e-mail
        if (isset($this->users[$email])) {
            return $this->users[$email];
        }

        return null; // Si l'utilisateur n'est pas trouvé
    }

    public function getUsers()
    {
        return $this->users;
    }



    private $tasks = [];
    private $lastTaskId = 0;

    public function addTask(Task $task)
    {
        // Simule l'ajout de l'utilisateur à la base de données
        $this->users[$task->getId()] = $task;

        return true; // On suppose que l'ajout est toujours réussi
    }



    public function getTaskById($id)
    {
        // Récupère la tâche à partir de l'id
        if (isset($this->tasks[$id])) {
            return $this->tasks[$id];
        }

        return ("La tâche avec l'identifiant $id n'a pas été trouvée.");
    }

    public function getTasks()
    {
        return $this->tasks;
    }
}