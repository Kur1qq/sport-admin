<div class="slider sliderv2">
    <div class="container">
        <div class="row">
            <div class="slider-single-item">
                <?php
                $CI = &get_instance();
                if ($sliders && count($sliders) > 0) foreach ($sliders as $slider) {
                    $image = $CI->getImage($slider->file_id);
                ?>
                    <div class="movie-item">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-xs-12">
                                <div class="title-in">
                                    <div class="cate">
                                        <span class="blue"><a href="#">Sci-fi</a></span>
                                    </div>
                                    <h1><a href="#"><?= $slider->title ?><span></span></a></h1>
                                    <div class="mv-details">
                                        <ul class="mv-infor">
                                            <li><?= substr($slider->published_at, 0, 10); ?></li>
                                        </ul>
                                    </div>
                                    <div class="btn-transform transform-vertical">
                                        <div><a href="<?= base_url('content/detail/') . $slider->id ?>" class="item item-1 redbtn">Үзэх</a></div>
                                        <div><a href="<?= base_url('content/detail/') . $slider->id ?>" class="item item-2 redbtn hvrbtn">Үзэх</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="mv-img-2">
                                    <a href="#"><img src="<?= $image ?>" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="movie-items  full-width">
    <div class="row">
        <div class="col-md-12">
            <div class="title-hd">
                <h2>Apple</h2>
                <a href="<?= base_url('phone') ?>" class="viewall">Бүгдийг үзэх <i class="ion-ios-arrow-right"></i></a>
            </div>
            <div class="tabs">
                <div class="tab-content">
                    <div id="tab1-h2" class="tab active">
                        <div class="row">
                            <div class="slick-multiItem2">
                                <?php
                                $i = 0;
                                $CI = &get_instance();
                                if ($apple_phones && count($apple_phones) > 0) foreach ($apple_phones as $apple_phone) {
                                    $i++;
                                    $image = $CI->getImage($apple_phone->image_file_id);
                                ?>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="<?= $image ?>" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="<?= base_url('phone/detail/') . $apple_phone->id ?>"> Үзэх <i class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#"><?= $apple_phone->name ?></a></h6>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title-hd">
                <h2>Samsung</h2>
                <a href="<?= base_url('phone') ?>" class="viewall">Бүгдийг Үзэх <i class="ion-ios-arrow-right"></i></a>
            </div>
            <div class="tabs">
                <div class="tab-content">
                    <div id="tab1-h2" class="tab active">
                        <div class="row">
                            <div class="slick-multiItem2">
                                <?php
                                $i = 0;
                                $CI = &get_instance();
                                if ($samsung_phones && count($samsung_phones) > 0) foreach ($samsung_phones as $samsung_phone) {
                                    $i++;
                                    $image = $CI->getImage($samsung_phone->image_file_id);
                                ?>
                                    <div class="slide-it">
                                        <div class="movie-item">
                                            <div class="mv-img">
                                                <img src="<?= $image ?>" alt="">
                                            </div>
                                            <div class="hvr-inner">
                                                <a href="<?= base_url('phone/detail/') . $samsung_phone->id ?>"> Үзэх <i class="ion-android-arrow-dropright"></i> </a>
                                            </div>
                                            <div class="title-in">
                                                <h6><a href="#"><?= $samsung_phone->name ?></a></h6>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- latest new v2 section-->
<div class="latestnew full-width">
    <div class="row">
        <div class="col-md-9">
            <div class="ads adsv2">
                <img src="images/uploads/ads2.png" alt="">
            </div>
            <div class="title-hd">
                <h2>Мэдээ, мэдээлэл</h2>
                <a href="<?= base_url('content/') ?>" class="viewall">Бүгдийг Үзэх <i class="ion-ios-arrow-right"></i></a>
            </div>

            <div class="latestnewv2">
                <?php
                $CI = &get_instance();
                if ($contents && count($contents) > 0) foreach ($contents as $content) {
                    $image = $CI->getImage($content->file_id);
                ?>
                    <div class="blog-item-style-2">
                        <a href="<?= base_url('content/detail/' . $content->id) ?>"><img src="<?= $image ?>" alt=""></a>
                        <div class="blog-it-infor">
                            <h3><a href="<?= base_url('content/detail/' . $content->id) ?>"><?= $content->title ?></a></h3>
                            <span class="time"><?= $content->published_at ?></span>
                            <p><?= $content->description ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="col-md-3">
            <div class="sidebar">
                <div class="sb-facebook sb-it">
                    <h4 class="sb-title">Find us on Facebook</h4>
                    <iframe src="https://www.facebook.com/solongo.soko.522066" data-src="https://www.facebook.com/solongo.soko.522066" height="315" style="width:100%;border:none;overflow:hidden"></iframe>
                </div>

            </div>
        </div>
    </div>

</div>