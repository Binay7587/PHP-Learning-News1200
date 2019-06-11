<?php
    ob_start();
    session_start();

    define('SITE_URL', 'http://news1200.loc');
    
    define('CMS_URL', SITE_URL.'/cms');


    define('DB_HOST','localhost');
    define('DB_USER', 'root');
    define('DB_PWD', 'sandesh123');
    define('DB_NAME', 'news_1200');