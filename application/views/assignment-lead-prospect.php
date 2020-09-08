<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4><b>Assignment Lead Prospect</b></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-size"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item text-size"><a href="javascript:void(0);">Assignment</a></li>
                <li class="breadcrumb-item text-size active">Lead prospect</li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card m-b-20 card-margin-2">
            <div class="card-body">
            </div>
            <div class="tab-pane active p-3" id="belum-funding" role="tabpanel">
                <table id="datatable-buttons" class="table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal Diubah</th>
                            <th>Nama</th>
                            <th>Nomor KTP</th>
                            <th>Activity Marketing</th>
                            <th>Pengirim</th>
                            <th>Cabang Asal</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data->result() as $leads) { ?>
                            <tr>
                                <td><?= $leads->id_leads ?></td>
                                <td><?= $leads->tanggal_diubah ?></td>
                                <td>
                                    <?= $leads->nama_konsumen ?>
                                </td>
                                <td>
                                    <?= $leads->no_ktp ?>
                                </td>
                                <td>
                                    <?= $leads->activity_marketing ?>
                                </td>
                                <td>
                                    <?= $leads->name ?>
                                </td>
                                <td>
                                    <?= $leads->nama_cabang ?>
                                </td>
                                <td>
                                    <center><a href="<?= base_url('fs_konsumen/create/' . $leads->id_leads) ?>" class="btn btn-primary text-size radius"><b>Detail</b></a></center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div>