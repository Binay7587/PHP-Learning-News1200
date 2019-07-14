<?php require 'config/init.php';
$category = new Category;
$news = new News;

$no_cat = false;
$id = null;
if (isset($_GET, $_GET['id']) && !empty($_GET['id'])) {
    $id = (int)$_GET['id'];
    if ($id <= 0) {
        $no_cat = true;
    } else {
        $cat_info = $category->getCategoryById($id);
        if (!$cat_info) {
            $no_cat = true;
        }
        $news_data = null;
            // } else {
        //     $news_data = $news->getNewsByCatId($id, 40);
        // }

        
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
            <div class="row" id="main_content">
                <?php 
                    if($news_data){
                    /* foreach($news_data as $cat_news){
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
                    } */
                } else {
                    
                }
                
                ?>

            </div>
        <?php
    }

    ?>
    </div>
</section>

<?php require 'inc/footer.php'; ?>

<script>
    $.ajax({
        url: 'inc/category.php',
        type: 'post',
        data: {
            cat_id: <?php echo $id;?>
        },
        success: function(response){
            if(typeof(response) != 'object'){
                response = $.parseJSON(response);
            }

            if(response.status){
                var html_to_place = '';
                $.each(response.data, function(key, value){
                    html_to_place += '<div  class="col-lg-4 col-md-4 col-sm-12">';
                    html_to_place += '<div class="inner-img">';
                    html_to_place += '<a href="news.php?id='+value.id+'">';
                    html_to_place += '<figure style="background-image: url(<?php echo UPLOAD_URL;?>/news/'+value.image+')"></figure>'
                    html_to_place += '</a></div></div>';
                    html_to_place += '<div class="col-lg-8 col-md-8 col-sm-12"><div class="inner-details"><h2>';
                    html_to_place += '<a href="news.php?id='+value.id+'">'+value.title+'</a></h2><p>';
                    html_to_place += value.location+'-'+value.summary;
                    html_to_place += '</p></div></div>';
                });
                $('#main_content').html(html_to_place);
            } else {
                $('#main_content').html('No news found.');
            }
        }
    });
</script>