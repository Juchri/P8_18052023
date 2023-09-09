<?php
namespace AppBundle\Entity;

use AppBundle\Entity\User;
use AppBundle\Entity\Task;

/**
 * Database simulation class.
 *
 * This class simulates a database-like storage for users and tasks.
 */
class Database
{
    private $users = [];

    /**
     * Add a user to the database.
     *
     * This method simulates the addition of a user to the database.
     *
     * @param User $user The user to be added.
     *
     * @return bool Returns true (simulating success).
     */
    public function addUser(User $user)
    {
        // Simulate adding the user to the database
        $this->users[$user->getEmail()] = $user;

        return true; // We assume the addition is always successful
    }

    /**
     * Get a user by email.
     *
     * This method retrieves a user from the database based on the email address.
     *
     * @param string $email The email address of the user to retrieve.
     *
     * @return User|null Returns the user object if found, or null if not found.
     */
    public function getUserByEmail($email)
    {
        if (isset($this->users[$email])) {
            return $this->users[$email];
        }

        return null; // If the user is not found
    }

    /**
     * Get all users.
     *
     * This method retrieves all users from the database.
     *
     * @return array The array of user objects.
     */
    public function getUsers()
    {
        return $this->users;
    }



    private $tasks = [];
    private $lastTaskId = 0;

    /**
     * Add a task to the database.
     *
     * This method simulates the addition of a task to the database.
     *
     * @param Task $task The task to be added.
     *
     * @return bool Returns true (simulating success).
     */
    public function addTask(Task $task)
    {
        // Simulate adding the task to the database
        $this->tasks[$task->getId()] = $task;

        return true; // We assume the addition is always successful
    }

    /**
     * Get a task by ID.
     *
     * This method retrieves a task from the database based on its ID.
     *
     * @param int $id The ID of the task to retrieve.
     *
     * @return Task|string Returns the task object if found, or an error message if not found.
     */
    public function getTaskById($id)
    {
        if (isset($this->tasks[$id])) {
            return $this->tasks[$id];
        }

        return "Task with ID $id was not found.";
    }

    /**
     * Get all tasks.
     *
     * This method retrieves all tasks from the database.
     *
     * @return array The array of task objects.
     */
    public function getTasks()
    {
        return $this->tasks;
    }
}
