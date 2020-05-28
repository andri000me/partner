<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4><b>Mapping Lokasi Merchant</b></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-size"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item text-size"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item text-size active">Mapping Lokasi Merchant</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php if ($this->fungsi->user_login()->level != 4) { ?>
            <a href="<?= base_url('partner/create_mapping') ?>"><button class="btn btn-primary mb-2 btn-kanan text-size card-margin-2"><b>Tambah Data Baru</b></button></a>
        <?php } ?>
    </div>
    <div class="col-12">
        <div class="card m-b-20 card-margin-2">
            <div class="card-body">
                <h4 class="mt-0 header-title"><b>Tabel Calon Merchant</b></h4>
                <p class="text-muted m-b-30 text-size">Tekan Tombol Tambah Data baru untuk menambahkan data yang baru
                    dan data akan tersimpan di tabel, tekan tombol Edit untuk mengedit data yang harus di ubah.</p>
                <table id="datatable-kerjasama" class="table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama Usaha</th>
                            <th>Bidang Usaha</th>
                            <th>Produk</th>
                            <th>Alamat</th>
                            <th>E-mail</th>
                            <th>Telepon</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data->result() as $mapping) { ?>
                            <tr class="clickable-row" data-href="detail-partnership.html">
                                <td>
                                    <?= $mapping->nama_usaha ?>
                                </td>
                                <td>
                                    <?= $mapping->bidang_usaha ?>
                                </td>
                                <td>
                                    <?= $mapping->kategori_produk ?>
                                </td>
                                <td>
                                    <?= $mapping->alamat ?>
                                </td>
                                <td>
                                    <?= $mapping->email ?>
                                </td>
                                <td>
                                    <?= $mapping->telepon ?>
                                </td>
                                <td>
                                    <center><a href="<?= base_url('partner/edit_mapping/' . $mapping->id_partner) ?>" class="btn btn-secondary text-size"><b>Detail</b></a></center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->

</div>