<div class="row">
	<div class="col-md-8">
		<div class="page-title-box ml-4">
			<h4 class="page-title">Timeline Maintain</h4>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
				<li class="breadcrumb-item"><a href="javascript:void(0);">Kerjasama</a></li>
				<li class="breadcrumb-item active">Timeline Maintain</li>
			</ol>
		</div>
		<div class="card ml-3 mr-3">
			<div class="card-body">
				<div class="tab-pane active p-3" id="home2" role="tabpanel">
					<form class="" action="<?= base_url('Leads/update_detail') ?>">
						<div class="form-row">
							<div class="col-md-12">
								<div class="form-group ml-3 mr-3">
									<label>Leads ID</label>
									<input type="text" class="form-control placement" name="leads_id" id="leads_id" required placeholder="009377736433744" maxlength="15">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-12">
								<label class="ml-3">Nama Konsumen</label>
								<div class="input-group ml-3 mb-3">
									<input type="text" class="form-control" name="nama_konsumen" id="nama_konsumen" required placeholder="Ibrahim Ahmad" aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
									<div class="input-group-append">
										<button class="btn btn-primary mr-4" type="button" id="button-addon2" data-toggle="modal" data-target="#modal-leads"><span class="ion-ios7-search-strong"></span></button>
									</div>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-group ml-3 mr-3">
									<label>ID KTP</label>
									<input type="phone" class="form-control placement" onkeypress="return hanyaAngka(event);" name="no_ktp" id="no_ktp" required placeholder="0786 6875 8725 3564" maxlength="16" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group ml-3 mr-3">
									<label>Nomor Telepon / Whatsapp</label>
									<input type="text" class="form-control placement" onkeypress="return hanyaAngka(event);" name="telepon" id="telepon" required placeholder="0811977500" maxlength="15" />
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-group mr-3 ml-3">
									<label>Produk</label>
									<select class="form-control" name="produk" id="produk">
										<option selected>Pilih Kategori Produk</option>
										<option value="My Ihram">My Ihram</option>
										<option value="My Safar">My Safar</option>
										<option value="My Talim">My Talim</option>
										<option value="My Hajat">My Hajat</option>
										<option value="My Faedah">My Faedah</option>
										<option value="My CarS">My CarS</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group mr-3 ml-3">
									<label>Detail Produk</label>
									<input type="text" class="form-control" name="detail_produk" id="detail_produk" required placeholder="Detail produk" />
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-group mr-3 ml-3">
									<label>Asal Aplikasi</label>
									<select class="form-control" name="soa" id="soa">
										<option selected>Pilih Source Aplikasi</option>
										<option value="Direct Selling">Direct Selling</option>
										<option value="Tour & travel">Tour & travel</option>
										<option value="Penyedia Jasa">Penyedia Jasa</option>
										<option value="Agent BA">Agent BA</option>
										<option value="EGC">EGC</option>
										<option value="CGC">CGC</option>
										<option value="Digital Marketing">Digital Marketing</option>
										<option value="Website BFI Syariah">Website BFI Syariah</option>
										<option value="RO">RO</option>
										<option value="Walkin">Walkin</option>
										<option value="Event">Event</option>
									</select>
								</div>
							</div>
							<div class="col-md-6 form">
								<label class="ml-3 travel">Pilih Data Travel</label>
								<label class="ml-3 jasa">Pilih Data Penyedia Jasa</label>
								<label class="ml-3 agent">Pilih Data Agent</label>
								<div class="input-group ml-3 mb-3">
									<input type="text" class="form-control text-size" name="data_partner" id="data_partner" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
									<div class="input-group-append">
										<button class="btn btn-primary btn-data mr-4 text-size" type="button" id="btn-data" data-toggle="modal" data-target=""><span class="ion-ios7-search-strong"></span></button>
									</div>
								</div>
							</div>
							<div class="col-md-6 nik">
								<div class="form-group ml-3 mr-3">
									<label>NIK</label>
									<input type="phone" class="form-control text-size placement" onkeypress="return hanyaAngka(event);" name="nik_egc" id="nik_egc" placeholder="0786 6875 8725 3564" maxlength="16" />
								</div>
							</div>
							<div class="col-md-6 event">
								<div class="form-group ml-3 mr-3">
									<label>Nama Event</label>
									<input type="text" class="form-control text-size" name="nama_event" id="nama_event" placeholder="Input Nama Event">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 posisi">
								<div class="form-group ml-3 mr-3">
									<label>Posisi</label>
									<input type="text" class="form-control text-size" name="posisi_egc" id="posisi_egc" placeholder="Input Posisi">
								</div>
							</div>
							<div class="col-md-6 cabang">
								<div class="form-group ml-3 mr-3">
									<label>Cabang</label>
									<input type="text" class="form-control text-size" name="cabang_egc" id="cabang_egc" placeholder="Input Cabang">
								</div>
							</div>
							<div class="col-md-6 kontrak-ro">
								<div class="form-group ml-3 mr-3">
									<label>Nomor Kontrak</label>
									<input type="phone" class="form-control text-size" onkeypress="return hanyaAngka(event);" name="nomor_kontrak_ro" id="nomor_kontrak_ro" placeholder="087883774" />
								</div>
							</div>
							<div class="col-md-6 konsumen-ro">
								<div class="form-group ml-3 mr-3">
									<label>Nama Konsumen</label>
									<input type="text" class="form-control text-size" name="nama_konsumen_ro" id="nama_konsumen_ro" placeholder="Input Nama konsumen">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-group ml-3 mr-3">
									<label>Cross Branch?</label><br>
									<div class="form-check form-check-inline mt-2">
										<input class="form-check-input cross_branch" type="radio" name="cross_branch" id="cross_branch" required value="Ya">
										<label class="form-check-label">
											Ya
										</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input cross_branch" type="radio" name="cross_branch" id="cross_branch" required value="Tidak">
										<label class="form-check-label">
											Tidak
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div id="hide" class="form-group ml-3 mr-3">
									<label>Pilih cabang</label>
									<select class="form-control" name="cabang_cross" id="cabang_cross">
										<option selected disabled value="">Pilih Cabang</option>
										<?php foreach ($branches->result() as $branch) { ?>
											<option value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6">
								<div id="hide" class="form-group ml-3 mr-3">
									<label>Pic Tanda Tangan</label>
									<select class="form-control" name="pic_ttd" id="pic_ttd">
										<option value="" selected>Pilih Pic Tanda Tangan</option>
										<?php foreach ($users->result() as $user) { ?>
											<option value="<?= $user->id_user ?>"><?= ucwords(strtolower($user->name)) . ', ' . ucwords(strtolower($user->nama_cabang)) ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div id="hide" class="form-group ml-3 mr-3">
									<label>Surveyor</label>
									<select class="form-control" name="surveyor" id="surveyor">
										<option value="" selected>Pilih Surveyor</option>
										<?php foreach ($users->result() as $user) { ?>
											<option value="<?= $user->id_user ?>"><?= ucwords(strtolower($user->name)) . ', ' . ucwords(strtolower($user->nama_cabang)) ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-12">
								<div class="form-group ml-3 mr-3">
									<label>Follow Up By</label>
									<select class="form-control" name="follow_up_by" id="follow_up_by" required>
										<option selected disabled value="">Pilih Follow Up By</option>
										<option value="Kunjungan">Kunjungan</option>
										<option value="Telepon">Telepon</option>
										<option value="Whatsapp">Whatsapp</option>
										<option value="Email">Email</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6">
								<label class="ml-3">Nilai Funding</label>
								<div class="input-group flex-nowrap ml-3 mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
									</div>
									<input type="text" class="form-control text-size mr-4" onkeypress="return hanyaAngka(event);" name="nilai_funding" id="nilai_funding" required placeholder="3000000" aria-label="Username" aria-describedby="addon-wrapping">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group ml-3 mr-3">
									<label>Appeal NST</label><br>
									<div class="form-check form-check-inline mt-2">
										<input class="form-check-input" type="radio" name="appeal_nst" id="appeal_nst" required value="Ya">
										<label class="form-check-label">
											Ya
										</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="appeal_nst" id="appeal_nst" required value="Tidak">
										<label class="form-check-label">
											Tidak
										</label>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group mb-0 mt-2 float-right btn-maintain">
							<button type="submit" class="btn btn-primary waves-effect waves-light text-size">
								Simpan
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="sticky">
			<div class="card height">
				<div class="card-body">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div class="zoom-gallery">
								<a href="../assets/images/ibrahim.jpeg"><img class="item" src="../assets/images/ibrahim.jpeg" alt=""></a>
							</div>
						</div>
						<div class="item">
							<div class="zoom-gallery">
								<a href="../assets/images/ibrahim.jpeg"><img class="item" src="../assets/images/ibrahim.jpeg" alt=""></a>
							</div>
						</div>
						<div class="item">
							<div class="zoom-gallery">
								<a href="../assets/images/ibrahim.jpeg"><img class="item" src="../assets/images/ibrahim.jpeg" alt=""></a>
							</div>
						</div>
						<div class="item">
							<div class="zoom-gallery">
								<a href="../assets/images/ibrahim.jpeg"><img class="item" src="../assets/images/ibrahim.jpeg" alt=""></a>
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
									<span class="d-none d-sm-block">Comment</span>
								</a>
							</li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane active p-3" id="home1" role="tabpanel">
								<h6 class="mt-0 header-title web">AKTIVITAS TERAKHIR</h6>
								<div class="boxx overflow-auto">
									<div class="inbox-wid">
										<div class="inbox-item">
											<table class="web">
												<tr>
													<td>
														<p class="inbox-item-author mt-0 mb-0"><i class="dripicons-clock"></i>&nbsp;</p>
													</td>
													<td>
														<p class="inbox-item-author mt-0 mb-1 text-size">
															<b>Perubahan pada data Partner</b></p>
													</td>
													<td>
														<p class="inbox-item-date text-muted mt-1 text-size">
															30 Des, 2019</p>
													</td>
												</tr>
												<tr>
													<td>

													</td>
													<td>
														<p class="inbox-item-text text-muted mb-0 text-size">
															Oleh&nbsp;&nbsp;Ibrahim Ahmad Jabar Khaidiru
															Sobari

														</p>
													</td>
													<td>

													</td>
												</tr>
											</table>
											<table class="mobile">
												<tr>
													<td>
														<p class="inbox-item-author mt-0 mb-1"><i class="dripicons-clock"></i>&nbsp;</p>
													</td>
													<td>
														<p class="inbox-item-author mt-0 mb-1">
															<b>Perubahan pada data Partner</b></p>
													</td>
												</tr>
												<tr>
													<td></td>
													<td>
														<p class="inbox-item-text text-muted mb-0">
															Oleh&nbsp;&nbsp;Ibrahim Ahmad Jabar Khaidiru
															Sobari</p>
													</td>
												</tr>
												<tr>
													<td></td>
													<td>
														<p class="inbox-item-text text-muted mb-0">
															30 Des, 2019</p>
													</td>
												</tr>
											</table>
										</div>
									</div>
								</div>

								<div class="web mt-2">
									<h6 class="header-title mb-0 mt-0">STATUS PARTNER</h6>
									<div class="inbox-wid">
										<div class="inbox-item">
											<table>
												<tr>
													<td>
														<p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
													</td>
													<td>
														<p class="inbox-item-author mt-0 mb-1 text-size">
															<b>Terverifikasi</b></p>
													</td>
													<td>
														<p class="inbox-item-date text-muted mt-1 mb-0 text-size">
															30 Des, 2019</p>
													</td>
												</tr>
												<tr>
													<td>
													</td>
													<td>
														<p class="inbox-item-text text-muted mb-0 text-size">
															Oleh&nbsp;&nbsp;Teri Anggraini</p>
													</td>
													<td>
													</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="inbox-wid hide">
										<div class="inbox-item">
											<table>
												<tr>
													<td>
														<p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-timer-sand"></i>&nbsp;</p>
													</td>
													<td>
														<p class="inbox-item-author mt-0 mb-1 text-size">
															<b>Belum
																Diverifikasi</b>
														</p>
													</td>
													<td></td>
												</tr>
												<tr>
													<td></td>
													<td>
														<p class="inbox-item-text text-muted mb-0 text-size">
															Oleh&nbsp;&nbsp;Admin HO</p>
													</td>
													<td></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="inbox-wid">
										<div class="inbox-item">
											<table>
												<tr>
													<td>
														<p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
													</td>
													<td>
														<p class="inbox-item-author mt-0 mb-1 text-size">
															<b>Sudah
																tanda
																tangan
																Kerjasama</b>
														</p>
													</td>
													<td>
														<p class="inbox-item-date text-muted mt-1 mb-0 text-size">
															30 Des, 2019</p>
													</td>
												</tr>
												<tr>
													<td></td>
													<td>
														<p class="inbox-item-text text-muted mb-0 text-size">
															Oleh&nbsp;&nbsp;Ibrahim Ahmad</p>
													</td>
													<td></td>
												</tr>
											</table>
										</div>
									</div>
									<div class="inbox-wid">
										<div class="inbox-item">
											<table>
												<tr>
													<td>

													</td>
													<td>
														<p class="inbox-item-author mt-0 mb-1 ml-3 text-size">
															<b>Kerjasama?</b></p>
													</td>
												</tr>
												<tr>
													<td>

													</td>
													<td>
														<form action="">
															<div class="form-group ml-3 mb-0">
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
														</form>
													</td>
												</tr>
											</table>
										</div>
									</div>
								</div>

								<div class="mobile">
									<h6 class="header-title mb-0">STATUS PARTNER</h6>
									<div class="inbox-wid">
										<div class="inbox-item">
											<table>
												<tr>
													<td>
														<p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
													</td>
													<td>
														<p class="inbox-item-author mt-0 mb-1">
															<b>Terverifikasi</b></p>
													</td>
												</tr>
												<tr>
													<td></td>
													<td>
														<p class="inbox-item-text text-muted mb-0">
															Oleh&nbsp;&nbsp;Teri Anggraini</p>
													</td>
												</tr>
												<tr>
													<td></td>
													<td>
														<p class="inbox-item-text text-muted">30 Des, 2019
														</p>
													</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="inbox-wid">
										<div class="inbox-item">
											<table>
												<tr>
													<td>
														<p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-timer-sand"></i>&nbsp;</p>
													</td>
													<td>
														<p class="inbox-item-author mt-0 mb-1"><b>Belum
																Diverifikasi</b>
														</p>
													</td>
												</tr>
												<tr>
													<td></td>
													<td>
														<p class="inbox-item-text text-muted mb-0">
															Oleh&nbsp;&nbsp;Admin HO</p>
													</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="inbox-wid">
										<div class="inbox-item">
											<table>
												<tr>
													<td>
														<p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
													</td>
													<td>
														<p class="inbox-item-author mt-0 mb-1"><b>Sudah
																tanda
																tangan
																Kerjasama</b>
														</p>
													</td>
												</tr>
												<tr>
													<td></td>
													<td>
														<p class="inbox-item-text text-muted mb-0">
															Oleh&nbsp;&nbsp;Ibrahim Ahmad</p>
													</td>
												</tr>
												<tr>
													<td></td>
													<td>
														<p class="inbox-item-text text-muted">30 Des, 2019
														</p>
													</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="inbox-wid">
										<div class="inbox-item">
											<table>
												<tr>
													<td> </td>
													<td>
														<p class="inbox-item-author mt-0 mb-1">
															<b>Kerjasama?</b></p>
													</td>
												</tr>
												<tr>
													<td></td>
													<td class="mb-0">
														<div class="form-group">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="pernah_promosi" id="pernah_promosi" required value="Ya">
																<label class="form-check-label text">
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
													</td>
												</tr>
											</table>
										</div>
									</div>
								</div>

								<h4 class="header-title mt-2 mb-0">LAMPIRAN</h4>
								<div class="inbox-wid">
									<div class="inbox-item">
										<table>
											<tr>
												<td>
													<p class="inbox-item-author mt-0 mb-1"><i class="fas fa-download"></i>&nbsp;</p>
												</td>
												<td>
													<p class="inbox-item-author mt-0 mb-1 text-size"><b><a href="#">Download Semua Lampiran</b></a></p>
												</td>
											</tr>
										</table>

									</div>
								</div>
							</div>

							<div class="tab-pane p-3" id="profile1" role="tabpanel">
								<div class="box overflow-auto">
									<div class="media">
										<a class="image-popup-vertical-fit" href="../assets/images/ibrahim.jpeg" title="Foto Profile.">
											<img class="d-flex align-self-start rounded mr-3" alt="" src="../assets/images/ibrahim.jpeg" height="64">
										</a>
										<div class="media-body">
											<h6 class="mt-0 mb-0">Ibrahim</h6>
											<p class="text-size mt-0">Cras sit amet nibh libero, in gravida
												nulla. Nulla vel
												metus
												scelerisque ante sollicitudin. Cras purus odio,
												vestibulum
												in vulputate at, tempus viverra turpis. Fusce
												condimentum
												nunc ac nisi vulputate fringilla. Donec lacinia congue
												felis
												in faucibus.</p>
										</div>
									</div>
									<div class="media">
										<a class="image-popup-vertical-fit" href="../assets/images/ibrahim.jpeg" title="Foto Profile.">
											<img class="d-flex align-self-start rounded mr-3" alt="" src="../assets/images/ibrahim.jpeg" height="64">
										</a>
										<div class="media-body">
											<h6 class="mt-0 mb-0">Ibrahim</h6>
											<p class="text-size mt-0">Cras sit amet nibh libero, in gravida
												nulla. Nulla vel
												metus
												scelerisque ante sollicitudin. Cras purus odio,
												vestibulum
												in vulputate at, tempus viverra turpis. Fusce
												condimentum
												nunc ac nisi vulputate fringilla. Donec lacinia congue
												felis
												in faucibus.</p>
										</div>
									</div>
									<div class="media">
										<a class="image-popup-vertical-fit" href="../assets/images/ibrahim.jpeg" title="Foto Profile.">
											<img class="d-flex align-self-start rounded mr-3" alt="" src="../assets/images/ibrahim.jpeg" height="64">
										</a>
										<div class="media-body">
											<h6 class="mt-0 mb-0">Ibrahim</h6>
											<p class="text-size mt-0">Cras sit amet nibh libero, in gravida
												nulla. Nulla vel
												metus
												scelerisque ante sollicitudin. Cras purus odio,
												vestibulum
												in vulputate at, tempus viverra turpis. Fusce
												condimentum
												nunc ac nisi vulputate fringilla. Donec lacinia congue
												felis
												in faucibus.</p>
										</div>
									</div>
									<div class="media">
										<a class="image-popup-vertical-fit" href="../assets/images/ibrahim.jpeg" title="Foto Profile.">
											<img class="d-flex align-self-start rounded mr-3" alt="" src="../assets/images/ibrahim.jpeg" height="64">
										</a>
										<div class="media-body">
											<h6 class="mt-0 mb-0">Ibrahim</h6>
											<p class="text-size mt-0">Cras sit amet nibh libero, in gravida
												nulla. Nulla vel
												metus
												scelerisque ante sollicitudin. Cras purus odio,
												vestibulum
												in vulputate at, tempus viverra turpis. Fusce
												condimentum
												nunc ac nisi vulputate fringilla. Donec lacinia congue
												felis
												in faucibus.</p>
										</div>
									</div>
									<div class="media">
										<a class="image-popup-vertical-fit" href="../assets/images/ibrahim.jpeg" title="Foto Profile.">
											<img class="d-flex align-self-start rounded mr-3" alt="" src="../assets/images/ibrahim.jpeg" height="64">
										</a>
										<div class="media-body">
											<h6 class="mt-0 mb-0">Ibrahim</h6>
											<p class="text-size mt-0">Cras sit amet nibh libero, in gravida
												nulla. Nulla vel
												metus
												scelerisque ante sollicitudin. Cras purus odio,
												vestibulum
												in vulputate at, tempus viverra turpis. Fusce
												condimentum
												nunc ac nisi vulputate fringilla. Donec lacinia congue
												felis
												in faucibus.</p>
										</div>
									</div>
								</div>
								<form action="">
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

<!-- Modal Mapping Leads -->
<div class="modal fade bd-example-modal-xl" id="modal-leads" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-body" style="height:700px;">
				<div class="modal-header mb-2">
					<h4 class="modal-title">Cari Data Leads</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<table id="" class="datatable table table-striped table-bordered dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
						<tr>
							<th>
								<div class="text-size">Nama Lengkap</div>
							</th>
							<th>
								<div class="text-size">Nomor Telepon</div>
							</th>
							<th>
								<div class="text-size">Asal Aplikasi</div>
							</th>
							<th>
								<div class="text-size">Produk</div>
							</th>
							<th>
								<div class="text-size">Aksi</div>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="not-clickable">
								<div class="text-size">ibrahim</div>
							</td>
							<td>
								<div class="text-size"></div>
							</td>
							<td>
								<div class="text-size"></div>
							</td>
							<td>
								<div class="text-size"></div>
							</td>
							<td>
								<center><button class="btn btn-primary pilih-leads">Pilih</button></center>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- Modal -->

<!-- Modal partner -->
<div class="modal fade" id="modal-partner" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-header mb-2">
					<h4 class="modal-title">Cari Data Partner</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<table id="" class="datatable table table-striped table-bordered dt-responsive nowrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
						<tr>
							<th>Name Usaha</th>
							<th>Kategori Produk</th>
							<th>Telepon</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr class="clickable-row" data-href="partnership-form.html">
							<td>PT Markibul</td>
							<td>My Safar</td>
							<td>0811977500</td>
							<td>
								<center><button class="btn btn-primary">Pilih</button></center>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- Modal partner -->

<!-- Modal agent -->
<div class="modal fade" id="modal-agent" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-header mb-2">
					<h4 class="modal-title">Cari Data Agent</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
						<tr>
							<th>Name Usaha</th>
							<th>Kategori Produk</th>
							<th>Telepon</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr class="clickable-row" data-href="partnership-form.html">
							<td>PT Markibul</td>
							<td>My Safar</td>
							<td>0811977500</td>
							<td>
								<center><button class="btn btn-primary">Pilih</button></center>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- Modal agent -->

<script>
	$('.travel, .agent, .jasa, .event, .btn-data, .form, .nik, .posisi, .cabang, .kontrak-ro, .konsumen-ro').hide();
	source_leads();
	$('#soa').change(function() {
		source_leads();
		$('#id_partner').val("");
		$('#id_agent').val("");
		$('#nama_vendor').val("").removeAttr("required");
		$('#nama_event').val("");
		$('#data_partner').val("");
	})

	function source_leads() {
		if ($('#soa').val() == 'Tour & travel') {
			$('.travel, .form, .btn-data').show();
			$('#data_partner').attr('placeholder', 'jalan - jalan')
			$('#btn-data').attr('data-target', '#modal-partner')
			$('.agent, .jasa, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-ro, .konsumen-ro').hide();
		} else if ($('#soa').val() == 'Penyedia Jasa') {
			$('.jasa, .form, .btn-data').show();
			$('#data_partner').attr('placeholder', 'Jasa raharja')
			$('#btn-data').attr('data-target', '#modal-partner')
			$('.agent, .travel, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-ro, .konsumen-ro').hide();
		} else if ($('#soa').val() == 'Agent BA') {
			$('.agent, .form, .btn-data').show();
			$('#data_partner').attr('placeholder', 'Ibrahim')
			$('#btn-data').attr('data-target', '#modal-agent')
			$('.travel, .jasa, .event, .nik, .posisi, .cabang, .kontrak-ro, .konsumen-ro').hide();
		} else if ($('#soa').val() == 'EGC') {
			$('.nik, .posisi, .cabang').show();
			$('.jasa, .travel, .event, .form, .kontrak-ro, .konsumen-ro').hide();
		} else if ($('#soa').val() == 'CGC') {
			$('.kontrak-ro, .konsumen-ro').show();
			$('.travel, .agent, .jasa, .event, .btn-data, .form, .nik, .posisi, .cabang').hide();
		} else if ($('#soa').val() == 'RO') {
			$('.kontrak-ro, .konsumen-ro').show();
			$('.travel, .agent, .jasa, .event, .btn-data, .form, .nik, .posisi, .cabang').hide();
		} else if ($('#soa').val() == 'Event') {
			$('.event').show();
			$('.travel, .agent, .jasa, .btn-data, .form, .nik, .posisi, .cabang, .kontrak-ro, .konsumen-ro').hide();
		} else {
			$('.jasa, .travel, .agent, .form, .event, .nik, .posisi, .cabang, .kontrak-ro, .konsumen-ro').hide();
		}
	}
</script>