<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4><b>Daftar Data Survey</b></h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item active">Daftar Data Survey</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
    </div>
    <div class="col-12">
        <div class="card m-b-20  card-margin-2">
            <div class="card-body">
                <h4 class="mt-0 header-title"><b>Tabel Data Survey</b></h4>
                <p class="text-muted m-b-30 text-size">Gunakan form ini untuk input kosumen prospect / go live untuk
                    keperluan NST, KPI dan Bonus</p>
                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#all" role="tab">
                            <span class="d-block d-sm-none mb-1">All Data</span>
                            <span class="d-none d-sm-block mb-1">All Data</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pending" role="tab">
                            <span class="d-block d-sm-none">Unfinished <span
                                    class="badge badge-danger"><?= $unfinished->num_rows() ?></span></span>
                            <span class="d-none d-sm-block">Unfinished <span
                                    class="badge badge-danger"><?= $unfinished->num_rows() ?></span></span>
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
                        <table id="datatable-buttons" class="table table-hover dt-responsive wrap text-size"
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
                                    <th>Score</th>
                                    <th>Recommendation</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data->result() as $fs_konsumen) { ?>
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
                                        <?php if ($fs_konsumen->status_approval == 0) { ?>
                                        <b class="text-secondary">Menunggu Persetujuan Head</b>
                                        <?php } else if ($fs_konsumen->status_approval == 1) { ?>
                                        <b class="text-secondary">Menunggu Persetujuan Manager</b>
                                        <?php } else if ($fs_konsumen->status_approval == 2) { ?>
                                        <b class="text-secondary">Pending</b>
                                        <?php } else if ($fs_konsumen->status_approval == 3) { ?>
                                        <b class="text-warning">In Progress</b>
                                        <?php } else if ($fs_konsumen->status_approval == 4) { ?>
                                        <b class="text-danger">Returned</b>
                                        <?php } else if ($fs_konsumen->status_approval == 5) { ?>
                                        <b class="text-success">Disetujui</b>
                                        <?php } else if ($fs_konsumen->status_approval == 6) { ?>
                                        <b class="text-primary">Diaktivasi</b>
                                        <?php } ?>
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
                                        <b class="text-primary">Pass</b><br>
                                        <b class="text-danger">Fail</b>
                                    </td>
                                    <td>
                                        <select class="form-control has_superior text-size form-border form-radius"
                                            name="" id="">
                                            <option value="">Pilih Rekomendasi</option>
                                            <option value="Recomended">Recomended</option>
                                            <option value="Not Recomended">Not Recomended</option>
                                        </select>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="<?= base_url('fs_konsumen/create/' . $fs_konsumen->id) ?>"
                                                class="btn btn-primary text-size radius"><b>Isi Data</b></a>
                                            <a href="<?= base_url('fs_konsumen/generate_pdf_html/'. $fs_konsumen->id) ?>"
                                                class="btn btn-danger text-size pdf-cir ml-2"><i
                                                    class="far fa-file-pdf fa-lg"></i></a>
                                        </center>
                                    </td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="pending" role="tabpanel">
                        <table id="datatable-buttons-1" class="table table-hover dt-responsive wrap text-size"
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
                                    <th>Score</th>
                                    <th>Recommendation</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($unfinished->result() as $fs_konsumen) { ?>
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
                                        <?php if ($fs_konsumen->status_approval == 0) { ?>
                                        <b class="text-secondary">Menunggu Persetujuan Head</b>
                                        <?php } else if ($fs_konsumen->status_approval == 1) { ?>
                                        <b class="text-secondary">Menunggu Persetujuan Manager</b>
                                        <?php } else if ($fs_konsumen->status_approval == 2) { ?>
                                        <b class="text-secondary">Pending</b>
                                        <?php } else if ($fs_konsumen->status_approval == 3) { ?>
                                        <b class="text-warning">In Progress</b>
                                        <?php } else if ($fs_konsumen->status_approval == 4) { ?>
                                        <b class="text-danger">Returned</b>
                                        <?php } else if ($fs_konsumen->status_approval == 5) { ?>
                                        <b class="text-success">Disetujui</b>
                                        <?php } else if ($fs_konsumen->status_approval == 6) { ?>
                                        <b class="text-primary">Diaktivasi</b>
                                        <?php } ?>
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
                                        <b class="text-primary">Pass</b><br>
                                        <b class="text-danger">Fail</b>
                                    </td>
                                    <td>
                                        <select class="form-control has_superior text-size form-border form-radius"
                                            name="" id="">
                                            <option value="">Pilih Rekomendasi</option>
                                            <option value="Recomended">Recomended</option>
                                            <option value="Not Recomended">Not Recomended</option>
                                        </select>
                                    </td>
                                    <td>
                                        <center>
                                            <a href="<?= base_url('fs_konsumen/create/' . $fs_konsumen->id) ?>"
                                                class="btn btn-primary text-size radius"><b>Isi Data</b></a>
                                            <a href="<?= base_url('fs_konsumen/generate_pdf_html/'. $fs_konsumen->id) ?>"
                                                class="far fa-file-pdf fa-lg"></i></a>
                                        </center>
                                    </td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="finished" role="tabpanel">
                        <table id="datatable-buttons-2" class="table table-hover dt-responsive wrap text-size"
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
                                    <th>Score</th>
                                    <th>Recommendation</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($completed->result() as $fs_konsumen) { ?>
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
                                        <?php if ($fs_konsumen->status_approval == 0) { ?>
                                        <b class="text-secondary">Menunggu Persetujuan Head</b>
                                        <?php } else if ($fs_konsumen->status_approval == 1) { ?>
                                        <b class="text-secondary">Menunggu Persetujuan Manager</b>
                                        <?php } else if ($fs_konsumen->status_approval == 2) { ?>
                                        <b class="text-secondary">Pending</b>
                                        <?php } else if ($fs_konsumen->status_approval == 3) { ?>
                                        <b class="text-warning">In Progress</b>
                                        <?php } else if ($fs_konsumen->status_approval == 4) { ?>
                                        <b class="text-danger">Returned</b>
                                        <?php } else if ($fs_konsumen->status_approval == 5) { ?>
                                        <b class="text-success">Disetujui</b>
                                        <?php } else if ($fs_konsumen->status_approval == 6) { ?>
                                        <b class="text-primary">Diaktivasi</b>
                                        <?php } ?>
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
                                        <b class="text-primary">Pass</b><br>
                                        <b class="text-danger">Fail</b>
                                    </td>
                                    <td>
                                        <select class="form-control has_superior text-size form-border form-radius"
                                            name="" id="">
                                            <option value="">Pilih Rekomendasi</option>
                                            <option value="Recomended">Recomended</option>
                                            <option value="Not Recomended">Not Recomended</option>
                                        </select>
                                    </td>
                                    <td>

                                        <center>
                                            <a href="<?= base_url('fs_konsumen/create/' . $fs_konsumen->id) ?>"
                                                class="btn btn-primary text-size radius"><b>Isi Data</b></a>
                                            <a href="<?= base_url('fs_konsumen/generate_pdf_html/'. $fs_konsumen->id) ?>"
                                                class="far fa-file-pdf fa-lg"></i></a>
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
                alert(cms != '' ? 'Data form survey telah di-assign' :
                    'Assignment telah ditarik');
            }
        });
        // return false;
    });
});
</script>