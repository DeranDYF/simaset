<?= $this->extend("layout/template") ?>

<?= $this->section("konten") ?>
<?php if(session()->getFlashdata('message')): ?>
            <div class="alert alert-success" role="alert">
            <?=  session()->getFlashdata('message') ?>
            </div>
        <?php endif; ?>
<form action="<?= base_url('admin/Role/tambahRole'); ?>" method="post">
<?= csrf_field() ?>
<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Tambah Role</h3>
        <div class="card-toolbar">
        </div>
    </div>
    <div class="card-body">
    <div class="form-group mb-6">
  <label for="exampleFormControlInput1" class="form-label">Nama Role</label>
  <input type="text" class="form-control" name="name" id="name" placeholder="Masukan Nama Role">
</div>
<div class="form-group mb-6">
  <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Role</label>
  <textarea class="form-control" name="description" id="description" rows="3"></textarea>
</div>
        <div class="form-group mb-6">
          <label for="exampleFormControlTextarea1" class="form-label">Hak Akses</label>
        <?php foreach($permissions as $pr):?>
            <div class="form-check form-check-custom form-check-solid form-check-sm mb-5">
            <input class="form-check-input" type="checkbox" value="<?=$pr->id ;?>" id="<?=$pr->name ;?>" name="pr[]" />
            <label class="form-check-label" for="<?= $pr->name;?>">
            <?= $pr->name;?>
        </label>
      </div>
        <?php endforeach;?>
 
    </div>
    <div class="form-group mb-6">

<button type="submit" class="btn btn-sm btn-light-primary">Tambah Role</button> <a href="<?=base_url('role');?>" class="btn btn-sm btn-light">Kembali</a>
</div> 
</div>

</form>
<?= $this->endSection() ?>