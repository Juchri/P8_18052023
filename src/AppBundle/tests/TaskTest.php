<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Task extends TestCase
{

    public function testSetUserTask()
    {
        $task = new Task();
        $this->assertSame('Juliette', $task->setUser('Juliette'));
    }

}