<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Approval Bonus</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item active">Approval Bonus</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
<?php if ($this->fungsi->user_login()->level < 4) { ?>
    <div class="col-md-12">
        <a href="<?= base_url('approval_bonus/create') ?>"><button class="btn btn-primary mb-2 btn-kanan text-size">Tambah Data</button></a>
    </div>
    <?php } ?>
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Table List Approval Bonus</h4>
                <table class="datatable table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ID Ticket</th>
                            <th>Requester</th>
                            <th>Cabang</th>
                            <th>Lead ID</th>
                            <th>Nama Konsumen</th>
                            <th>Produk</th>
                            <th>Date Modified</th>
                            <th>Ticket Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($data->result() as $approval){ ?>
                        <tr>
                            <td>
                                <?= $approval->id_ticket ?>
                            </td>
                            <td>
                                <?= $approval->name ?>
                            </td>
                            <td>
                                <?= $approval->nama_cabang ?>
                            </td>
                            <td>
                                <?= $approval->leads_id ?>
                            </td>
                            <td>
                                <?= $approval->nama_konsumen ?>
                            </td>
                            <td>
                                <?= $approval->produk ?>
                            </td>
                            <td>
                                <?= $approval->tanggal_diubah ?>
                            </td>
                            <td>
                                <center>
                                <?php if ($approval->status == 0) { ?>
                                            <h6><span class="badge badge-secondary">Menunggu Persetujuan Head</span></h6>
                                        <?php } else if ($approval->status == 1) { ?>
                                            <h6><span class="badge badge-secondary">Menunggu Persetujuan Manager</span></h6>
                                        <?php } else if ($approval->status == 2) { ?>
                                            <h6><span class="badge badge-secondary">Pending</span></h6>
                                        <?php } else if ($approval->status == 3) { ?>
                                            <h6><span class="badge badge-warning">In Progress</span></h6>
                                        <?php } else if ($approval->status == 4) { ?>
                                            <h6><span class="badge badge-danger">Ditolak</span></h6>
                                        <?php } else if ($approval->status == 5) { ?>
                                            <h6><span class="badge badge-success">Disetujui</span></h6>
                                        <?php } ?>
                                    </center>
                                </center>
                            </td>
                            <td>
                                <center><a href="<?= base_url('approval_bonus/edit/'. $approval->id_approval_bonus) ?>" class="btn btn-secondary text-size">Detail</a></center>
                            </td>
                    <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>