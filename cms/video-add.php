<?php  
require '../config/init.php';
$title = "Dashboard || Admin, News 1200";
require 'inc/checklogin.php';
require 'inc/header.php'; 
$video = new Video();

$act = "add";
if(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
    $act = "Update";
    $id = (int)$_GET['id'];
    if($id <= 0){
        redirect('./video.php','error','Video id is not valid');
    }

    $video_info = $video->getVideoById($id);

    if(!$video_info){
        redirect('./video.php','error','Video not found.');
    }

}

?>
    <div id="wrapper">

        <?php require 'inc/navbar.php';?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <?php flash();?>
                        <h1 class="page-header">Video <?php echo ucfirst($act);?></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-12">
                        <form action="process/video.php" method="post" enctype="multipart/form-data" class="form">
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Title: </label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo @$video_info[0]->title;?>" name="title" required placeholder="Enter Video name here." class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Description: </label>
                                <div class="col-sm-9">
                                    <textarea name="description" id="description" rows="5" style="resize: none;" class="form-control"><?php echo @$video_info[0]->description;?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Video Link (YouTube): </label>
                                <div class="col-sm-9">
                                    <input type="url" value="<?php echo @$video_info[0]->video_link;?>" name="video_link" required placeholder="Enter Video name here." class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Status: </label>
                                <div class="col-sm-9">
                                    <select name="status" required id="status" class="form-control">
                                        <option value="active" <?php echo isset($video_info, $video_info[0]->status) && $video_info[0]->status == 'active' ? 'selected' : '' ;?>>Active</option>
                                        <option value="inactive" <?php echo isset($video_info, $video_info[0]->status) && $video_info[0]->status == 'inactive' ? 'selected' : '' ;?>>In-Active</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3"></label>
                                <div class="col-sm-9">
                                    <input type="hidden" name="video_id" value="<?php echo @$video_info[0]->id;?>">
                                    <button class="btn btn-danger" type="reset">
                                        <i class="fa fa-trash"></i> Reset
                                    </button>
                                    <button class="btn btn-success" type="submit">
                                        <i class="fa fa-paper-plane"></i> Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php require 'inc/footer.php';?>