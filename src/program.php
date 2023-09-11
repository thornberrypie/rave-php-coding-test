<?php

require '../vendor/autoload.php';

use App\Project;

/**
 * If you would like to test the code by running it directly, you can easily do
 * so in this file.
 */
$project = new Project('Test Project');
$project->addTask(0, 'Book pre-wrap inspection');

print_r($project);
