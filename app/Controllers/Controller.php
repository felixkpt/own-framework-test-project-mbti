<?php
namespace App\Controllers;

class Controller {

    public function view(String $view, $data = []) {
        foreach($data as $k => $v) {
            ${$k} = $v;
        }
        $file = DIR.'/views/'.preg_replace("#\.#", "/", $view).'.php';
        require($file);
        exit;
    }
    
    public function notFound() {
        $file = DIR.'/views/errors/404.php';
        require($file);
        exit;
    }

    public function noContent() {
        $file = DIR.'/views/errors/not-content.php';
        require($file);
        exit;
    }
}