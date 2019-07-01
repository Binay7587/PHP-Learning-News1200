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
        session_start();
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

function getRandomString($len =100){
    $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $str_leng = strlen($chars); // length of $chars
    $random = '';

    for($i=0; $i <$len; $i++){
        $posn = rand(0, $str_leng-1);
        $random .= $chars[$posn];
    }
    return $random;

}

function sanitize($str){
    // mysqli_real_escape_string($str); 
    $str = strip_tags($str);
    $str = rtrim($str);
    return $str;
}

function uploadSingleImage($file, $dir){
    if($file['error'] == 0){
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        if(in_array($ext, IMAGE_EXTENSIONS)){
            if($file['size'] <= 5000000){
                $path = UPLOAD_DIR.'/'.$dir;

                if(!is_dir($path)){
                    mkdir($path, 0777,true);
                }

                $file_name = ucfirst($dir)."-".date('Ymdhis').rand(0,999).".".$ext;

                $succss = move_uploaded_file($file['tmp_name'], $path.'/'.$file_name);
                if($succss){
                    return $file_name;
                } else {
                    return false;
                }
            } else {
                return null;
            }
        } else {
            return null;
        }
    } else {
        return null;
    }
}

function getYoutubeIdFromUrl($url){
    // preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $url, $match);

    preg_match("#([\/|\?|&]vi?[\/|=]|youtu\.be\/|embed\/)([a-zA-Z0-9_-]+)#", $url, $matches);
    return $matches[2];
}


function getCurrentUrl(){
    return SITE_URL.$_SERVER['REQUEST_URI'];
}

function getPagename(){
    return pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
}