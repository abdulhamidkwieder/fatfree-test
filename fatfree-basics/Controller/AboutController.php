<?php

namespace Controller;

class AboutController {
    public function render($f3) {
        $f3->set('sitetitle', 'About Us');
        $f3->set('content','/views/about.html');
        echo \Template::instance()->render('views/index.html');
    }

    public function renderWho($f3, $params) {
        $f3->set('who', $params['who']);

        $f3->set('sitetitle', 'About Us - Who');
        $f3->set('content','/views/about.html');
        echo \Template::instance()->render('views/index.html');
    }
}