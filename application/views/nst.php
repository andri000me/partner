<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4 class="page-title"><b>NST</b></h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item active">NST</li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 card-margin-2">
        <?php if ($this->fungsi->user_login()->level < 4) { ?>
            <div class="btn-kanan">
                <a href="<?= base_url('nst/create') ?>"><button class="btn btn-primary mb-2 text-size"><b>Tambah NST</b></button></a>
            </div>
        <?php } ?>
    </div>
    <div class="col-12">
        <div class="card m-b-20 card-margin-2">
            <div class="card-body">
                <h4 class="mt-0 mb-4 header-title">Table Data NST</h4>
                <!-- <p class="text-muted m-b-30 text-size"></p> -->
                <table id="datatable-buttons" class="table table-hover dt-responsive wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                <div class="text-size"> </div>
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
                                    <center><a class="btn btn-primary text-size radius" href="<?= base_url('nst/edit/' . $nst->id_nst) ?>"><b>Detail</b></a></center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->

</div>