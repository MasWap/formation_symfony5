<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('Test');
    }

    /**
     * @Route("/question/{mavariable}")
     */
    public function show($mavariable){
        return new Response(sprintf(
            'Ceci est inscrit dans l'."'".'URL'  . ' : ' . $mavariable
        ));
    }
}