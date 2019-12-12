<?php 

namespace CIntegrator\config;

class Configuration {
    
    static function option($area, $key = null){
        $params = require_once('params.php');
        
        if ($key)
            return $params[$area][$key];
        else
            return $params[$area];
    }
    
}