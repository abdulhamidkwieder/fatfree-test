<?php
namespace controller;

class indexController {
    public function render($f3) {
        $f3->set('title', 'welcome');
        $f3->set('logtitle', 'Log in');
        $f3->set('content', '/html/login.html');
        echo \Template::instance()->render('html/index.html');
    }
}