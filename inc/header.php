<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title><?php echo (isset($_title)) ? $_title :  SITE_TITLE ;?></title>

    <meta property="og:title" content="<?php echo (isset($og, $og['title'])) ? $og['title'] : $_title;?>" />
    <meta property="og:url" content="<?php echo getCurrentUrl();?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?php echo (isset($og, $og['image'])) ? $og['image'] : ASSETS_URL.'/images/logo.png';?>" />
    <meta property="og:description" content="<?php echo isset($og, $og['description']) ? $og['description'] : '';?>" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>/lightbox.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo CSS_URL;?>/main.css" />
</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=679395169166871&autoLogAppEvents=1"></script>
<header class="main-head">

        <div class="container">
            <div class="logo">
                <a href="./">
                    <img src="<?php echo ASSETS_URL;?>/images/logo.png">
                </a>
            </div>
            
        </div>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="./" class="nav-link <?php echo (getPagename() == 'index' ) ? 'active' : ''?>">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </a>
                        </li>
                        <?php 
                            $category = new Category;
                            $menu = $category->getMenuCategory();
                            if($menu){
                                foreach($menu as $key => $menu_items){
                                    if($key ==10){
                                        break;
                                    }
                            ?> 
                        <li class="nav-item">
                            <a href="category.php?id=<?php echo $menu_items->id;?>" class="nav-link <?php echo (getPagename() == 'category' && $_GET['id'] == $menu_items->id) ? 'active' : '';?>">
                            <?php echo $menu_items->title;?></a></li>

                            <?php
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>

    </header>