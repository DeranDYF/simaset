<?= $this->extend("layout/template") ?>
<?= $this->section("konten") ?>
<?= $this->include("layout/flash.php") ?>
<?= view('Myth\Auth\Views\_message_block') ?>
<div class="card shadow-sm" style="border-radius: 1em;">
<div class="card-header">
        <h3 class="card-title">Daftar Divisi</h3>
        <div class="card-toolbar">
        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambahModal">
        <i class="las la-plus-circle fs-3"></i> Tambah Divisi Baru
        </button>
        </div>
    </div>
</div>
    <div class="card shadow-sm" style="border-radius: 1em;">
    <div class="card-body">
  
    <table id="tabelModul" class="table table-row-bordered gy-5 gs-7 border rounded">
        <thead>
            <tr class="fw-bolder fs-6 text-dark text-center px-7">
                <th class="text-start">No</th>
                <th class="text-start">Kode Divisi</th>
                <th class="text-start">Nama Divisi</th>
                <th class="text-center">Aksi</th>
                
            </tr>
        </thead>
            <tbody>
                <?php $no= 1; ?>
                <?php foreach($divisi as $dv):?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= sprintf("%03d", $dv["id_divisi"]); ?></td>
                    <td><?= $dv['nama_divisi']; ?></td>
                    <td class="text-center">
                    <button class="btn btn-icon btn-bg-light btn-active-color-success btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ubahModal<?= $dv['id_divisi'] ;?>">
                    <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                    </svg>
                    </span>
	                </button>
                    <button class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $dv['id_divisi'] ;?>">
                    <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                    <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                    </g>
                    </svg>
                    </span>

                    </button>
                </td>
                </tr>
                <!-- Modal Tambah Divisi -->
                
                <div class="modal fade" id="tambahModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                
                        <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-dark" id="tambahModal">Tambah Divisi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="<?= base_url('Admin/Divisi/tambahDivisi'); ?>" method="post">
                                    <div class="mb-3">
                                <div class="modal-body text-dark">
                                <label for="nama divisi">Nama Divisi</label>
                                <input type="text" class="form-control" name="nama_divisi" id="user_id">
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button type="submit" class="btn btn-sm btn-light-primary" role="button">Tambah</button>
                                    <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Kembali</button>

                                </div>
                                </div>
                        </div>
                    </form>
                </div> 
                <!-- Modal Tambah Divisi END -->

                <!-- Modal Ubah Divisi -->
                
                <div class="modal fade" id="ubahModal<?= $dv['id_divisi'] ;?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                
                        <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-dark" id="ubahModal<?= $dv['id_divisi'] ;?>">Ubah Divisi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="<?= base_url('Admin/Divisi/editDivisi/'. $dv['id_divisi']); ?>" method="post">
                                    <div class="mb-3">
                                <div class="modal-body text-dark">
                                <label for="nama divisi">Nama Divisi</label>
                                <input type="text" class="form-control" name="nama_divisi" id="user_id" value="<?= $dv['nama_divisi']; ;?>">
                                <input type="hidden" class="form-control" name="id_divisi" id="user_id" value="<?= $dv['id_divisi'];?>">
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button type="submit" class="btn btn-sm btn-light-success" role="button">Ubah</button>
                                    <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Kembali</button>

                                </div>
                                </div>
                        </div>
                    </form>
                </div> 
                <!-- Modal Ubah Divisi END -->

                <!-- Modal Delete Divisi -->
                        <div class="modal fade" id="deleteModal<?= $dv['id_divisi'];?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-dark" id="deleteModal<?= $dv['id_divisi'];?>">Apakah Yakin ingin Menghapus?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                    <div class="mb-3">
                                <div class="modal-body text-dark">
                                    <p class="text-muted">Menghapus Divisi <b><?= $dv['nama_divisi'] ;?></b></p>
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-sm btn-light-danger" href="<?= base_url('/divisi/hapus/'. $dv['id_divisi']); ?>" role="button" name="hapus">Hapus</a>
                                    <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Kembali</button>
                                </div>
                                </div>
                            </div>
                        </div>
                 <!-- Modal Delete Divisi END -->
                <?php endforeach; ?>
            </tbody>
        </table>  
        </div>
    </div>


<?= $this->endSection() ?>