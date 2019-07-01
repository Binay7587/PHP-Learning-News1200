<?php require 'config/init.php';
$category = new Category;
$news = new News;

$no_cat = false;
if (isset($_GET, $_GET['id']) && !empty($_GET['id'])) {
    $id = (int)$_GET['id'];
    if ($id <= 0) {
        $no_cat = true;
    } else {
        $cat_info = $category->getCategoryById($id);
        if (!$cat_info) {
            $no_cat = true;
        } else {
            $news_data = $news->getNewsByCatId($id, 40);
        }

        
    }
} else {
    redirect('./');
}

$_title = @$cat_info[0]->title . ' || ' . SITE_TITLE;

$og = array(
    'title' => @$cat_info[0]->title . '  || News 1200',
    'image' => UPLOAD_URL . '/category/' . @$cat_info[0]->image,
    'description' => @$cat_info[0]->summary
);
?>
<?php require 'inc/header.php'; ?>

<section class="inner">
    <div class="container">
        <?php
        if ($no_cat) {
            echo "Category not found.";
        } else {
            ?>
            <div class="row">
                <?php 
                    if($news_data){
                    foreach($news_data as $cat_news){
                    ?>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="inner-img">
                        <a href="news.php?id=<?php echo $cat_news->id;?>">
                            <figure style="background-image: url(<?php echo UPLOAD_URL.'/news/'.$cat_news->image;?>)"></figure>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="inner-details">
                        <h2><a href="news.php?id=<?php echo $cat_news->id;?>"><?php echo $cat_news->title;?></a></h2>
                        <p>
                            <?php echo $cat_news->location;?>– 
                            <?php echo $cat_news->summary;?>
                        </p>
                    </div>
                </div>

                    <?php
                    }
                } else {
                    echo "News not found.";
                }
                
                ?>

            </div>
        <?php
    }

    ?>
    </div>
</section>

<?php require 'inc/footer.php'; ?>