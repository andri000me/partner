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
        <div class="btn-kanan mb-2">
            <a href=" <?= base_url('mapping_leads/create') ?>"><button class="btn btn-primary text-size">Input Leads</button></a>
            <!-- <a href=" <?= base_url('mapping_leads/export_template') ?>"><button class="btn btn-primary text-size">Export Template Excel</button></a>
            <a href=" <?= base_url('mapping_leads/form') ?>"><button class="btn btn-primary text-size">Import Template Excel</button></a> -->
        </div>
    </div>
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Daftar Leads</h4>
                <p class="text-muted m-b-30 text-size">Gunakan halaman ini untuk input leads interest, tabel ini juga dapat digunakan sebagai database leads anda agar memudahkan pencarian data.</p>
                <table class="datatable-buttons table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama Konsumen</th>
                            <th>Handphone/Whatsapp</th>
                            <th>SOA</th>
                            <th>Produk</th>
                            <th>Detail Produk</th>
                            <th>Lihat Data</th>
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
                                    <center><a class="btn btn-secondary text-size" href="<?= base_url('Mapping_leads/edit/' . $mapping_leads->mapping_id) ?>">Detail</a></center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div>