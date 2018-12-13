<?php


$f3->route('GET /', 'Controller\IndexController->render');
$f3->route('GET /about', 'Controller\AboutController->render');
$f3->route('GET /about/@who', 'Controller\AboutController->renderWho');