<div class="row">
    <div class="col-12 mt-4">
        <div class="card m-b-20">
            <div class="card-body">
                <table class="datatable table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Name Lengkap</th>
                            <th>Nomor Telepon / Whatsapp</th>
                            <th>Kota</th>
                            <th>Produk</th>
                            <th>Cabang</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data->result() as $leads_assignment) { ?>
                            <tr>
                                <td>
                                    <?= $leads_assignment->nama ?>
                                </td>
                                <td>
                                    <?= $leads_assignment->telepon ?>
                                </td>
                                <td>
                                    <?= $leads_assignment->kota ?>
                                </td>
                                <td>
                                    <?= $leads_assignment->produk ?>
                                </td>
                                <td>
                                    <?= $leads_assignment->nama_cabang ?>
                                </td>
                                <td>
                                    <?= $leads_assignment->status ?>
                                </td>
                                <td>
                                    <center><a class="btn btn-secondary text-size" href="<?= base_url('leads_assignment/edit/' . $leads_assignment->id_leads_assignment) ?>">Detail</a></center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div>