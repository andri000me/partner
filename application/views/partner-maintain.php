<div class="row mt-5">
    <div class="col-lg-8">
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
                <h4 class="mt-0 header-title">Mapping Lokasi Partner</h4>
                <p class="text-muted m-b-30">Gunakan form ini untuk mendata calon partner yang berpotensi di
                    area cabang anda. Pastikan anda memasukan data yang valid agar memudahkan anda dalam
                    memaintain partner anda.</p>

                <form class="" action="<?= base_url('Maintain_partner/save') ?>" method="post" enctype="multipart/form-data">
                    <!-- ID Partner -->
                    <input type="hidden" name="id_partner" value="<?= $data->id_partner ?>">
                    <!-- ID user -->
                    <input type="hidden" name="id_user" value="<?= $this->fungsi->user_login()->id_user ?>">
                    <!-- ID branch -->
                    <input type="hidden" name="id_branch" value="<?= $this->fungsi->user_login()->id_branch ?>">
                    <div class="form-group">
                        <label>Upload Foto Kegiatan</label>
                        <input type="file" class="form-control" name="photo_activity" id="photo_activity" required placeholder="Silahkan Upload Foto Kegiatan" />
                    </div>
                    <div class="form-group">
                        <label>Jenis Kegiatan</label>
                        <select class="form-control" name="jenis_kegiatan" id="jenis_kegiatan">
                            <option selected>Pilih Jenis Kegiatan</option>
                            <option value="Update produk">Update produk</option>
                            <option value="Silaturahmi">Silaturahmi</option>
                            <option value="Presentasi">Presentasi</option>
                            <option value="Follow Up Leads">Follow Up Leads</option>
                            <option value="Update Usaha">Update Usaha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Catatan</label>
                        <textarea class="form-control" name="catatan" id="catatan" cols="30" rows="10" required placeholder="isi jika anda informasi tambahan" style="height:110px;"></textarea>
                    </div>
                    <div class="form-group mb-0 float-right mt-2">
                        <div>
                            <button type="cancle" class="btn btn-secondary waves-effect waves-light">
                                Batal
                            </button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="">
            <div class="card ml-3">
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
                    <p class="text-muted"><i class="mdi mdi-account-check"></i>&nbsp;&nbsp;&nbsp;Terverifikasi Oleh Teri
                        Anggraini<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <code style="color: blue;">30 Des, 2019 -
                            Admin HO</code>
                    </p>
                    <p class="text-muted m-b-10"><i class="mdi mdi-checkbox-marked"></i>&nbsp;&nbsp;&nbsp;Sudah tanda tangan
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
                </div>
            </div>
        </div>
    </div>
</div>