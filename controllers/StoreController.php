<?php

namespace CIntegrator\controllers;

use GuzzleHttp\Client;
use CIntegrator\config\Configuration;

class StoreController{
      
    
    public function activate(){
        $url = Configuration::option('global', 'url');
        $client = new Client();
        
        $endpoint = $url . '/stores';
        
        $res = $client->request('GET', $url);
        return json_encode($res);
    }
    
    public function deactivate(){
        
    }
    
}