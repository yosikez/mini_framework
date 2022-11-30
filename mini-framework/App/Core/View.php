<?php

namespace Staditek\App\Core;

class View{
    public static function render($view, $data = "")
    {
        require_once __DIR__.'/../View/template/header.php';
        require_once __DIR__.'/../View/template/navbar.php';
        require_once __DIR__."/../View/{$view}.php";
        require_once __DIR__.'/../View/template/footer.php';    
    }
}