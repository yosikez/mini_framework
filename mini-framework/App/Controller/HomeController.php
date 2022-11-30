<?php

namespace Staditek\App\Controller;

use Staditek\App\Model\Model;
use Staditek\App\Core\View;

class HomeController
{
    public static $model;

    public function __construct()
    {
        self::$model = new Model;
    }

    public function index(){
        $data = self::$model->getAll();
        View::render('View', $data);
    }

}