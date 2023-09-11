# Rave Build PHP Coding Test

Welcome to the Rave Build PHP Coding Test! A lot of our product at Rave
involves managing projects, and the tasks required to complete those projects.
This is reflected in this codebase, which is a few classes that represent some
common functionality at Rave. We expect to spend **30 minutes to 1 hour** on this test.
Your objectives are:

1. Get the tests passing
2. Make the rest of the code as good as you can make it (whatever that means to you)
3. Note down any choices or assumptions you made and why in this README
4. Note down what you would do if you had more time in this README
5. Send us this repository (or a link to your fork)!

**Feel free to edit any files in this repository** as part of this exercise.

## Installation

PHP installations are quite complicated, so we have Dockerised the
dependencies for this test in an attempt to simplify getting it running.
You need to:

1. Clone this Git repository
2. Install [Make](https://www.gnu.org/software/make/). For Windows
   [follow one of these instructions](https://stackoverflow.com/a/32127632).
   For MacOS, install with homebrew like `brew install make`. For Linux, use
   your package manager like `apt install make`.
3. Install Docker. For Windows and MacOS we recommend
   [installing Docker Desktop](https://docs.docker.com/desktop/install/windows-install/).
   For Linux distributions we recommend
   [installing the Docker Engine](https://docs.docker.com/engine/install/).
4. Check that Docker is working by running `docker run hello-world`.

## Running the tests

Run `make test` to run the PHPUnit tests in a Docker container.

## Running program.php

Run `make run` to execute `program.php`. It is not required, but we have provided
it if you would like to just run PHP code to debug things.

## My notes

### Choices or assumptions I made and reasons why

- I assume that we might want to connect this to a database at some point so we
  shouldn't be passing an id to the addTask method. Since the id should be unique it
  should be auto-generated as this is how it would work with a database.
  I've fixed it to do that.
- I assume we want to keep code to a minimum and avoid duplication wherever possible so
  I've condensed all the assertions into one test. While this avoids a lot of duplication
  and is somewhat easier to read, there is a case to say this shouldn't be done in unit
  testing as each individual test should perhaps just be testing one piece of
  functionality. There's also a case to say that testing individually doesn't reflect
  how the user is using the app and we should be testing as close to that as possible.
  A user can add, delete etc concurrently but individual unit tests don't test the app in
  that way. While taking this more condensed approach can drastically reduce the time it
  takes to run a testing suite with some front-end frameworks by reducing the amount of
  mounts, it doesn't seem to make much difference in performance in this case. I did this
  mainly as an experiment to see if I could improve the test performance and am in no way
  suggesting that this is always the best approach.

### Things I would do if I had more time

- I would implement a slightly more structured architecture so when the app scales it
  won't get messy. The Project and Task class files should probably be in a different dir
  to program.php.
- I would add some error handling so if we're trying to call a method on a task there
  would be some feedback when there's no task matching the given id.
- I would also extract the methods from Project.php and put them in a new class called Tasks.
