<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function index(): Response
    {
        //$url = 'http://feeds.spotahome.com/ads-housinganywhere.json';
        //$json = file_get_contents($url);
        //$data = json_decode($json);
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'data' => 'data',
        ]);
    }

    public function chargeData($data)
    {
        dd($data);
    }
}
