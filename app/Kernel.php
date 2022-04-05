<?php 
namespace App;
require 'vendor/autoload.php';
require_once 'helpers/functions.php';

class Kernel {

protected $controller = 'home';
protected $method = 'index';
protected $params = [];

public static function get($current) {
    $kernel = new Kernel();
    $parts = $kernel->parseUrl($_GET['url']);

    $route = explode('/', ltrim($current['route'], '/'));
    $controller = $current['controllerAndMethod'][0];
    $method = $current['controllerAndMethod'][1];
    
    $pass = [];
    $args = [];
    foreach($route as $key => $sroute) {
        preg_match_all("#^{.*}$#", $sroute, $matches);
        $matched = @$matches[0][0];
        if ($matched != null && key_exists($key, $parts)) {
            $index = preg_replace("#{|}#", "", $matched);
            $args[] = [$index => $parts[$key]];
        }elseif ($sroute == @$parts[$key]) {
            $pass[] = $parts[$key];
        }
    }

    if (count($parts) == count($route)) {
        
        if ($parts[0] == $route[0]) {
            return $kernel->setController($controller, $method, $args);
        }
    }

}

public function parseUrl($uri)
{

    if($uri)
    {
        return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
    }else {
        return "/";
    }
}

public function setController($controller, $method, $args) {

    if (class_exists($controller)) {
        if (method_exists($controller, $method)) {
            $instance = new $controller;
            return [$instance, $method](...$args);
        }else {
            throw new \Exception("Controller method not found. ".sprintf($method));
        }

    }else {
        throw new \Exception("Controller not found. ".sprintf($method));
    }
}

public function prettifier(array $resp) {
    $routes = [];
    $controller = ucfirst(strtolower($resp[0])).'Controller';
    $controller = 'App\Controllers\\'.$controller;
    $method = strtolower($resp[1] ?? 'index');

    $i = 0;
    $method = array_reduce(explode('-', preg_replace("#_#", "-", $method)), function($prev, $current) use (&$i) {
            if ($i > 0) {
                $current = ucfirst($current);
            }
        $i ++;
        $prev .= $current;
        return $prev;
    }, "");

}

}