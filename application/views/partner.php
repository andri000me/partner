<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4 class="page-title">Daftar Merchant</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-size"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item text-size"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item text-size active">Daftar Merchant</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <!-- <a href="<?= base_url('Partner/create') ?>"><button class="btn btn-primary mb-4">Rekrut Partner</button></a>
            <a href="#"><button class="btn btn-success ml-3 mb-4" data-toggle="modal" data-target=".bd-example-modal-xl">Maintain Partner</button></a> -->
        <?php if ($this->fungsi->user_login()->level != 4) { ?>
            <div class="btn-kanan mb-2 card-margin-2">
                <a href="<?= base_url('Partner/create') ?>"><button class="btn btn-primary text-size">Rekrut
                        Merchant</button></a>
                <a href="#"><button class="btn btn-primary ml-1 text-size" data-toggle="modal" data-target=".bd-example-modal-xl">Maintain Merchant</button></a>
            </div>
        <?php } ?>
    </div>
    <div class="col-12">
        <div class="card m-b-20 card-margin-2">
            <div class="card-body">
                <h4 class="mt-0 header-title">Merchant Data Table</h4>
                <p class="text-muted m-b-30 text-size">Tekan Tombol rekrut Merchant untuk menambahkan data yang baru dan data akan tersimpan di tabel, tekan tombol Detail untuk melihat data yang telah diinput.</p>
                <table id="datatable-kerjasama" class="table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama Usaha</th>
                            <th>Bidang Usaha</th>
                            <th>Produk</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Status</th>
                            <th>PKS</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data->result() as $partner) { ?>
                            <tr>
                                <td>
                                    <?= $partner->nama_usaha ?>
                                </td>
                                <td>
                                    <?= $partner->bidang_usaha ?>
                                </td>
                                <td>
                                    <?= $partner->kategori_produk ?>
                                </td>
                                <td>
                                    <?= $partner->alamat ?>
                                </td>
                                <td>
                                    <?= $partner->email ?>
                                </td>
                                <td>
                                    <?= $partner->telepon ?>
                                </td>
                                <td>
                                    <center>
                                        <?php if ($partner->status_ticket == 6) { ?>
                                            <h6><span class="badge badge-success" style="width: 100px; height: 30px;">
                                                    <p style="margin-top: 2px">Teraktivasi</p>
                                                </span></h6>
                                        <?php } else if ($partner->status_ticket == 5) { ?>
                                            <h6><span class="badge badge-success" style="width: 100px; height: 30px;">
                                                    <p style="margin-top: 2px">Terverifikasi</p>
                                                </span></h6>
                                        <?php } else if ($partner->status_ticket == 4) { ?>
                                            <h6><span class="badge badge-danger" style="width: 70px; height: 30px;">
                                                    <p style="margin-top: 2px">Ditolak</p>
                                                </span></h6>
                                        <?php } else if ($partner->status_ticket <= 2) { ?>
                                            <h6><span class="badge badge-secondary" style="width: 140px; height: 30px;">
                                                    <p style="margin-top: 2px">Belum Terverifikasi</p>
                                                </span></h6>
                                        <?php } ?>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <?php if ($partner->ttd_pks == 'Ya') { ?>
                                            <h6><span class="badge badge-success" style="width: 70px; height: 30px;">
                                                    <p style="margin-top: 2px">PKS</p>
                                                </span></h6>
                                        <?php } else { ?>
                                            <h6><span class="badge badge-danger" style="width: 70px; height: 30px;">
                                                    <p style="margin-top: 2px">Non-PKS</p>
                                                </span></h6>
                                        <?php } ?>
                                    </center>
                                </td>
                                <td>
                                    <?php if ($partner->status == 'draft') { ?>
                                        <center><a href="<?= base_url('Partner/edit/' . $partner->id_partner) ?>" class="btn btn-secondary text-size radius">Lanjutkan</a></center>
                                    <?php } else if ($partner->status == 'lengkap') { ?>
                                        <center><a href="<?= base_url('Partner/detail/' . $partner->id_partner) ?>" class="btn btn-primary text-size radius" style="width: 90px;">Detail</a></center>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div>

<!-- Modal Maintain -->
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header mb-2">
                    <h6 class="modal-title">Cari Data Merchant</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id="" class="datatable-modal table table-striped table-bordered dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>
                                <div class="text-size">Usaha</div>
                            </th>
                            <th>
                                <div class="text-size">Kategori Produk</div>
                            </th>
                            <th>
                                <div class="text-size">Telepon</div>
                            </th>
                            <th>
                                <div class="text-size">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($maintains->result() as $maintain) { ?>
                            <tr>
                                <td class="not-clickable">
                                    <div class="text-size"><?= $maintain->nama_usaha ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $maintain->kategori_produk ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $maintain->telepon ?></div>
                                </td>
                                <td>
                                    <center>
                                        <a class="btn btn-primary text-size radius" href="<?= base_url('Maintain_partner/create/' . $maintain->id_partner) ?>">Maintain</a>
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
<!-- Modal -->