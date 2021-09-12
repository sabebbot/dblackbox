<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<?php foreach ($news as $news) : ?>
<h2 class="h2"><?= $news['title'] ?></h2>
<div class="mb-5">
    <span><?= $news['created_at'] ?></span>
</div>
<div><?= $news['content'] ?></div>
<?php endforeach ?>
<?= $this->endSection() ?>