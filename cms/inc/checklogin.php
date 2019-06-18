<?php
    $user = new User();
    if(!isset($_SESSION, $_SESSION['token']) || empty($_SESSION) || empty($_SESSION['token'])){

        if(isset($_COOKIE, $_COOKIE['_au']) && !empty($_COOKIE['_au'])){
            $token  = $_COOKIE['_au'];
            $user_info = $user->getUserByToken($token);
            if(!$user_info){
                setcookie('_au','',time()-60,'/');
                redirect('./','error', 'Please login first');
            }

            $_SESSION['user_id'] = $user_info[0]->id;
            $_SESSION['name'] = $user_info[0]->name;
            $_SESSION['email'] = $user_info[0]->email;
            $token = getRandomString(100);
            $_SESSION['token'] = $token;
            setcookie('_au',$token, time()+8640000, '/');

            $data = array(
                'last_ip' => $_SERVER['REMOTE_ADDR'],
                'last_login' => date('Y-m-d H:i:s')
            );
            $data['remember_token'] = $token;

            $user->updateUser($data, $user_info[0]->id);
                        
        } else {
            redirect('./','error','Please login first');
        }
    }