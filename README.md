# Rave Build PHP Coding Test
Welcome to the Rave Build PHP Coding Test! This repository should contains everything you need for our coding interview.

## Installation
1. Clone this Git repository
2. Install [Make](https://www.gnu.org/software/make/). For Windows [follow one of these instructions](https://stackoverflow.com/a/32127632). For MacOS, install with homebrew like `brew install make`. For Linux, use your package manager like `apt install make`.
3. Install Docker. For Windows and MacOS we recommend [installing Docker Desktop](https://docs.docker.com/desktop/install/windows-install/). For Linux distributions we recommend [installing the Docker Engine](https://docs.docker.com/engine/install/).
4. Check that Docker is working by running `docker run hello-world`.
5. Run one of the commands below. Note that the first time you run one of these commands, there will be a pause while Composer installs dependencies.

## Running the tests
Run `make test` to run the PHPUnit tests in a Docker container.

## Running the program
Run `make run` to run `program.php` in a Docker container.
