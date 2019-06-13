<?php
    require $_SERVER['DOCUMENT_ROOT'].'/config/init.php';
    $user = new User;

    if(isset($_POST) && !empty($_POST)){
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);    // email, full
        if(!$email){
            redirect('../','error','Invalid username');
        }

        $password = sha1($email.$_POST['password']);

        $user_info = $user->getUserByUserName($email);
        if($user_info){
            if($user_info[0]->password == $password){
                if($user_info[0]->role == 'admin'){
                    if($user_info[0]->status == 'active'){
                        $_SESSION['user_id'] = $user_info[0]->id;
                        $_SESSION['name'] = $user_info[0]->name;
                        $_SESSION['email'] = $user_info[0]->email;
                        

                        // Cookie
                        
                        redirect('../dashboard.php', 'success', 'Welcome to admin panel.');
                    } else {
                        redirect('../', 'error', 'Your account is not active.');
                    }
                } else {
                    redirect('../', 'error', 'You are not allowed to access this page.');
                }
            } else {
                redirect('../', 'error', 'Password does not match.');
            }
        } else {
            redirect('../', 'error', 'User not found.');
        }
    } else {
        redirect('../', 'error', 'Unauthorized access.');
    }