<div class="row">
	<div class="col-md-12 mt-5">
		<div class="ml-3 mr-3">
			<div class="card m-b-20">
				<div class="card-body">
					<h4 class="mt-0 header-title">Form NST</h4>
					<p class="text-muted m-b-30 text-size">Cari data menggunakan tombol search di bawah
						ini.</p>
					<form class="" method="post" action="<?= base_url('nst/save') ?>">
						<div class="form-row">
							<div class="col-md-6">
								<div class="ml-3 mr-3">
									<label>Leads ID</label>
									<div class="input-group mb-3">
										<input type="text" class="form-control <?= form_error('leads_id') ? 'is-invalid' : '' ?>" name="leads_id" id="leads_id" value="<?= set_value('leads_id') ?>" required placeholder="CV Aria Santika" aria-label="Recipient's username" aria-describedby="button-addon2">
										<div class="input-group-append">
											<button class="btn btn-danger text-size" type="button" id="reset">x</button>
											<button class="btn btn-primary" type="button" id="button-addon2" data-toggle="modal" data-target=".modal-leads"><span class="ion-ios7-search-strong"></span></button>
										</div>
									</div>
									<?= form_error('leads_id') ?>
									<div class="form-group">
										<label>Cabang</label>
										<input type="text" class="form-control" name="cabang" id="cabang" required value="" placeholder="Cabang" readonly />
									</div>
									<div class="form-group">
										<label>Kategori produk</label>
										<input type="text" class="form-control" name="kategori_produk" id="produk" required value="" placeholder="Kategori produk" readonly />
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="ml-3 mr-3">
									<div class="form-group">
										<label>Requester</label>
										<div>
											<input type="text" class="form-control" name="requester" id="requester" parsley-type="requester" required value="" placeholder="Requester" readonly />
										</div>
									</div>
									<div class="form-group">
										<label>Nama konsumen</label>
										<input type="text" class="form-control" name="nama_konsumen" id="nama_konsumen" required value="" placeholder="Nama Konsumen" readonly />
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group mb-0 float-right ml-3 mr-3">
									<a href="mapping.html" class="btn btn-secondary waves-effect waves-light text-size">Batal</a>
									<button type="submit" class="btn btn-primary waves-effect waves-light text-size ml-1">
										Simpan
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="col-md-4">
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
	</div> -->
</div>

<!-- Modal partner -->
<div class="modal fade modal-leads" id="modal-leads" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-body">
				<div class="modal-header mb-2">
					<h4 class="modal-title">Cari Data Leads</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<table id="" class="datatable-modal table table-striped table-bordered dt-responsive nowrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
						<tr>
							<th>Nama Konsumen</th>
							<th>Leads ID</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($leads->result() as $lead) { ?>
							<tr>
								<td><?= $lead->nama_konsumen ?></td>
								<td><?= $lead->leads_id ?></td>
								<td>
									<center>
										<button class="btn btn-primary pilih-leads" id="search" data-id="<?= $lead->id_leads ?>" data-konsumen="<?= $lead->nama_konsumen ?>" data-leads="<?= $lead->leads_id ?>" data-requester="<?= $lead->name ?>" data-cabang="<?= $lead->nama_cabang ?>" data-produk="<?= $lead->produk ?>">Pilih</button>
									</center>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script>
	$("table").on('click', '.pilih-leads', function() {
		var leads_id = $(this).data('leads_id');
		var konsumen = $(this).data('konsumen');
		var leads = $(this).data('leads');
		var requester = $(this).data('requester');
		var cabang = $(this).data('cabang');
		var produk = $(this).data('produk');
		// var leads_id = $(this).data('leads');
		$('#nama_konsumen').val(konsumen);
		$('#requester').val(requester);
		$('#leads_id').val(leads);
		$('#cabang').val(cabang);
		$('#produk').val(produk);

		$('.modal-leads').modal('hide');
	})
</script>

<script>
	$('#reset').hide()
	$('#search').click(function() {
		$('#reset').show()
		$('#leads_id').attr('readonly', 'readonly');
	})
	$('#reset').click(function() {
		$('#leads_id, #cabang, #produk, #requester, #nama_konsumen').val("");
		$('#reset').hide();
		$('#leads_id').removeAttr('readonly');
	})
</script>