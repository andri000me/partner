<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Mapping Lokasi Partner</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item active">Mapping Lokasi Partner</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php if ($this->fungsi->user_login()->level != 4) { ?>
            <div>
                <a href="<?= base_url('Mapping_partner/create') ?>"><button class="btn btn-primary mb-4 btn-kanan text-size">Tambah Data Baru</button></a>
            </div>
        <?php } ?>
    </div>
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Table Calon partner</h4>
                <p class="text-muted m-b-30 text-size">Tekan Tombol Tambah Data baru untuk menambahkan data yang baru dan data akan tersimpan di tabel, tekan tombol Edit untuk mengedit data yang harus di ubah.</p>
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama Usaha</th>
                            <th>Bidang Usaha</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>E-mail</th>
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
                                    <div class="text-size"></div><?= $mapping->email ?>
                                </td>
                                <td>
                                    <div class="text-size"><?= $mapping->kategori_produk ?></div>
                                </td>
                                <td>
                                    <center><a href="<?= base_url('Mapping_partner/edit/' . $mapping->mapping_id) ?>" class="btn btn-secondary">Edit</a></center>
                                </td>
                                <!-- <td></td> -->
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->

</div>