<?php

use App\Project;
use PHPUnit\Framework\TestCase;

class ProjectTest extends TestCase
{
    public function test_a_new_project_has_no_tasks(): void
    {
        $project = new Project('Test project');

        $this->assertEquals(0, $project->tasks->count());
    }
}
