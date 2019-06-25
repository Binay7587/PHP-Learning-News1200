<?php  
require '../config/init.php';
$title = "Dashboard || Admin, News 1200";
require 'inc/checklogin.php';
require 'inc/header.php'; 
$video = new Video();
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
                        <h1 class="page-header">Video List

                            <a href="video-add.php" class="btn btn-success pull-right">
                                <i class="fa fa-plus"></i> Add Video
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
                                <th>Description</th>
                                <th>Status</th>
                                <th>Video</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php 
                                    $all_videos = $video->getAllVideo();
                                    if($all_videos){
                                        foreach($all_videos as $key => $video_data){
                                        ?>
                                        <tr>
                                            <td><?php echo $key+1;?></td>
                                            <td><?php echo $video_data->title;?></td>
                                            <td><?php echo $video_data->description;?></td>
                                            <td><?php echo ucfirst($video_data->status);?></td>
                                            <td>
                                            <iframe width="150" height="100" src="https://www.youtube.com/embed/<?php echo $video_data->video_id;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </td>

                                            <td>
                                                <a href="video-add.php?id=<?php echo $video_data->id;?>" style="border-radius:50%" class="btn btn-success">
                                                    <i class="fa fa-edit"></i>
                                                </a> 
                                                <a href="process/video.php?id=<?php echo $video_data->id;?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this video?')" style="border-radius: 50%">
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