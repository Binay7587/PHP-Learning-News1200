<?php  
require '../config/init.php';
$title = "Dashboard || Admin, News 1200";
require 'inc/checklogin.php';
require 'inc/header.php'; 
$gallery = new Gallery();
$gallery_images = new GalleryImages;

$act = "add";
if(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
    $act = "Update";

    $id = (int)$_GET['id'];
    
    if($id <= 0){
        redirect('./gallery.php','error','Gallery id is not valid');
    }

    $gallery_info = $gallery->getGalleryById($id);

    
    if(!$gallery_info){
        redirect('./gallery.php','error','Gallery not found.');
    }

    $images = $gallery_images->getImagesByGalleryId($id);

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
                        <h1 class="page-header">Gallery <?php echo ucfirst($act);?></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-12">
                        <form action="process/gallery.php" method="post" enctype="multipart/form-data" class="form">
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Title: </label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo @$gallery_info[0]->title;?>" name="title" required placeholder="Enter Gallery name here." class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Summary: </label>
                                <div class="col-sm-9">
                                    <textarea name="summary" id="summary" rows="5" style="resize: none;" class="form-control"><?php echo @$gallery_info[0]->summary;?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Status: </label>
                                <div class="col-sm-9">
                                    <select name="status" required id="status" class="form-control">
                                        <option value="active" <?php echo isset($gallery_info, $gallery_info[0]->status) && $gallery_info[0]->status == 'active' ? 'selected' : '' ;?>>Active</option>
                                        <option value="inactive" <?php echo isset($gallery_info, $gallery_info[0]->status) && $gallery_info[0]->status == 'inactive' ? 'selected' : '' ;?>>In-Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Photographer: </label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo @$gallery_info[0]->photographer;?>" name="photographer" placeholder="Enter Photographer Name here." class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Image: </label>
                                <div class="col-sm-4">
                                    <input type="file" name="image" accept="image/*" >
                                </div>
                                <?php 
                                    if($act == 'Update'){
                                        if(file_exists(UPLOAD_DIR.'/gallery/'.$gallery_info[0]->image) && $gallery_info[0]->image != ''){
                                            ?>
                                            <div class="col-sm-4">
                                                <img src="<?php echo UPLOAD_URL.'/gallery/'.$gallery_info[0]->image;?>" alt="" class="img img-responsive img-thumbnail">
                                                <input type="checkbox" name="del_image" value="<?php echo $gallery_info[0]->image;?>"> Delete
                                            </div>
                                            <?php
                                        }
                                    }
                                ?>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Gallery Images: </label>
                                <div class="col-sm-4">
                                    <input type="file" name="gallery_images[]" multiple accept="image/*" >
                                </div>
                            </div>
                            <div class="row">

                            <?php 
                                if($act == "Update"){
                                    if($images){
                                        foreach($images as $image_data){
                                            ?>
                                            <div class="col-sm-3">
                                                <img src="<?php echo UPLOAD_URL.'/gallery/'.$image_data->image_name;?>" class="img img-responsive" alt="">
                                                <input type="checkbox" name="gallery_del_image[]" value="<?php echo $image_data->image_name;?>"> Delete
                                             </div>
                                            <?php
                                        }
                                    }
                                }
                            ?>
                            </div>


                            <div class="form-group row">
                                <label for="" class="col-sm-3"></label>
                                <div class="col-sm-9">
                                    <input type="hidden" name="old_image" value="<?php echo @$gallery_info[0]->image;?>">
                                    <input type="hidden" name="gallery_id" value="<?php echo @$gallery_info[0]->id;?>">
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