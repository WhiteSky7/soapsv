<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SoapController extends Controller
{
    
    
       /**
     * @Route("/soap")
     */
    public function server(calculate $calculate)
    {
        $soapServer = new \SoapServer('/path/to/hello.wsdl');
        $soapServer->addFunction($calculate);

        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml; charset=ISO-8859-1');

        ob_start();
        $soapServer->handle();
        $response->setContent(ob_get_clean());

        return $response;


    }
    public function calculate($city, $name, $date)
    {




    }


}
