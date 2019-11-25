<div class="row">
	<div class="col-lg-8">
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
				<!-- Nav tabs -->
				<ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home2" role="tab">
							<span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
							<span class="d-none d-sm-block">Data Agent</span>
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active p-3" id="home2" role="tabpanel">
						<form class="" action="<?= base_url('Agent/update') ?>" method="post" <!-- ID Partner -->
							<input type="hidden" name="id_agent" value="<?= $data->id_agent ?>" id="id_agent">
							<!-- ID User -->
							<input type="hidden" name="id_user" value="<?= $data->id_user ?>" id="id_user">
							<!-- ID Cabang -->
							<input type="hidden" name="id_branch" value="<?= $data->id_branch ?>" id="id_branch">

							<div class="form-group">
								<label>Nama Usaha</label>
								<input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="<?= $data->nama_lengkap ?>" required placeholder="Aisha Putri" />
							</div>
							<div class="form-group">
								<label>E-Mail</label>
								<div>
									<input type="email" class="form-control" name="email" id="email" parsley-type="email" value="<?= $data->email ?>" required placeholder="Aisha@bfisyariah.id" />
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
									<label>Tanggal Lahir</label>
									<input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?= $data->tanggal_lahir ?>" required placeholder="19 / 10 / 1927" />
								</div>
								<div class="form-group col-md-4">
									<label>Nomor KTP</label>
									<input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="no_ktp" id="no_ktp" value="<?= $data->no_ktp ?>" required placeholder="1234567891234567" maxlength="16" />
								</div>
								<div class="form-group col-md-4">
									<label>Nomor NPWP</label>
									<input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="no_npwp" id="no_npwp" value="<?= $data->no_npwp ?>" required placeholder="1234567891234567" maxlength="15" />
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
									<label>Pekerjaan</label>
									<input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="<?= $data->pekerjaan ?>" required placeholder="Pilih Pekerjaan" />
								</div>
								<div class="form-group col-md-8">
									<label>Jenis Pekerjaan</label>
									<input type="text" class="form-control" name="jenis_pekerjaan" id="jenis_pekerjaan" value="<?= $data->jenis_pekerjaan ?>" required placeholder="Pekerja Rumah tangga" />
								</div>
							</div>
							<div class="form-group">
								<label>Jenis Agent / BA</label>
								<select class="form-control" name="jenis_agent" id="jenis_agent" required>
									<option selected disabled value="">Pilih Jenis Agent / BA</option>
									<option <?= $data->jenis_agent == 'Syariah Agent' ? 'selected' : '' ?> value="Syariah Agent">Syariah Agent</option>
									<option <?= $data->jenis_agent == 'Syariah Ambassador' ? 'selected' : '' ?> value="Syariah Ambassador">Syariah Ambassador</option>
									<option <?= $data->jenis_agent == 'Syariah Point' ? 'selected' : '' ?> value="Syariah Point">Syariah Point</option>
								</select>
							</div>
							<div class="form-group">
								<label>Status Kepemilikan Rumah</label>
								<select class="form-control" name="status_kepemilikan_rumah" id="status_kepemilikan_rumah" required>
									<option selected disabled value="">Rumah Milik Siapa?</option>
									<option <?= $data->status_kepemilikan_rumah == 'Milik Sendiri' ? 'selected' : '' ?> value="Milik Sendiri">Milik Sendiri</option>
									<option <?= $data->status_kepemilikan_rumah == 'Milik Keluarga' ? 'selected' : '' ?> value="Milik Keluarga">Milik Keluarga</option>
									<option <?= $data->status_kepemilikan_rumah == 'Kontrak' ? 'selected' : '' ?> value="Kontrak">Kontrak</option>
									<option <?= $data->status_kepemilikan_rumah == 'Sewa' ? 'selected' : '' ?> value="Sewa">Sewa</option>
								</select>
							</div>
							<div class="form-group">
								<label>income Per bulan saat ini</label>
								<input type="text" class="form-control" onkeypress="return hanyaAngka(event);" name="income" id="rupiah" value="<?= $data->income ?>" required placeholder="Rp.3,000,000" />
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
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
								<div class="form-group col-md-4">
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
								<div class="form-group col-md-4">
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
							<div class="form-row">
								<div class="form-group col-md-4">
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
								<div class="form-group col-md-6">
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
							<div class="form-row">
								<div class="form-group col-md-4">
									<label>Rekening Bank</label>
									<input type="text" class="form-control pelacement" pelacement" onkeypress="return hanyaAngka(event);" id="rekening_bank" name="rekening_bank" value="<?= $data->rekening_bank ?>" required placeholder="0468 6587 6587 45" maxlength="16">
								</div>
								<div class="form-group col-md-4">
									<label>Nama Bank</label>
									<input type="text" class="form-control" id="nama_bank" name="nama_bank" value="<?= $data->nama_bank ?>" required placeholder="Bank Mandiri">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
									<label>Cabang Bank</label>
									<input type="text" class="form-control" id="cabang_bank" name="cabang_bank" value="<?= $data->cabang_bank ?>" required placeholder="Cabang Karawaci">
								</div>
								<div class="form-group col-md-4">
									<label>Nama Pemilik</label>
									<input type="text" class="form-control" name="atas_nama" id="atas_nama" value="<?= $data->atas_nama ?>" required placeholder="Anto Hoed">
								</div>
							</div>
							<div class="form-group mb-0 float-right mt-2">
								<div>
									<button type="submit" class="btn btn-primary waves-effect waves-light">
										Simpan
									</button>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane p-3" id="profile2" role="tabpanel">

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="">
			<div class="card m-b-20 pisition">
				<div class="card-body">
					<div class="">
						<img src="../assets/images/logo.png" class="img-fluid" alt="Responsive image">
					</div>

					<hr class="mt-3 mb-4">

					<h4 class="mt-0 header-title">AKTIVITAS TERAKHIR</h4>
					<?php if ($activities->num_rows() > 0) {
						foreach ($activities->result() as $activity) { ?>
							<p class="text-muted m-b-10">
								<i class="dripicons-clock"></i>
								<?= $activity->activity ?>&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<code><?= $activity->date_activity ?> - <?= $activity->name ?></code>
							</p>
						<?php
							}
						} else { ?>
						<p class="text-muted m-b-10">Tidak Ada Data</p>
					<?php } ?>

					<hr class="mt-4 mb-4">

					<h4 class="mt-0 header-title">STATUS PARTNER</h4>
					<p class="text-muted"><i class="mdi mdi-account-check"></i>&nbsp;&nbsp;&nbsp;Terverifikasi
						Oleh Teri
						Anggraini<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<code style="color: blue;">30 Des, 2019 -
							Admin HO</code>
					</p>
					<p class="text-muted m-b-10"><i class="mdi mdi-checkbox-marked"></i>&nbsp;&nbsp;&nbsp;Sudah
						tanda tangan
						Kerjasama<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<code style="color: blue;">30 Des, 2019 -
							Ibrahim Ahmad</code>
					</p>

					<hr class="mt-4 mb-4">

					<h4 class="mt-0 header-title">LAMPIRAN</h4>
					<p class="text-muted"><i class="mdi mdi-account-check"></i>&nbsp;&nbsp;&nbsp;<a href="">Download
							Semua Lampiran</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<code style="color: blue;">30 Des, 2019 -
							Don Aria Sabda</code>
					</p>

					<hr class="mt-4">

					<button class="btn btn-secondary">Cetak PKS</button>
				</div>
			</div>


		</div>
	</div>
</div>