# Requetes sur l'API de films The Movie Database

Requete sur l'API The Movie Database sur les films du moments et sur la recherche de films

## Features

* Récupérer les derniers films
* Récupérer les films les plus populaires
* Rechercher des films
* Mettre en cache les requêtes GET
* Mappage des données DTO
* 

## Getting Started

#### required

docker engine


```console
git clone https://github.com/Christophe-THEVENET/symfony_call_tmdb_api.git
```

```console
cd symfony_call_tmdb_api
```

```console
code .
```

récupérer une clé de l'API 

https://developer.themoviedb.org/docs/getting-started

Créer fichier .env.local et ajouter la clé 


```php
TMDB_API_TOKEN='xxxxxxxxxxx.xxxxxxxxxx.xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'
```


```console
composer install
```
lancer un serveur frankenPHP en mode worker

> [!WARNING]  
> si hote Windows -> executer la commande suivante dans un terminal wsl.


```console
docker run -e FRANKENPHP_CONFIG="worker ./public/index.php" -e APP_RUNTIME="Runtime\\FrankenPhpSymfony\\Runtime" -v "$PWD:/app" -p 80:80 -p 443:443 -p 443:443/udp dunglas/frankenphp
```
Accepter la connexion (tester sur plusieurs navigateurs)

https://localhost


!!! . 1ere connexion un peut longue 