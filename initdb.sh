#!/usr/bin/env bash

sf() {
    php app/console "$@"
}

sf doctrine:database:drop --force && sf doctrine:database:create && sf --no-interaction doctrine:migrations:migrate