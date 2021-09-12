<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackBox Magazine</title>
    <link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendors/linericon/style.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendors/owl-carousel/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendors/lightbox/simpleLightbox.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendors/nice-select/css/nice-select.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendors/animate-css/animate.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendors/jquery-ui/jquery-ui.css') ?>" rel="stylesheet">
    <!-- main css -->
</head>
<Style>
    body {
        background-color: #353434;
        color: #FFF !important;
    }

    a {
        color: #FFF !important;
    }

    a:hover {
        color: #FFF !important;
        text-decoration: none !important;
        outline: none !important;
    }

    .bg-light {
        background-color: transparent !important;
    }

    .bg-dark {
        background-color: rgb(73, 73, 73) !important;
    }

    .img-active:hover {
        cursor: pointer;
        transition: .4s ease;
        opacity: 0.2;
    }

    .img-icon {
        position: absolute;
        margin: 30% 10% !important;
    }

    .text-cover {
        position: absolute;
        left: 20px;
        bottom: 20px;
    }

    .text-cover-right {
        position: absolute;
        top: 150px;
        right: 20px;
    }

    .img-cover {
        position: relative;
        text-align: center;
    }

    .text-cover-right {
        position: absolute;
        top: 150px;
        right: 20px;
    }

    @media screen and (max-width: 500px) {
        .text-cover {
            left: 0px !important;
            bottom: 30px !important;
        }

        .mobile {
            font-size: 15px !important;

        }

        .mobile-text {
            font-size: 10px !important;
        }

        .text-cover-right {
            position: absolute;
            top: 15px;
            right: 0px;
        }
    }
</Style>

<body>
    <div class="row no-gutters">
        <div class="col-12 col-sm-6 col-md-8">
            <?php foreach ($history as $h) : ?>
                <img class="img-fluid mb-4 mb-lg-0 img-cover" src="/images/news/<?= $h['file']; ?>">
                <div class="row">
                    <div class="text-cover col-6">
                        <a href="<?= base_url('pages/detail/' . $h['seo_title']) ?>">
                            <h3 class="mobile" style="color: whitesmoke; text-shadow: 2px 2px #000;"><?= $h['title']; ?></br></h3>
                        </a>
                    </div>
                <?php endforeach ?>
                <div class="text-cover-right col-6 mt-5">
                    <?php foreach ($highlight as $hg) : ?>
                        <a href="<?= base_url('pages/detail/' . $hg['seo_title']) ?>">
                            <h3 class="text-right mobile" style="color: whitesmoke; text-shadow: 2px 2px #000;"><?= $hg['title']; ?>
                            </h3>
                        </a>
                        <p class="text-right mobile-text" style="color: whitesmoke; text-shadow: 2px 2px #000;"><?= character_limiter($hg['content'], 20)  ?></p>
                    <?php endforeach ?>
                </div>
                </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="col align-self-center mt-5">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="rounded carousel-inner" style="max-width: 400px;">
                        <?php $no = 0; ?>
                        <?php foreach ($banner as $b) : ?>
                            <?php $no++;  ?>
                            <div class="carousel-item <?php if ($no <= 1) {
                                                            echo "active";
                                                        } ?>">
                                <img class=" d-block w-100" src="/images/banner/<?= $b['file']; ?>" alt="First slide">
                            </div>
                        <?php endforeach ?>
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="mt-4 mb-4">
                <h1 class="text-center">TRANDING<b>BOX</b></h1>
            </div>
            <div class="col align-self-center">
                <div class="card bg-light" style="max-width: 400px;">
                    <div class="row no-gutters">
                        <?php foreach ($news as $n) : ?>
                            <div class="col-md-4">
                                <img src="/images/news/<?= $n['file']; ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a href="<?= base_url('pages/detail/' . $n['seo_title']) ?>">
                                        <h6 class="card-title"><?= $n['title'];  ?></h6>
                                    </a>
                                    <p class="card-text" style="font-size: 14px;"><?= character_limiter($n['content'], 30)  ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-2 bg-dark text-light">
        <h1 style="margin-left: 35px;"><b>BOX</b>CONTENTS</h1>
    </div>
    <div class="row no-gutters">
        <div class="col align-self-center">
            <a href="<?= base_url('pages/category/technology') ?>">
                <img src=" <?= base_url('images/category/technology.png ') ?> " class="img-fluid mx-auto d-block  img-icon" style=" max-height: 325px; width: 80%; ">
                <img src=" <?= base_url('images/category/background/technology.jpg ') ?> " class="img-fluid mx-auto d-block img-active" alt=" ... " style=" max-height: 325px; width: 100%; ">
            </a>
        </div>

        <div class=" col ">
            <a href="<?= base_url('pages/category/e-sport') ?>">
                <img src="<?= base_url('images/category/e-sport.png ') ?>" class="img-fluid mx-auto d-block  img-icon" style=" max-height: 325px; width: 80%; ">
                <img src=" <?= base_url('images/category/background/e-sport.jpg ') ?> " class=" img-fluid mx-auto d-block img-active" alt=" ... " style=" max-height: 325px; width: 100%; ">
            </a>
        </div>
        <div class=" col ">
            <a href="<?= base_url('pages/category/games') ?>">
                <img src=" <?= base_url('images/category/games.png ') ?> " class="img-fluid mx-auto d-block  img-icon" style=" max-height: 325px; width: 80%; ">
                <img src="<?= base_url('images/category/background/games.jpg ') ?>" class=" img-fluid mx-auto d-block img-active" alt=" ... " style=" max-height: 325px; width: 100%; ">
            </a>
        </div>
    </div>
    <div class=" row no-gutters ">
        <div class=" col ">
            <a href="<?= base_url('pages/category/entertainmet') ?>">
                <img src=" <?= base_url('images/category/entertainment.png ') ?>" class="img-fluid mx-auto d-block  img-icon" style=" max-height: 325px; width: 80%; ">
                <img src="<?= base_url('images/category/background/entertainment.jpg ') ?>" class=" img-fluid mx-auto d-block img-active" alt=" ... " style=" max-height: 325px; width: 100%; ">
            </a>
        </div>
        <div class=" col ">
            <a href="<?= base_url('pages/category/community') ?>">
                <img src="<?= base_url('images/category/community.png') ?>" class="img-fluid mx-auto d-block  img-icon" style=" max-height: 325px; width: 80%; ">
                <img src=" <?= base_url('images/category/background/community.jpg ') ?>" class=" img-fluid mx-auto d-block img-active" alt=" ... " style=" max-height: 325px; width: 100%; ">
            </a>
        </div>
        <div class=" col ">
            <a href="<?= base_url('pages/category/history') ?>">
                <img src=" <?= base_url('images/category/history.png ') ?>" class="img-fluid mx-auto d-block  img-icon" style=" max-height: 325px; width: 80%; ">
                <img src=" <?= base_url('images/category/background/history.jpg ') ?>" class=" img-fluid mx-auto d-block img-active" alt=" ... " style=" max-height: 325px; width: 100%; ">
            </a>
        </div>
    </div>
    <script src=" https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity=" sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin=" anonymous ">
    </script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js " integrity=" sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49 " crossorigin=" anonymous ">
    </script>
    <script src=" https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js " integrity=" sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T " crossorigin=" anonymous ">
    </script>
    <script>
        $('.carousel').carousel({
            interval: 3000,
            keyboard: true,
            pause: 'hover',
            wrap: true
        });

        $('#carousel4').on('slide.bs.carousel', function() {
            console.log('SLIDE!');
        });

        $('#carousel4').on('slid.bs.carousel', function() {
            console.log('SLID!');
        });
    </script>

    <!-- Footer -->
    <style>
        footer {
            background: rgb(73, 73, 73);
            padding: 20px 0;
        }

        .footer-container {
            max-width: 1300px;
            margin: auto;
            padding: 0 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap-reverse;
        }

        .social-media {
            margin: 30px 0;

        }

        .social-media a {
            color: #ffffff;
            margin-right: 30px;
            margin-bottom: 30px;
            font-size: 30px;
            text-decoration: none;
            transition: .3s linear;
        }

        .btn {
            color: inherit;
            font-family: inherit;
            font-size: inherit;
            background: white;
            padding: 0.3rem 3.4rem;
            border: 3px solid black;
            margin-right: 2.6rem;
            box-shadow: 0 0 0 black;
            transition: all 0.2s;
        }

        .social-media:hover {

            transform: trans(-0.4rem, -0.4rem);
        }



        .border {
            width: 100px;
            height: 4px;
            background: #fc5c65;
        }


        @media screen and (max-width:960px) {
            .footer-container {
                max-width: 600px;
            }

            .right-col {
                width: 100%;
                text-align: right;
                right: 20%;

            }

            .center-col {
                width: 100%;
                text-align: center;
                bottom: 10px;

            }

            .left-col {
                width: 100%;
                text-align: right;
                margin-bottom: 60px;

            }
        }


        @media screen and (max-width:700px) {
            .btn {
                margin: 0;
                width: 100%;
                margin-top: 20p;
                margin-bottom: 20p;
            }
        }

        /* Create three equal columns that floats next to each other */
        .column {
            float: left;
            width: 33.33%;
            padding: 10px;
            height: 150px;
            /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
            }
        }
    </style>

    </style>
    <footer>
        <div class="row">
            <div class="column" style="padding-left: 5%; text-align: center;">
                <p>Follow our Social media: </p>
                <div class="social-media">
                    <a target="_blank" href="#"><i class="fa fa-youtube"></i></a>
                    <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
                </div>

            </div>
            <div class="column">
                <p style="text-align: center; padding-top:18%;">Copyright © 2021 BlackBox Magazine. All Rights Reserved.</p>
            </div>
            <div class="column" style="text-align: center;">
                <p>Contact Us: </p>
                <div class="social-media">
                    <a target="_blank" href="#"><i class="fa fa-whatsapp"></i></a>
                    <a target="_blank" href="#"><i class="fa fa-envelope"></i></a>
                    <p style="text-align: center; margin-top: 2%;"> PT.ANUGRAH TEKNOLOGI KREATIF</p>
                </div>
            </div>
    </footer>
</body>

</html>
</body>

</html>