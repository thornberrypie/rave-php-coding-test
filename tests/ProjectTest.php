<?php

use App\Project;
use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    public function test_project_name_is_set(): void
    {
        $name = 'Test project';
        $project = new Project($name);

        $this->assertEquals($name, $project->name);
    }

    public function test_adding_tasks_increases_task_count(): void
    {
        $project = new Project('Test project');

        $project->addTask(0, 'Book pre-wrap inspection');
        $project->addTask(1, 'Garage door install');
        $project->addTask(2, 'Appliance Delivery');

        $this->assertCount(3, $project->tasks);
    }

    public function test_get_task_by_id(): void
    {
        $project = new Project('Test project');
        $project->addTask(0, 'Book pre-wrap inspection');
        $project->addTask(1, 'Garage door install');

        $task = $project->getTask(1);

        $this->assertEquals('Garage door install', $task);
    }

    public function test_delete_task_by_id(): void
    {
        $project = new Project('Test project');
        $project->addTask(0, 'Book pre-wrap inspection');
        $project->addTask(1, 'Garage door install');

        $project->deleteTask(1);

        $this->assertCount(1, $project->tasks);
    }
}
