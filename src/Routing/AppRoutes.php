<?php

namespace App\Routing;

use App\Controller\BudgetController;
use Core\Router\Route;
use Core\Router\RouteMapping;

class AppRoutes implements RouteMapping
{
    function routes(): array
    {
        return [
            new Route('Budget', 'index', 'GET'),
            new Route('Home', 'index', 'GET'),
        ];
    }
}