<?php require 'config/init.php';
    $_title = 'Home || '.SITE_TITLE;
    $og = array(
        'title' => 'Home page || News 1200',
        'image' => '',
        'description' => ''
    );
    $news = new News();
?>
<?php require 'inc/header.php';?>

<?php 
    $arts_news = $news->getNewsByCatId(12, 4);
    if($arts_news){
        $first_elem = array_shift($arts_news);
    ?>
       <section class="politics">
        <div class="container">
            <div class="section-title">
                <h2><a href="category.php?id=12">Arts</a></h2>
                <p><a href="category.php?id=12">View More <i class="fa fa-bars" aria-hidden="true"></i></a></p>
            </div>
            <div class="news-wrapper">
                <div class="row">
                    
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="politics-img-news news-title">
                            <figure style="background-image: url(<?php echo UPLOAD_URL.'/news/'.$first_elem->image;?>)"></figure>
                            <h2><a href="news.php?id=<?php echo $first_elem->id;?>"><?php echo $first_elem->title;?></a></h2>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <div class="politics-news-list">
                            <div class="listing">
                                <div class="row">
                                    <?php 
                                        if($arts_news){
                                            foreach($arts_news as $news_info){
                                        ?>
                                        <div class="col-md-4">
                                        <a href="news.php?id=<?php echo $news_info->id;?>"><figure style="background-image: url(<?Php echo UPLOAD_URL.'/news/'.$news_info->image;?>)"></figure></a>
                                    </div>
                                    <div class="col-md-8">
                                        <h3><a href="news.php?id=<?php echo $news_info->id;?>"><?php echo $news_info->title;?></a></h3>
                                        <p>
                                            <?php echo $news_info->summary;?>
                                        </p>
                                    </div>
                                        <?php
                                            }
                                        }
                                    
                                    ?>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <?Php
    }

    $computers_news = $news->getNewsByCatId(17, 6);
    $count = count($computers_news);

    $first = ceil($count/2);
    
    if($computers_news){
?>
    <section class="politics">
        <div class="container">
            <div class="section-title">
                <h2><a href="category.php?id=17">Computers</a></h2>
                <p><a href="category.php?id=17">View More <i class="fa fa-bars" aria-hidden="true"></i></a></p>
            </div>
            <div class="news-wrapper">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="politics-news-list">
                            <div class="listing">
                                <div class="row">
                                    <?php 
                                        foreach($computers_news as $key => $comp_news){
                                            if($first == $key){
                                                break;
                                            }
                                    ?>
                                    <div class="col-md-4">
                                        <a href="news.php?id=<?php echo $comp_news->id;?>"><figure style="background-image: url(<?php echo UPLOAD_URL.'/news/'.$comp_news->image;?>)"></figure></a>
                                    </div>
                                    <div class="col-md-8">
                                        <h3><a href="news.php?id=<?php echo $comp_news->id;?>"><?php echo $comp_news->title;?></a></h3>
                                        <p>
                                            <?php echo $comp_news->summary;?>
                                        </p>
                                    </div>
                                    
                                    <?php
                                        array_shift($computers_news);
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="politics-news-list">
                            <div class="listing">
                                <div class="row">
                                    <?php
                                    if($computers_news){
                                        foreach($computers_news as $comp_news){
                                        ?>
                                        <div class="col-md-4">
                                        <a href="news.php?id=<?php echo $comp_news->id;?>"><figure style="background-image: url(<?php echo UPLOAD_URL.'/news/'.$comp_news->image;?>)"></figure></a>
                                    </div>
                                    <div class="col-md-8">
                                        <h3><a href="news.php?id=<?php echo $comp_news->id;?>"><?php echo $comp_news->title;?></a></h3>
                                        <p>
                                            <?php echo $comp_news->summary;?>
                                        </p>
                                    </div>
                                        <?php
                                        }
                                    } 
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

    <section class="money">
        <div class="container">
            <div class="section-title">
                <h2><a href="#">अर्थ</a></h2>
                <p><a href="#">सबै हर्नुहोस् <i class="fa fa-bars" aria-hidden="true"></i></a></p>
            </div>
            <div class="news-wrapper">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="money-listing">
                            <a herf="#"><figure style="background-image: url('assets/images/court.jpg')"></figure></a>
                            <h3><a href="#">निषेधित क्षेत्रविरुद्ध सर्वाेच्चमा मुद्दा दायर</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="money-listing">
                            <a herf="#"><figure style="background-image: url('assets/images/court.jpg')"></figure></a>
                            <h3><a href="#">निषेधित क्षेत्रविरुद्ध सर्वाेच्चमा मुद्दा दायर</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="money-listing">
                            <a herf="#"><figure style="background-image: url('assets/images/court.jpg')"></figure></a>
                            <h3><a href="#">निषेधित क्षेत्रविरुद्ध सर्वाेच्चमा मुद्दा दायर</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="socity">
        <div class="container">
            <div class="section-title">
                <h2><a href="#">समाज</a></h2>
                <p><a href="#">सबै हर्नुहोस् <i class="fa fa-bars" aria-hidden="true"></i></a></p>
            </div>
            <div class="news-wrapper">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="socity-big">
                            <a href="#"><figure style="background-image: url('assets/images/court.jpg')"></figure></a>
                            <h3><a href="#">निषेधित क्षेत्रविरुद्ध सर्वाेच्चमा मुद्दा दायर</a></h3>
                            <p>
                                सरकारले घोषणा गरेको निषेधित क्षेत्र खारेजीको माग गर्दै सर्वाेच्च अदालतमा मुद्दा दायर भएको छ। शुक्रबार वरिष्ठ अधिवक्ता दिनेश त्रिपाठीले माइतीघर मण्डला लगायतका  ठाउँमा प्रदर्शन गर्न नपाइने निर्णय खारेजीको माग गर्दै सर्वाेच्चमा रिट दायर गरेका हुन्।  शुक्रबार वरिष्ठ अधिवक्ता दिनेश त्रिपाठीले माइतीघर मण्डला लगायतका  ठाउँमा प्रदर्शन गर्न नपाइने निर्णय खारेजीको माग गर्दै सर्वाेच्चमा रिट दायर गरेका हुन्। 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="socity-small">
                                    <a href="#"><figure style="background-image: url('assets/images/court.jpg');"></figure></a>
                                    <h3><a href="#">निषेधित क्षेत्रविरुद्ध सर्वाेच्चमा मुद्दा दायर</a></h3>
                                    <p>
                                        सरकारले घोषणा गरेको निषेधित क्षेत्र खारेजीको माग गर्दै सर्वाेच्च अदालतमा मुद्दा दायर भएको छ। 
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="socity-small">
                                    <a href="#"><figure style="background-image: url('assets/images/court.jpg');"></figure></a>
                                    <h3><a href="#">निषेधित क्षेत्रविरुद्ध सर्वाेच्चमा मुद्दा दायर</a></h3>
                                    <p>
                                        सरकारले घोषणा गरेको निषेधित क्षेत्र खारेजीको माग गर्दै सर्वाेच्च अदालतमा मुद्दा दायर भएको छ। 
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="socity-small">
                                    <a href="#"><figure style="background-image: url('assets/images/court.jpg');"></figure></a>
                                    <h3><a href="#">निषेधित क्षेत्रविरुद्ध सर्वाेच्चमा मुद्दा दायर</a></h3>
                                    <p>
                                        सरकारले घोषणा गरेको निषेधित क्षेत्र खारेजीको माग गर्दै सर्वाेच्च अदालतमा मुद्दा दायर भएको छ। 
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="socity-small">
                                    <a href="#"><figure style="background-image: url('assets/images/court.jpg');"></figure></a>
                                    <h3><a href="#">निषेधित क्षेत्रविरुद्ध सर्वाेच्चमा मुद्दा दायर</a></h3>
                                    <p>
                                        सरकारले घोषणा गरेको निषेधित क्षेत्र खारेजीको माग गर्दै सर्वाेच्च अदालतमा मुद्दा दायर भएको छ। 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?Php 
    $video = new Video;
    $video_list = $video->getVideos(4);

    if($video_list)
        $first_video = array_shift($video_list);
?>
    <section class="video">
        <div class="container">
            <div class="section-title">
                <h2><a href="video.php">Video</a></h2>
                <p><a href="video.php">View All <i class="fa fa-bars" aria-hidden="true"></i></a></p>
            </div>
            <div class="news-wrapper">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="big-video">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $first_video->video_id;?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            <h3><a href="video-detail.php?id=<?php echo $first_video->id;?>"><?Php echo $first_video->title;?></a></h3>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="small-video">
                            <div class="row">
                                <?php 
                                    if($video_list){
                                        foreach($video_list as $video_info){
                                    ?>
                                    <div class="col-md-5">
                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $video_info->video_id?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                                <div class="col-md-7">
                                        <h3><a href="video-detail.php?id=<?php echo $video_info->id;?>"><?php echo $video_info->title;?></a></h3>
                                </div>
                                    <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="politics">
        <div class="container">
            <div class="section-title">
                <h2><a href="#">मनोरन्जन</a></h2>
                <p><a href="#">सबै हर्नुहोस् <i class="fa fa-bars" aria-hidden="true"></i></a></p>
            </div>
            <div class="news-wrapper">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="politics-img-news news-title">
                            <figure style="background-image: url('assets/images/simba.jpg')"></figure>
                            <h2><a href="#">सिंघमको गन्ध बोकेको सिम्बा</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <div class="politics-news-list">
                            <div class="listing">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="#"><figure style="background-image: url('assets/images/game.jpg')"></figure></a>
                                    </div>
                                    <div class="col-md-8">
                                        <h3><a href="#">सन २०१८ का बेस्ट मोबाइल गेम</a></h3>
                                        <p>
                                            समय अनुसार मोबाइल गेमको प्रयोग समेत बढिरहेको छ । यसैका लागि कम्पनीहरूले पनि धेरैभन्दा धेरै मोबाइल गेमको विकास गरिरहेका छन् ।
                                        </p>
                                    </div>
                                     <div class="col-md-4">
                                        <a href="#"><figure style="background-image: url('assets/images/watch.jpg')"></figure></a>
                                    </div>
                                    <div class="col-md-8">
                                        <h3><a href="#">चार्ज गर्नु नपर्ने स्मार्टवाच</a></h3>
                                        <p>
                                            म्याट्रिक्सले चार्ज गर्नु नपर्ने म्याट्रिक्स पावरवाच नामक स्मार्टवाच अन्तर्राष्ट्रिय बजारमा उतारेको छ । प्रयोगकर्ताको शरीरको तापबाट सञ्चालन हुने भएकाले यसलाई चार्ज गर्नु पर्दैन ।
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#"><figure style="background-image: url('assets/images/bike.jpg')"></figure></a>
                                    </div>
                                    <div class="col-md-8">
                                        <h3><a href="#">५८ लाखसम्मका बाइक नेपालमा</a></h3>
                                        <p>
                                            विश्वमै महँगो ब्रान्डका रूपमा परिचित एमभी अगस्टाका बाइक नेपाली बजारमा समेत उपलब्ध हुन थालेको छ । नेपाली बजारमा ५७ लाख ९० हजार रुपैयाँसम्मका एमभी अगस्टाका बाइक खरिद गर्न सकिन्छ ।
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php 
    $gallery = new Gallery;
    $gallery_info = $gallery->getGallery(4);
    if($gallery_info){
?>
    <section class="money">
        <div class="container">
            <div class="section-title">
                <h2><a href="#">Gallery</a></h2>
                <p><a href="#">View All <i class="fa fa-bars" aria-hidden="true"></i></a></p>
            </div>
            <div class="news-wrapper">
                <div class="row">
                   <?Php 
                    foreach($gallery_info as $gall_data){
                   
                   ?>
                    <div class="col-lg-3">
                        <div class="money-listing">
                            <a herf="gallery-detail.php?id=<?php echo $gall_data->id;?>">
                                <figure style="background-image: url(<?php echo UPLOAD_URL.'/gallery/'.$gall_data->image;?>)"></figure></a>
                            <h3><a href="gallery-detail.php?id=<?php echo $gall_data->id;?>"><?php echo $gall_data->title;?></a></h3>
                        </div>
                    </div>
                    <?Php } ?>

                </div>
            </div>
        </div>
    </section>

<?php
} require 'inc/footer.php';?>
