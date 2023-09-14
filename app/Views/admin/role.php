<?= $this->extend("layout/template") ?>
<?= $this->section("konten") ?>
<?= $this->include("layout/flash.php") ?>
<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Role</h3>
        <div class="card-toolbar">
            <a href="<?= base_url('/role/tambah'); ?>" type="button" class="btn btn-sm btn-light-primary">
                <i class="las la-plus-circle fs-3"></i> Tambah Role Baru
            </a>
        </div>
    </div>
    <div class="card-body">
        <table id="kt_datatable_example_5" class="table table-hover table-row-bordered table-rounded table-shadow sm border gy-7 gs-7">
            <thead>
                <tr class="fw-bolder fs-6 text-dark px-7">
                    <th>No</th>
                    <th>Role</th>
                    <th>Deskripsi</th>
                    <th class="text-center">Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($groups as $role) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><span class="badge badge-light-<?= ($role->name == 'Kepala Divisi Procurement') ? 'danger' : (($role->name == 'Admin') ? 'primary' : (($role->name == 'Spv. Material Management') ? 'success' : 'warning')); ?>"><?= $role->name; ?></span></td>
                        <td class="text-muted"><?= $role->description; ?></td>
                        <td class="text-center">
                            <div class="dropdown">
                                <button class="btn btn-sm" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="las la-ellipsis-v fs-2x"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item btn btn-sm btn-bg-white btn-active-color-success" href="<?= base_url('role/ubah/' . $role->id); ?>">Ubah</a></li>
                                    <li><button class="dropdown-item btn btn-sm btn-bg-white btn-active-color-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $role->id; ?>">Delete</button></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal Delete User -->
                    <div class="modal fade" id="deleteModal<?= $role->id; ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-dark" id="deleteModal<?= $role->id; ?>">Apakah Yakin ingin menghapus Role?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="mb-3">
                                    <div class="modal-body text-dark">
                                        <p>Hapus Role yang Bernama <b><?= $role->name; ?></b></p>

                                    </div>
                                    <div class="modal-footer">
                                        <a class="btn btn-sm btn-light-danger" href="<?= base_url('/role/hapus/' . $role->id); ?>" role="button" name="hapus">Hapus</a>
                                        <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Kembali</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Delete User END -->

                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?= $this->endSection() ?>