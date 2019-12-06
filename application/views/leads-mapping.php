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
        <?php if ($this->fungsi->user_login()->level != 4) { ?>
            <div>
                <a href="<?= base_url('mapping_leads/create') ?>"><button class="btn btn-primary mb-4 btn-kanan text-size">Buat Data Baru</button></a>
            </div>
        <?php } ?>
    </div>
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Leads</h4>
                <p class="text-muted m-b-30 text-size">Gunakan form ini untuk mendata calon partner
                    yang
                    berpotensi di area cabang anda. Pastikan anda memasukan data yang valid agar
                    memudahkan anda dalam memaintain partner anda.</p>
                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                    <div class="text-size"><?= $mapping_leads->nama_konsumen ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $mapping_leads->telepon ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $mapping_leads->soa ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $mapping_leads->produk ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $mapping_leads->detail_produk ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><a class="btn btn-primary" href="<?= base_url('Mapping_leads/edit/' . $mapping_leads->mapping_id) ?>">Detail</a></div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->

</div>