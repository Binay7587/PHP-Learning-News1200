<?php
    require $_SERVER['DOCUMENT_ROOT'].'/config/init.php';
    require '../inc/checklogin.php';
    $news = new News();

    if(isset($_POST) && !empty($_POST)){
        // debug($_POST);
        // debug($_FILES, true);
        
        $data = array(
            'title' => sanitize($_POST['title']),
            'summary' => sanitize($_POST['summary']),
            'description' => htmlentities($_POST['description']),
            'cat_id' => (int)$_POST['cat_id'],
            'location' => sanitize($_POST['location']),
            'news_date' => sanitize($_POST['news_date']),
            'reporter' => (int)($_POST['reporter']),
            'is_breaking' => isset($_POST['is_breaking']) ? 1 : 0,
            'is_main' => isset($_POST['is_main']) ? 1 : 0,
            'is_featured' => isset($_POST['is_featured']) ? 1 : 0,
            'source' => sanitize($_POST['source']),
            'status' => sanitize($_POST['status']),
            'added_by' => $_SESSION['user_id']
        );

        if(isset($_POST['del_image']) && !empty($_POST['del_image'])){
            if(file_exists(UPLOAD_DIR.'/news/'.$_POST['del_image'])){
                unlink(UPLOAD_DIR.'/news/'.$_POST['del_image']);
                $data['image'] = '';
            }
        }

        if(isset($_FILES, $_FILES['image']) && $_FILES['image']['error'] == 0){
            $file_name = uploadSingleImage($_FILES['image'], 'news');

            if($file_name){
                $data['image'] = $file_name;

                if(isset($_POST['old_image']) && !empty($_POST['old_image'])){
                    if(file_exists(UPLOAD_DIR.'/news/'.$_POST['old_image'])){
                        unlink(UPLOAD_DIR.'/news/'.$_POST['old_image']);
                    }
                }       
            }
        }

        $news_id = (isset($_POST, $_POST['news_id'])) ? (int)$_POST['news_id'] : '';

        if($news_id){
            $act = "updat";
            $news_id = $news->updateNews($data, $news_id);
        } else {
            $act = 'add';
            $news_id = $news->addNews($data);
        }

        // debug($data, true);
        if($news_id){
            redirect('../news.php','success','News '.$act.'ed successfully.');
        } else {
            redirect('../news.php','error','Sorry! There was problem while '.$act.'ing news.');
        }
    } elseif(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
        $id = (int)$_GET['id'];
        if($id <= 0){
            redirect('../news.php','error','Invalid News Id');
        }

        $news_info = $news->getNewsById($id);
        if(!$news_info){
            redirect('../news.php','error','News already deleted or does not exists.');
        }

        $del = $news->deleteCate($id);
        if($del){

            if(!empty($news_info[0]->image) && file_exists(UPLOAD_DIR.'/news/'.$news_info[0]->image)){
                unlink(UPLOAD_DIR.'/news/'.$news_info[0]->image);
            }

            redirect('../news.php','success','News deleted successfully.');
        } else {
            redirect('../news.php','error','Sorry! There was problem while deleting news.');
        }
    }else {
        redirect('../news.php', 'error','Unauthorized access');
    }