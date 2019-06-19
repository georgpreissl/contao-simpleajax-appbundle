<?php

namespace AppBundle\Controller; 


use Symfony\Component\HttpFoundation\JsonResponse; 
use Symfony\Component\HttpFoundation\Request;

class AjaxTagsController
{


    public function __invoke()
    {

    	return new JsonResponse(['Hello World!']); 
        // return new Response();
    }
}