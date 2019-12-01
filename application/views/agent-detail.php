<div class="row">
	<div class="col-md-8">
		<div class="page-title-box">
			<h4 class="page-title">Timeline Maintain</h4>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
				<li class="breadcrumb-item"><a href="javascript:void(0);">Kerjasama</a></li>
				<li class="breadcrumb-item active">Timeline Maintain</li>
			</ol>
		</div>
		<div class="card">
			<div class="card-body">
				<div class="tab-content">
					<div class="tab-pane active p-3" id="home2" role="tabpanel">
						<form class="" action="<?= base_url('Agent/update') ?>" method="post" <!-- ID Partner -->
							<input type="hidden" name="id_agent" value="<?= $data->id_agent ?>" id="id_agent">
							<!-- ID User -->
							<input type="hidden" name="id_user" value="<?= $data->id_user ?>" id="id_user">
							<!-- ID Cabang -->
							<input type="hidden" name="id_branch" value="<?= $data->id_branch ?>" id="id_branch">

							<div class="form-group ml-3 mr-3">
								<label>Nama Usaha</label>
								<input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="<?= $data->nama_lengkap ?>" required placeholder="Aisha Putri" />
							</div>
							<div class="form-group ml-3 mr-3">
								<label>E-Mail</label>
								<div>
									<input type="email" class="form-control" name="email" id="email" parsley-type="email" value="<?= $data->email ?>" required placeholder="Aisha@bfisyariah.id" />
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4">
									<div class="form-group ml-3 mr-3">
										<label>Tanggal Lahir</label>
										<input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?= $data->tanggal_lahir ?>" required placeholder="19 / 10 / 1927" />
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group ml-3 mr-3">
										<label>Nomor KTP</label>
										<input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="no_ktp" id="no_ktp" value="<?= $data->no_ktp ?>" required placeholder="1234567891234567" maxlength="16" />
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group ml-3 mr-3">
										<label>Nomor NPWP</label>
										<input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="no_npwp" id="no_npwp" value="<?= $data->no_npwp ?>" required placeholder="1234567891234567" maxlength="15" />
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4">
									<div class="form-group ml-3 mr-3">
										<label>Pekerjaan</label>
										<input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="<?= $data->pekerjaan ?>" required placeholder="Pilih Pekerjaan" />
									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group ml-3 mr-3">
										<label>Jenis Pekerjaan</label>
										<input type="text" class="form-control" name="jenis_pekerjaan" id="jenis_pekerjaan" value="<?= $data->jenis_pekerjaan ?>" required placeholder="Pekerja Rumah tangga" />
									</div>
								</div>
							</div>
							<div class="form-group ml-3 mr-3">
								<label>Jenis Agent / BA</label>
								<select class="form-control" name="jenis_agent" id="jenis_agent" required>
									<option selected disabled value="">Pilih Jenis Agent / BA</option>
									<option <?= $data->jenis_agent == 'Syariah Agent' ? 'selected' : '' ?> value="Syariah Agent">Syariah Agent</option>
									<option <?= $data->jenis_agent == 'Syariah Ambassador' ? 'selected' : '' ?> value="Syariah Ambassador">Syariah Ambassador</option>
									<option <?= $data->jenis_agent == 'Syariah Point' ? 'selected' : '' ?> value="Syariah Point">Syariah Point</option>
								</select>
							</div>
							<div class="form-group ml-3 mr-3">
								<label>Status Kepemilikan Rumah</label>
								<select class="form-control" name="status_kepemilikan_rumah" id="status_kepemilikan_rumah" required>
									<option selected disabled value="">Rumah Milik Siapa?</option>
									<option <?= $data->status_kepemilikan_rumah == 'Milik Sendiri' ? 'selected' : '' ?> value="Milik Sendiri">Milik Sendiri</option>
									<option <?= $data->status_kepemilikan_rumah == 'Milik Keluarga' ? 'selected' : '' ?> value="Milik Keluarga">Milik Keluarga</option>
									<option <?= $data->status_kepemilikan_rumah == 'Kontrak' ? 'selected' : '' ?> value="Kontrak">Kontrak</option>
									<option <?= $data->status_kepemilikan_rumah == 'Sewa' ? 'selected' : '' ?> value="Sewa">Sewa</option>
								</select>
							</div>
							<div class="form-group ml-3 mr-3">
								<label>income Per bulan saat ini</label>
								<input type="text" class="form-control" onkeypress="return hanyaAngka(event);" name="income" id="income" value="<?= $data->income ?>" required placeholder="Rp.3,000,000" />
							</div>
							<div class="form-row">
								<div class="col-md-4">
									<div class="form-group ml-3 mr-3">
										<label>Apakah Punya Pinjaman?</label><br>
										<div class="form-check form-check-inline mt-2">
											<input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Ya" <?= $data->punya_pinjaman == 'Ya' ? 'checked' : '' ?> required>
											<label class="form-check-label">
												Ya
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Tidak" <?= $data->punya_pinjaman == 'Tidak' ? 'checked' : '' ?> required>
											<label class="form-check-label">
												Tidak
											</label>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group ml-3 mr-3">
										<label>Terdaftar Sebagai Agen travel / Lainnya?</label><br>
										<div class="form-check form-check-inline mt-2">
											<input class="form-check-input" type="radio" name="afiliasi_travel" id="afiliasi_travel" value="Ya" <?= $data->afiliasi_travel == 'Ya' ? 'checked' : '' ?> required>
											<label class="form-check-label">
												Ya
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="afiliasi_travel" id="afiliasi_travel" value="Tidak" <?= $data->afiliasi_travel == 'Tidak' ? 'checked' : '' ?> required>
											<label class="form-check-label">
												Tidak
											</label>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group ml-3 mr-3">
										<label>Terdaftar Sebagai Agen BFI Finance?</label><br>
										<div class="form-check form-check-inline mt-2">
											<input class="form-check-input" type="radio" name="agent_konvensional" id="agent_konvensional" value="Ya" <?= $data->agent_konvensional == 'Ya' ? 'checked' : '' ?> required>
											<label class="form-check-label">
												Ya
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="agent_konvensional" id="agent_konvensional" value="Tidak" <?= $data->agent_konvensional == 'Tidak' ? 'checked' : '' ?> required>
											<label class="form-check-label">
												Tidak
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4">
									<div class="form-group ml-3 mr-3">
										<label>Apakah pernah menjadi konsumen BFI Finance?</label><br>
										<div class="form-check form-check-inline mt-2">
											<input class="form-check-input" type="radio" name="konsumen_bfi" id="konsumen_bfi" value="Pernah" <?= $data->konsumen_bfi == 'Pernah' ? 'checked' : '' ?> required>
											<label class="form-check-label">
												Pernah
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="konsumen_bfi" id="konsumen_bfi" value="Tidak Pernah" <?= $data->konsumen_bfi == 'Tidak Pernah' ? 'checked' : '' ?> required>
											<label class="form-check-label">
												Tidak Pernah
											</label>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group ml-3 mr-3">
										<label>Apakah ada hubungan dengan karyawan BFI Finance?</label><br>
										<div class="form-check form-check-inline mt-2">
											<input class="form-check-input" type="radio" name="hubungan_karyawan_bfi" id="hubungan_karyawan_bfi" value="Ada" <?= $data->hubungan_karyawan_bfi == 'Ada' ? 'checked' : '' ?> required>
											<label class="form-check-label">
												Ada
											</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="hubungan_karyawan_bfi" id="hubungan_karyawan_bfi" value="Tidak Ada" <?= $data->hubungan_karyawan_bfi == 'Tidak Ada' ? 'checked' : '' ?> required>
											<label class="form-check-label">
												Tidak Ada
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4">
									<div class="form-group ml-3 mr-3">
										<label>Rekening Bank</label>
										<input type="text" class="form-control pelacement" pelacement" onkeypress="return hanyaAngka(event);" id="rekening_bank" name="rekening_bank" value="<?= $data->rekening_bank ?>" required placeholder="0468 6587 6587 45" maxlength="16">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group ml-3 mr-3">
										<label>Nama Bank</label>
										<input type="text" class="form-control" id="nama_bank" name="nama_bank" value="<?= $data->nama_bank ?>" required placeholder="Bank Mandiri">
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4">
									<div class="form-group ml-3 mr-3">
										<label>Cabang Bank</label>
										<input type=" text" class="form-control" id="cabang_bank" name="cabang_bank" value="<?= $data->cabang_bank ?>" required placeholder="Cabang Karawaci">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group ml-3 mr-3">
										<label>Nama Pemilik</label>
										<input type=" text" class="form-control" name="atas_nama" id="atas_nama" value="<?= $data->atas_nama ?>" required placeholder="Anto Hoed">
									</div>
								</div>
							</div>
							<div class="form-group mb-0 float-right mt-2">
								<div>
									<button type="submit" class="btn btn-primary waves-effect waves-light ml-3 mr-3">
										Simpan
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="sticky">
			<div class="card height">
				<div class="card-body">
					<div class="owl-carousel owl-theme">
						<div class="item" style="height:79px; width:120px;">
							<div class="zoom-gallery">
								<a href="<?= base_url('template/assets/images/ibrahim.jpeg') ?>"><img src="<?= base_url('template/assets/images/ibrahim.jpeg') ?>" alt="" style="height:79px; width:120px;"></a>
							</div>
						</div>
						<div class="item" style="height:79px; width:120px;">
							<div class="zoom-gallery">
								<a href="<?= base_url('template/assets/images/ibrahim.jpeg') ?>"><img src="<?= base_url('template/assets/images/ibrahim.jpeg') ?>" alt="" style="height:79px; width:120px;"></a>
							</div>
						</div>
						<div class="item" style="height:79px; width:120px;">
							<div class="zoom-gallery">
								<a href="<?= base_url('template/assets/images/ibrahim.jpeg') ?>"><img src="<?= base_url('template/assets/images/ibrahim.jpeg') ?>" alt="" style="height:79px; width:120px;"></a>
							</div>
						</div>
						<div class="item" style="height:79px; width:120px;">
							<div class="zoom-gallery">
								<a href="<?= base_url('template/assets/images/ibrahim.jpeg') ?>"><img src="<?= base_url('template/assets/images/ibrahim.jpeg') ?>" alt="" style="height:79px; width:120px;"></a>
							</div>
						</div>
					</div>

					<div class="card-contents">
						<ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#home1" role="tab">
									<span class="d-block d-sm-none"><i class="far fa-newspaper"></i></span>
									<span class="d-none d-sm-block">Status</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#profile1" role="tab">
									<span class="d-block d-sm-none"><i class="far fa-comment-dots"></i></span>
									<span class="d-none d-sm-block">Detail</span>
								</a>
							</li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane active p-3" id="home1" role="tabpanel">
								<h4 class="mt-0 header-title">AKTIVITAS TERAKHIR</h4>
								<div class="boxx overflow-auto">
									<?php if ($activities->num_rows() > 0) {
										foreach ($activities->result() as $activity) { ?>
											<div class="inbox-wid">
												<div class="inbox-item">
													<p class="inbox-item-author mt-0 mb-1"><i class="dripicons-clock"></i><b>&nbsp;&nbsp;<?= $activity->activity ?></b></p>
													<p class="inbox-item-text text-muted mb-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oleh&nbsp;&nbsp;<?= $activity->name ?></p>
													<code class="inbox-item-text text-muted mb-0">&nbsp;&nbsp;&nbsp;<?= $activity->date_activity ?></code>
												</div>
											</div>
										<?php
											}
										} else { ?>
										<p class="text-muted m-b-10">Tidak Ada Data</p>
									<?php } ?>
								</div>

								<hr class="">

								<div class="">
									<h4 class="mt-0 header-title">STATUS PARTNER</h4>
									<div class="inbox-wid">
										<div class="inbox-item">
											<p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i><b>&nbsp;&nbsp;Terverifikasi</b></p>
											<p class="inbox-item-text text-muted mb-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oleh&nbsp;&nbsp;Teri Anggraini</p>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code class="inbox-item-text text-muted">30 Des, 2019</code>
										</div>
									</div>
									<div class="inbox-wid">
										<div class="inbox-item">
											<p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-timer-sand"></i><b>&nbsp;&nbsp;Belum
													Diverifikasi</b>
											</p>
											<p class="inbox-item-text text-muted mb-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oleh&nbsp;&nbsp;Admin HO</p>
										</div>
									</div>
									<div class="inbox-wid">
										<div class="inbox-item">
											<p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i><b>&nbsp;&nbsp;Sudah
													tanda
													tangan
													Kerjasama</b>
											</p>
											<p class="inbox-item-text text-muted mb-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oleh&nbsp;&nbsp;Ibrahim Ahmad</p>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code class="inbox-item-text text-muted">30 Des, 2019</code>
										</div>
									</div>
									<div class="inbox-wid">
										<div class="inbox-item">
											<p class="inbox-item-author mt-0 mb-1"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kerjasama?</b></p>
											<div class="form-group ml-3">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="pernah_promosi" id="pernah_promosi" required value="Ya">
													<label class="form-check-label">
														Ya
													</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="pernah_promosi" id="pernah_promosi" required value="Tidak">
													<label class="form-check-label">
														Tidak
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>

								<hr class="">

								<div class="">
									<h4 class="mt-0 header-title">LAMPIRAN</h4>
									<div class="inbox-wid">
										<div class="inbox-item">
											<p class="inbox-item-author mt-0 mb-1"><i class="fas fa-download"></i><b>&nbsp;&nbsp;<a href="#">Download Semua Lampiran</b></a></p>
										</div>
									</div>
								</div>
							</div>

							<div class="tab-pane p-3" id="profile1" role="tabpanel">
								<div class="box overflow-auto">
									<?php foreach ($comments->result() as $comment) { ?>
										<div class="media">
											<a class="image-popup-vertical-fit" href="<?= $comment->foto != '' ? base_url('uploads/foto_profil/' . $comment->foto) : base_url('assets/img/profile-pic.jpg')  ?>" title="Foto Profile.">
												<img class="d-flex align-self-start rounded mr-3" alt="" src="<?= $comment->foto != '' ? base_url('uploads/foto_profil/' . $comment->foto) : base_url('assets/img/profile-pic.jpg')  ?>" height="64">
											</a>
											<div class="media-body">
												<h5 class="mt-0 font-16"><?= $comment->name ?></h5>
												<p><?= $comment->comment ?></p>
											</div>
										</div>
									<?php } ?>
								</div>
								<form action="<?= base_url('Comment/save/id_agent') ?>" method="post">
									<input type="hidden" name="id_type" id="id_type" value="<?= $data->id_agent ?>">
									<input type="hidden" name="uri_string" id="uri_string" value="<?= uri_string() ?>">
									<div class="form-group">
										<label>Comment</label>
										<textarea class="form-control" name="comment" id="comment" cols="30" rows="10" required placeholder="tulis comment disini" style="height:107px;"></textarea>
									</div>
									<button class="btn btn-primary waves-effect waves-light float-right" type="submit" name="process">Kirim</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	var rupiah = document.getElementById("rupiah");
	rupiah.addEventListener("keyup", function(e) {
		// tambahkan 'Rp.' pada saat form di ketik
		// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
		rupiah.value = formatRupiah(this.value, "Rp. ");
	});

	/* Fungsi formatRupiah */
	function formatRupiah(angka, prefix) {
		var number_string = angka.replace(/[^,\d]/g, "").toString(),
			split = number_string.split(","),
			sisa = split[0].length % 3,
			rupiah = split[0].substr(0, sisa),
			ribuan = split[0].substr(sisa).match(/\d{3}/gi);

		// tambahkan titik jika yang di input sudah menjadi angka ribuan
		if (ribuan) {
			separator = sisa ? "." : "";
			rupiah += separator + ribuan.join(".");
		}

		rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
		return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
	}
</script>