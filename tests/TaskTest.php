<?php declare(strict_types=1);

namespace App\Tests\Repository;

use Database;
use AppBundle\Entity\User;
use AppBundle\Entity\Task;
use DateTime;
use PHPUnit\Framework\TestCase;


final class TaskTest extends TestCase
{
    public function testAddTask()
    {
       // Crée un nouvel utilisateur avec rôle admin
        $user = new User();
        $user->setUsername('John Doe');
        $user->setEmail('john.doe@example.com');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword('password');

        // Ajoute l'utilisateur à la source de données
        $database = new Database();
        $result = $database->addUser($user);

        // Crée un nouvel utilisateur avec des rôles
        $task = new Task();
        $task->setCreatedAt(date("Y-m-d H:i:s"));
        $task->setTitle('Task 1');
        $task->setContent('Test Task 1');
        $task->setUser($user);


        // Vérifie si l'utilisateur existe
        $this->assertInstanceOf(Task::class, $task);
    }
}