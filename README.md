# Rave Build PHP Coding Test
Welcome to the Rave Build PHP Coding Test! This repository should contains everything you need for our coding interview.

## Installation
1. Clone this Git repository
2. Install [Make](https://www.gnu.org/software/make/). For Windows [follow one of these instructions](https://stackoverflow.com/a/32127632). For MacOS, install with homebrew like `brew install make`. For Linux, use your package manager like `apt install make`.
3. Install Docker. For Windows and MacOS we recommend [installing Docker Desktop](https://docs.docker.com/desktop/install/windows-install/). For Linux distributions we recommend [installing the Docker Engine](https://docs.docker.com/engine/install/).
4. Check that Docker is working by running `docker run hello-world`.
5. Run `make up`. This starts a PHP web server in the background with the working directory mounted to it, and installs the dependencies.
6. The server has to install dependencies the first time it runs. Run `make logs` until you see `apache2 -D FOREGROUND`

## Running the tests
Run `make test` to run the tests inside the running Docker container.

## Running the program
Run `make run` to run the app inside the running Docker container.
