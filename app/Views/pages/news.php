<!--================News Area =================-->
<section class="news_area p_100">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <div class="main_title2">
               <h2>All <?= $title ?></h2>
            </div>
            <div class="latest_news">
               <?php foreach ($news as $n) : ?>
                  <div class="media">
                     <div class="d-flex">
                        <img class="img-fluid" src="/images/news/<?= $n['file']; ?>" alt="">
                     </div>
                     <div class="media-body">
                        <div class="choice_text">
                           <div class="date">
                              <a href="<?= base_url('pages/category/' . $n['slug']) ?>"><?= $n['category'];  ?></a>
                              <a href="#" class="float-right"><i class="fa fa-calendar" aria-hidden="true">
                                 </i><?= $n['created_at'];  ?>
                              </a>
                           </div>
                           <a href="<?= base_url('pages/detail/' . $n['seo_title']) ?>">
                              <h4><?= $n['title'];  ?></h4>
                           </a>
                           <p><?= character_limiter($n['content'], 100)  ?></p>
                        </div>
                     </div>
                  </div>
               <?php endforeach ?>
            </div>

            <!-- Pagination -->

            <!-- End of Pagination -->

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
                              <a class="float-right"><i class="fa fa-calendar" aria-hidden="true"></i><?= $b['created_at'];  ?></a>
                           </div>
                           <a href="<?= base_url('pages/detail/' . $b['seo_title']) ?>">
                              <h4><?= $b['title'];  ?></h4>
                           </a>
                           <p><?= character_limiter($b['content'], 100) ?></p>
                        </div>
                     </div>
                  <?php endforeach ?>
                  </aside>
                  <!-- ================End of Sidebar================== -->
            </div>
         </div>
</section>
<!--================End News Area =================-->