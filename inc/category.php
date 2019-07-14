<?php
    require '../config/init.php';
    $category = new Category;
    $news = new News;

    if(isset($_POST) && !empty($_POST)){
        $id = (int)$_POST['cat_id'];
        if ($id <= 0) {
            echo json_encode(['data'=>null, 'status'=>false]);
            exit;
        } else {
            $cat_info = $category->getCategoryById($id);
            if (!$cat_info) {
                echo json_encode(['data'=>null, 'status'=>false]);
                exit;
            }else {
                $news_data = $news->getNewsByCatId($id, 40);
                if($news_data){
                    echo json_encode(['data'=>$news_data, 'status'=>true]);
                    exit;
                } else {
                    echo json_encode(['data'=>null, 'status'=>false]);
                    exit;
                }
            }
        }
    }