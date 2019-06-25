<?php  
require '../config/init.php';
$title = "Dashboard || Admin, News 1200";
require 'inc/checklogin.php';
require 'inc/header.php'; 
$gallery = new Gallery();
?>
<link rel="stylesheet" href="<?php echo ADMIN_CSS.'/jquery-dataTables.min.css';?>">

<div id="wrapper">

        <?php require 'inc/navbar.php';?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <?php flash();?>
                        <h1 class="page-header">Gallery List

                            <a href="gallery-add.php" class="btn btn-success pull-right">
                                <i class="fa fa-plus"></i> Add Gallery
                            </a>

                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <th>S.N</th>
                                <th>Title</th>
                                <th>Summary</th>
                                <th>Status</th>
                                <!-- <th>Image</th> -->
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php 
                                    $all_cats = $gallery->getAllGallery();
                                    if($all_cats){
                                        foreach($all_cats as $key => $gallery_data){
                                        ?>
                                        <tr>
                                            <td><?php echo $key+1;?></td>
                                            <td><?php echo $gallery_data->title;?></td>
                                            <td><?php echo $gallery_data->summary;?></td>
                                            <td><?php echo ucfirst($gallery_data->status);?></td>
                                            <!-- <td>
                                                <img style="max-width: 100px;" src="<?php echo UPLOAD_URL.'/gallery/'.$gallery_data->image;?>" alt="" class="img img-thumbnail img-responsive">
                                            </td> -->
                                            <td>
                                                <a href="gallery-add.php?id=<?php echo $gallery_data->id;?>" style="border-radius:50%" class="btn btn-success">
                                                    <i class="fa fa-edit"></i>
                                                </a> 
                                                <a href="process/gallery.php?id=<?php echo $gallery_data->id;?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this gallery?')" style="border-radius: 50%">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php require 'inc/footer.php';?>
<script src="<?php echo ADMIN_JS.'/jquery-dataTable.min.js';?>"></script>
<script>
$(document).ready( function () {
    $('.table').DataTable();
});
</script>