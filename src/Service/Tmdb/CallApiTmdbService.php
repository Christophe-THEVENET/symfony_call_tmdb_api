<?php

namespace App\Service\Tmdb;

use App\DTO\Movie;
use Symfony\Contracts\HttpClient\HttpClientInterface;

// service qui fait les requetes vers la db des films
class CallApiTmdbService
{

    public function __construct(
        private readonly HttpClientInterface $tmdbClient
    ) {}


    
    /**
     * @return Movie[]
     */
    public function popular(): array
    {

        $response = $this->tmdbClient->request('GET', '/3/movie/popular', [
            'query' => [
                'language' => 'fr-FR'
            ]
        ]);

        $data = $response->toArray();

        return $data;
      
    }
}
