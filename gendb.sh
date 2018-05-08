#!/usr/bin/env bash

sf() {
    php app/console "$@"
}

rm -f app/DoctrineMigrations/*.php && sf doctrine:database:drop  --force && sf doctrine:database:create && sf doctrine:migrations:diff && sf --no-interaction doctrine:migrations:migrate