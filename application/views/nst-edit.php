<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-5">
            <h4><b>Detail NST</b></h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Helpdesk</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('nst') ?>">NST</a></li>
                <li class="breadcrumb-item active">Edit NST</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card m-b-20 card-margin-5">
            <div class="card-body">
                <div class="ml-4">
                    <h4 class="mt-0 mb-4 header-title"><b>Data NST</b></h4>
                </div>
                <etail class="" method="post" action="<?= base_url('nst/update') ?>">
                    <!-- ID NST -->
                    <input type="hidden" name="id_nst" value="<?= $data->id_nst ?>">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-margin">
                                <label>Leads ID</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control <?= form_error('leads_id') ? 'is-invalid' : '' ?>" name="leads_id" id="leads_id" value="<?= $data->leads_id ?>" required placeholder="202001SLOS12345" readonly>
                                </div>
                                <?= form_error('leads_id') ?>
                            </div>
                            <div class="form-group form-margin">
                                <label>Cabang</label>
                                <input type="text" class="form-control" name="cabang" id="cabang" required value="<?= $data->nama_cabang ?>" placeholder="Cabang" readonly />
                            </div>
                            <div class="form-group form-margin">
                                <label>Kategori produk</label>
                                <input type="text" class="form-control" name="kategori_produk" id="produk" required value="<?= $data->produk ?>" placeholder="Kategori produk" readonly />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-margin">
                                <label>Requester</label>
                                <div>
                                    <input type="text" class="form-control" name="requester" id="requester" parsley-type="requester" required value="<?= $data->name ?>" placeholder="Requester" readonly />
                                </div>
                            </div>
                            <div class="form-group form-margin">
                                <label>Nama konsumen</label>
                                <input type="text" class="form-control" name="nama_konsumen" id="nama_konsumen" required value="<?= $data->nama_konsumen ?>" placeholder="Nama Konsumen" readonly />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h5 class="form-margin"><b>Lampiran</b></h5>
                            <div class="owl-carousel owl-theme">
                                <?php
                                $uploads =  explode(",", $data->upload_file);
                                foreach ($uploads as $upload) {
                                ?>
                                    <!-- NPWP -->
                                    <div class="item" style="height:150px; width:300px;">
                                        <?php if (get_extension($upload)) { ?>
                                            <div class="zoom-gallery">
                                                <a href="<?= base_url('uploads/nst/' . $upload) ?>">
                                                    <img src="<?= base_url('uploads/nst/' . $upload) ?>" alt="" style="height:150px; width:300px;"></a>
                                            </div>
                                        <?php } else { ?>
                                            <a href="<?= base_url('uploads/nst/' . $upload) ?>">
                                                <div class="card text-center" style="height: 150px; width: 300px" data-toggle="tooltip" title="<?= $upload ?>">
                                                    <i class="fa fa-file fa-5x"></i>
                                                    <!-- <span class="small"><?= $upload ?></span> -->
                                                </div>
                                            </a>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="form-group mb-0 float-right ml-4 mr-4">
                                <?php
                                $level = $this->fungsi->user_login()->level;
                                if (
                                    //Bukan CMS
                                    ($level != 1) &&
                                    // Head & Menunggu Persetujuan Head 
                                    (
                                        ($level == 2 && $ticket->status_approval == 0) ||
                                        // Manager & Menunggu Persetujuan Manager 
                                        ($level == 3 && $ticket->status_approval == 1) ||
                                        // Admin & Pending HO 
                                        ($level == 4 && $ticket->status_approval == 2) ||
                                        // Head HO & Disetujui 
                                        ($level == 5 && $ticket->status_approval == 5))
                                ) {
                                ?>
                                    <a class="btn btn-info text-size ml-1 mb-1" onclick="return confirm('Apakah Anda yakin MENYETUJUI data tiket ini?')" href="<?= base_url('ticket/approve_status/' . $ticket->id_ticket . '/partner') ?>"><b>Approve</b></a>
                                <?php } ?>
                                <?php if ($level == 4 && $ticket->status_approval == 2) { ?>
                                    <a class="btn btn-danger text-size ml-1 mb-1" onclick="return confirm('Apakah Anda yakin MENOLAK data tiket ini?')" href="<?= base_url('ticket/reject_status/' . $ticket->id_ticket . '/partner') ?>"><b>Reject</b></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </etail>
            </div>
        </div>
    </div>
</div>

<!-- modal reject -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b>Alasan Reject</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group form-margin">
                        <label class="text-size">Alasan reject</label>
                        <select class="form-control text-size" name="alasan" id="alasan" required>
                            <option selected value="">Pilih Alasan</option>
                            <option value="Administration">Administration</option>
                            <option value="Capacity">Capacity</option>
                            <option value="Pefindo">Pefindo</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><b>Close</b></button>
                <a class="btn btn-primary text-size" onclick="return confirm('Apakah Anda yakin MENOLAK data tiket ini?')" href="<?= base_url('ticket/reject_status/' . $ticket->id_ticket) ?>"><b>Simpan</b></a>
            </div>
        </div>
    </div>
</div>
<!-- modal reject -->