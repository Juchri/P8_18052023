<?php declare(strict_types=1);

namespace App\Tests\Repository;

use AppBundle\Entity\Database;
use AppBundle\Entity\User;
use AppBundle\Entity\Task;
use DateTime;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;

final class TaskTest extends TestCase
{

    public function testAddTask()
    {
        // Create a new user with admin role
        $user = new User();
        $user->setUsername('John Doe');
        $user->setEmail('john.doe@example.com');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword('password');

        // Create a new task
        $task = new Task();
        $task->setCreatedAt(date("Y-m-d H:i:s"));
        $task->setTitle('Task 1');
        $task->setContent('Test Task 1');
        $task->setUser($user);

        // Create a mock of the Database class
        $databaseMock = $this->createMock(Database::class);

        // Configure the mock behavior for the addTask() method
        $databaseMock->expects($this->once())
            ->method('addTask')
            ->willReturnCallback(function (Task $addedTask) use ($task) {
                // Assert the expected values
                $this->assertEquals($task->getCreatedAt(), $addedTask->getCreatedAt());
                $this->assertEquals($task->getTitle(), $addedTask->getTitle());
                $this->assertEquals($task->getContent(), $addedTask->getContent());
                $this->assertEquals($task->getUser(), $addedTask->getUser());
                $this->assertEquals(false, $addedTask->isDone());

                // Return the added task with an ID
                $addedTask->setTestId(123); // Set the desired ID value
                return $addedTask;
            });

        // Execute the tested logic with the Database mock
        $addedTask = $databaseMock->addTask($task);

        // Assert the expected ID value
        $this->assertEquals(123, $addedTask->getId());

    }

    public function testToggleTask()
    {
        // Create a new user with admin role
        $user = new User();
        $user->setUsername('John Doe');
        $user->setEmail('john.doe@example.com');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword('password');

        // Create a new task
        $task = new Task();
        $task->setCreatedAt(date("Y-m-d H:i:s"));
        $task->setTitle('Task 1');
        $task->setContent('Test Task 1');
        $task->setUser($user);

        // Create a mock of the Database class
        $databaseMock = $this->createMock(Database::class);

        // Configure the mock behavior for the addTask() method
        $databaseMock->expects($this->once())
            ->method('addTask')
            ->willReturnCallback(function (Task $addedTask) use ($task) {
                // Assert the expected values
                $this->assertEquals($task->getCreatedAt(), $addedTask->getCreatedAt());
                $this->assertEquals($task->getTitle(), $addedTask->getTitle());
                $this->assertEquals($task->getContent(), $addedTask->getContent());
                $this->assertEquals($task->getUser(), $addedTask->getUser());
                $this->assertEquals(false, $addedTask->isDone());
                $this->assertEquals(false, $addedTask->toggle($task));

                // Return the added task with an ID
                $addedTask->setTestId(123); // Set the desired ID value
                return $addedTask;
            });

        // Execute the tested logic with the Database mock
        $addedTask = $databaseMock->addTask($task);

        // Assert the expected ID value
        $this->assertEquals(123, $addedTask->getId());

    }
    
}