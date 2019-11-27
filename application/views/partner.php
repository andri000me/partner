<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Form Inputan Partner</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                <li class="breadcrumb-item active">Basic Tables</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <!-- <a href="<?= base_url('Partner/create') ?>"><button class="btn btn-primary mb-4">Rekrut Partner</button></a>
            <a href="#"><button class="btn btn-success ml-3 mb-4" data-toggle="modal" data-target=".bd-example-modal-xl">Maintain Partner</button></a> -->

        <div class="btn-kanan">
            <a href="<?= base_url('Partner/create') ?>"><button class="btn btn-primary mb-4 text-size">Rekrut Partner</button></a>
            <a href="#"><button class="btn btn-success ml-1 mb-4 text-size" data-toggle="modal" data-target=".bd-example-modal-xl">Maintain Partner</button></a>
        </div>
    </div>
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Mapping Lokasi Partner</h4>
                <p class="text-muted m-b-30 text-size">Gunakan form ini untuk mendata calon partner yang
                    berpotensi di area cabang anda. Pastikan anda memasukan data yang valid agar
                    memudahkan anda dalam memaintain partner anda.</p>
                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap lebar" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama Usaha</th>
                            <th>Bidang Usaha</th>
                            <th>alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Produk</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data->result() as $mapping) { ?>
                            <tr class="clickable-row" data-href="detail-partnership.html">
                                <td>
                                    <div class="text-size"><?= $mapping->nama_usaha ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $mapping->bidang_usaha ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $mapping->alamat ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $mapping->telepon ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $mapping->email ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $mapping->kategori_produk ?></div>
                                </td>
                                <td>
                                    <?php if ($mapping->status == 'draft') { ?>
                                        <center><a href="<?= base_url('Partner/edit/' . $mapping->id_partner) ?>" class="btn btn-secondary">Lanjutkan</a></center>
                                    <?php } else if ($mapping->status == 'lengkap') { ?>
                                        <center><a href="<?= base_url('Partner/detail/' . $mapping->id_partner) ?>" class="btn btn-primary">Detail</a></center>
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

<!-- Modal -->
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header mb-2">
                    <h4 class="modal-title">Cari Data Partner</h4>
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
                        <?php foreach ($data->result() as $data) { ?>
                            <tr class="clickable-row" data-id="<?= $data->id_mapping ?>" data-usaha="<?= $data->nama_usaha ?>" data-produk="<?= $data->kategori_produk ?>" data-telepon="<?= $data->telepon ?>" data-email="<?= $data->email ?>" data-alamat="<?= $data->alamat ?>" data-bidang="<?= $data->bidang_usaha ?>">
                                <td class="not-clickable"><?= $data->nama_usaha ?></td>
                                <td><?= $data->kategori_produk ?></td>
                                <td><?= $data->telepon ?></td>
                                <td><a class="btn btn-primary" href="<?= base_url('Maintain_partner/create/' . $data->id_partner) ?>">Maintain</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>