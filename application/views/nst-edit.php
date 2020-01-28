<div class="row">
    <div class="col-md-12 mt-5">
        <div class="ml-3 mr-3">
            <div class="card m-b-20">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Form NST</h4>
                    <p class="text-muted m-b-30 text-size">Cari data menggunakan tombol search di bawah
                        ini.</p>
                    <form class="" method="post" action="<?= base_url('nst/update') ?>">
                        <!-- ID NST -->
                        <input type="hidden" name="id_nst" value="<?= $data->id_nst ?>">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="ml-3 mr-3">
                                    <label>Leads ID</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control <?= form_error('leads_id') ? 'is-invalid' : '' ?>" name="leads_id" id="leads_id" value="<?= $data->leads_id ?>" required placeholder="202001SLOS12345" readonly>
                                        <!-- <div class="input-group-append">
                                            <button class="btn btn-danger text-size" type="button" id="reset">x</button>
                                            <button class="btn btn-primary" type="button" id="button-addon2" data-toggle="modal" data-target=".modal-leads"><span class="ion-ios7-search-strong"></span></button>
                                        </div> -->
                                    </div>
                                    <?= form_error('leads_id') ?>
                                    <div class="form-group">
                                        <label>Cabang</label>
                                        <input type="text" class="form-control" name="cabang" id="cabang" required value="<?= $data->nama_cabang ?>" placeholder="Cabang" readonly />
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori produk</label>
                                        <input type="text" class="form-control" name="kategori_produk" id="produk" required value="<?= $data->produk ?>" placeholder="Kategori produk" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ml-3 mr-3">
                                    <div class="form-group">
                                        <label>Requester</label>
                                        <div>
                                            <input type="text" class="form-control" name="requester" id="requester" parsley-type="requester" required value="<?= $data->name ?>" placeholder="Requester" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama konsumen</label>
                                        <input type="text" class="form-control" name="nama_konsumen" id="nama_konsumen" required value="<?= $data->nama_konsumen ?>" placeholder="Nama Konsumen" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0 float-right ml-3 mr-3">
                                    <?php
                                    $level = $this->fungsi->user_login()->level;
                                    if (($level != 1) && (($level == 2 && $ticket->status_approval == 0) || ($level == 3 && $ticket->status_approval == 1) || ($level == 4 && $ticket->status_approval == 2))) {
                                    ?>
                                        <a class="btn btn-info text-size" onclick="return confirm('Apakah Anda yakin MENYETUJUI data tiket ini?')" href="<?= base_url('ticket/approve_status/' . $ticket->id_ticket) ?>">Approve</a>
                                    <?php } ?>
                                    <?php if ($level == 4 && $ticket->status_approval == 2) { ?>
                                        <a class="btn btn-danger text-size" onclick="return confirm('Apakah Anda yakin MENOLAK data tiket ini?')" href="<?= base_url('ticket/reject_status/' . $ticket->id_ticket) ?>">Reject</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>