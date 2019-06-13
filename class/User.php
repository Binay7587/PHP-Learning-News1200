<?php
    final class User extends Database{
        public function __construct(){
            parent::__construct();
            $this->table('users');
        }

        public function getUserByUserName($email){
            // SELECT * FROM users WHERE email = $email
            // SELECT * FROM users WHERE remeber_token = $token
            // SELECT * FROM users WHERE id = $id
            // SELECT * FROM users
            $args = array(
                // 'fields' => 'id, name, status, password, email'
                // 'fields' => ['id', 'name', 'status', 'password', 'email']
                'where' => array(
                    'email' => $email
                )
            );
            return $this->select($args);
        }
    }