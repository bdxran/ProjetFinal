<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$segments = array_filter(explode('/', $uri));

if (count($segments) == 0 or $segments[0] == 'index') {
    $file = 'welcome';
} else {
    $file = $segments[0];
}

$controller = 'controller/'.$file.'.php';

if (count($segments) <= 1 and file_exists($controller)) {
    include $controller;
} else {
    include 'controller/404.php';
}
?>
