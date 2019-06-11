<?php

function debug($data, $is_exit=false){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    if($is_exit){
        exit;
    }
}