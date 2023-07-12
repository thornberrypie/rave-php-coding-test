RUN_PHP = @docker compose run --rm php

cli:
	@docker compose run --interactive --tty --rm php bash

logs:
	@docker compose logs

run: composer-install
	$(RUN_PHP) php ./src/program.php

test: composer-install
	$(RUN_PHP) ./vendor/bin/phpunit tests

composer-install:
	$(RUN_PHP) composer install --quiet
