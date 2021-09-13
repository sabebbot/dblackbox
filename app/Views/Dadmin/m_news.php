<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data News</h3>
        </div>
        <div class="actionbutton mt-2">
   <a class="btn btn-info float-right mb20" href="<?=site_url('Anews/create')?>">Add news</a>
</div>
<table class="table">
<thead>
<tr>
    <th>#</th>
    <th>Title</th>
    <th>Status</th>
    <th>Action</th>
</tr>
</thead>
<tbody>
<?php foreach($news as $news): ?>
<tr>
    <td><?= $news['id'] ?></td>
    <td>
        <strong><?= $news['title'] ?></strong><br>
        <small class="text-muted"><?= $news['created_at'] ?></small>
    </td>
    <td>
        <?php if($news['status'] === 'published'): ?>
        <small class="text-success"><?= $news['status'] ?></small>
        <?php else: ?>
        <small class="text-muted"><?= $news['status'] ?></small>
        <?php endif ?>
    </td>
    <td>
    <a class="btn btn-sm btn-info" href="<?= site_url('Anews/edit/'.$news['id']) ?>">Edit</a>
         <a class="btn btn-sm btn-danger" href="<?= site_url('Anews/delete/'.$news['id']) ?>">Delete</a>
    </td>
</tr>
<?php endforeach ?>
</tbody>
</table>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h2 class="h2">Are you sure?</h2>
        <p>The data will be deleted and lost forever</p>
      </div>
      <div class="modal-footer">
        <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection(''); ?>