<?php

use App\Project;
use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    public function test_tasks(): void
    {
        $name = 'Test project';
        $project = new Project($name);

        // Test that the project name is set
        $this->assertEquals($name, $project->name);

        // Add some tasks and check that we have the right amount
        $project->addTask('Book pre-wrap inspection');
        $project->addTask('Garage door install');
        $project->addTask('Appliance Delivery');
        $this->assertCount(3, $project->tasks);

        // Test the findTask method
        $task = $project->findTask(1);
        $this->assertEquals('Garage door install', $task->name);

        // Test the deleteTask method
        $project->deleteTask(1);
        $this->assertCount(2, $project->tasks);
    }
}
