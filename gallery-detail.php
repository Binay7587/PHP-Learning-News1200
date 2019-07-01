<?php require 'config/init.php';
$gallery = new Gallery;
$gallery_images = new GalleryImages;

$no_gallery = false;
if (isset($_GET, $_GET['id']) && !empty($_GET['id'])) {
    $id = (int)$_GET['id'];
    if ($id <= 0) {
        $no_gallery = true;
    } else {
        $gallery_info = $gallery->getGalleryById($id);
        if ($gallery_info) {
            $images = $gallery_images->getImagesByGalleryId($id);
        }
    }
} else {
    redirect('./');
}

$_title = @$gallery_info[0]->title . ' || ' . SITE_TITLE;

$og = array(
    'title' => @$gallery_info[0]->title . '  || News 1200',
    'image' => UPLOAD_URL . '/gallery/' . @$gallery_info[0]->image,
    'description' => @$gallery_info[0]->summary
);
?>
<?php require 'inc/header.php'; ?>

<section class="gallery-inner">
    <div class="container">
        <?php
        if ($no_gallery) {
            echo "Gallery not found.";
        } else {
            ?>
            <div class="full-gallery">
                <h2><?php echo $gallery_info[0]->title; ?></h2>
                <div class="row">
                <?php 
                    if($images){
                        foreach($images as $gal_image){
                        ?>
                        <div class="col-sm-3">
                        <a href="<?php echo UPLOAD_URL.'/gallery/'.$gal_image->image_name;?>" data-lightbox="image" data-title="My caption">
                            <img src="<?php echo UPLOAD_URL.'/gallery/'.$gal_image->image_name;?>" alt="" class="img img-responsive img-thumbnail">
                        </a>
                        </div>
                        <?php
                        }
                    }
                ?>
                </div>
            </div>

            <div class="comment">
                <h4>Comment</h4>
                <div class="fb-comments" data-href="<?php echo getCurrentUrl(); ?>" data-width="100%" data-numposts="5"></div>
            </div>

    <?php
}
?>
    </div>
</section>

<?php require 'inc/footer.php'; ?>