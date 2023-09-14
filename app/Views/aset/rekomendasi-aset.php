<?= $this->extend("layout/template") ?>
<?= $this->section("konten") ?>
<?= $this->include("layout/flash.php") ?>
<div class="card shadow-sm" style="border-radius: 1em;">
<div class="card-header">
        <h3 class="card-title">Daftar Rekomendasi Aset</h3>
        <div class="card-toolbar">
            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#tambahAset">
            <i class="las la-file-export fs-3"></i> Export
            </button>

        </div>
    </div>
</div>
<div class="card card-flush shadow-sm" style="border-radius: 1em;">

    <div class="card-body py-5">
        <table id="tabelKondisi" class="table table-row-bordered gy-5 gs-7 border rounded">
            <thead>
                <tr class="fw-bolder fs-6 text-gray-800 px-7">
                    <th>No</th>
                    <th>Kode Aset</th>
                    <th>Divisi</th>
                    <th>Nama Aset</th>
                    <th>Merk</th>
                    <th>Kondisi</th>
                    <th>Rekomendasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $no = 1;
                    foreach ($aset as $ast) : ?>

                <?php
                    $hari_ini = date('Y-m-d');
                    // Untuk Menentukan Bobot Harga Berdasarkan Harga Aset
                    $bobot_harga_aset = $ast["harga"];

                    if ($bobot_harga_aset >= 100000 AND $bobot_harga_aset <= 1000000) {
                      $ast["bobot_harga"] = 1;
                    } elseif ($bobot_harga_aset > 1000000 AND $bobot_harga_aset <= 5000000) {
                      $ast["bobot_harga"] = 2;
                    } elseif ($bobot_harga_aset > 5000000 AND $bobot_harga_aset <= 10000000) {
                      $ast["bobot_harga"] = 3;
                    } elseif ($bobot_harga_aset > 1000000) {
                      $ast["bobot_harga"] = 4;
                    }
                    ?>

                    <?php
                    // Perhitungan SAW (Simple Addative Weighting)

                    $bobot_tahun_ekonomis[] = (int) $ast['bobot_tahun'];
                    $bobot_harga[] = (int) $ast['bobot_harga'];
                    $bobot_kondisi[] = (int) $ast['id_kondisi_aset'];
                    $bobot_prioritas[] = (int) $ast['id_prioritas'];

                    $ast["total"] = (
                      (($ast['bobot_tahun']/max($bobot_tahun_ekonomis)) * 0.2) +
                      ((min($bobot_harga)/$ast['bobot_harga']) * 0.2) +
                      (($ast['id_kondisi_aset']/max($bobot_kondisi)) * 0.3) +
                      (($ast['id_prioritas']/max($bobot_prioritas)) * 0.3)
                    );                             
                    ?>

                    <?php
                    // Menentukan Apakah Aset Tersebut di Perbaiki / di Ganti
                      $total = $ast["total"];
                      if ($total >= 0.8 || $ast["habis"] < $hari_ini){
                        $ast["rekomendasi"] ="Di Ganti";
                      } else {
                        $ast["rekomendasi"] ="Di Perbaiki";
                      }
                                 
                    ?>

                    <?php 
                    /// alasan rekomendasi
                    if($ast["id_kondisi_aset"] == 3 && $ast["habis"] < $hari_ini){
                      $ast["alasan"] ="Kurang baik dan Habis masa pakai";
                    } else if ($ast["id_kondisi_aset"] == 4 && $ast["habis"] < $hari_ini){
                      $ast["alasan"] ="Rusak dan Habis masa pakai";
                    } else if($ast["id_kondisi_aset"] == 3){
                      $ast["alasan"] ="Aset Kurang baik";
                    } else if($ast["id_kondisi_aset"] == 4){
                      $ast["alasan"] ="Aset Rusak";
                    } else {
                      $ast["alasan"] =" Habis masa pakai";
                    }
                    ?>

                    <tr> 
                        <td><?= $no++; ?></td>
                        <td><?= sprintf("%03d", $ast["id_aset"]); ?><?= sprintf("%03d", $ast["id_divisi"]); ?><?= date('Y', strtotime($ast["masuk"])); ?></td>
                        <td><?= $ast["nama_divisi"]; ?></td>
                        <td><?= $ast["nama_aset"]; ?></td>
                        <td><?= strtoupper($ast["merk"]); ?></td>
                        <td class="cutlink">
                        <span class="badge badge-light-<?= ($ast["id_kondisi_aset"] == '1') ? 'primary' : (($ast["id_kondisi_aset"] == '2') ? 'success' : (($ast["id_kondisi_aset"] == '3') ? 'warning' : 'danger')); ?>">
                            <?= $ast["kondisi"] ?></td>
                        </span>
                        <td class="cutlink">
                        <span class="badge badge-light-<?= ($ast["rekomendasi"] == 'Di Ganti') ? 'primary': 'dark'?>"><?= $ast["rekomendasi"]; ?></span>
                        </td>
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
                                    <div class="row g-2 mx-8 mt-2 ">
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Keterangan</label>
                                            <input type="text" class="form-control" id="floatingInputGrid" value="<?= $ast["keterangan"]; ?>">
                                        </div>
                                    </div>
                                    <div class="row g-2 mx-8 mt-2 mb-4">
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Rekomendasi</label>
                                            <input type="text" class="form-control" id="floatingInputGrid" value="<?= $ast["rekomendasi"]; ?>">
                                        </div>
                                        <div class="col-md">
                                            <label for="role" class="text-muted">Keterangan Rekomendasi</label>
                                            <input type="text" class="form-control" id="floatingInputGrid" value="<?= $ast["alasan"]; ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Tutup</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Detail Aset END -->                       
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?= $this->endSection() ?>