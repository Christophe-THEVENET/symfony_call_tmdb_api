<?php

namespace App\Controller;

use App\Service\Tmdb\CallApiTmdbService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MovieController extends AbstractController
{


    public function __construct(private readonly CallApiTmdbService $httpCallApiTmdb ) {}


    #[Route('/movie', name: 'app_movie')]
    public function index(): Response
    {


        $popularMovies = $this->httpCallApiTmdb->popular();



        return $this->render('movie/index.html.twig', [
            'toto' => 'toto',
        ]);
    }
}
 