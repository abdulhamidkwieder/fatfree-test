<?php
// تنزيل الموصوع F3  
require_once 'lib/base.php';

$f3 = Base::instance();

// Routes 
// الكود بالأسفل معناه أن نفتح الروت التي بداخل الموضوع إف3 
// وعندما نكتب برابط الصفة بعد الرابط الأساسي كلمة آدمن.. ستظهر لنا صفحة الآدمن 
/*
$f3->route('GET /', function(){
    echo 'Welcome Home';
});
$f3->route('GET /admin', function(){
    echo 'Welcome dear Admin';
});
*/

require_once 'routes.php';

// f3 starten
$f3->run();