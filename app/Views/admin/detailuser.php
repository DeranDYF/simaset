<?= $this->extend("layout/template") ?>

<?= $this->section("konten") ?>

<div class="card shadow-sm align-item-center mb-3" style="max-width: 600px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= base_url('/');?>/assets/media/avatars/150-2.jpg" class="img-fluid rounded mb-3 mt-3" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title"><?= $user->fullname ;?></h4>
        <p class="card-text text-muted"><?= $user->username ;?> | <?= $user->email ;?></p>
        <p class="card-text"><span class="badge badge-light-<?= ($user->name == 'Kepala Divisi Procurement') ? 'danger' : (($user->name == 'Admin') ? 'primary' : (($user->name == 'Spv. Material Management') ? 'success' : 'warning')); ?>"><?= $user->name; ?></span></p>
        <a href="<?= base_url('/user/ubah/'. $user->userid); ?>" class="btn btn-sm btn-light-success mt-3">Ubah Profile</a>
        <a href="<?= base_url('/user/ubahsandi/'. $user->userid); ?>" class="btn btn-sm btn-light-warning mt-3">Ubah Password</a>
        <?php if (in_groups('Admin')) : ?>
        <a href="<?= base_url('user'); ?>" class="btn btn-sm btn-light mt-3">Kembali</a>
      <?php endif; ?>
      <?php if (!in_groups('Admin')) : ?>
        <a href="<?= base_url('/'); ?>" class="btn btn-sm btn-light mt-3">Kembali</a>
      <?php endif; ?>
      </div>
    </div>
  </div>
</div>

    <?= $this->endSection() ?>