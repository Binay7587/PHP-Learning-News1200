<?php
    require $_SERVER['DOCUMENT_ROOT'].'/config/init.php';
    require '../inc/checklogin.php';
    $video = new Video();

    if(isset($_POST) && !empty($_POST)){
        // debug($_POST);
        // debug($_FILES, true);
        
        $data = array(
            'title' => sanitize($_POST['title']),
            'description' => sanitize($_POST['description']),
            'status' => sanitize($_POST['status']),
            'video_link' => sanitize($_POST['video_link']),
            'added_by' => $_SESSION['user_id']
        );

        $data['video_id'] = getYoutubeIdFromUrl($_POST['video_link']);

        // debug($data, true);

        $video_id = (isset($_POST, $_POST['video_id'])) ? (int)$_POST['video_id'] : '';

        if($video_id){
            $act = "updat";
            $video_id = $video->updateVideo($data, $video_id);
        } else {
            $act = 'add';
            $video_id = $video->addVideo($data);
        }

        // debug($data, true);
        if($video_id){
            redirect('../video.php','success','Video '.$act.'ed successfully.');
        } else {
            redirect('../video.php','error','Sorry! There was problem while '.$act.'ing video.');
        }
    } elseif(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
        $id = (int)$_GET['id'];
        if($id <= 0){
            redirect('../video.php','error','Invalid Video Id');
        }

        $video_info = $video->getVideoById($id);
        if(!$video_info){
            redirect('../video.php','error','Video already deleted or does not exists.');
        }

        $del = $video->deleteVideo($id);
        if($del){
            redirect('../video.php','success','Video deleted successfully.');
        } else {
            redirect('../video.php','error','Sorry! There was problem while deleting video.');
        }
    }else {
        redirect('../video.php', 'error','Unauthorized access');
    }