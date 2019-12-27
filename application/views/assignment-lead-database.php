<div class="row">
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
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