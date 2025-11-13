<?php
declare(strict_types=1);

require_once __DIR__ . '/src/router.php';

$router = new Router();
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';

echo $router->dispatch($path);

