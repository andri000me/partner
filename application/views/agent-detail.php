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
						<form class="" action="#">
							<div class="form-group">
								<label>Nama Usaha</label>
								<input type="text" class="form-control" name="nama_usaha" id="nama_usaha" required placeholder="CV Aria Santika" />
							</div>
							<div class="form-group">
								<label>E-Mail</label>
								<div>
									<input type="email" class="form-control" name="email" id="email" parsley-type="email" required placeholder="Aisha@bfisyariah.id" />
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
									<label>Tanggal Lahir</label>
									<input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required placeholder="19 / 10 / 1927" />
								</div>
								<div class="form-group col-md-4">
									<label>Nomor KTP</label>
									<input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="tanggal_lahir" id="tanggal_lahir" required placeholder="1234567891234567" maxlength="16" />
								</div>
								<div class="form-group col-md-4">
									<label>Nomor NPWP</label>
									<input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="tanggal_lahir" id="tanggal_lahir" required placeholder="1234567891234567" maxlength="15" />
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
									<label>Pekerjaan</label>
									<input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required placeholder="Pilih Pekerjaan" />
								</div>
								<div class="form-group col-md-8">
									<label>Jenis Pekerjaan</label>
									<input type="text" class="form-control" name="jenis_pekerjaan" id="jenis_pekerjaan" required placeholder="Pekerja Rumah tangga" />
								</div>
							</div>
							<div class="form-group">
								<label>Jenis Agent / BA</label>
								<select class="form-control" name="jenis_agent" id="jenis_agent" required>
									<option selected disabled value="">Pilih Jenis Agent / BA</option>
									<option value="Syariah Agent">Syariah Agent</option>
									<option value="Syariah Ambassador">Syariah Ambassador</option>
									<option value="Syariah Point">Syariah Point</option>
								</select>
							</div>
							<div class="form-group">
								<label>Status Kepemilikan Rumah</label>
								<select class="form-control" name="status_kepemilikan_rumah" id="status_kepemilikan_rumah" required>
									<option selected disabled value="">Rumah Milik Siapa?</option>
									<option value="Milik Sendiri">Milik Sendiri</option>
									<option value="Milik Keluarga">Milik Keluarga</option>
									<option value="Kontrak">Kontrak</option>
									<option value="Sewa">Sewa</option>
								</select>
							</div>
							<div class="form-group">
								<label>income Per bulan saat ini</label>
								<input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="income" id="income" required placeholder="3,000,000" maxlength="15" />
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
									<label>Apakah Puanya Pinjaman?</label><br>
									<div class="form-check form-check-inline mt-2">
										<input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Ya" required>
										<label class="form-check-label">
											Ya
										</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Tidak" required>
										<label class="form-check-label">
											Tidak
										</label>
									</div>
								</div>
								<div class="form-group col-md-4">
									<label>Terdaftar Sebagai Agen travel / Lainnya?</label><br>
									<div class="form-check form-check-inline mt-2">
										<input class="form-check-input" type="radio" name="afiliasi_travel" id="afiliasi_travel" value="Ya" required>
										<label class="form-check-label">
											Ya
										</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="afiliasi_travel" id="afiliasi_travel" value="Tidak" required>
										<label class="form-check-label">
											Tidak
										</label>
									</div>
								</div>
								<div class="form-group col-md-4">
									<label>Terdaftar Sebagai Agen BFI Finance?</label><br>
									<div class="form-check form-check-inline mt-2">
										<input class="form-check-input" type="radio" name="agent_konvensional" id="agent_konvensional" value="Ya" required>
										<label class="form-check-label">
											Ya
										</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="agent_konvensional" id="agent_konvensional" value="Tidak" required>
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
										<input class="form-check-input" type="radio" name="konsumen_bfi" id="konsumen_bfi" value="Pernah" required>
										<label class="form-check-label">
											Pernah
										</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="konsumen_bfi" id="konsumen_bfi" value="Tidak Pernah" required>
										<label class="form-check-label">
											Tidak Pernah
										</label>
									</div>
								</div>
								<div class="form-group col-md-6">
									<label>Apakah ada hubungan dengan karyawan BFI Finance?</label><br>
									<div class="form-check form-check-inline mt-2">
										<input class="form-check-input" type="radio" name="hubungan_karyawan_bfi" id="hubungan_karyawan_bfi" value="Ada" required>
										<label class="form-check-label">
											Ada
										</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="hubungan_karyawan_bfi" id="hubungan_karyawan_bfi" value="Tidak Ada" required>
										<label class="form-check-label">
											Tidak Ada
										</label>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
									<label>Rekening Bank</label>
									<input type="text" class="form-control pelacement" pelacement" onkeypress="return hanyaAngka(event);" id="rekening_bank" name="rekening_bank" required placeholder="0468 6587 6587 45" maxlength="16">
								</div>
								<div class="form-group col-md-4">
									<label>Nama Bank</label>
									<input type="text" class="form-control" id="nama_bank" name="nama_bank" required placeholder="Bank Mandiri">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
									<label>Cabang Bank</label>
									<input type="text" class="form-control" id="cabang_bank" name="cabang_bank" requiredH placeholder="Cabang Karawaci">
								</div>
								<div class="form-group col-md-4">
									<label>Nama Pemilik</label>
									<input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik" required placeholder="Anto Hoed">
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
					<p class="text-muted m-b-10"><i class="dripicons-clock"></i>&nbsp;&nbsp;Perubahan
						pada
						data partner<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<code>30 Des, 2019 -
							Ibrahim Ahmad</code>
					</p>
					<p class="text-muted m-b-10"><i class="dripicons-clock"></i>&nbsp;&nbsp;Perubahan
						pada
						data partner<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<code>27 Nov, 2019 -
							Don Aria Sabda</code>
					</p>
					<p class="text-muted m-b-10"><i class="dripicons-clock"></i>&nbsp;&nbsp;Perubahan
						pada
						data partner<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<code>24 Nov, 2019 -
							Don Aria Sabda</code>
					</p>

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