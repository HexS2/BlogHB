<?php

require_once "vendor/autoload.php";

use Symfony\Component\Dotenv\Dotenv;

$env = getenv('ENV');
if (!$env || $env === 'dev') {
    $dotenv = new Dotenv();
    $dotenv->load(__DIR__ . '/.env');
}

$class = "App\\Controller\\" . (isset($_GET['c']) ? ucfirst($_GET['c']) . 'Controller' : 'IndexController');
$action = isset($_GET['a']) ? $_GET['a'] : "index";

if (class_exists($class, true)) {
    $class = new $class();
    if (in_array($action, get_class_methods($class))) {
        call_user_func([$class, $action]);
        return;
    }
}
echo "404 - Error";
