<?php

namespace App\Controller;

use Core\TemplateEngine\View;

class DefaultController
{
    function index() {
        return new View('404.php');
    }
}