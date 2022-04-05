<?php
namespace App\Controllers;

class HomeController extends Controller{

        function index($name) { // The index page of your site for example
            return $this->view('home', array('name' => $name));
        }
}