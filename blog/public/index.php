<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once '../config.php';
require_once  '../vendor/autoload.php';

$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
$baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . $baseDir;
define('BASE_URL', $baseUrl);


$route = isset($_GET['route'])? $_GET['route']:'/';

function render($fileName, $params = []){
    ob_start();
    extract($params);
    include  $fileName;

    return ob_get_clean();
}

use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

$router->controller('/', app\controllers\indexController::class);
$router->controller('/admin', app\controllers\admin\adminController::class);
$router->controller('/admin/posts', app\controllers\admin\PostController::class);


$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);

echo $response;

?>