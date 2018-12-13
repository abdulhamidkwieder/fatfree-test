<?php
namespace controller;

class loginController {
    public function posted($f3) {
        $f3->set('posttitle', 'Log in successfuly');
       // $f3->set('content2','/html/success.html');
        echo \Template::instance()->posted('html/index.html');
    }
    
    public function render($f3) {
        $f3->set('title', 'Log in ');
        $f3->set('content', '/html/login.html');
        echo \Template::instance()->render('html/index.html');
    }
}