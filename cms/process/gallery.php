<?php
    require $_SERVER['DOCUMENT_ROOT'].'/config/init.php';
    require '../inc/checklogin.php';
    $gallery = new Gallery();

    if(isset($_POST) && !empty($_POST)){
        // debug($_POST);
        // debug($_FILES, true);
        
        $data = array(
            'title' => sanitize($_POST['title']),
            'summary' => sanitize($_POST['summary']),
            'status' => sanitize($_POST['status']),
            'photographer' =>sanitize($_POST['photographer']),
            'added_by' => $_SESSION['user_id']
        );

        if(isset($_POST['del_image']) && !empty($_POST['del_image'])){
            if(file_exists(UPLOAD_DIR.'/gallery/'.$_POST['del_image'])){
                unlink(UPLOAD_DIR.'/gallery/'.$_POST['del_image']);
                $data['image'] = '';
            }
        }

        if(isset($_FILES, $_FILES['image']) && $_FILES['image']['error'] == 0){
            $file_name = uploadSingleImage($_FILES['image'], 'gallery');

            if($file_name){
                $data['image'] = $file_name;

                if(isset($_POST['old_image']) && !empty($_POST['old_image'])){
                    if(file_exists(UPLOAD_DIR.'/gallery/'.$_POST['old_image'])){
                        unlink(UPLOAD_DIR.'/gallery/'.$_POST['old_image']);
                    }
                }       
            }
        }


        if(isset($_POST['gallery_del_image']) && !empty($_POST['gallery_del_image'])){
            foreach($_POST['gallery_del_image'] as $del_image){
                $gallery_image = new GalleryImages;
                $del = $gallery_image->deleteImageByName($del_image);
                // $img_info = $gallery_image->getImageByName($del_image);
                if($del){
                    if($del_image != null && file_exists(UPLOAD_DIR.'/gallery/'.$del_image)){
                        unlink(UPLOAD_DIR.'/gallery/'.$del_image);
                    }
                }
            }
        }




        $gallery_id = (isset($_POST, $_POST['gallery_id'])) ? (int)$_POST['gallery_id'] : '';

        if($gallery_id){
            $act = "updat";
            $gallery_id = $gallery->updateGallery($data, $gallery_id);
        } else {
            $act = 'add';
            $gallery_id = $gallery->addGallery($data);
        }

        // debug($data, true);
        if($gallery_id){
            // 
            if(isset($_FILES['gallery_images'])){
                $file = $_FILES['gallery_images'];
                $size = count($file['name']);

                for($i=0; $i<$size; $i++){
                    $temp = array(

                        'name' => $file['name'][$i],
                        'type' => $file['type'][$i],
                        'tmp_name' => $file['tmp_name'][$i],
                        'error' => $file['error'][$i],
                        'size' => $file['size'][$i]
                    );
                    $file_name = uploadSingleImage($temp, 'gallery');
                    if($file_name){
                        $img_data = array(
                            'gallery_id' => $gallery_id,
                            'image_name' => $file_name
                        );
                        $images = new GalleryImages();
                        $images->addImages($img_data);

                    }
                }
            }

            redirect('../gallery.php','success','Gallery '.$act.'ed successfully.');
        } else {
            redirect('../gallery.php','error','Sorry! There was problem while '.$act.'ing gallery.');
        }
    } elseif(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
        $id = (int)$_GET['id'];
        if($id <= 0){
            redirect('../gallery.php','error','Invalid Gallery Id');
        }

        $cat_info = $gallery->getGalleryById($id);
        if(!$cat_info){
            redirect('../gallery.php','error','Gallery already deleted or does not exists.');
        }
        $gallery_images = new GalleryImages;

        $images = $gallery_images->getImagesByGalleryId($id);

        $del = $gallery->deleteCate($id);
        if($del){

            if(!empty($cat_info[0]->image) && file_exists(UPLOAD_DIR.'/gallery/'.$cat_info[0]->image)){
                unlink(UPLOAD_DIR.'/gallery/'.$cat_info[0]->image);
            }

            if($images){
                foreach($images as $del_image){
                    if($del_image->image_name != null && file_exists(UPLOAD_DIR.'/gallery/'.$del_image->image_name)){
                        unlink(UPLOAD_DIR.'/gallery/'.$del_image->image_name);
                    }
                
                }
            }
            redirect('../gallery.php','success','Gallery deleted successfully.');
        } else {
            redirect('../gallery.php','error','Sorry! There was problem while deleting gallery.');
        }
    }else {
        redirect('../gallery.php', 'error','Unauthorized access');
    }