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
		
		<div class="card">
			<div class="card-body">
				<div id="hilang" style="height: 500px;">
					<div id="loader"></div>
				</div>
				<div style="display:none;" id="myDiv" class="animate-bottom">
				<div class="tab-pane active p-3" id="home2" role="tabpanel">
					<form class="" action="<?= base_url('Leads/update_detail') ?>" method="post">
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
						<fieldset disabled>
						<div class="form-row">
							<div class="col-md-12">
								<div class="form-group ml-3 mr-3">
									<label>Leads ID</label>
									<input type="text" class="form-control placement" name="leads_id" id="leads_id" value="<?= $data->leads_id ?>" required placeholder="009377736433744" maxlength="15">
									<input type="hidden" name="leads_id" value="<?= $data->leads_id ?>">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-12">
								<div class="form-group ml-3 mr-3">
									<label>Nama Konsumen</label>
									<input type="text" class="form-control placement" name="nama_konsumen" id="nama_konsumen" value="<?= $data->nama_konsumen ?>" required placeholder="009377736433744" maxlength="15">
									<input type="hidden" name="nama_konsumen" value="<?= $data->nama_konsumen ?>">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-group ml-3 mr-3">
									<label>ID KTP</label>
									<input type="phone" class="form-control placement number-only" name="no_ktp" id="no_ktp" value="<?= $data->no_ktp ?>" required placeholder="0786 6875 8725 3564" maxlength="16" />
									<input type="hidden" name="no_ktp" value="<?= $data->no_ktp ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group ml-3 mr-3">
									<label>Nomor Telepon / Whatsapp</label>
									<input type="text" class="form-control placement number-only" name="telepon" id="telepon" value="<?= $data->telepon ?>" required placeholder="0811977500" maxlength="15" />
									<input type="hidden" name="telepon" value="<?= $data->telepon ?>">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-group mr-3 ml-3">
									<label>Produk</label>
									<select class="form-control" name="produk" id="produk">
										<option selected>Pilih Kategori Produk</option>
										<option <?= $data->produk == 'My Ihram' ? 'selected' : '' ?> value="My Ihram">My Ihram</option>
										<option <?= $data->produk == 'My Safar' ? 'selected' : '' ?> value="My Safar">My Safar</option>
										<option <?= $data->produk == 'My Talim' ? 'selected' : '' ?> value="My Talim">My Talim</option>
										<option <?= $data->produk == 'My Hajat' ? 'selected' : '' ?> value="My Hajat">My Hajat</option>
										<option <?= $data->produk == 'My Faedah' ? 'selected' : '' ?> value="My Faedah">My Faedah</option>
										<option <?= $data->produk == 'My CarS' ? 'selected' : '' ?> value="My CarS">My CarS</option>
									</select>
									<input type="hidden" name="produk" value="<?= $data->produk ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group mr-3 ml-3">
									<label>Detail Produk</label>
									<input type="text" class="form-control" name="detail_produk" id="detail_produk" value="<?= $data->detail_produk ?>" required placeholder="Detail produk" />
									<input type="hidden" name="detail_produk" value="<?= $data->detail_produk ?>">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-group mr-3 ml-3">
									<label>Asal Aplikasi</label>
									<select class="form-control" name="soa" id="soa">
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
										<option <?= $data->soa == 'Walking' ? 'selected' : '' ?> value="Walking">Walking</option>
										<option <?= $data->soa == 'Event' ? 'selected' : '' ?> value="Event">Event</option>
									</select>
									<input type="hidden" name="soa" value="<?= $data->soa ?>">
								</div>
							</div>
							<div class="col-md-6 form">
								<div class="form-group ml-3 mr-3">
								<label class="travel">Pilih Data Travel</label>
								<label class="jasa">Pilih Data Penyedia Jasa</label>
								<label class="agent">Pilih Data Agent</label>
									<input type="text" class="form-control text-size" value="" name="data_partner" id="data_partner" value="<?= $data->nama_vendor ?>">
								</div>
							</div>
							<div class="col-md-6 nik">
								<div class="form-group ml-3 mr-3">
									<label>NIK</label>
									<input type="phone" class="form-control text-size placement number-only" value="<?= $data->nik_egc ?>" name="nik_egc" id="nik_egc" placeholder="078612" maxlength="6" />
									<input type="hidden" name="nik_egc" value="<?= $data->nik_egc ?>">
								</div>
							</div>
							<div class="col-md-6 event">
								<div class="form-group ml-3 mr-3">
									<label>Nama Event</label>
									<input type="text" class="form-control text-size" value="<?= $data->nama_event ?>" name="nama_event" id="nama_event" placeholder="Input Nama Event">
									<input type="hidden" name="nama_event" value="<?= $data->nama_event ?>">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 posisi">
								<div class="form-group ml-3 mr-3">
									<label>Posisi</label>
									<input type="text" class="form-control text-size" value="<?= $data->posisi_egc ?>" name="posisi_egc" id="posisi_egc" placeholder="Input Posisi">
									<input type="hidden" name="posisi_egc" value="<?= $data->posisi_egc ?>">
								</div>
							</div>
							<div class="col-md-6 cabang">
								<div class="form-group ml-3 mr-3">
									<label>Cabang</label>
									<input type="text" class="form-control text-size" value="<?= $data->cabang_egc ?>" name="cabang_egc" id="cabang_egc" placeholder="Input Cabang">
									<input type="hidden" name="cabang_egc" value="<?= $data->cabang_egc ?>">
								</div>
							</div>
							<div class="col-md-6 kontrak-ro">
								<div class="form-group ml-3 mr-3">
									<label>Nomor Kontrak</label>
									<input type="phone" class="form-control text-size number-only" value="<?= $data->nomor_kontrak ?>" name="nomor_kontrak" id="nomor_kontrak" placeholder="087883774" />
									<input type="hidden" name="nomor_kontrak" value="<?= $data->nomor_kontrak ?>">
								</div>
							</div>
							<div class="col-md-6 konsumen-ro">
								<div class="form-group ml-3 mr-3">
									<label>Nama Konsumen</label>
									<input type="text" class="form-control text-size" value="<?= $data->referral_konsumen ?>" name="referral_konsumen" id="referral_konsumen" placeholder="Input Nama konsumen">
									<input type="hidden" name="referral_konsumen" value="<?= $data->referral_konsumen ?>">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6">
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
									<input type="hidden" name="cross_branch" value="<?= $data->cross_branch ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div id="hide" class="form-group ml-3 mr-3">
									<label>Pilih cabang</label>
									<select class="form-control" name="cabang_cross" id="cabang_cross">
										<option selected disabled value="">Pilih Cabang</option>
										<?php foreach ($branches->result() as $branch) { ?>
											<option <?= $branch->id_branch == $data->cabang_cross ? 'selected' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
										<?php } ?>
									</select>
									<input type="hidden" name="cabang_cross" value="<?= $data->cabang_cross ?>">
								</div>
							</div>
						</div>
						</fieldset>
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-group ml-3 mr-3 pic_ttd">
									<label>Pic Tanda Tangan</label>
									<select class="form-control text-size" name="pic_ttd" id="pic_ttd">
										<option value="" selected>Pilih Pic Tanda Tangan</option>
										<optgroup id="show_pic_ttd">

										</optgroup>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group ml-3 mr-3 surveyor">
									<label>Surveyor</label>
									<select class="form-control text-size" name="surveyor" id="surveyor">
										<option value="" selected>Pilih Surveyor</option>
										<optgroup id="show_surveyor">

										</optgroup>
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
										<option <?= $data->follow_up_by == 'Kunjungan' ? 'selected' : '' ?> value="Kunjungan">Kunjungan</option>
										<option <?= $data->follow_up_by == 'Telepon' ? 'selected' : '' ?> value="Telepon">Telepon</option>
										<option <?= $data->follow_up_by == 'Whatsapp' ? 'selected' : '' ?> value="Whatsapp">Whatsapp</option>
										<option <?= $data->follow_up_by == 'Email' ? 'selected' : '' ?> value="Email">Email</option>
									</select>
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
									<input type="text" class="form-control text-size mr-4 number-only" name="nilai_funding" id="nilai_funding" data-type="currency" value="<?= $data->nilai_funding ?>" required placeholder="3000000" aria-label="Username" aria-describedby="addon-wrapping">
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6">
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
							</div>
							<div class="col-md-6">
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
							</div>
						</div>
						<div class="form-group mb-0 mt-2 float-right btn-maintain">
							<?php
							$level = $this->fungsi->user_login()->level;
							if (($level != 1) && (($level == 2 && $ticket->status_approval == 0) || ($level == 3 && $ticket->status_approval == 1) || ($level == 4 && $ticket->status_approval == 2))) {
							?>
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
                                                                <p class="inbox-item-text text-muted mb-0"><?= $activity->date_activity ?></p>
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

                                <div class="web mt-2">
                                    <h6 class="header-title mb-0 mt-0">STATUS PARTNER</h6>
                                    <div class="boxx overflow-auto">
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
                                                        <tr>
                                                            <td></td>
                                                            <td>
                                                                <p class="inbox-item-text text-muted mb-0 text-size">Oleh&nbsp;&nbsp;Admin HO</p>
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
                                        <?php if ($ticket->status_approval == 5  && ($this->fungsi->user_login()->level < 4)) { ?>
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
                                                            <p class="inbox-item-text text-muted mb-0">Oleh&nbsp;&nbsp;Teri Anggraini</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted">30 Des, 2019</p>
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
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            <p class="inbox-item-text text-muted mb-0">Oleh&nbsp;&nbsp;Admin HO</p>
                                                        </td>
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
                                    <?php if ($ticket->status_approval == 5  && ($this->fungsi->user_login()->level < 4)) { ?>
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
                                <div class="overflow-auto" style=" max-height: 310px;">
                                    <?php foreach ($comments->result() as $comment) { ?>
                                        <div class="media mb-1">
                                            <a class="image-popup-vertical-fit" href="<?= $comment->foto != '' ? base_url('uploads/foto_profil/' . $comment->foto) : base_url('assets/img/profile-pic.jpg')  ?>" title="Foto Profile.">
                                                <img class="d-flex align-self-start rounded mr-3" alt="" src="<?= $comment->foto != '' ? base_url('uploads/foto_profil/' . $comment->foto) : base_url('assets/img/profile-pic.jpg')  ?>" height="64">
                                            </a>
                                            <div class="media-body b">
                                                <p class="mb-0"><b><?= $comment->name ?></b></p>
                                                <p class="text-size mt-0"><?= $comment->comment ?></p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <form action="<?= base_url('Comment/save') ?>" method="post">
                                    <input type="hidden" name="id_type" id="id_type" value="<?= $data->id_partner ?>">
                                    <input type="hidden" name="ticket" id="ticket" value="<?= $ticket->id_ticket ?>">
                                    <input type="hidden" name="uri_string" id="uri_string" value="<?= uri_string() ?>">
                                    <div class="form-group">
                                        <label>Comment</label>
                                        <textarea class="form-control" name="comment" id="comment" cols="30" rows="10" required placeholder="tulis comment disini" style="height:80px;"></textarea>
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

<script>
	$("table").on('click', '.pilih-partner', function() {
		$('#id_partner').val($(this).data('partner'));
		$('#id_agent').val("");
		$('#nama_vendor').val($(this).data('vendor'));
		$('#data_partner').val($(this).data('vendor'));
		$('#modal-partner').modal('hide');
	})
	$("table").on('click', '.pilih-agent', function() {
		$('#id_agent').val($(this).data('agent'));
		$('#id_partner').val("");
		$('#data_partner').val($(this).data('namaagent'));
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
