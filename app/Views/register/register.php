<?= $this->extend("layout/template") ?>

<?= $this->section("konten") ?>
<div class="row g-5 justify-content-center">
    <div class="col-lg-7">
        <div class="card shadow-sm align-item-center">
            <div class="card-header">
                <h3 class="card-title">Tambah User</h3>
                <div class="card-toolbar">
                </div>
            </div>
        
            <form action="<?= url_to('register') ?>" method="post">
            <?= csrf_field() ?>
            <div class="card-body">
            <?= view('Myth\Auth\Views\_message_block') ?>
                        <div class="form-group mb-6">
                            <label for="email"><?=lang('Auth.email')?></label>
                            <input type="email" class="form-control form-control-solid <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                        </div>

                        <div class="form-group mb-6">
                            <label for="username"><?=lang('Auth.username')?></label>
                            <input type="text" class="form-control form-control-solid <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                        </div>

                        <div class="form-group mb-6">
                            <label for="password"><?=lang('Auth.password')?></label>
                            <input type="password" name="password" class="form-control form-control-solid <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                        </div>

                        <div class="form-group mb-6">
                            <label for="pass_confirm"><?=lang('Auth.repeatPassword')?></label>
                            <input type="password" name="pass_confirm" class="form-control form-control-solid <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                        </div>
                        <div class="form-group mb-6">

                        <button type="submit" class="btn btn-sm btn-light-primary">Tambah</button> <a href="<?= base_url('/user'); ?>" class="btn btn-sm btn-light">Kembali</a>
            </div>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection() ?>