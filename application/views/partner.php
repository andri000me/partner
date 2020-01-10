<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Partnership</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-size"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item text-size"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item text-size active">Partnership</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <!-- <a href="<?= base_url('Partner/create') ?>"><button class="btn btn-primary mb-4">Rekrut Partner</button></a>
            <a href="#"><button class="btn btn-success ml-3 mb-4" data-toggle="modal" data-target=".bd-example-modal-xl">Maintain Partner</button></a> -->
        <?php if ($this->fungsi->user_login()->level != 4) { ?>
            <div class="btn-kanan mb-2">
                <a href="<?= base_url('Partner/create') ?>"><button class="btn btn-primary text-size">Rekrut Partner</button></a>
                <a href="#"><button class="btn btn-success ml-1 text-size" data-toggle="modal" data-target=".bd-example-modal-xl">Maintain Partner</button></a>
            </div>
        <?php } ?>
    </div>
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Table Partnership</h4>
                <p class="text-muted m-b-30 text-size">Gunakan form ini untuk mendata calon partner yang
                    berpotensi di area cabang anda. Pastikan anda memasukan data yang valid agar
                    memudahkan anda dalam memaintain partner anda.</p>
                <table class="datatable table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama Usaha</th>
                            <th>Bidang Usaha</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Produk</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data->result() as $mapping) { ?>
                            <tr>
                                <td>
                                    <?= $mapping->nama_usaha ?>
                                </td>
                                <td>
                                    <?= $mapping->bidang_usaha ?>
                                </td>
                                <td>
                                    <?= $mapping->telepon ?>
                                </td>
                                <td>
                                    <?= $mapping->email ?>
                                </td>
                                <td>
                                    <?= $mapping->kategori_produk ?>
                                </td>
                                <td>
                                    <?= $mapping->alamat ?>
                                </td>
                                <td>
                                    <?php if ($mapping->status == 'draft') { ?>
                                        <center><a href="<?= base_url('Partner/edit/' . $mapping->id_partner) ?>" class="btn btn-secondary text-size">Lanjutkan</a></center>
                                    <?php } else if ($mapping->status == 'lengkap') { ?>
                                        <center><a href="<?= base_url('Partner/detail/' . $mapping->id_partner) ?>" class="btn btn-primary text-size">Detail</a></center>
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
                    <h6 class="modal-title">Cari Data Partner</h6>
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
                        <?php foreach ($lengkap->result() as $maintain) { ?>
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
                                    <center><a class="btn btn-primary text-size" href="<?= base_url('Maintain_partner/create/' . $maintain->id_partner) ?>">Maintain</a></center>
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