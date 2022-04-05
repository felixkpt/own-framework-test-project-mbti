<?php 

class A
{
    const NAME = 'A';
    public static function test() {
        $args = func_get_args();
        echo static::NAME, " ".join(',', $args)."<br>";
    }
}

class B
{
    public static $name = [];

    public static function get($route, $arr) {
        self::$name = ['route' => $route, 'controllerName' => $arr];
        forward_static_call( 'get', self::$name);
    }
}

B::get('/foo', [App\Controllers\TypologyController::class]);

B::get('/foo', [App\Controllers\TypologyController::class]);

function get($a) {
    var_dump($a);
        echo "<br>";
    }

    // var_dump(test());