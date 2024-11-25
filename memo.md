
docker compose build --no-cache

SYMFONY_VERSION=7.1.* docker compose up -d --wait

si POSTGRE pas cool il y a une précodure pour install avec mysql dans la doc

dans le conteneur php:

composer require --dev symfony/profiler-pack

composer require --dev symfony/maker-bundle

composer require "twig/twig:^3.0"

composer require symfony/monolog-bundle

composer require symfony/asset-mapper symfony/asset symfony/twig-pack

composer require symfony/orm-pack

php bin/console importmap:require bootstrap

importer boostrap ds app.js

import 'bootstrap/dist/css/bootstrap.min.css'


cré un service client tmdb pour requeter l'api tmdb (films)

config framework.yml

active esi et fragment