<?php

namespace App\Controller;

use App\Service\Tmdb\CallApiTmdbService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\Routing\Attribute\Route;

class MovieController extends AbstractController
{


    public function __construct(private readonly CallApiTmdbService $httpCallApiTmdb) {}


    #[Route('/movie', name: 'app_movie')]
    public function index(): Response
    {
        return $this->render('movie/index.html.twig', [
            'movies' => $this->httpCallApiTmdb->popular(),
        ]);
    }

    #[Route('/upcomming', name: 'app_movie_upcoming')]
    public function upcoming(): Response
    {
        return $this->render('movie/upcoming.html.twig', [
            'movies' => $this->httpCallApiTmdb->upcoming(),
        ]);
    }

    #[Route('/search', name: 'app_movie_search')]
    public function query(#[MapQueryParameter] string $query): Response
    {
        return $this->render('movie/search.html.twig', [
            'movies' => $this->httpCallApiTmdb->query($query),
            'title' => $query,
        ]);
    }
}
