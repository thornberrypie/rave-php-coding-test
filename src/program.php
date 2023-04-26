<?php

require 'vendor/autoload.php';

use App\Project;

$project = new Project("Test Project");
echo "created project " . $project->name . "\r\n";
echo 'Project has ' . count($project->tasks) . ' tasks' . "\r\n";

echo "Adding tasks for the project" . "\r\n";

$project->addTask(0, "Book pre-wrap inspection");
$project->addTask(1, "Garage door install");
$project->addTask(2, "Appliance Delivery");

echo 'project has ' , count($project->tasks) , ' tasks' , "\r\n";

echo "Task with id [1] is " . $project->getTask(1) . "\r\n";

echo "Deleting task with id[1]";

$project->deleteTask(1);

echo 'project has ' . count($project->tasks) . ' tasks, created project ?
expect to see 2' . "\r \n";
