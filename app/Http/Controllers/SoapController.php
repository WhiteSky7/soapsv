<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class SoapController extends Controller
{
    
    public function __construct() {
        ini_set('soap.wsdl_cache_enabled', 0);
        ini_set('soap.wsdl_cache_ttl', 0);
        ini_set('default_socket_timeout', 300);
        ini_set('max_execution_time', 0);
    }
    
    
    public function server() {
        echo  'hello world';

    }
    


    public function client() {
        
        $client_option = array(
                'uri' => 'App/Http/Controllers/SoapControllers',
            'location' => 'http://127.0.0.1:8000/server');
           
        
        $client= New SoapClient(Null, $client_option);
        
        $client->__soapCall(hello(), $hello_params);

        return $client;
        

    }




    public function hello($name) {
        echo "hello {$name}";
            var_dump();
    }


}
