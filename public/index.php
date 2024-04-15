<?php declare(strict_types=1);


use App\Routing\AppRoutes;
use Core\Model\Model;
use Core\Router\RouteMapping;
use Core\Router\Router;
use Core\Server\Server;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../core/Debug/Debug.php';


Model::init();


$server = new Server();

$router = new Router();

/** @var RouteMapping  $routes */
$routes = new AppRoutes();

$router->addMapping($routes);

$router->route($server->getRequest());