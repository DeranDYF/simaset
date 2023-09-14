<?= $this->extend("layout/template") ?>
<?= $this->section("konten") ?>
<?= $this->include("layout/flash.php") ?>
<div class="card shadow-sm" style="border-radius: 1em;">
    <div class="card-header">
        <h3 class="card-title">Daftar Perbaikan dan Pergantian Aset</h3>
        <div class="card-toolbar">
            <?php if (in_groups('Admin') OR in_groups('Spv. Material Management')) : ?>
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#tambahPengajuan">
                <i class="las la-plus-circle fs-3"></i> Tambah Pengajuan
            </button>
            <?php endif;?>
        </div>
    </div>
</div>

<div class="card card-flush shadow-sm" style="border-radius: 1em;">
    <div class="card-body py-5">
        <table id="tabelAplikasi" class="table table-row-bordered gy-5 gs-7 border rounded">
            <thead>
                <tr class="fw-bolder fs-6 text-gray-800 px-7">
                    <th>No</th>
                    <th>Kode Pengajuan</th>
                    <th>Nama Aset</th>
                    <th>Jenis Pengajuan</th>
                    <th>Status</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    foreach ($perbaikanPergantian as $pg) : ?>
                <tr>
                    
                        <td><?= $no++; ?></td>
                        <td><?= sprintf("%03d", $pg["id_perbaikan_pergantian"]); ?><?= sprintf("%03d", $pg["id_aset"]); ?><?= date('Y', strtotime($pg["tanggal_pengajuan"])); ?></td>
                        <td><?= $pg["nama_aset"]; ?></td>
                        <td><?= $pg["jenis_pengajuan"]; ?></td>
                        <td class="cutlink">
                        <span class="badge badge-light-<?= ($pg["id_persetujuan"] == '1') ? 'dark' : (($pg["id_persetujuan"] == '2') ? 'success' : (($pg["id_persetujuan"] == '3') ? 'danger' : 'warning')); ?>">
                            <?= $pg["nama_persetujuan"] ?></td>
                        </span>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-icon btn-bg-light btn-active-color-success btn-sm" data-bs-toggle="modal" data-bs-target="#detailPengadaan<?= $pg['id_perbaikan_pergantian']; ?>">
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                            <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
                            </button>
                            <?php if (in_groups('Admin') OR in_groups('Spv. Material Management')) : ?>
                            <button class="btn btn-icon btn-bg-light btn-active-color-success btn-sm" data-bs-toggle="modal" data-bs-target="#editPengajuan<?= $pg['id_perbaikan_pergantian']; ?>">
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    </svg>
                                </span>
                            <?php endif ;?>
                            </button>
                            <?php if (in_groups('Admin') OR in_groups('Kepala Divisi Procurement')) : ?>
                            <button class="btn btn-icon btn-bg-light btn-active-color-success btn-sm" data-bs-toggle="modal" data-bs-target="#persetujuanPengadaan<?= $pg['id_perbaikan_pergantian']; ?>">
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    </svg>
                                </span>
                            </button>
                            <?php endif ;?>
                            <?php if (in_groups('Admin') OR in_groups('Spv. Material Management')) : ?>
                            <button class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deletePengadaan<?= $pg['id_perbaikan_pergantian']; ?>">
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
                            <?php endif ;?>
                        </td>

    <!-- Modal Edit Pengajuan -->
                <div class="modal fade" id="editPengajuan<?= $pg['id_perbaikan_pergantian']; ?>"data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                        <form action="<?= base_url('Aset/actionUbahPerbaikanPergantian/'.$pg['id_perbaikan_pergantian']); ?>" method="post">
                        <div class="modal-header">
                        <h5 class="modal-title text-dark">Edit Pengajuan Perbaikan Pergantian</h5>
                    </div>
                    <div class="row g-2 mx-8 mt-2">
                        <div class="col-md">
                            <label for="role" class="text-muted">Pilih Aset</label>
                            <select class="form-select form-select-solid" name="id_aset" data-control="select2" data-placeholder="<?= $pg["nama_aset"]; ?>">
                                            
                                            <?php foreach ($aset as $ast):?>
                                                <?php if ($ast['id_aset'] == $pg['id_aset']){?>
                                                <option selected value="<?= $ast['id_aset'];?>"><?= $ast['nama_aset'];?></option>
                                                <?php }else {?>
                                                    <option value="<?= $ast['id_aset'];?>"><?= $ast['nama_aset'];?></option>
                                                    <?php };?>
                                            <?php endforeach;?>
                                            </select>
                                         </div>
                                         <div class="col-md">
                                            <label for="role" class="text-muted">Jenis Pengajuan</label>
                                            <select class="form-select form-select-solid" name="jenis_pengajuan" data-control="select2" data-placeholder="<?= $pg["jenis_pengajuan"]; ?>">
                                                <option></option>
                                                <option value="Penggantian Aset">Penggantian Aset</option>
                                                <option value="Perbaikan Aset">Perbaikan Aset</option>
                                                </select>
                                         </div>
                                    </div>
                                    <div class="row g-2 mx-8 mt-2">
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Tanggal Pengajuan</label>
                                            <input type="date" class="form-control" id="floatingInputGrid" name="tanggal_pengajuan" value="<?= $pg["tanggal_pengajuan"]; ?>">
                                        </div>
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Keterangan</label>
                                            <input type="text" class="form-control" id="floatingInputGrid" name="keterangan" value="<?= $pg["keterangan"]; ?>">
                                        </div>
                                    </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-sm btn-light-success">Edit Pengajuan</button>
                                <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>

    <!-- Modal Edit Pengajuan END -->
          <!-- Modal Detail Pengadaan -->

                <div class="modal fade" id="detailPengadaan<?= $pg['id_perbaikan_pergantian']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark">Detail Perbaikan dan Pergantian Aset</h5>
                            </div>
                            <div class="row g-2 mx-8 mt-2">
                                <div class="col-md">
                                    <label for="role" class="text-muted">Kode Pengajuan Pengadaan</label>
                                    <input type="text" class="form-control" id="floatingInputGrid" value="<?= sprintf("%03d", $pg["id_perbaikan_pergantian"]); ?><?= sprintf("%03d", $pg["id_aset"]); ?><?= date('Y', strtotime($pg["tanggal_pengajuan"])); ?>">
                                </div>
                                <div class="col-md">
                                    <label for="role" class="text-muted">Nama Aset</label>
                                    <input type="text" class="form-control" id="floatingInputGrid" value="<?= $pg["nama_aset"]; ?>">
                                </div>
                                <div class="col-md">
                                    <label for="role" class="text-muted">Nama Divisi</label>
                                    <input type="text" class="form-control" id="floatingInputGrid" value="<?= $pg["nama_divisi"]; ?>">
                                </div>
                            </div>
                            <div class="row g-2 mx-8 mt-2">
                                <div class="col-md">
                                    <label for="role" class="text-muted">Jenis Pengajuan</label>
                                    <input type="text" class="form-control" id="floatingInputGrid" value="<?= $pg["jenis_pengajuan"]; ?>">
                                </div>
                                <div class="col-md">
                                    <label for="role" class="text-muted">Tanggal Pengajuan</label>
                                    <input type="text" class="form-control" id="floatingInputGrid" value="<?= $pg["tanggal_pengajuan"]; ?>">
                                </div>
                                <div class="col-md">
                                    <label for="role" class="text-muted">Status</label>
                                    <input type="text" class="form-control" id="floatingInputGrid" value="<?= $pg["nama_persetujuan"];?>">
                                </div>
                            </div>
                            <div class="row g-2 mx-8 mt-2">
                                <div class="col-md">
                                    <label for="role" class="text-muted">Keterangan</label>
                                    <input type="text" class="form-control" id="floatingInputGrid" value="<?= $pg["keterangan"]; ?>">
                                </div>
                            </div> 
                        
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

    <!-- Modal Detail Pengajuan END -->

    <!--  Modal Persetujuan-->

                <div class="modal fade" id="persetujuanPengadaan<?= $pg['id_perbaikan_pergantian']; ?>" aria-labelledby="exampleModalLabel" aria-hidden="true"  data-bs-backdrop="static" data-bs-keyboard="false">
                    <div class="modal-dialog modal-dialog-centered">
                        <form action="<?= base_url('Aset/actionUbahStatusPerbaikanPergantian/'. $pg['id_perbaikan_pergantian']); ?>" method="post">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Persetujuan Perbaikan Pergantian</h5>
                            </div>
                            <div class="modal-body">
                                <label for="role" class="text-muted">Persetujuan</label>
                                    <select class="form-select form-select-solid" name="id_persetujuan" data-control="select2" data-placeholder="<?= $pg["nama_persetujuan"]; ?>">
                                        <option></option>      
                                        <option value="2">Setujui</option>
                                        <option value="3">Tolak</option>
                                        <option value="4">Pending</option>
                                    </select>      
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-sm btn-light-success">Edit Persetujuan</button>
                                <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
    <!--  Modal Persetujuan END-->

    <!-- Modal Delete Pengadaan -->
                <div class="modal fade" id="deletePengadaan<?= $pg['id_perbaikan_pergantian']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-dark" id="deletePengadaan<?= $pg['id_perbaikan_pergantian']; ?>">Apakah Yakin ingin Menghapus?</h5>
                            </div>
                            <div class="mb-3">
                                <div class="modal-body text-dark">
                                    <p class="text-muted"> Menghapus Perbaikan dan Pergantian dengan Kode Pengajuan : <b><?= sprintf("%03d", $pg["id_perbaikan_pergantian"]); ?><?= sprintf("%03d", $pg["id_aset"]); ?><?= date('Y', strtotime($pg["tanggal_pengajuan"])); ?></b></p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                    <a class="btn btn-sm btn-light-danger" href="<?= base_url('Aset/actionDeletePerbaikanPergantian/' . $pg['id_perbaikan_pergantian']); ?>" role="button" name="hapus">Hapus</a>
                                    <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
    <!-- Modal Delete Pengadaan END -->

                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
    <!-- Modal Tambah Aset -->
        <form action="<?= base_url('Aset/actionTambahPerbaikanPergantian'); ?>" method="post">
        <div class="modal fade" id="tambahPengajuan" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark">Tambah Pengajuan Perbaikan Pergantian</h5>
                    </div>
                    <div class="row g-2 mx-8 mt-2">
                        <div class="col-md">
                            <label for="role" class="text-muted">Pilih Aset</label>
                            <select class="form-select form-select-solid" name="id_aset" data-control="select2">

                                            <?php foreach ($aset as $ast):?>
                                                <option value="<?= $ast['id_aset'];?>"><?= $ast['nama_aset'];?></option>
                                            <?php endforeach;?>
                                            </select>
                                         </div>
                                         <div class="col-md">
                                            <label for="role" class="text-muted">Jenis Pengajuan</label>
                                            <select class="form-select form-select-solid" name="jenis_pengajuan" data-control="select2">

                                                <option value="Penggantian Aset">Penggantian Aset</option>
                                                <option value="Perbaikan Aset">Perbaikan Aset</option>
                                                </select>
                                         </div>
                                    </div>
                                    <div class="row g-2 mx-8 mt-2">
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Tanggal Pengajuan</label>
                                            <input type="date" class="form-control" id="floatingInputGrid" value="" name="tanggal_pengajuan">
                                        </div>
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Keterangan</label>
                                            <input type="text" class="form-control" id="floatingInputGrid" value="" name="keterangan">
                                        </div>
                                    </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-light-primary">Tambah Pengajuan</button>
                    <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Tutup</button>

                </div>
            </div>
        </div>
    </div>
</form>
<!-- Modal Tambah Pengajuan END -->



<?= $this->endSection() ?>