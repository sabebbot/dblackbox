<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center" style="background-image: url(<?= base_url('images/sampul.png') ?>); background-size: cover;">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>News Details</h2>
                <div class="page_link">
                    <a href="<?= base_url('pages') ?>">Home</a>
                    <a href="<?= base_url('pages/detail/' . $news['seo_title']) ?>"><?= $news['title'];  ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================News Area =================-->
<section class="news_area single-post-area mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="main_blog_details">
                    <img class="img-fluid" src="<?= base_url("images/news/" . $news['file']) ?>" alt="">
                    <h4><?= $news['title'];  ?></h4>
                    <div class="user_details">
                        <div class="float-left">
                            <a class="gad_btn" href="<?= base_url('pages/category/' . $news['slug']) ?>"><?= $news['category'];  ?></a>
                        </div>
                        <div class="float-right">

                            <P><?= $news['created_at'];  ?></P>

                        </div>
                    </div>
                    <p style="text-indent: 45px;" align="justify"><?= $news['content'];  ?></p>
                    <?php
                    if ($news['url'] == "Tidak Ada") {
                    ?>
                    <?php } else { ?>
                        <p>Sumber: <a href="<?= $news['url'] ?>"><?= $news['url'] ?></a></p>
                    <?php  } ?>
                </div>
            </div>

            <!-- ================Sidebar================== -->
            <div class="col-lg-4">
                <div class="right_sidebar">
                    <?php foreach ($new as $b) : ?>
                        <aside class="r_widgets news_widgets">
                            <div class="main_title2">
                                <h2>Berita Terbaru</h2>
                            </div>
                            <div class="choice_item">
                                <img class="img-fluid" src="<?= base_url("images/news/" . $b['file']) ?>" alt="">
                                <div class="choice_text">
                                    <div class="date">
                                        <a href="#">#<?= $b['category'];  ?></a>
                                        <a href=" #" class="float-right"><i class="fa fa-calendar" aria-hidden="true"></i><?= $b['created_at'];  ?>< /a>
                                    </div>
                                    <a href="#">
                                        <h4><?= $b['title'];  ?></h4>
                                    </a>
                                    <p><?= character_limiter($b['content'], 100) ?></p>
                                </div>
                            </div>
                        <?php endforeach ?>
                        <div class="main_title2 mb-5">
                            <h2>Berita Last</h2>
                        </div>
                        <div class="news_slider owl-carousel">
                            <?php foreach ($new as $t) : ?>
                                <div class="item">
                                    <div class="choice_item">
                                        <img src="<?= base_url("images/news/" . $t['file']) ?>" alt="">
                                        <div class="choice_text">
                                            <a href="#">
                                                <h4><?= $b['title'];  ?></h4>
                                            </a>
                                            <div class="date">
                                                <a href=""><i class="fa fa-calendar" aria-hidden="true"></i><?= $t['created_at'];  ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                        </aside>
                        <!-- ================End of Sidebar================== -->

                </div>
            </div>
</section>
<!--================End News Area =================-->