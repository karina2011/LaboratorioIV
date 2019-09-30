<?php

/* DATABASE */
if(1 === 1) {
    /* FRONT */
    define('FRONT_ROOT', 'http://c1590773.ferozo.com');

    /* BACK */
    define('ROOT', dirname(__DIR__));
    
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'c1590773_web');
    define('DB_USER', 'c1590773_admin');
    define('DB_PASS', 'Asdf1234');
} else {
    /* FRONT */
    define('FRONT_ROOT', 'http://localhost/lab4lay');

    /* BACK */
    define('ROOT', dirname(__DIR__));
    
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'lab4lay');
    define('DB_USER', 'adrian');
    define('DB_PASS', 'Qwer4321@');
}



/* BACK */
define('VIEWS', ROOT . '/views');
define('ADMIN_VIEWS', ROOT . '/views/admin');
define('IMG_UPLOADS', ROOT . '/asset/uploads/img');


/* FRONT */

define('ADMIN_FRONT_ROOT', FRONT_ROOT . '/admin');
define('CSS_PATH', FRONT_ROOT . '/asset/css');
define('IMG_PATH', FRONT_ROOT . '/asset/img');

define('IMG_UPLOADS_PATH', FRONT_ROOT . '/asset/uploads/img');
define('MOV_UPLOADS_PATH', FRONT_ROOT . '/asset/uploads/movies');


