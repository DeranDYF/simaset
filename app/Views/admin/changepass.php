<?= $this->extend("layout/template") ?>

<?= $this->section("konten") ?>


<form action="<?= base_url('Admin/User/changePassword/'. $user->userid); ?>" method="POST">
<?= csrf_field() ?>
<div class="card shadow-sm">
    <div class="card-header">
            <h3 class="card-title">Ubah Password yang Bernama <?= $user->username ;?></h3>
    <div class="card-toolbar">
        </div>
    </div>
    <div class="card-body">
        <div class="form-group mb-6">
            <label for="exampleFormControlInput1" class="form-label">Password Baru</label>
            <input type="password" class="form-control" name="password_baru" id="password_baru" value="">
        </div> 
        <div class="form-group mb-6">
            <button type="submit" class="btn btn-sm btn-light-primary">Ubah Password</button> <a href="<?= base_url('/user/detail/'. $user->userid); ?>" class="btn btn-sm btn-light">Kembali</a>
        </div>  
    </div>
</div>

</form>
<?= $this->endSection() ?>