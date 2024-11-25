<?php

namespace App\Service\Tmdb;

use App\DTO\Movie;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

// service qui fait les requetes vers la db des films
class CallApiTmdbService
{

    private FilesystemAdapter $cache;

    public function __construct(
        private readonly HttpClientInterface $tmdbClient
    ) {
        $this->cache = new FilesystemAdapter();
    }



    /**
     * @return Movie[]
     */
    public function popular(): array
    {
     
        // si pas de clé  popular trouvé on crée le cache
        return $this->cache->get('popular', function (ItemInterface $item) {
            $item->expiresAfter(3600);  

        $response = $this->tmdbClient->request('GET', '/3/movie/popular', [
            'query' => [
                'language' => 'fr-FR'
            ]
        ]);

        $data = $response->toArray();

        return $data;

        }); 
       
    }
}
