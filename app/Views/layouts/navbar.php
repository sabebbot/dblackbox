<?php

use App\Models\Category;

$category   = new Category();
$category   = $category->findAll();

?>
<nav class="navbar navbar-light navbar-expand-lg navbar-light bg-light fixed-top home">
    <div class="container">
        <a href="<?= base_url() ?>" class="navbar-brand d-flex w-35 mr-auto">
            <img src="<?= base_url('images/logo.png') ?>" alt="" width="70px" padding-right="100px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
            <ul class="navbar-nav w-100 justify-content-center">
                <?php foreach ($category as $c) : ?>
                    <li class="nav-item <?php if ($c['slug'] == $category) {
                                            echo "active";
                                        } ?>">
                        <a class="nav-link" href="<?= base_url('pages/category/' . $c['slug']) ?>"><?= $c['category'];  ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>