<?php

function debug($data, $is_exit=false){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    if($is_exit){
        exit;
    }
}

function redirect($path, $session_key=null, $session_msg=null){
   
    if($session_key != null){
        setFlash($session_key, $session_msg);
    }
    header('location: '.$path);
    exit;
}

function setFlash($key, $message){
    if(!isset($_SESSION)){
        session-start();
    }
    $_SESSION[$key] = $message;
}

function flash(){
    if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
        echo "<p class='alert alert-success'>".$_SESSION['success']."</p>";
        unset($_SESSION['success']);
    }

    if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
        echo "<p class='alert alert-danger'>".$_SESSION['error']."</p>";
        unset($_SESSION['error']);
    }

    if(isset($_SESSION['warning']) && !empty($_SESSION['warning'])){
        echo "<p class='alert alert-warning'>".$_SESSION['warning']."</p>";
        unset($_SESSION['warning']);
    }
}