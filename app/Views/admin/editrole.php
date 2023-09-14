<?= $this->extend("layout/template") ?>

<?= $this->section("konten") ?>



<form action="<?= base_url('Admin/Role/actionEditRole/'. $auth_groups->id); ?>" method="POST">
<?= csrf_field() ?>
<div class="card shadow-sm">
    <div class="card-header">
            <h3 class="card-title">Edit Role</h3>
    <div class="card-toolbar">
        </div>
    </div>
    <div class="card-body">
        <div class="form-group mb-6">
             <label for="exampleFormControlInput1" class="form-label">Nama Role</label>
            <input type="text" class="form-control" name="name" id="name" value="<?= $auth_groups->name ;?>">
        </div>
        <div class="form-group mb-6">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="description" id="description" rows="3"><?= $auth_groups->description ;?></textarea>
        </div>
        
        <div class="form-group mb-6">
            <label for="exampleFormControlTextarea1" class="form-label">Hak Akses</label>
        <?php  foreach($permissions as $pr):?>
            <?php $id = $pr["id"];?>
            <div class="form-check form-check-custom form-check-solid form-check-sm mb-3">
            <input class="form-check-input" type="checkbox" value="<?=$pr['id'] ;?>" id="<?=$pr['name'] ;?>" name="pr[]" <?= $pr['name'] == isset($group["$id"]) ? 'checked' : '' ;?>/>
            <label class="form-check-label" for="<?= $pr['name'];?>">
            <?= $pr['name'];?>
        </label>
</div>
        <?php endforeach;?>

        </div>  
        <div class="form-group mb-6">
            <button type="submit" class="btn btn-sm btn-light-primary">Ubah Role</button> <a href="<?=base_url('role');?>" class="btn btn-sm btn-light">Kembali</a>
        </div>  
    </div>
</div>

</form>
<?= $this->endSection() ?>