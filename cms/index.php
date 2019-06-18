<?php  
require '../config/init.php';
$title = "Login || Admin, News 1200";
require 'inc/header.php'; 

if(isset($_SESSION, $_SESSION['token']) && !empty($_SESSION['token'])){
    redirect('dashboard.php','success', 'You are already logged in.');
}

if(isset($_COOKIE, $_COOKIE['_au']) && !empty($_COOKIE['_au'])){
    redirect('dashboard.php','success', 'Welcome back to admin panel.');
}
?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <?php flash();?>
                        <form role="form" method="post" action="process/login.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">
                                    Login
                                </button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require 'inc/footer.php';?>