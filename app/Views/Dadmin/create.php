<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Create News</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('Anews/index') ?>">
                <?= csrf_field(); ?>
 
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= old('title'); ?>">
                </div>
                <div class="form-group">
                    <label for="seo_title">Title</label>
                    <input type="text" class="form-control" id="seo_title" name="seo_title" value="<?= old('seo_title'); ?>">
                </div>
                <script src="<?=base_url('/ckeditor/ckeditor.js');?>"></script>
                <div class="form-group">
                      <label for="content1">Content</label>
                   		 <textarea class="form-control" name="content1" id="content1" value="<?= old('content1')?>" ></textarea>
                            <script>
                                CKEDITOR.replace( 'content1' );
                            </script>
                            </div>	
                <div class="form-group">
                    <label for="id_category">ID Category</label>
                    <input name="text" class="form-control" id="id_category" name="id_category" value="<?= old('id_category')?>" />
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input name="file" class="form-control" id="url" name="url" value="<?= old('url')?>" />
                </div>
                
                <div class="form-group">
                    <label for="file">File</label>
                    <input class="form-control " id="file" type="file" value="<?= old('file')?>" />
                    </div>
 
                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-info"/>
                </div>
 
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>