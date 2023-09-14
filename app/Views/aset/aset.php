<?= $this->extend("layout/template") ?>
<?= $this->section("konten") ?>
<?= $this->include("layout/flash.php") ?>
<div class="card shadow-sm" style="border-radius: 1em;">
<div class="card-header">
        <h3 class="card-title">Daftar Aset</h3>
        <div class="card-toolbar">
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#tambahAset">
                <i class="las la-plus-circle fs-3"></i> Tambah Aset
            </button>

        </div>
    </div>
</div>
<div class="card card-flush shadow-sm" style="border-radius: 1em;">

    <div class="card-body py-5">
        <table id="tabelAplikasi" class="table table-row-bordered gy-5 gs-7 border rounded">
            <thead>
                <tr class="fw-bolder fs-6 text-gray-800 px-7">
                    <th>No</th>
                    <th>Kode Aset</th>
                    <th>Divisi</th>
                    <th>Nama Aset</th>
                    <th>Merk</th>
                    <th>Serial Number</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $no = 1;
                    foreach ($aset as $ast) : ?>
                <tr>
                    
                        <td><?= $no++; ?></td>
                        <td><?= sprintf("%03d", $ast["id_aset"]); ?><?= sprintf("%03d", $ast["id_divisi"]); ?><?= date('Y', strtotime($ast["masuk"])); ?></td>
                        <td><?= $ast["nama_divisi"]; ?></td>
                        <td><?= $ast["nama_aset"]; ?></td>
                        <td><?= strtoupper($ast["merk"]); ?></td>
                        <td class="cutlink"><?= $ast["serial_number"]; ?></td>
                        <td>
                            <button class="btn btn-icon btn-bg-light btn-active-color-success btn-sm me-1" data-bs-toggle="modal" data-bs-target="#detailAset<?= $ast['id_aset']; ?>">
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
                            <button class="btn btn-icon btn-bg-light btn-active-color-success btn-sm" data-bs-toggle="modal" data-bs-target="#editAset<?= $ast['id_aset']; ?>">

                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    </svg>
                                </span>

                            </button>
                            <button class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteAset<?= $ast['id_aset']; ?>">
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
                        <!-- Modal Detail Aset -->

                        <div class="modal fade" id="detailAset<?= $ast['id_aset']; ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">

                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark" id="detailAset<?= $ast['id_aset']; ?>">Detail Aset</h5>
                                    </div>
                                    <div class="row g-2 mx-8 mt-2">
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Kode Aset</label>
                                            <input type="text" class="form-control" id="floatingInputGrid" value="<?= sprintf("%03d", $ast["id_aset"]); ?><?= sprintf("%03d", $ast["id_divisi"]); ?><?= date('Y', strtotime($ast["masuk"])); ?>">
                                        </div>
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Nama Divisi</label>
                                            <input type="text" class="form-control" id="floatingInputGrid" value="<?= $ast["nama_divisi"]; ?>">
                                        </div>
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Nama Aset</label>
                                            <input type="text" class="form-control" id="floatingInputGrid" value="<?= $ast["nama_aset"]; ?>">
                                        </div>
                                    </div>
                                    <div class="row g-2 mx-8 mt-2">
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Merk</label>
                                            <input type="text" class="form-control" id="floatingInputGrid" value="<?= $ast["merk"]; ?>">
                                        </div>
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Type</label>
                                            <input type="text" class="form-control" id="floatingInputGrid" value="<?= $ast["type"]; ?>">
                                        </div>
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Serial Number</label>
                                            <input type="text" class="form-control" id="floatingInputGrid" value="<?= $ast["serial_number"]; ?>">
                                        </div>
                                    </div>
                                    <div class="row g-2 mx-8 mt-2">
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Tanggal Masuk</label>
                                            <input type="text" class="form-control" id="floatingInputGrid" value="<?= date("d/m/Y", strtotime($ast["masuk"])); ?>">
                                        </div>
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Tanggal Habis</label>
                                            <input type="text" class="form-control" id="floatingInputGrid" value="<?= date("d/m/Y", strtotime($ast["habis"])); ?>">
                                        </div>
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Masa Guna</label>
                                            <input type="text" class="form-control" id="floatingInputGrid" value="<?= $ast["jumlah_tahun"]; ?>">
                                        </div>
                                    </div>
                                    <div class="row g-2 mx-8 mt-2">
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Kondisi</label>
                                            <input type="text" class="form-control" id="floatingInputGrid" value="<?= $ast["kondisi"]; ?>">
                                        </div>
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Prioritas</label>
                                            <input type="text" class="form-control" id="floatingInputGrid" value="<?= $ast["prioritas"]; ?>">
                                        </div>
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Harga</label>
                                            <input type="text" class="form-control" id="floatingInputGrid" value="Rp. <?= number_format($ast["harga"]); ?>">
                                        </div>
                                    </div>
                                    <div class="row g-2 mx-8 mt-2 mb-4">
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Keterangan</label>
                                            <input type="text" class="form-control" id="floatingInputGrid" value="<?= $ast["keterangan"]; ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Tutup</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Detail Aset END -->
                        <!-- Modal Edit Aset -->

                        <div class="modal fade" id="editAset<?= $ast['id_aset']; ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <form action="<?= base_url('Aset/editAset/'. $ast['id_aset']); ?>" method="post">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark" id="editAset<?= $ast['id_aset']; ?>">Edit Aset | Kode Aset : <?= sprintf("%03d", $ast["id_aset"]); ?><?= sprintf("%03d", $ast["id_divisi"]); ?><?= date('Y', strtotime($ast["masuk"])); ?></h5>
                                    </div>
                                    <div class="row g-2 mx-8 mt-2">
                                        <div class="col-md">
                                        <label for="role" class="text-muted">Divisi</label>
                                        <select class="form-select form-select-solid" name="id_divisi" data-control="select2" data-placeholder="<?= $ast["nama_divisi"] ;?>">
                                          
                                        <?php foreach ($divisi as $dvs) : ?>
                                                <option value="<?= $dvs['id_divisi']; ?>"><?= $dvs['nama_divisi'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md">
                                                <label for="role" class="text-muted">Nama Aset</label>
                                                <input type="text" class="form-control" id="floatingInputGrid" name="nama_aset" value="<?= $ast["nama_aset"] ;?>">
                                            </div>
                                            <div class="col-md">
                                                <label for="role" class="text-muted">Merk</label>
                                                <input type="text" class="form-control" id="floatingInputGrid" name="merk" value="<?= $ast["merk"] ;?>">
                                            </div>
                                        </div>
                                        <div class="row g-2 mx-8 mt-2">
                                            <div class="col-md">
                                                <label for="role" class="text-muted">Type</label>
                                                <input type="text" class="form-control" id="floatingInputGrid" name="type" value="<?= $ast["type"] ;?>">
                                            </div>
                                            <div class="col-md">
                                                <label for="role" class="text-muted">Serial Number</label>
                                                <input type="text" class="form-control" id="floatingInputGrid" name="serial_number" value="<?= $ast["serial_number"] ;?>">
                                            </div>
                                            <div class="col-md">
                                                <label for="role" class="text-muted">Tanggal Masuk</label>
                                                <input type="date" class="form-control" id="floatingInputGrid" name="masuk" value="<?= $ast["masuk"] ;?>">
                                            </div>
                                        </div>
                                        <div class="row g-2 mx-8 mt-2">
                                            <div class="col-md">
                                                <label for="role" class="text-muted">Masa Guna</label>
                                                <select class="form-select form-select-solid" name="id_ekonomis" data-control="select2" data-placeholder="<?= $ast["jumlah_tahun"]; ?>">
                                                <option <?= $ast["id_ekonomis"];?>></option>      
                                                <?php foreach ($masaguna as $mgs) : ?>
                                                        <option value="<?= $mgs->id_ekonomis; ?>"><?= $mgs->jumlah_tahun ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-md">
                                                <label for="role" class="text-muted">Kondisi</label>
                                                <select class="form-select form-select-solid" name="id_kondisi" data-control="select2" data-placeholder="<?= $ast["kondisi"] ;?>">
                                                <option <?= $ast["id_kondisi_aset"];?>></option>      
                                                <?php foreach ($kondisi as $ks) : ?>
                                                        <option value="<?= $ks->id_kondisi_aset; ?>"><?= $ks->kondisi ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-md">
                                                <label for="role" class="text-muted">Prioritas</label>
                                                <select class="form-select form-select-solid" name="id_prioritas" data-control="select2" data-placeholder="<?= $ast["prioritas"] ;?>">
                                                <option <?= $ast["id_prioritas"];?>></option>    
                                                <?php foreach ($prioritas as $pr) : ?>
                                                        <option value="<?= $pr->id_prioritas; ?>"><?= $pr->prioritas ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row g-2 mx-8 mt-2">
                                            <div class="col-md">
                                                <label for="role" class="text-muted">Harga</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon1">Rp.</span>
                                                    <input type="text" class="form-control" id="floatingInputGrid" name="harga" value="<?= $ast["harga"]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-2 mx-8 mt-2 mb-4">
                                            <div class="col-md">
                                                <label for="role" class="text-muted">Keterangan</label>
                                                <input type="text" class="form-control" id="floatingInputGrid" name="keterangan" value="<?= $ast["keterangan"] ;?>">
                                                <input type="hidden" class="form-control" id="floatingInputGrid" name="status" value="<?= $ast["status"] ;?>">
                                            </div>
                                        </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-sm btn-light-success">Edit Aset</button>
                                        <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Tutup</button>

                                    </div>
                                </div>
                            </div>
                         </form>
                        </div>
                        <!-- Modal Edit Aset END -->

                        <!-- Modal Delete Aset -->
                        <div class="modal fade" id="deleteAset<?= $ast['id_aset']; ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark" id="deleteAset<?= $ast['id_aset']; ?>">Apakah Yakin ingin Menghapus?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="mb-3">
                                        <div class="modal-body text-dark">
                                            <p class="text-muted"> Menghapus Aset <b><?= $ast['nama_aset']; ?></b></p>
                                        </div>
                                        <div class="modal-footer">
                                            <a class="btn btn-sm btn-light-danger" href="<?= base_url('Aset/deleteAset/' . $ast['id_aset']); ?>" role="button" name="hapus">Hapus</a>
                                            <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Delete Aset END -->
                            
                       
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Tambah Aset -->
<form action="<?= base_url('Aset/tambahAset'); ?>" method="post">
    <div class="modal fade" id="tambahAset" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark">Tambah Aset</h5>
                </div>
                <div class="row g-2 mx-8 mt-2">
                    <div class="col-md">
                        <label for="role" class="text-muted">Divisi</label>
                        <select class="form-select form-select-solid" name="id_divisi" data-control="select2" data-placeholder="">
                            <?php foreach ($divisi as $dvs) : ?>
                                <option value="<?= $dvs['id_divisi']; ?>"><?= $dvs['nama_divisi'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md">
                        <label for="role" class="text-muted">Nama Aset</label>
                        <input type="text" class="form-control" id="floatingInputGrid" name="nama_aset">
                    </div>
                    <div class="col-md">
                        <label for="role" class="text-muted">Merk</label>
                        <input type="text" class="form-control" id="floatingInputGrid" name="merk">
                    </div>
                </div>
                <div class="row g-2 mx-8 mt-2">
                    <div class="col-md">
                        <label for="role" class="text-muted">Type</label>
                        <input type="text" class="form-control" id="floatingInputGrid" name="type">
                    </div>
                    <div class="col-md">
                        <label for="role" class="text-muted">Serial Number</label>
                        <input type="text" class="form-control" id="floatingInputGrid" name="serial_number">
                    </div>
                    <div class="col-md">
                        <label for="role" class="text-muted">Tanggal Masuk</label>
                        <input type="date" class="form-control" id="floatingInputGrid" name="masuk">
                    </div>
                </div>
                <div class="row g-2 mx-8 mt-2">
                    <div class="col-md">
                        <label for="role" class="text-muted">Masa Guna</label>
                        <select class="form-select form-select-solid" name="id_ekonomis" data-control="select2" data-placeholder="">
                            <?php foreach ($masaguna as $mgs) : ?>
                                <option value="<?= $mgs->id_ekonomis; ?>"><?= $mgs->jumlah_tahun ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md">
                        <label for="role" class="text-muted">Kondisi</label>
                        <select class="form-select form-select-solid" name="id_kondisi" data-control="select2" data-placeholder="">
                            <?php foreach ($kondisi as $ks) : ?>
                                <option value="<?= $ks->id_kondisi_aset; ?>"><?= $ks->kondisi ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md">
                        <label for="role" class="text-muted">Prioritas</label>
                        <select class="form-select form-select-solid" name="id_prioritas" data-control="select2" data-placeholder="">
                            <?php foreach ($prioritas as $pr) : ?>
                                <option value="<?= $pr->id_prioritas; ?>"><?= $pr->prioritas ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="row g-2 mx-8 mt-2">
                    <div class="col-md">
                        <label for="role" class="text-muted">Harga</label>
                        <input type="text" class="form-control" id="floatingInputGrid" name="harga">
                    </div>
                </div>
                <div class="row g-2 mx-8 mt-2 mb-4">
                    <div class="col-md">
                        <label for="role" class="text-muted">Keterangan</label>
                        <input type="text" class="form-control" id="floatingInputGrid" name="keterangan">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-light-primary">Tambah Aset</button>
                    <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Tutup</button>

                </div>
            </div>
        </div>
    </div>
</form>
<!-- Modal Tambah Aset END -->

<?= $this->endSection() ?>