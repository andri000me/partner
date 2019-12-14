<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Data Leads</h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Leads</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Database</a></li>
                <li class="breadcrumb-item active">Data Leads</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php if ($this->fungsi->user_login()->level != 4) { ?>
            <div>
                <a href="<?= base_url('mapping_leads/create') ?>"><button class="btn btn-primary mb-2 btn-kanan text-size">Buat Data Baru</button></a>
            </div>
        <?php } ?>
    </div>
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Daftar Leads</h4>
                <p class="text-muted m-b-30 text-size">Halaman ini berguna untuk melihat leads yang ada di cabang anda dan untuk melihat potensi cabang anda</p>
                <table class="datatable table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Name Lengkap</th>
                            <th>Nomor Telepon / Whatsapp</th>
                            <th>Asal Aplikasi</th>
                            <th>Produk</th>
                            <th>Detail Produk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data->result() as $mapping_leads) { ?>
                            <tr>
                                <td>
                                    <?= $mapping_leads->nama_konsumen ?>
                                </td>
                                <td>
                                    <?= $mapping_leads->telepon ?>
                                </td>
                                <td>
                                    <?= $mapping_leads->soa ?>
                                </td>
                                <td>
                                    <?= $mapping_leads->produk ?>
                                </td>
                                <td>
                                    <?= $mapping_leads->detail_produk ?>
                                </td>
                                <td>
                                    <center><a class="btn btn-secondary text-size" href="<?= base_url('Mapping_leads/edit/' . $mapping_leads->mapping_id) ?>">Edit</a></center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->

</div>