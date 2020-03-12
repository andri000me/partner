<div class="row">
    <div class="col-md-12 mt-5">
        <?php if ($this->fungsi->user_login()->level != 4) { ?>
            <div class="btn-kanan">
                <a href="<?= base_url('nst/create') ?>"><button class="btn btn-primary mb-2 text-size">Create NST</button></a>
            </div>
        <?php } ?>
    </div>
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Table Data NST</h4>
                <!-- <p class="text-muted m-b-30 text-size"></p> -->
                <table id="" class="datatable-buttons table table-striped table-bordered dt-responsive wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>
                                <div class="text-size">Nama Konsumen</div>
                            </th>
                            <th>
                                <div class="text-size">Leads ID</div>
                            </th>
                            <th>
                                <div class="text-size">Nomor KTP</div>
                            </th>
                            <th>
                                <div class="text-size">Aksi</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data->result() as $nst) { ?>
                            <tr class="clickable-row" data-href="detail-nst.html">
                                <td>
                                    <div class="text-size"><?= $nst->nama_konsumen ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $nst->leads_id ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $nst->no_ktp ?></div>
                                </td>
                                <td>
                                    <center><a class="btn btn-primary text-size" href="<?= base_url('nst/edit/' . $nst->id_nst) ?>">Detail</a></center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->

</div>