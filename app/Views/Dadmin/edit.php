<?= $this->extend('templates/index'); ?>

<?= $this->section('content') ?>
<div class="container">
<?php $validation = \Config\Services::validation(); ?>

    <div class="row py-4">
        <div class="col-xl-12 text-end">
            <a href="<?= base_url('dashboard/news') ?>" class="btn btn-primary">Back to Posts</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 m-auto">
            <form method="POST" action="<?= base_url('news/'.$news['id']) ?>">
                <?= csrf_field() ?>
                <input type="hidden" name="_method" value="PUT"/>

                <div class="card shadow">
                    <div class="card-header">
                        <h5 class="card-title">Update Post</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="form-group mb-3 has-validation">
                            <label class="form-label">Post Title</label>
                            <input type="text" class="form-control <?php if($validation->getError('title')): ?>is-invalid<?php endif ?>" name="title" placeholder=" Title" value="<?php if($news['title']): echo $news['title']; else: set_value('title'); endif ?>"/>
                            <?php if ($validation->getError('title')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('title') ?>
                                </div>                                
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea class="form-control <?php if($validation->getError('seo_title')): ?>is-invalid<?php endif ?>" name="seo_title" placeholder="seo title"><?php if($news['seo_title']): echo $news['seo_title']; else: set_value('Seo_title'); endif ?></textarea>
                                <?php if ($validation->getError('seo_title')): ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('seo_title') ?>
                                </div>                                
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
