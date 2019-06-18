<?php  
require '../config/init.php';
$title = "Dashboard || Admin, News 1200";
require 'inc/checklogin.php';
require 'inc/header.php'; ?>
    <div id="wrapper">

        <?php require 'inc/navbar.php';?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <?php flash();?>
                        <h1 class="page-header">Blank</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php require 'inc/footer.php';?>