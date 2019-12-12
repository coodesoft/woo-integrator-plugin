<?php
/**
 * @package Akismet
 */
/*
Plugin Name: Coode Integration
Plugin URI: https://coodesoft.com.ar
Description: Plugin de integración de WooCommerce con los sistemas de gestión de coodesoft.
Version: 1.0
Author: Coodesoft
Author URI: https://coodesoft.com.ar
License: GPLv2 or later
Text Domain: coode-integrator, woocommerce, ecommerce
*/

namespace CIntegrator;

require 'vendor/autoload.php';
require 'autoload.php';


use \CIntegrator\controllers\StoreController;

class CoodeIntegratorCore {
    
    
    public function __construct() {

        
        register_activation_hook( __FILE__, array($this, 'activate_plugin') );
    }
    
    public function activate_plugin(){
        $storeController = new StoreController();
        $result = $storeController->activate();
        echo $result;
    }
    
    public function deactivate_plugin(){
        
    }

    
}

$integrator = new CoodeIntegratorCore();


?>