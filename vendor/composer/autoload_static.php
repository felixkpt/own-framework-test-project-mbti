<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6187cf4c79bddfd95974f70e6c63cecd
{
    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/app/App.php',
        'App\\Controllers\\ArticleController' => __DIR__ . '/../..' . '/app/Controllers/ArticleController.php',
        'App\\Controllers\\Controller' => __DIR__ . '/../..' . '/app/Controllers/Controller.php',
        'App\\Controllers\\HomeController' => __DIR__ . '/../..' . '/app/Controllers/HomeController.php',
        'App\\Controllers\\TypologyController' => __DIR__ . '/../..' . '/app/Controllers/TypologyController.php',
        'App\\Kernel' => __DIR__ . '/../..' . '/app/Kernel.php',
        'App\\Services\\Route' => __DIR__ . '/../..' . '/app/Services/Route.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit6187cf4c79bddfd95974f70e6c63cecd::$classMap;

        }, null, ClassLoader::class);
    }
}
