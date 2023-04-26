# Rave Build Coding Test Environment
Welcome to the Rave Build Coding Test environment! This repository should contains everything you need for our coding interview.

## Installation
1. Clone this Git repository
2. Install Docker. For Windows and MacOS we recommend [installing Docker Desktop](https://docs.docker.com/desktop/install/windows-install/). For Linux distributions we recommend [installing the Docker Engine](https://docs.docker.com/engine/install/).
3. Check that Docker is working by running `docker run hello-world`.
4. Run `docker compose up --detach`. This starts a PHP web server in the background with the working directory mounted to it.
5. Run `docker compose exec web ./vendor/bin/phpunit tests` to run the tests inside the running Docker container.
