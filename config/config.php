<?php
    ob_start();
    session_start();

    define('SITE_URL', $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST']); // http://localhost
    
    define('CMS_URL', SITE_URL.'/cms');


    define('DB_HOST','localhost');
    define('DB_USER', 'root');
    define('DB_PWD', 'sandesh123');
    define('DB_NAME', 'news_1200');

    define('ERROR_LOG', $_SERVER['DOCUMENT_ROOT'].'/error/error.log');



    /** Admin path */
    define('ADMIN_ASSETS', CMS_URL.'/assets');
    define('ADMIN_CSS', ADMIN_ASSETS.'/css');
    define('ADMIN_JS', ADMIN_ASSETS.'/js');

    /*** Home path */
    define('ASSETS_URL', SITE_URL.'/assets');
    define('CSS_URL', ASSETS_URL.'/css');
    define('JS_URL', ASSETS_URL.'/js');


    define('IMAGE_EXTENSIONS', array('jpg','jpeg','png','bmp','svg'));
    define('UPLOAD_DIR', $_SERVER['DOCUMENT_ROOT'].'/uploads');

    define('UPLOAD_URL', SITE_URL.'/uploads');


    define('SITE_TITLE','News1200, an online newsportal website from Nepal.');