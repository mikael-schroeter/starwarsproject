<?php

namespace App\Controller;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class StarwarsController extends AbstractController
{
    /** 
    * @Route("/starwars/planets/{page}", name="all_planets", requirements={"page"="\d+"})
    */
    public function index(Request $request, int $page = 1): Response
    {

        $client = HttpClient::create(['verify_peer' => false, 'verify_host' => false]);   
        $response = $client->request('GET', 'https://swapi.dev/api/planets/?page=' . $page);
        #$statusCode = $response->getStatusCode();
        #$contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        $content = $response->toArray();

        return $this->render('starwars/index.html.twig', [
            'content' => $content,
            'page' => $page
        ]);
    }

    /** 
    * @Route("/starwars/planet/{planet}", name="planet", requirements={"planet"="\d+"})
    */
    public function details(Request $request, int $planet = 1): Response
    {

        $client = HttpClient::create(['verify_peer' => false, 'verify_host' => false]);   
        $response = $client->request('GET', 'https://swapi.dev/api/planets/' . $planet);
        #$statusCode = $response->getStatusCode();
        #$contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        $content = $response->toArray();

        return $this->render('starwars/details.html.twig', [
            'content' => $content
        ]);
    }

    /** 
    * @Route("/starwars/people/{people}", name="people", requirements={"people"="\d+"})
    */
    public function people(Request $request, int $people): Response
    {

        $client = HttpClient::create(['verify_peer' => false, 'verify_host' => false]);   
        $response = $client->request('GET', 'https://swapi.dev/api/people/' . $people);
        #$statusCode = $response->getStatusCode();
        #$contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        $content = $response->toArray();

        return $this->render('starwars/people.html.twig', [
            'content' => $content
        ]);
    }


    /** 
    * @Route("/starwars/films/{film}", name="films", requirements={"film"="\d+"})
    */
    public function films(Request $request, int $film): Response
    {

        $client = HttpClient::create(['verify_peer' => false, 'verify_host' => false]);   
        $response = $client->request('GET', 'https://swapi.dev/api/films/' . $film);
        #$statusCode = $response->getStatusCode();
        #$contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        $content = $response->toArray();

        return $this->render('starwars/films.html.twig', [
            'content' => $content
        ]);
    }

    /** 
    * @Route("/starwars/species/{species}", name="species", requirements={"species"="\d+"})
    */
    public function species(Request $request, int $species): Response
    {

        $client = HttpClient::create(['verify_peer' => false, 'verify_host' => false]);   
        $response = $client->request('GET', 'https://swapi.dev/api/species/' . $species);
        #$statusCode = $response->getStatusCode();
        #$contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        $content = $response->toArray();

        return $this->render('starwars/species.html.twig', [
            'content' => $content
        ]);
    }

    /** 
    * @Route("/starwars/vehicles/{vehicle}", name="vehicles", requirements={"vehicle"="\d+"})
    */
    public function vehicles(Request $request, int $vehicle): Response
    {

        $client = HttpClient::create(['verify_peer' => false, 'verify_host' => false]);   
        $response = $client->request('GET', 'https://swapi.dev/api/vehicles/' . $vehicle);
        #$statusCode = $response->getStatusCode();
        #$contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        $content = $response->toArray();

        return $this->render('starwars/vehicles.html.twig', [
            'content' => $content
        ]);
    }

    /** 
    * @Route("/starwars/starships/{starship}", name="starships", requirements={"starship"="\d+"})
    */
    public function starships(Request $request, int $starship): Response
    {

        $client = HttpClient::create(['verify_peer' => false, 'verify_host' => false]);   
        $response = $client->request('GET', 'https://swapi.dev/api/starships/' . $starship);
        #$statusCode = $response->getStatusCode();
        #$contentType = $response->getHeaders()['content-type'][0];
        $content = $response->getContent();
        $content = $response->toArray();

        return $this->render('starwars/starships.html.twig', [
            'content' => $content
        ]);
    }
}
