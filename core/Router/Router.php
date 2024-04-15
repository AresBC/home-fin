<?php

namespace Core\Router;

use Core\Json\Json;
use Core\Server\Request;
use Core\TemplateEngine\Engine;
use Core\TemplateEngine\View;

class Router
{
    private array $routes = [];

    public function addMapping(RouteMapping $routes): void
    {
        /** @var Route $route */
        foreach ($routes->routes() as $route) {
            $this->routes[$route->controller][$route->action][$route->method] = $route;
        }
    }

    public function route(Request $request)
    {
        $route = $this->routes[$request->controller][$request->action][$request->method] ?? null;

        if ($route === null) {
            $controllerName = 'App\Controller\DefaultController';
            $actionName = 'index';
        } else {
            $controllerName = 'App\Controller\\' . $route->controller . 'Controller';
            $actionName = $request->action;
        }

        $controller = new $controllerName;
        $result = $controller->$actionName($request->params);


        if ($result instanceof View) {
            $templateEngine = new Engine();
            $renderedView = $templateEngine->render($result, $request->params);
            echo $renderedView;
        } elseif ($result instanceof Json) {
            echo $result;
        }

    }
}