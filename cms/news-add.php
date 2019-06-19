<?php  
require '../config/init.php';
$title = "Dashboard || Admin, News 1200";
require 'inc/checklogin.php';
require 'inc/header.php'; 
$news = new News();
$category = new Category;
$user = new User;

$act = "add";
if(isset($_GET, $_GET['id']) && !empty($_GET['id'])){
    $act = "Update";
    $id = (int)$_GET['id'];
    if($id <= 0){
        redirect('./news.php','error','News id is not valid');
    }

    $news_info = $news->getNewsById($id);

    if(!$news_info){
        redirect('./news.php','error','News not found.');
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
                        <h1 class="page-header">News <?php echo ucfirst($act);?></h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-12">
                        <form action="process/news.php" method="post" enctype="multipart/form-data" class="form">
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Title: </label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo @$news_info[0]->title;?>" name="title" required placeholder="Enter News name here." class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Summary: </label>
                                <div class="col-sm-9">
                                    <textarea name="summary" id="summary" rows="5" style="resize: none;" class="form-control"><?php echo @$news_info[0]->summary;?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Description: </label>
                                <div class="col-sm-9">
                                    <textarea name="description" id="description" rows="5" style="resize: none;" class="form-control"><?php echo @$news_info[0]->description;?></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Category: </label>
                                <div class="col-sm-9">
                                    <select name="cat_id" required id="cat_id" class="form-control">
                                        <option value="" disabled selected>--Select Any One--</option>
                                        <?php 
                                            $cat_info = $category->getAllCategory();
                                            if($cat_info){
                                                foreach($cat_info as $cat_data){
                                                ?>
                                                <option value="<?php echo $cat_data->id;?>" <?php echo isset($news_info, $news_info[0]->cat_id) && $news_info[0]->cat_id == $cat_data->id ? 'selected' : '' ?>>
                                                    <?php echo $cat_data->title;?>    
                                                </option>
                                                <?php
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Location: </label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo (@$news_info[0]->location) ? @$news_info[0]->location : 'Kathmandu';?>" name="location" placeholder="Enter News name here." class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3">News Date: </label>
                                <div class="col-sm-9">
                                    <input type="date" value="<?php echo (@$news_info[0]->news_date) ? @$news_info[0]->news_date : date('Y-m-d');?>" name="news_date" placeholder="Enter News name here." class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Reporter: </label>
                                <div class="col-sm-9">
                                    <select name="reporter" required id="reporter" class="form-control">
                                        <option value="<?php echo $_SESSION['user_id'];?>" selected><?php echo $_SESSION['name'];?></option>
                                        <?php 
                                            $user_info = $user->getAllReporter();
                                            if($user_info){
                                                foreach($user_info as $cat_data){
                                                ?>
                                                <option value="<?php echo $cat_data->id;?>" <?php echo isset($news_info, $news_info[0]->cat_id) && $news_info[0]->cat_id == $cat_data->id ? 'selected' : '' ?>>
                                                    <?php echo $cat_data->title;?>    
                                                </option>
                                                <?php
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-4 separater">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Is Breaking: </label>
                                        <div class="col-sm-6">
                                            <input type="checkbox" name="is_breaking" <?php echo (isset($news_info, $news_info[0]->is_breaking) && $news_info[0]->is_breaking == 1) ? 'checked' : '';?> value="1"> Yes
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 separater">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Is Featured: </label>
                                        <div class="col-sm-6">
                                            <input type="checkbox" name="is_featured"  <?php echo (isset($news_info, $news_info[0]->is_featured) && $news_info[0]->is_featured == 1) ? 'checked' : '';?> value="1"> Yes
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 separater">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-6">Is Main: </label>
                                        <div class="col-sm-6">
                                            <input type="checkbox" name="is_main" value="1"  <?php echo (isset($news_info, $news_info[0]->is_main) && $news_info[0]->is_main == 1) ? 'checked' : '';?>> Yes
                                        </div>
                                    </div>
                                </div>
                            </div>



                            

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Source: </label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo @$news_info[0]->source;?>" name="source" placeholder="Enter Source." class="form-control">
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <label for="" class="col-sm-3">Status: </label>
                                <div class="col-sm-9">
                                    <select name="status" required id="status" class="form-control">
                                        <option value="active" <?php echo isset($news_info, $news_info[0]->status) && $news_info[0]->status == 'active' ? 'selected' : '' ;?>>Active</option>
                                        <option value="inactive" <?php echo isset($news_info, $news_info[0]->status) && $news_info[0]->status == 'inactive' ? 'selected' : '' ;?>>In-Active</option>
                                    </select>
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label for="" class="col-sm-3">Image: </label>
                                <div class="col-sm-4">
                                    <input type="file" name="image" accept="image/*" >
                                </div>
                                <?php 
                                    if($act == 'Update'){
                                        if(file_exists(UPLOAD_DIR.'/news/'.$news_info[0]->image) && $news_info[0]->image != ''){
                                            ?>
                                            <div class="col-sm-4">
                                                <img src="<?php echo UPLOAD_URL.'/news/'.$news_info[0]->image;?>" alt="" class="img img-responsive img-thumbnail">
                                                <input type="checkbox" name="del_image" value="<?php echo $news_info[0]->image;?>"> Delete
                                            </div>
                                            <?php
                                        }
                                    }
                                ?>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-3"></label>
                                <div class="col-sm-9">
                                    <input type="hidden" name="old_image" value="<?php echo @$news_info[0]->image;?>">
                                    <input type="hidden" name="news_id" value="<?php echo @$news_info[0]->id;?>">
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