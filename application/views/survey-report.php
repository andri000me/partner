<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4 class="page-title">Daftar Data Survey</h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Tabel</a></li>
                <li class="breadcrumb-item active">Daftar Data Survey</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="btn-kanan mb-2 card-margin-2">
            <a href="<?= base_url('leads/create') ?>"><button class="btn btn-primary text-size">Buat Data</button></a>
        </div>
    </div>
    <div class="col-12">
        <div class="card m-b-20  card-margin-2">
            <div class="card-body">
                <h4 class="mt-0 header-title">Daftar Data Survey</h4>
                <p class="text-muted m-b-30 text-size">Gunakan form ini untuk input kosumen prospect / go live untuk
                    keperluan NST, KPI dan Bonus</p>
                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#all" role="tab">
                            <span class="d-block d-sm-none">All Data</span>
                            <span class="d-none d-sm-block">All Data</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pending" role="tab">
                            <span class="d-block d-sm-none">Pending <span
                                    class="badge badge-secondary"><?= $pending->num_rows() ?></span></span>
                            <span class="d-none d-sm-block">Pending <span
                                    class="badge badge-secondary"><?= $pending->num_rows() ?></span></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#finished" role="tab">
                            <span class="d-block d-sm-none">Finished</span>
                            <span class="d-none d-sm-block">Finished</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active p-3" id="all" role="tabpanel">
                        <table id="datatable-buttons"
                            class="table table-striped table-bordered dt-responsive wrap text-size"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Ticket</th>
                                    <th>Nama Konsumen</th>
                                    <th>Produk</th>
                                    <th>Cabang</th>
                                    <th>Status</th>
                                    <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                    <th>Assign To</th>
                                    <?php } ?>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data->result() as $fs_konsumen) { ?>
                                <tr>
                                    <td>
                                        <?= $fs_konsumen->id ?>
                                    </td>
                                    <td>
                                        <?= $fs_konsumen->nama_konsumen ?>
                                    </td>
                                    <td>
                                        <?= $fs_konsumen->produk ?>
                                    </td>
                                    <td>
                                        <?= $fs_konsumen->nama_cabang ?>
                                    </td>
                                    <td>
                                        <center>
                                            <?php if ($fs_konsumen->status_approval == 0) { ?>
                                            <h6><span class="badge badge-secondary">Menunggu Persetujuan Head</span>
                                            </h6>
                                            <?php } else if ($fs_konsumen->status_approval == 1) { ?>
                                            <h6><span class="badge badge-secondary">Menunggu Persetujuan Manager</span>
                                            </h6>
                                            <?php } else if ($fs_konsumen->status_approval == 2) { ?>
                                            <h6><span class="badge badge-secondary">Pending</span></h6>
                                            <?php } else if ($fs_konsumen->status_approval == 3) { ?>
                                            <h6><span class="badge badge-warning">In Progress</span></h6>
                                            <?php } else if ($fs_konsumen->status_approval == 4) { ?>
                                            <h6><span class="badge badge-danger">Returned</span></h6>
                                            <?php } else if ($fs_konsumen->status_approval == 5) { ?>
                                            <h6><span class="badge badge-success">Disetujui</span></h6>
                                            <?php } else if ($fs_konsumen->status_approval == 6) { ?>
                                            <h6><span class="badge badge-primary">Diaktivasi</span></h6>
                                            <?php } ?>
                                        </center>
                                    </td>
                                    <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                    <td data-search="<?= $fs_konsumen->name ?>">
                                        <center>
                                            <select class="form-control text-size survey border"
                                                data-fs="<?= $fs_konsumen->id ?>">
                                                <option selected value="">Pilih CMS</option>
                                                <?php foreach ($users->result() as $user) { ?>
                                                <option
                                                    <?= $user->id_user == $fs_konsumen->assign_cms ? 'selected' : '' ?>
                                                    value="<?= $user->id_user ?>"><?= $user->name ?></option>
                                                <?php } ?>
                                            </select>
                                        </center>
                                    </td>
                                    <?php } ?>
                                    <td>
                                        <center><a href="<?= base_url('fs_konsumen/create/'. $fs_konsumen->id) ?>"
                                                class="btn btn-primary text-size radius">Detail</a>
                                        </center>
                                    </td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="pending" role="tabpanel">
                        <table id="datatable-buttons-1"
                            class="table table-striped table-bordered dt-responsive wrap text-size"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Ticket</th>
                                    <th>Nama Konsumen</th>
                                    <th>Produk</th>
                                    <th>Cabang</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($pending->result() as $fs_konsumen) { ?>
                                <tr>
                                    <td>
                                        <?= $fs_konsumen->id ?>
                                    </td>
                                    <td>
                                        <?= $fs_konsumen->nama_konsumen ?>
                                    </td>
                                    <td>
                                        <?= $fs_konsumen->produk ?>
                                    </td>
                                    <td>
                                        <?= $fs_konsumen->nama_cabang ?>
                                    </td>
                                    <td>
                                        <center>
                                            <?php if ($fs_konsumen->status_approval == 0) { ?>
                                            <h6><span class="badge badge-secondary">Menunggu Persetujuan Head</span>
                                            </h6>
                                            <?php } else if ($fs_konsumen->status_approval == 1) { ?>
                                            <h6><span class="badge badge-secondary">Menunggu Persetujuan Manager</span>
                                            </h6>
                                            <?php } else if ($fs_konsumen->status_approval == 2) { ?>
                                            <h6><span class="badge badge-secondary">Pending</span></h6>
                                            <?php } else if ($fs_konsumen->status_approval == 3) { ?>
                                            <h6><span class="badge badge-warning">In Progress</span></h6>
                                            <?php } else if ($fs_konsumen->status_approval == 4) { ?>
                                            <h6><span class="badge badge-danger">Returned</span></h6>
                                            <?php } else if ($fs_konsumen->status_approval == 5) { ?>
                                            <h6><span class="badge badge-success">Disetujui</span></h6>
                                            <?php } else if ($fs_konsumen->status_approval == 6) { ?>
                                            <h6><span class="badge badge-primary">Diaktivasi</span></h6>
                                            <?php } ?>
                                        </center>
                                    </td>
                                    <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                    <td data-search="<?= $fs_konsumen->name ?>">
                                        <center>
                                            <select class="form-control text-size survey border"
                                                data-fs="<?= $fs_konsumen->id ?>">
                                                <option selected value="">Pilih CMS</option>
                                                <?php foreach ($users->result() as $user) { ?>
                                                <option
                                                    <?= $user->id_user == $fs_konsumen->assign_cms ? 'selected' : '' ?>
                                                    value="<?= $user->id_user ?>"><?= $user->name ?></option>
                                                <?php } ?>
                                            </select>
                                        </center>
                                    </td>
                                    <?php } ?>
                                    <td>
                                        <center><a href="<?= base_url('fs_konsumen/create/'. $fs_konsumen->id) ?>"
                                                class="btn btn-primary text-size radius">Detail</a>
                                        </center>
                                    </td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="finished" role="tabpanel">
                        <table id="datatable-buttons-2"
                            class="table table-striped table-bordered dt-responsive wrap text-size"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Ticket</th>
                                    <th>Nama Konsumen</th>
                                    <th>Produk</th>
                                    <th>Cabang</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($completed->result() as $fs_konsumen) { ?>
                                <tr>
                                    <td>
                                        <?= $fs_konsumen->id ?>
                                    </td>
                                    <td>
                                        <?= $fs_konsumen->nama_konsumen ?>
                                    </td>
                                    <td>
                                        <?= $fs_konsumen->produk ?>
                                    </td>
                                    <td>
                                        <?= $fs_konsumen->nama_cabang ?>
                                    </td>
                                    <td>
                                        <center>
                                            <?php if ($fs_konsumen->status_approval == 0) { ?>
                                            <h6><span class="badge badge-secondary">Menunggu Persetujuan Head</span>
                                            </h6>
                                            <?php } else if ($fs_konsumen->status_approval == 1) { ?>
                                            <h6><span class="badge badge-secondary">Menunggu Persetujuan Manager</span>
                                            </h6>
                                            <?php } else if ($fs_konsumen->status_approval == 2) { ?>
                                            <h6><span class="badge badge-secondary">Pending</span></h6>
                                            <?php } else if ($fs_konsumen->status_approval == 3) { ?>
                                            <h6><span class="badge badge-warning">In Progress</span></h6>
                                            <?php } else if ($fs_konsumen->status_approval == 4) { ?>
                                            <h6><span class="badge badge-danger">Returned</span></h6>
                                            <?php } else if ($fs_konsumen->status_approval == 5) { ?>
                                            <h6><span class="badge badge-success">Disetujui</span></h6>
                                            <?php } else if ($fs_konsumen->status_approval == 6) { ?>
                                            <h6><span class="badge badge-primary">Diaktivasi</span></h6>
                                            <?php } ?>
                                        </center>
                                    </td>
                                    <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                    <td data-search="<?= $fs_konsumen->name ?>">
                                        <center>
                                            <select class="form-control text-size survey border"
                                                data-fs="<?= $fs_konsumen->id ?>" data-cms="<?= $user->name ?>">
                                                <option selected value="">Pilih CMS</option>
                                                <?php foreach ($users->result() as $user) { ?>
                                                <option
                                                    <?= $user->id_user == $fs_konsumen->assign_cms ? 'selected' : '' ?>
                                                    value="<?= $user->id_user ?>">
                                                    <?= $user->name ?></option>
                                                <?php } ?>
                                            </select>
                                        </center>
                                    </td>
                                    <?php } ?>
                                    <td>

                                        <center><a href="<?= base_url('fs_konsumen/create/'. $fs_konsumen->id) ?>"
                                                class="btn btn-primary text-size radius">Detail</a>
                                        </center>
                                    </td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>

<script>
$(document).ready(function() {
    $('.survey').on('change', function() {
        var data = $(this).data('fs');
        var cms = $(this).val();

        // alert('assign: ' + cms + ' data id: ' + data);

        $.ajax({
            type: "POST",
            url: "<?= base_url('fs_konsumen/update_assignment') ?>",
            dataType: "JSON",
            data: {
                data: data,
                cms: cms
            },
            success: function(res) {
                alert(cms != '' ? 'Data form survey telah di-assign :
                    'Assignment telah ditarik');
            }
        });
        // return false;
    });
});
</script>