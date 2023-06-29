cli: up
	@docker compose exec -it web bash

down:
	@docker compose down

logs: up
	@docker compose logs

run: up
	@docker compose exec web php ./src/program.php

test: up
	@docker compose exec web ./vendor/bin/phpunit tests

up:
	@docker compose up --detach