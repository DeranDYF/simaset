<?= $this->extend("layout/template") ?>

<?= $this->section("konten") ?>

<form action="<?= base_url('Admin/User/editUser/'. $user['id']); ?>" method="POST">
<div class="card shadow-sm">
    <div class="card-header">
            <h3 class="card-title">Ubah Profil User</h3>
    <div class="card-toolbar">
        </div>
    </div>
    <div class="card-body">
        <div class="form-group mb-6">
             <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="fullname" id="fullname" value="<?= $user['fullname'] ;?>">
        </div>
        <div class="form-group mb-6">
            <label for="exampleFormControlTextarea1" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" value="<?= $user['username'] ;?>">
        </div>
        <div class="form-group mb-6">
            <label for="exampleFormControlTextarea1" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="email" value="<?= $user['email'] ;?>">
        </div>
        <div class="form-group mb-6">
            <button type="submit" class="btn btn-sm btn-light-primary">Ubah</button> <a href="<?= base_url('/user/detail/'. $user['id']); ?>" class="btn btn-sm btn-light">Kembali</a>
        </div>  
    </div>
</div>
</form>
    <?= $this->endSection() ?>