<div class="row">
	<div class="col-md-8">
		<div class="page-title-box ml-4">
			<h4 class="page-title">Leads Detail</h4>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
				<li class="breadcrumb-item"><a href="javascript:void(0);">Leads</a></li>
				<li class="breadcrumb-item"><a href="javascript:void(0);">Database</a></li>
				<li class="breadcrumb-item active">Leads Detail</li>
			</ol>
		</div>

		<div class="card">
			<div class="card-body">
				<div id="hilang" style="height: 650px;">
					<div id="loader"></div>
					<div id="loadermobile"></div>
				</div>
				<div style="display:none;" id="myDiv" class="animate-bottom">
					<ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#home2" role="tab">
								<span class="d-block d-sm-none"><i class="far fa-user"></i></span>
								<span class="d-none d-sm-block">Data Leads</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#profile2" role="tab">
								<span class="d-block d-sm-none"><i class="ion-ios7-checkmark-outline"></i></span>
								<span class="d-none d-sm-block">History Follow Up</span>
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active p-3" id="home2" role="tabpanel">
							<form class="" action="<?= base_url('Leads/update_detail') ?>" method="post">
								<!-- ID Ticket -->
								<input type="hidden" name="id_ticket" value="<?= $ticket->id_ticket ?>" id="id_ticket">
								<!-- ID Mapping Leads -->
								<input type="hidden" name="id_mapping_leads" id="id_mapping_leads" value="<?= $data->id_mapping_leads ?>">
								<!-- ID Leads -->
								<input type="hidden" name="id_leads" id="id_leads" value="<?= $data->id_leads ?>">
								<!-- ID Partner -->
								<input type="hidden" name="id_partner" id="id_partner" value="<?= $data->id_partner ?>">
								<!-- ID Agent -->
								<input type="hidden" name="id_agent" id="id_agent" value="<?= $data->id_agent ?>">
								<!-- ID User -->
								<input type="hidden" name="id_user" id="id_user" value="<?= $this->fungsi->user_login()->id_user ?>">
								<!-- ID Branch -->
								<input type="hidden" name="id_branch" id="id_branch" value="<?= $this->fungsi->user_login()->id_branch ?>">
								<!-- Post Redirect halaman ke form -->
								<input type="hidden" name="redirect" value="<?= uri_string() ?>">
								<?php $cabang_asal = $this->fungsi->user_login()->id_branch; ?>
								<div class="form-row">
									<div class="col-md-12">
										<div class="form-group ml-3 mr-3">
											<label>Nama Konsumen</label>
											<input type="text" class="form-control placement" name="nama_konsumen" id="nama_konsumen" value="<?= $data->nama_konsumen ?>" <?= $cabang_asal == $data->cabang_cross ? 'readonly' : '' ?> required placeholder="009377736433744" maxlength="15">
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12">
										<div class="form-group ml-3 mr-3">
											<label>Leads ID</label>
											<input type="text" class="form-control placement" name="leads_id" id="leads_id" value="<?= $data->leads_id ?>" <?= $cabang_asal == $data->cabang_cross ? 'readonly' : '' ?> required placeholder="009377736433744" maxlength="15">
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6">
										<div class="form-group ml-3 mr-3">
											<label>ID KTP</label>
											<input type="phone" class="form-control placement number-only" name="no_ktp" id="no_ktp" value="<?= $data->no_ktp ?>" <?= $cabang_asal == $data->cabang_cross ? 'readonly' : '' ?> required placeholder="0786 6875 8725 3564" maxlength="16">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group ml-3 mr-3">
											<label>Nomor Telepon / Whatsapp</label>
											<input type="text" class="form-control placement number-only" name="telepon" id="telepon" value="<?= $data->telepon ?>" <?= $cabang_asal == $data->cabang_cross ? 'readonly' : '' ?> required placeholder="0811977500" maxlength="15">
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6">
										<div class="form-group mr-3 ml-3">
											<label>Produk</label>
											<select class="form-control" name="produk" id="produk" <?= $cabang_asal == $data->cabang_cross ? 'disabled' : '' ?>>
												<option selected>Pilih Kategori Produk</option>
												<option <?= $data->produk == 'My Ihram' ? 'selected' : '' ?> value="My Ihram">My Ihram</option>
												<option <?= $data->produk == 'My Safar' ? 'selected' : '' ?> value="My Safar">My Safar</option>
												<option <?= $data->produk == 'My Talim' ? 'selected' : '' ?> value="My Talim">My Talim</option>
												<option <?= $data->produk == 'My Hajat' ? 'selected' : '' ?> value="My Hajat">My Hajat</option>
												<option <?= $data->produk == 'My Faedah' ? 'selected' : '' ?> value="My Faedah">My Faedah</option>
												<option <?= $data->produk == 'My CarS' ? 'selected' : '' ?> value="My CarS">My CarS</option>
											</select>
										</div>
										<input type="hidden" name="produk" value="<?= $data->produk ?>">
									</div>
									<div class="col-md-6">
										<div class="form-group mr-3 ml-3">
											<label>Detail Produk</label>
											<input type="text" class="form-control" name="detail_produk" id="detail_produk" value="<?= $data->detail_produk ?>" <?= $cabang_asal == $data->cabang_cross ? 'readonly' : '' ?> required placeholder="Detail produk">
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6">
										<div class="form-group mr-3 ml-3">
											<label>Asal Aplikasi</label>
											<select class="form-control" name="soa" id="soa" <?= $cabang_asal == $data->cabang_cross ? 'disabled' : '' ?>>
												<option value="" selected>Pilih Source Aplikasi</option>
												<option <?= $data->soa == 'Direct Selling' ? 'selected' : '' ?> value="Direct Selling">Direct Selling</option>
												<option <?= $data->soa == 'Tour & travel' ? 'selected' : '' ?> value="Tour & travel">Tour & travel</option>
												<option <?= $data->soa == 'Penyedia Jasa' ? 'selected' : '' ?> value="Penyedia Jasa">Penyedia Jasa</option>
												<option <?= $data->soa == 'Agent BA' ? 'selected' : '' ?> value="Agent BA">Agent BA</option>
												<option <?= $data->soa == 'EGC' ? 'selected' : '' ?> value="EGC">EGC</option>
												<option <?= $data->soa == 'CGC' ? 'selected' : '' ?> value="CGC">CGC</option>
												<option <?= $data->soa == 'Digital Marketing' ? 'selected' : '' ?> value="Digital Marketing">Digital Marketing</option>
												<option <?= $data->soa == 'Website BFI Syariah' ? 'selected' : '' ?> value="Website BFI Syariah">Website BFI Syariah</option>
												<option <?= $data->soa == 'RO' ? 'selected' : '' ?> value="RO">RO</option>
												<option <?= $data->soa == 'Walk In' ? 'selected' : '' ?> value="Walk In">Walk In</option>
												<option <?= $data->soa == 'Event Promotion' ? 'selected' : '' ?> value="Event Promotion">Event Promotion</option>
												<option <?= $data->soa == 'Tele Marketing' ? 'selected' : '' ?> value="Tele Marketing">Tele Marketing</option>
											</select>
										</div>
										<input type="hidden" name="soa" value="<?= $data->soa ?>">
									</div>
									<div class="col-md-6 event">
										<div class="form-group ml-3 mr-3">
											<label>Nama Event</label>
											<input type="text" class="form-control text-size" value="<?= $data->nama_event ?>" name="nama_event" id="nama_event" placeholder="Input Nama Event">
										</div>
									</div>
									<div class="col-md-6 form">
										<label class="ml-3 travel">Pilih Data Travel</label>
										<label class="ml-3 jasa">Pilih Data Penyedia Jasa</label>
										<label class="ml-3 vendor">Pilih Data Partner</label>
										<div class="input-group ml-3 mb-3">
											<input type="text" class="form-control text-size" name="data_partner" id="data_partner" value="<?= $data->nama_partner ?>" aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
											<div class="input-group-append">
												<button class="btn btn-primary btn-data mr-4 text-size" type="button" id="btn-data" data-toggle="modal" data-target="" <?= $cabang_asal == $data->cabang_cross ? 'disabled' : '' ?>><span class="ion-ios7-search-strong"></span></button>
											</div>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6 form-agent">
										<label class="ml-3 agent">Pilih Data Agent</label>
										<div class="input-group ml-3 mb-3">
											<input type="text" class="form-control text-size" name="data_agent" id="data_agent" value="<?= $data->nama_agent ?>" aria-label="Recipient's username" aria-describedby="button-addon2" readonly>
											<div class="input-group-append">
												<button class="btn btn-primary btn-data mr-4 text-size" type="button" id="btn-data-agent" data-toggle="modal" data-target="" <?= $cabang_asal == $data->cabang_cross ? 'disabled' : '' ?>><span class="ion-ios7-search-strong"></span></button>
											</div>
										</div>
									</div>
									<div class="col-md-6 nik">
										<div class="form-group ml-3 mr-3">
											<label>NIK</label>
											<input type="phone" class="form-control text-size placement number-only" name="nik_egc" id="nik_egc" value="<?= $data->nik_egc ?>" <?= $cabang_asal == $data->cabang_cross ? 'readonly' : '' ?> placeholder="0786 6875 8725 3564" maxlength="16" />
										</div>
									</div>
									<div class="col-md-6 posisi">
										<div class="form-group ml-3 mr-3">
											<label>Posisi</label>
											<input type="text" class="form-control text-size" name="posisi_egc" id="posisi_egc" value="<?= $data->posisi_egc ?>" <?= $cabang_asal == $data->cabang_cross ? 'readonly' : '' ?> placeholder="Input Posisi">
										</div>
									</div>
									<div class="col-md-6 cabang">
										<div class="form-group ml-3 mr-3">
											<label>Cabang</label>
											<input type="text" class="form-control text-size" name="cabang_egc" id="cabang_egc" value="<?= $data->cabang_egc ?>" <?= $cabang_asal == $data->cabang_cross ? 'readonly' : '' ?> placeholder="Input Cabang">
										</div>
									</div>
									<div class="col-md-6 kontrak-ro">
										<div class="form-group ml-3 mr-3">
											<label>Nomor Kontrak</label>
											<input type="phone" class="form-control text-size number-only" name="nomor_kontrak" id="nomor_kontrak" value="<?= $data->nomor_kontrak ?>" <?= $cabang_asal == $data->cabang_cross ? 'readonly' : '' ?> placeholder="087883774" />
										</div>
									</div>
									<div class="col-md-6 konsumen-ro">
										<div class="form-group ml-3 mr-3">
											<label>Nama Konsumen</label>
											<input type="text" class="form-control text-size" name="referral_konsumen" id="referral_konsumen" value="<?= $data->referral_konsumen ?>" <?= $cabang_asal == $data->cabang_cross ? 'readonly' : '' ?> placeholder="Input Nama konsumen">
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6">
										<fieldset <?= $cabang_asal == $data->cabang_cross ? 'disabled' : '' ?>>
											<div class="form-group ml-3 mr-3">
												<label>Cross Branch?</label><br>
												<div class="form-check form-check-inline mt-2">
													<input class="form-check-input cross_branch" type="radio" name="cross_branch" <?= $data->cross_branch == 'Ya' ? 'checked' : '' ?> required value="Ya">
													<label class="form-check-label">
														Ya
													</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input cross_branch" type="radio" name="cross_branch" <?= $data->cross_branch == 'Tidak' ? 'checked' : '' ?> required value="Tidak">
													<label class="form-check-label">
														Tidak
													</label>
												</div>
											</div>
										</fieldset>
										<input type="hidden" name="cross_branch" value="<?= $data->cross_branch ?>" <?= $cabang_asal == $data->id_branch ? 'disabled' : '' ?>>
									</div>
									<div class="col-md-6">
										<fieldset <?= $cabang_asal == $data->cabang_cross ? 'disabled' : '' ?>>
											<div id="hide" class="form-group ml-3 mr-3">
												<label>Pilih cabang</label>
												<select class="form-control" name="cabang_cross" id="cabang_cross">
													<option selected disabled value="">Pilih Cabang</option>
													<?php foreach ($branches->result() as $branch) { ?>
														<option <?= $branch->id_branch == $data->cabang_cross ? 'selected' : '' ?> <?= $branch->id_branch == $cabang_asal ? 'disabled' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
													<?php } ?>
												</select>
											</div>
										</fieldset>
										<input type="hidden" name="cabang_cross" value="<?= $data->cabang_cross ?>" <?= $cabang_asal == $data->id_branch ? 'disabled' : '' ?>>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6">
										<div class="form-group ml-3 mr-3 pic_ttd">
											<label>Pic Tanda Tangan</label>
											<select class="form-control text-size" name="pic_ttd" id="pic_ttd" <?= $cabang_asal == $data->id_branch ? 'disabled' : '' ?>>
												<option value="" selected>Pilih Pic Tanda Tangan</option>
												<optgroup id="show_pic_ttd">

												</optgroup>
											</select>
											<input type="hidden" name="pic_ttd" value="<?= $data->pic_ttd ?>" <?= $cabang_asal == $data->cabang_cross ? 'disabled' : '' ?>>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group ml-3 mr-3 surveyor">
											<label>Surveyor</label>
											<select class="form-control text-size" name="surveyor" id="surveyor" <?= $cabang_asal == $data->id_branch ? 'disabled' : '' ?>>
												<option value="" selected>Pilih Surveyor</option>
												<optgroup id="show_surveyor">

												</optgroup>
											</select>
											<input type="hidden" name="surveyor" value="<?= $data->surveyor ?>" <?= $cabang_asal == $data->cabang_cross ? 'disabled' : '' ?>>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12">
										<div class="form-group ml-3 mr-3">
											<label>Follow Up By</label>
											<select class="form-control" name="follow_up_by" id="follow_up_by" required <?= $cabang_asal == $data->cabang_cross ? 'disabled' : '' ?>>
												<option selected disabled value="">Pilih Follow Up By</option>
												<option <?= $data->follow_up_by == 'Kunjungan' ? 'selected' : '' ?> value="Kunjungan">Kunjungan</option>
												<option <?= $data->follow_up_by == 'Telepon' ? 'selected' : '' ?> value="Telepon">Telepon</option>
												<option <?= $data->follow_up_by == 'Whatsapp' ? 'selected' : '' ?> value="Whatsapp">Whatsapp</option>
												<option <?= $data->follow_up_by == 'Email' ? 'selected' : '' ?> value="Email">Email</option>
											</select>
											<input type="hidden" name="follow_up_by" value="<?= $data->follow_up_by ?>" <?= $cabang_asal == $data->id_branch ? 'disabled' : '' ?>>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-12">
										<label class="ml-3">Nilai Funding</label>
										<div class="input-group flex-nowrap ml-3 mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text text-size" id="addon-wrapping">Rp.</span>
											</div>
											<input type="text" class="form-control text-size mr-4 number-only" name="nilai_funding" id="nilai_funding" data-type="currency" value="<?= $data->nilai_funding ?>" <?= $cabang_asal == $data->cabang_cross ? 'readonly' : '' ?> required placeholder="3000000" aria-label="Username" aria-describedby="addon-wrapping">
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6">
										<fieldset <?= $cabang_asal == $data->cabang_cross ? 'disabled' : '' ?>>
											<div class="form-group text-size ml-3 mr-3">
												<label>Apakah Sudah Funding?</label><br>
												<div class="form-check form-check-inline mt-2">
													<input class="form-check-input" type="radio" name="sudah_funding" id="sudah_funding" <?= $data->sudah_funding == 'Sudah' ? 'checked' : ''  ?> required value="Sudah">
													<label class="form-check-label">
														Sudah
													</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="sudah_funding" id="sudah_funding" <?= $data->sudah_funding == 'Belum' ? 'checked' : ''  ?> required value="Belum">
													<label class="form-check-label">
														Belum
													</label>
												</div>
											</div>
										</fieldset>
										<input type="hidden" name="sudah_funding" value="<?= $data->sudah_funding ?>" <?= $cabang_asal == $data->id_branch ? 'disabled' : '' ?>>
									</div>
									<div class="col-md-6">
										<fieldset <?= $cabang_asal == $data->cabang_cross ? 'disabled' : '' ?>>
											<div class="form-group ml-3 mr-3">
												<label>Appeal NST</label><br>
												<div class="form-check form-check-inline mt-2">
													<input class="form-check-input" type="radio" name="appeal_nst" id="appeal_nst" <?= $data->appeal_nst == 'Ya' ? 'checked' : '' ?> required value="Ya">
													<label class="form-check-label">
														Ya
													</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="appeal_nst" id="appeal_nst" <?= $data->appeal_nst == 'Tidak' ? 'checked' : '' ?> required value="Tidak">
													<label class="form-check-label">
														Tidak
													</label>
												</div>
											</div>
										</fieldset>
										<input type="hidden" name="appeal_nst" value="<?= $data->appeal_nst ?>" <?= $cabang_asal == $data->id_branch ? 'disabled' : '' ?>>
									</div>
								</div>
								<div class="form-group mb-0 mt-2 float-right btn-maintain">
									<?php
									$level = $this->fungsi->user_login()->level;
									if (
										($level != 1)  && (($level == 2 && $ticket->status_approval == 0) || ($level == 3 && $ticket->status_approval == 1) || ($level == 4 && $ticket->status_approval == 2)) && ($this->fungsi->user_login()->id_branch == $data->id_branch)
									) {
									?>
										<?= $this->fungsi->user_login()->id_branch . ' = ' . $data->id_branch ?>
										<a class="btn btn-info text-size" onclick="return confirm('Apakah Anda yakin MENYETUJUI data tiket ini?')" href="<?= base_url('ticket/approve_status/' . $ticket->id_ticket) ?>">Approve</a>
									<?php } ?>
									<?php if ($level == 4 && $ticket->status_approval == 2) { ?>
										<a class="btn btn-danger text-size" onclick="return confirm('Apakah Anda yakin MENOLAK data tiket ini?')" href=" <?= base_url('ticket/reject_status/' . $ticket->id_ticket) ?>">Reject</a>
									<?php } ?>
									<?php if ($level < 4) { ?>
										<button type="submit" onclick="return confirm('Mohon pastikan data yang diisi sudah benar!')" class="btn btn-primary waves-effect waves-light text-size">
											Simpan
										</button>
									<?php } ?>
								</div>
							</form>
						</div>

						<div class="tab-pane p-3" id="profile2" role="tabpanel">
							<h4 class="mt-0 header-title mb-4">Timeline History Follow Up</h4>
							<ol class="activity-feed mb-0">
								<?php
								if ($follow_up->num_rows() > 0) {
									foreach ($follow_up->result() as $data) {
								?>
										<li class="feed-item text-size">
											<div class="feed-item-list">
												<span class="activity-text"><b>Follow Up By <?= $data->follow_up_by ?></b></span><br>
												<span class="activity-text"><b>Oleh <?= $data->name ?></b></span>
												<span class="date"><?= $data->tanggal_follow_up ?></span>
												<span class="activity-text"><?= $data->catatan ?></span>
											</div>
										</li>
									<?php
									}
								} else { ?>
									<p class="text-muted m-b-10 text-size text-center">Tidak Ada Data</p>
								<?php } ?>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-4">
		<div class="sticky">
			<div class="card height">
				<div class="card-body">
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
								<h6 class="header-title web mt-0 mb-0">AKTIVITAS TERAKHIR</h6>
								<div class="boxx overflow-auto">
									<?php if ($activities->num_rows() > 0) {
										foreach ($activities->result() as $activity) { ?>
											<div class="inbox-wid">
												<div class="inbox-item">
													<table class="web">
														<tr>
															<td>
																<p class="inbox-item-author mt-0 mb-0"><i class="dripicons-clock"></i>&nbsp;</p>
															</td>
															<td>
																<p class="inbox-item-author mt-0 mb-1 text-size"><b><?= $activity->activity ?></b></p>
															</td>
															<td>
																<p class="inbox-item-date text-muted mt-1 text-size"><?= $activity->tanggal_activity ?></p>
															</td>
														</tr>
														<tr>
															<td>

															</td>
															<td>
																<p class="inbox-item-text text-muted mb-0 text-size">Oleh&nbsp;&nbsp;<?= $activity->name ?></p>
															</td>
															<td>

															</td>
														</tr>
													</table>
													<table class="mobile text-size">
														<tr>
															<td>
																<p class="inbox-item-author mt-0 mb-1"><i class="dripicons-clock"></i>&nbsp;</p>
															</td>
															<td>
																<p class="inbox-item-author mt-0 mb-1"><b><?= $activity->activity ?></b></p>
															</td>
														</tr>
														<tr>
															<td></td>
															<td>
																<p class="inbox-item-text text-muted mb-0">Oleh&nbsp;&nbsp;<?= $activity->name ?></p>
															</td>
														</tr>
														<tr>
															<td></td>
															<td>
																<p class="inbox-item-text text-muted mb-0"><?= $activity->tanggal_activity ?></p>
															</td>
														</tr>
													</table>
												</div>
											</div>
										<?php
										}
									} else { ?>
										<p class="text-muted m-b-10 text-size">Tidak Ada Data</p>
									<?php } ?>
								</div>

								<!-- <div class="web mt-2">
									<h6 class="header-title mb-0 mt-0">STATUS LEADS</h6>
									<div class="boxxx overflow-auto">
										<?php if ($ticket->status_approval == 5) { ?>
											<div class="inbox-wid">
												<div class="inbox-item">
													<table>
														<tr>
															<td>
																<p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
															</td>
															<td>
																<p class="inbox-item-author mt-0 mb-1 text-size"><b>Terverifikasi</b></p>
															</td>
															<td>
																<p class="inbox-item-date text-muted mt-1 mb-0 text-size"><?= $ticket->tanggal_completed ?></p>
															</td>
														</tr>
														<tr>
															<td>
															</td>
															<td>
																<p class="inbox-item-text text-muted mb-0 text-size">Oleh&nbsp;&nbsp;<?= $ticket->nama_user_completed ?></p>
															</td>
															<td>
															</td>
														</tr>
													</table>
												</div>
											</div>
										<?php } else { ?>
											<div class="inbox-wid hide">
												<div class="inbox-item">
													<table>
														<tr>
															<td>
																<p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-timer-sand"></i>&nbsp;</p>
															</td>
															<td>
																<p class="inbox-item-author mt-0 mb-1 text-size"><b>Belum Diverifikasi</b></p>
															</td>
															<td></td>
														</tr>
													</table>
												</div>
											</div>
										<?php } ?>
										<?php if ($ticket->ttd_pks == 'Ya' && $ticket->form_mou != NULL) { ?>
											<div class="inbox-wid">
												<div class="inbox-item">
													<table>
														<tr>
															<td>
																<p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
															</td>
															<td>
																<p class="inbox-item-author mt-0 mb-1 text-size"><b>Sudah tanda tangan Kerjasama</b></p>
															</td>
															<td>
																<p class="inbox-item-date text-muted mt-1 mb-0 text-size"><?= $ticket->tanggal_verified_ttd ?></p>
															</td>
														</tr>
														<tr>
															<td></td>
															<td>
																<p class="inbox-item-text text-muted mb-0 text-size">Oleh&nbsp;&nbsp;<?= $ticket->nama_user_verified ?></p>
															</td>
															<td></td>
														</tr>
													</table>
												</div>
											</div>
										<?php } ?>
										<?php if (($this->fungsi->user_login()->level < 4) && ($ticket->form_mou == NULL || $ticket->form_mou == '')) { ?>
											<div class="inbox-wid">
												<div class="inbox-item">
													<table>
														<tr>
															<td>

															</td>
															<td>
																<p class="inbox-item-author mt-0 mb-1 ml-3 text-size"><b>Kerjasama?</b></p>
															</td>
														</tr>
														<tr>
															<td>

															</td>
															<td>
																<div class="form-group ml-3">
																	<div class="form-check form-check-inline">
																		<input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $ticket->ttd_pks == 'Ya' ? 'checked' : '' ?> value="Ya">
																		<label class="form-check-label">
																			Ya
																		</label>
																	</div>
																	<div class="form-check form-check-inline">
																		<input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $ticket->ttd_pks == 'Tidak' ? 'checked' : '' ?> value="Tidak">
																		<label class="form-check-label">
																			Tidak
																		</label>
																	</div>
																</div>
																<div id="form_mou" class="form-group ml-3">
																	<form action="<?= base_url('ticket/upload_mou') ?>" method="post" enctype="multipart/form-data">
																		<input type="hidden" name="id_ticket" value="<?= $ticket->id_ticket ?>">
																		<input type="hidden" name="redirect" value="<?= uri_string() ?>">
																		<div class="form-group mr-2">
																			<label>Form MOU</label>
																			<input type="file" name="upload_mou" class="filestyle" data-buttonname="btn-secondary">
																		</div>
																		<div class="form-group">
																			<button class="btn btn-success" id="btn_upload" type="submit">Upload</button>
																		</div>
																	</form>
																</div>
															</td>
														</tr>
													</table>
												</div>
											</div>
										<?php } ?>
									</div>
								</div>

								<div class="mobile">
									<h6 class="header-title mb-0">STATUS PARTNER</h6>
									<?php if ($ticket->status_approval == 5) { ?>
										<div class="inbox-wid">
											<div class="inbox-item">
												<table class="text-size">
													<tr>
														<td>
															<p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
														</td>
														<td>
															<p class="inbox-item-author mt-0 mb-1"><b>Terverifikasi</b></p>
														</td>
													</tr>
													<tr>
														<td></td>
														<td>
															<p class="inbox-item-text text-muted mb-0">Oleh&nbsp;&nbsp;<?= $ticket->nama_user_completed ?></p>
														</td>
													</tr>
													<tr>
														<td></td>
														<td>
															<p class="inbox-item-text text-muted"><?= $ticket->tanggal_completed ?></p>
														</td>
													</tr>
												</table>
											</div>
										</div>
									<?php } else { ?>
										<div class="inbox-wid">
											<div class="inbox-item">
												<table class="text-size">
													<tr>
														<td>
															<p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-timer-sand"></i>&nbsp;</p>
														</td>
														<td>
															<p class="inbox-item-author mt-0 mb-1"><b>Belum Diverifikasi</b></p>
														</td>
													</tr>
												</table>
											</div>
										</div>
									<?php } ?>
									<?php if ($ticket->ttd_pks == 'Ya' && $ticket->form_mou != NULL) { ?>
										<div class="inbox-wid">
											<div class="inbox-item">
												<table class="text-size">
													<tr>
														<td>
															<p class="inbox-item-author mt-0 mb-1"><i class="mdi mdi-account-check"></i>&nbsp;</p>
														</td>
														<td>
															<p class="inbox-item-author mt-0 mb-1"><b>Sudah tanda tangan Kerjasama</b></p>
														</td>
													</tr>
													<tr>
														<td></td>
														<td>
															<p class="inbox-item-text text-muted mb-0">Oleh&nbsp;&nbsp;<?= $ticket->nama_user_verified ?></p>
														</td>
													</tr>
													<tr>
														<td></td>
														<td>
															<p class="inbox-item-text text-muted"><?= $ticket->tanggal_verified_ttd ?></p>
														</td>
													</tr>
												</table>
											</div>
										</div>
									<?php } ?>
									<?php if (($this->fungsi->user_login()->level < 4) && ($ticket->form_mou == NULL || $ticket->form_mou == '')) { ?>
										<div class="inbox-wid">
											<div class="inbox-item">
												<table>
													<tr>
														<td>

														</td>
														<td>
															<p class="inbox-item-author mt-0 mb-1 ml-3 text-size"><b>Kerjasama?</b></p>
														</td>
													</tr>
													<tr>
														<td>

														</td>
														<td>
															<div class="form-group ml-3">
																<div class="form-check form-check-inline">
																	<input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $ticket->ttd_pks == 'Ya' ? 'checked' : '' ?> value="Ya">
																	<label class="form-check-label">
																		Ya
																	</label>
																</div>
																<div class="form-check form-check-inline">
																	<input class="form-check-input ttd_pks" type="radio" name="ttd_pks" <?= $ticket->ttd_pks == 'Tidak' ? 'checked' : '' ?> value="Tidak">
																	<label class="form-check-label">
																		Tidak
																	</label>
																</div>
															</div>
															<div id="form_mou" class="form-group ml-3">
																<form action="<?= base_url('ticket/upload_mou') ?>" method="post" enctype="multipart/form-data">
																	<input type="hidden" name="id_ticket" value="<?= $ticket->id_ticket ?>">
																	<input type="hidden" name="redirect" value="<?= uri_string() ?>">
																	<div class="form-group mr-2">
																		<label>Form MOU</label>
																		<input type="file" name="upload_mou" class="filestyle" data-buttonname="btn-secondary">
																	</div>
																	<div class="form-group">
																		<button class="btn btn-success" id="btn_upload" type="submit">Upload</button>
																	</div>
																</form>
															</div>
														</td>
													</tr>
												</table>
											</div>
										</div>
									<?php } ?>
								</div> -->

								<h4 class="header-title mt-2 mb-0">LAMPIRAN</h4>
								<div class="inbox-wid">
									<div class="inbox-item">
										<table>
											<tr>
												<td>
													<p class="inbox-item-author mt-0 mb-1"><i class="fas fa-download"></i>&nbsp;</p>
												</td>
												<td>
													<p class="inbox-item-author mt-0 mb-1 text-size"><b><a href="<?= base_url('zip/create_zip/' . $ticket->id_ticket . '/partners') ?>">Download Semua Lampiran</b></a></p>
												</td>
											</tr>
										</table>

									</div>
								</div>
							</div>

							<div class="tab-pane p-3" id="profile1" role="tabpanel">
								<div class="box overflow-auto">
									<?php foreach ($comments->result() as $comment) { ?>
										<div class="media mb-1">
											<a class="image-popup-vertical-fit" href="<?= $comment->foto != '' ? base_url('uploads/foto_profil/' . $comment->foto) : base_url('assets/img/profile-pic.jpg')  ?>" title="Foto Profile.">
												<img class="d-flex align-self-start rounded mr-3" alt="" src="<?= $comment->foto != '' ? base_url('uploads/foto_profil/' . $comment->foto) : base_url('assets/img/profile-pic.jpg')  ?>" height="64" width="64">
											</a>
											<div class="media-body b">
												<p class="mb-0"><b><?= $comment->name ?></b></p>
												<p class="text-size mt-0 mb-0"><?= $comment->tanggal ?></p>
												<p class="text-size mt-0"><?= $comment->comment ?></p>
											</div>
										</div>
										<hr>
									<?php } ?>
								</div>
								<form action="<?= base_url('Comment/save') ?>" method="post">
									<input type="hidden" name="id_type" id="id_type" value="<?= $data->id_partner ?>">
									<input type="hidden" name="ticket" id="ticket" value="<?= $ticket->id_ticket ?>">
									<input type="hidden" name="uri_string" id="uri_string" value="<?= uri_string() ?>">
									<div class="form-group">
										<label>Comment</label>
										<textarea class="form-control" name="comment" id="comment-text" cols="30" rows="10" required placeholder="tulis comment disini"></textarea>
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
						<?php foreach ($mappings->result() as $mapping) { ?>
							<tr>
								<td>
									<div class="text-size"><?= $mapping->nama_konsumen ?></div>
								</td>
								<td>
									<div class="text-size"><?= $mapping->telepon ?></div>
								</td>
								<td>
									<div class="text-size"><?= $mapping->soa ?></div>
								</td>
								<td>
									<div class="text-size"><?= $mapping->produk ?></div>
								</td>
								<td>
									<center><button class="btn btn-primary pilih-leads" data-mapping="<?= $mapping->mapping_id ?>" data-nama="<?= $mapping->nama_konsumen ?>" data-telepon="<?= $mapping->telepon ?>" data-soa="<?= $mapping->soa ?>" data-produk="<?= $mapping->produk ?>" data-detail="<?= $mapping->detail_produk ?>" data-event="<?= $mapping->nama_event ?>" data-kontrak="<?= $mapping->nomor_kontrak ?>" data-referral="<?= $mapping->referral_konsumen ?>" data-nikegc="<?= $mapping->nik_egc ?>" data-posisiegc="<?= $mapping->posisi_egc ?>" data-cabangegc="<?= $mapping->cabang_egc ?>">Pilih</button></center>
								</td>
							</tr>
						<?php } ?>
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
				<table id="" class="datatable table table-striped table-bordered dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
						<tr>
							<th>Name Usaha</th>
							<th>Kategori Produk</th>
							<th>Telepon</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($partners->result() as $partner) { ?>
							<tr>
								<td><?= $partner->nama_usaha ?></td>
								<td><?= $partner->kategori_produk ?></td>
								<td><?= $partner->telepon ?></td>
								<td>
									<?php if ($partner->status == 'draft') { ?>
										<span class="badge badge-secondary">Draft</span>
									<?php } ?>
									<?php if ($partner->status == 'lengkap') { ?>
										<span class="badge badge-success">Lengkap</span>
									<?php } ?>
								</td>
								<td>
									<center><button class="btn btn-primary pilih-partner" data-partner="<?= $partner->id_partner ?>" data-vendor="<?= $partner->nama_usaha ?>">Pilih</button></center>
								</td>
							</tr>
						<?php } ?>
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
				<table id="" class="datatable table table-striped table-bordered dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
						<tr>
							<th>Nama Lengkap</th>
							<th>Telepon</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($agents->result() as $agent) { ?>
							<tr>
								<td><?= $agent->nama_lengkap ?></td>
								<td><?= $agent->telepon ?></td>
								<td>
									<center><button class="btn btn-primary pilih-agent" data-agent="<?= $agent->id_agent ?>" data-namaagent="<?= $agent->nama_lengkap ?>">Pilih</button></center>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- Modal agent -->

<script>
	$('.travel, .agent, .jasa, .event, .btn-data, .form, .form-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor').hide();
	source_leads();
	$('#soa').change(function() {
		source_leads();
		$('#id_partner').val("");
		$('#id_agent').val("");
		$('#nama_vendor').val("").removeAttr("required");
		$('#nama_event').val("");
		$('#data_partner').val("");
		$('#data_agent').val("");
	})

	function source_leads() {
		if ($('#soa').val() == 'Direct Selling') {
			$('.vendor, .form, .btn-data').show();
			$('#data_partner').attr('placeholder', 'Pilih Nama Partner');
			$('#btn-data').attr('data-target', '#modal-partner');
			$('#data_partner').attr('required', 'required');
			$('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent').hide();
		} else if ($('#soa').val() == 'Tour & travel') {
			$('.travel, .form, .btn-data').show();
			$('#data_partner').attr('placeholder', 'Pilih Nama Travel')
			$('#btn-data').attr('data-target', '#modal-partner')
			$('.agent, .jasa, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, .form-agent').hide();
		} else if ($('#soa').val() == 'Penyedia Jasa') {
			$('.jasa, .form, .btn-data').show();
			$('#data_partner').attr('placeholder', 'Pilih Nama Penyedia Jasa')
			$('#btn-data').attr('data-target', '#modal-partner')
			$('.agent, .travel, .event, .modal-agent, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .vendor, .form-agent').hide();
		} else if ($('#soa').val() == 'Agent BA') {
			$('.vendor, .agent, .form, .agent-form, .btn-data, .form-agent').show();
			$('#data_partner').attr('placeholder', 'Pilih Nama Partner')
			$('#btn-data').attr('data-target', '#modal-partner')
			$('#data_agent').attr('placeholder', 'Pilih Nama Agent')
			$('#btn-data-agent').attr('data-target', '#modal-agent')
			$('.travel, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro').hide();
		} else if ($('#soa').val() == 'EGC') {
			$('.nik, .posisi, .cabang, .vendor, .form, .btn-data').show();
			$('#data_partner').attr('placeholder', 'Pilih Nama Partner');
			$('#btn-data').attr('data-target', '#modal-partner');
			$('.travel, .agent, .jasa, .event, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent').hide();
		} else if ($('#soa').val() == 'RO' || $('#soa').val() == 'CGC') {
			$('.kontrak-ro, .konsumen-ro, .vendor, .form, .btn-data').show();
			$('#data_partner').attr('placeholder', 'Pilih Nama Partner');
			$('#btn-data').attr('data-target', '#modal-partner');
			$('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .form-agent').hide();
		} else if ($('#soa').val() == 'Digital Marketing') {
			$('.vendor, .form, .btn-data').show();
			$('#data_partner').attr('placeholder', 'Pilih Nama Partner')
			$('#btn-data').attr('data-target', '#modal-partner')
			$('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent').hide();
		} else if ($('#soa').val() == 'Website BFI Syariah') {
			$('.vendor, .form, .btn-data').show();
			$('#data_partner').attr('placeholder', 'Pilih Nama Partner')
			$('#btn-data').attr('data-target', '#modal-partner')
			$('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent').hide();
		} else if ($('#soa').val() == 'Walk In') {
			$('.vendor, .form, .btn-data').show();
			$('#data_partner').attr('placeholder', 'Pilih Nama Partner')
			$('#btn-data').attr('data-target', '#modal-partner')
			$('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent').hide();
		} else if ($('#soa').val() == 'Event Promotion') {
			$('.event, .vendor, .form, .btn-data').show();
			$('#data_partner').attr('placeholder', 'Pilih Nama Partner')
			$('#btn-data').attr('data-target', '#modal-partner')
			$('.travel, .agent, .jasa, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent').hide();
		} else if ($('#soa').val() == 'Tele Marketing') {
			$('.vendor, .form, .btn-data').show();
			$('#data_partner').attr('placeholder', 'Pilih Nama Partner')
			$('#btn-data').attr('data-target', '#modal-partner')
			$('.travel, .agent, .jasa, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent').hide();
		} else {
			$('.jasa, .travel, .agent, .form, .event, .nik, .posisi, .cabang, .kontrak-cgc, .konsumen-cgc, .kontrak-ro, .konsumen-ro, .form-agent').hide();
		}
	}
</script>

<script>
	$("table").on('click', '.pilih-partner', function() {
		$('#id_partner').val($(this).data('partner'));
		// $('#id_agent').val("");
		$('#nama_vendor').val($(this).data('vendor'));
		$('#data_partner').val($(this).data('vendor'));
		$('#modal-partner').modal('hide');
	})
	$("table").on('click', '.pilih-agent', function() {
		$('#id_agent').val($(this).data('agent'));
		// $('#id_partner').val("");
		$('#data_agent').val($(this).data('namaagent'));
		$('#modal-agent').modal('hide');
	})
	$("table").on('click', '.pilih-leads', function() {
		$('#id_mapping_leads').val($(this).data('mapping'));
		$('#soa').val($(this).data('soa'));
		//EGC
		$('#nik_egc').val($(this).data('nikegc'));
		$('#posisi_egc').val($(this).data('posisiegc'));
		$('#cabang_egc').val($(this).data('cabangegc'));
		//CGC / RO
		$('#nomor_kontrak').val($(this).data('kontrak'));
		$('#referral_konsumen').val($(this).data('referral'));

		//Data Leads
		$('#produk').val($(this).data('produk'));
		$('#telepon').val($(this).data('telepon'));
		$('#data_partner').val($(this).data('vendor'));
		$('#detail_produk').val($(this).data('detail'));
		$('#nama_event').val($(this).data('event'));
		$('#nama_konsumen').val($(this).data('nama'));
		$('#modal-leads').modal('hide');

		source_leads();
	})
</script>

<script>
	if ($("input[name='cross_branch']:checked").val() == 'Ya') {
		$("#surveyor, #pic_ttd").attr('disabled', 'disabled');
	} else {
		$("#surveyor, #pic_ttd").removeAttr('disabled');
	}

	$("input[name='cross_branch']").click(function() {
		if ($(this).val() == 'Ya') {
			$("#surveyor, #pic_ttd").attr('disabled', 'disabled');
			$("input:hidden[name='surveyor'], input:hidden[name='pic_ttd']").removeAttr('disabled');
		} else {
			$("#surveyor, #pic_ttd").removeAttr('disabled');
			$("input:hidden[name='surveyor'], input:hidden[name='pic_ttd']").attr('disabled', 'disabled');
		}
	})
</script>