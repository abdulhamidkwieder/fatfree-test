<?php

$f3->route('GET /', 'controller\indexController->render');
$f3->route('GET /login', 'controller\loginController->render');
$f3->route('POST /login', 'controller\loginController->posted');