<?php
use Illuminate\Database\Capsule\Manager as Capsule;

require __DIR__ . "/vendor/autoload.php";

$capsule = new Capsule;

$capsule->addConnection(DATABASE_CONFIG);

$capsule->setAsGlobal();

$capsule->bootEloquent();

$route = new \CoffeeCode\Router\Router(ROOT);

/**
 * APP
 */
$route->namespace("Source\App");

/**
 * WEB
 * home
 */
$route->group(null);
$route->get("/", "Web:home");

/**
 * ERROR
 */
$route->group("ops");
$route->get("/{errcode}", "Web:error");

/**
 * PROCESS
 */
$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}