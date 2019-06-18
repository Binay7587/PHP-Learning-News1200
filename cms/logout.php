<?php
    require $_SERVER['DOCUMENT_ROOT'].'/config/init.php';
    $user = new User();
    $user_id = $_SESSION['user_id'];

    if(isset($_COOKIE, $_COOKIE['_au'])){
        setcookie('_au','', (time()-60), '/');
        $data = array(
            'remember_token' => ''
        );
        $user->updateUser($data, $user_id);
    }

    session_destroy();

    redirect('./');

