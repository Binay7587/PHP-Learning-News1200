<?php
    require $_SERVER['DOCUMENT_ROOT'].'/config/init.php';
    require '../inc/checklogin.php';
    $category = new Category();

    if(isset($_POST) && !empty($_POST)){
        // debug($_POST);
        // debug($_FILES, true);
        
        $data = array(
            'title' => sanitize($_POST['title']),
            'summary' => sanitize($_POST['summary']),
            'status' => sanitize($_POST['status']),
            'added_by' => $_SESSION['user_id']
        );

        if(isset($_POST['del_image']) && !empty($_POST['del_image'])){
            if(file_exists(UPLOAD_DIR.'/category/'.$_POST['del_image'])){
                unlink(UPLOAD_DIR.'/category/'.$_POST['del_image']);
                $data['image'] = '';
            }
        }

        if(isset($_FILES, $_FILES['image']) && $_FILES['image']['error'] == 0){
            $file_name = uploadSingleImage($_FILES['image'], 'category');

            if($file_name){
                $data['image'] = $file_name;

                if(isset($_POST['old_image']) && !empty($_POST['old_image'])){
                    if(file_exists(UPLOAD_DIR.'/category/'.$_POST['old_image'])){
                        unlink(UPLOAD_DIR.'/category/'.$_POST['old_image']);
                    }
                }       
            }
        }

        $cat_id = (isset($_POST, $_POST['cat_id'])) ? (int)$_POST['cat_id'] : '';

        if($cat_id){
            $act = "updat";
            $cat_id = $category->updateCategory($data, $cat_id);
        } else {
            $act = 'add';
            $cat_id = $category->addCategory($data);
        }

        // debug($data, true);
        if($cat_id){
            redirect('../category.php','success','Category '.$act.'ed successfully.');
        } else {
            redirect('../category.php','error','Sorry! There was problem while '.$act.'ing category.');
        }
    } elseif(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
        $id = (int)$_GET['id'];
        if($id <= 0){
            redirect('../category.php','error','Invalid Category Id');
        }

        $cat_info = $category->getCategoryById($id);
        if(!$cat_info){
            redirect('../category.php','error','Category already deleted or does not exists.');
        }

        $del = $category->deleteCate($id);
        if($del){

            if(!empty($cat_info[0]->image) && file_exists(UPLOAD_DIR.'/category/'.$cat_info[0]->image)){
                unlink(UPLOAD_DIR.'/category/'.$cat_info[0]->image);
            }

            redirect('../category.php','success','Category deleted successfully.');
        } else {
            redirect('../category.php','error','Sorry! There was problem while deleting category.');
        }
    }else {
        redirect('../category.php', 'error','Unauthorized access');
    }