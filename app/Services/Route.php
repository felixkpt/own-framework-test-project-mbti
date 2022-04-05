<?php 
    namespace App\Services;
    require 'vendor/autoload.php';

use App\Controllers\HomeController;
use App\Kernel;
    class Route {

        public function __construct()
        {
            // Self::$get = [];
        }

        public static function get($route, array $controllerAndMethod) {
         
            $arr = ['route' => $route, 'controllerAndMethod' => $controllerAndMethod];
            forward_static_call([Kernel::class, 'get'], $arr);
        }
}
