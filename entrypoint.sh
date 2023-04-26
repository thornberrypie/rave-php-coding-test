#!/usr/bin/env bash
set -e
composer install
exec apache2-foreground
