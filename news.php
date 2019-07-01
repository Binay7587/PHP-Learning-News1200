<?php require 'config/init.php';
$news = new News;

$no_news = false;
if (isset($_GET, $_GET['id']) && !empty($_GET['id'])) {
    $id = (int)$_GET['id'];
    if ($id <= 0) {
        $no_news = true;
    } else {
        $news_info = $news->getNewsById($id);
        if ($news_info) {
            $related_news = $news->getRelatedNews($news_info[0]->cat_id, $id);
        }
    }
} else {
    redirect('./');
}

$_title = @$news_info[0]->title . ' || ' . SITE_TITLE;

$og = array(
    'title' => @$news_info[0]->title . '  || News 1200',
    'image' => UPLOAD_URL . '/news/' . @$news_info[0]->image,
    'description' => @$news_info[0]->summary
);
?>
<?php require 'inc/header.php'; ?>

<section class="news-inner">
    <div class="container">
        <?php
        if ($no_news) {
            echo "News not found.";
        } else {
            ?>
            <div class="full-news">
                <h2><?php echo $news_info[0]->title; ?></h2>
                <figure style="background-image: url(<?php echo UPLOAD_URL . '/news/' . $news_info[0]->image; ?>)"></figure>
                <span>
                    <em>
                        <strong>
                            <?php echo $news_info[0]->name; ?>,
                            <a href="category.php?id=<?php echo $news_info[0]->cat_id; ?>">
                                <?php echo $news_info[0]->cat_title; ?>
                            </a>
                        </strong>
                    </em>
                </span>
                <?php echo html_entity_decode($news_info[0]->description); ?>
                <span>
                    <em>Posted On: <?php echo date('Y-m-d h:i:s A', strtotime($news_info[0]->created_at)); ?></em>
                </span>
            </div>

            <div class="comment">
                <h4>Comment</h4>
                <div class="fb-comments" data-href="<?php echo getCurrentUrl(); ?>" data-width="100%" data-numposts="5"></div>
            </div>

            <div class="news-wrapper">
                <div class="section-title more">
                    <h2>Related News</h2>
                </div>
                <div class="more-list"></div>
                <div class="row">
                    <?php
                    if ($related_news) {
                        foreach ($related_news as $news_info) {
                            ?>
                            <div class="col-lg-3 col-md-4 col-6">
                                <div class="more-news">
                                    <a href="news.php?id=<?php echo $news_info->id; ?>">
                                        <figure style="background-image: url(<?php echo UPLOAD_URL . '/news/' . $news_info->image; ?>)"></figure>
                                    </a>
                                    <h2><a href="news.php?id=<?php echo $news_info->id; ?>"><?php echo $news_info->title; ?></a></h2>
                                </div>
                            </div>

                        <?php
                    }
                } ?>
                </div>
            </div>
        </div>

    <?php
}
?>
    </div>
</section>

<?php require 'inc/footer.php'; ?>