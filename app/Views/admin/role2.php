<?= $this->extend("layout/template") ?>
<?= $this->section("konten") ?>
<?= $this->include("layout/flash.php") ?>

						<div class="post d-flex flex-column-fluid" id="kt_post">
							<div class="container">

								<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-9">
                                    
                                <?php foreach ($groups as $role) : ?>
									<div class="col-md-4">
										<div class="card card-flush h-md-100" style="border-radius: 2em;">
											<div class="card-header">
												<div class="card-title">
													<h3><?= $role->name; ?></h3>
												</div>
											</div>
											<div class="card-body pt-1">
												<div class="fw-bolder text-gray-600 mb-5"><?= $role->description; ?></div>
												<!-- <div class="d-flex flex-column text-gray-600">
													<div class="d-flex align-items-center py-2">
													<span class="bullet bg-primary me-3"></span>Some Admin Controls</div>
												</div> -->
											</div>
											<div class="card-footer flex-wrap pt-0">
                                            <a href="<?= base_url('role/ubah/' . $role->id); ?>" class="btn btn-icon btn-bg-light btn-active-color-success btn-sm me-1">
                                            <span class="svg-icon svg-icon-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                            <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            </svg>
                                            </span>

                                            </a>
                                            <button class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $role->id; ?>">
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
											</div>
                                            <!-- Modal Delete-->
                                            <div class="modal fade" tabindex="-1" id="deleteModal<?= $role->id; ?>">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Hapus Role!</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                        <p class="text-muted">Apakah Yakin Ingin Mengapus Role <strong><?= $role->name; ?></strong>?</p>
                                                        </div>

                                                        <div class="modal-footer">
                                                        <a class="btn btn-sm btn-light-danger" href="<?= base_url('/role/hapus/' . $role->id); ?>" role="button" name="hapus">Hapus</a>
                                                            <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Kembali</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Modal Delete-->
										</div>
									</div>
                                <?php endforeach;?>

                                    <div class="ol-md-4">
										<div class="card h-md-100" style="border-radius: 2em;">
											<div class="card-body d-flex flex-center">
												<button type="button" class="btn btn-clear d-flex flex-column flex-center" data-bs-toggle="modal" data-bs-target="#tambahModal">
													<img src="assets/media/illustrations/user-role.png" alt="" class="mw-100 mh-150px mb-7" />
													<div class="fw-bolder fs-3 text-gray-600 text-hover-primary">Tambah Role Baru</div>
												</button>
											</div>
										</div>
									</div>
                                        <!-- Modal Tambah-->
                                        <form action="<?= base_url('admin/Role/tambahRole'); ?>" method="post">
                                        <div class="modal fade" tabindex="-1" id="tambahModal">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Tambah Role!</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                    <div class="form-group mb-6">
                                                        <label for="exampleFormControlInput1" class="form-label">Nama Role</label>
                                                        <input type="text" class="form-control" name="name" id="name" placeholder="Masukan Nama Role">
                                                        </div>
                                                        <div class="form-group mb-6">
                                                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Role</label>
                                                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                                                        </div>
                                                                <div class="form-group mb-6">
                                                                <label for="exampleFormControlTextarea1" class="form-label">Hak Akses</label>
                                                                <?php foreach($permissions as $pr):?>
                                                                    <div class="form-check form-check-custom form-check-solid form-check-sm mb-5">
                                                                    <input class="form-check-input" type="checkbox" value="<?=$pr->id ;?>" id="<?=$pr->name ;?>" name="pr[]" />
                                                                    <label class="form-check-label" for="<?= $pr->name;?>">
                                                                    <?= $pr->name;?>
                                                                </label>
                                                            </div>
                                                                <?php endforeach;?>
                                                            </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                    <button type="submit" class="btn btn-sm btn-light-primary">Tambah Role</button> 
                                                        <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Kembali</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         </form>
                                        <!-- End Modal Tambah-->                                   

								</div>

							</div>
						</div>

<?= $this->endSection() ?>