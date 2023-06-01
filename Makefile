cli:
	@docker compose exec -it web bash

down:
	@docker compose down

logs:
	@docker compose logs

run:
	@docker compose exec web php ./src/program.php

test:
	@docker compose exec web ./vendor/bin/phpunit tests

up:
	@docker compose up --detach