<?php

namespace App\Controller;

use Core\Controller\Controller;
use Core\TemplateEngine\View;

class HomeController extends Controller
{
    public function index()
    {
        return new View('home.php');
    }
}