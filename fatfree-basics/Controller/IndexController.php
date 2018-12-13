<?php

namespace Controller;

class IndexController {
    public function render($f3) {
    
        $f3->set('sitetitle','Fat Free Demo');

        $um = new \Model\UserModel();
        $user = $um->getUser();

        $f3->set('user', $user);
        $f3->set('content', '/views/home.html');


        echo \Template::instance()->render('views/index.html');
    }
}