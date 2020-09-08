<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4><b>Daftar Data Survey</b></h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
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
                <?= $this->session->flashdata('alert') ?>
                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#all" role="tab">
                            <span class="d-block d-sm-none mb-1">All Data</span>
                            <span class="d-none d-sm-block mb-1">All Data</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#not-completed" role="tab">
                            <span class="d-block d-sm-none">Not Completed <?= $not_completed->num_rows() > 0 ? "<span class='badge badge-secondary'>" . $not_completed->num_rows() . "</span>" : '' ?> </span>
                            <span class="d-none d-sm-block">Not Completed <?= $not_completed->num_rows() > 0 ? "<span class='badge badge-secondary'>" . $not_completed->num_rows() . "</span>" : '' ?> </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#head-approval" role="tab">
                            <span class="d-block d-sm-none">Head Approval <?= $head_approval->num_rows() > 0 ? "<span class='badge badge-secondary'>" . $head_approval->num_rows() . "</span>" : '' ?> </span>
                            <span class="d-none d-sm-block">Head Approval <?= $head_approval->num_rows() > 0 ? "<span class='badge badge-secondary'>" . $head_approval->num_rows() . "</span>" : '' ?> </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#manager-approval" role="tab">
                            <span class="d-block d-sm-none">Manager Approval <?= $manager_approval->num_rows() > 0 ? "<span class='badge badge-secondary'>" . $manager_approval->num_rows() . "</span>" : '' ?> </span>
                            <span class="d-none d-sm-block">Manager Approval <?= $manager_approval->num_rows() > 0 ? "<span class='badge badge-secondary'>" . $manager_approval->num_rows() . "</span>" : '' ?> </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#ho-approval" role="tab">
                            <span class="d-block d-sm-none">HO Approval <?= $ho_approval->num_rows() > 0 ? "<span class='badge badge-secondary'>" . $ho_approval->num_rows() . "</span>" : '' ?> </span>
                            <span class="d-none d-sm-block">HO Approval <?= $ho_approval->num_rows() > 0 ? "<span class='badge badge-secondary'>" . $ho_approval->num_rows() . "</span>" : '' ?> </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#scoring" role="tab">
                            <span class="d-block d-sm-none">Scoring <?= $scoring->num_rows() > 0 ? "<span class='badge badge-secondary'>" . $scoring->num_rows() . "</span>" : '' ?> </span>
                            <span class="d-none d-sm-block">Scoring <?= $scoring->num_rows() > 0 ? "<span class='badge badge-secondary'>" . $scoring->num_rows() . "</span>" : '' ?> </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#returned" role="tab">
                            <span class="d-block d-sm-none">Returned <?= $returned->num_rows() > 0 ? "<span class='badge badge-danger'>" . $returned->num_rows() . "</span>" : '' ?> </span>
                            <span class="d-none d-sm-block">Returned <?= $returned->num_rows() > 0 ? "<span class='badge badge-danger'>" . $returned->num_rows() . "</span>" : '' ?> </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#finished" role="tab">
                            <span class="d-block d-sm-none">Finished <?= $completed->num_rows() > 0 ? "<span class='badge badge-secondary'>" . $completed->num_rows() . "</span>" : '' ?></span>
                            <span class="d-none d-sm-block">Finished <?= $completed->num_rows() > 0 ? "<span class='badge badge-secondary'>" . $completed->num_rows() . "</span>" : '' ?></span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active p-3" id="all" role="tabpanel">
                        <table class="datatable table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Ticket</th>
                                    <th>Tanggal Diubah</th>
                                    <th>Nama Konsumen</th>
                                    <th>Cross Branch</th>
                                    <th>Cabang</th>
                                    <th>Status</th>
                                    <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                        <th>Assign To</th>
                                    <?php } ?>
                                    <th>Recommendation</th>
                                    <th>Score</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data->result() as $fs_konsumen) { ?>
                                    <tr>
                                        <td>
                                            <?= $fs_konsumen->id ?>
                                        </td>
                                        <td data-sort="<?= $fs_konsumen->updated_at ?>">
                                            <?= $fs_konsumen->tanggal_diubah ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->nama_konsumen ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->cross_branch ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->nama_cabang ?>
                                        </td>
                                        <td>
                                            <?php if ($fs_konsumen->status_approval == 0) { ?>
                                                <b class="text-secondary">Head Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 1) { ?>
                                                <b class="text-secondary">Manager Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 2) { ?>
                                                <b class="text-secondary">HO Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 3) { ?>
                                                <b class="text-warning">In Progress</b>
                                            <?php } else if ($fs_konsumen->status_approval == 4) { ?>
                                                <b class="text-danger">Returned</b>
                                            <?php } else if ($fs_konsumen->status_approval == 5) { ?>
                                                <!-- <b class="text-success">Disetujui</b> -->
                                                <b class="text-secondary">Scoring</b>
                                            <?php } else if ($fs_konsumen->status_approval == 6) { ?>
                                                <b class="text-success">Finished</b>
                                            <?php } ?>
                                        </td>
                                        <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                            <td data-search="<?= $fs_konsumen->name ?>">
                                                <center>
                                                    <select class="form-control text-size survey border" data-fs="<?= $fs_konsumen->id ?>">
                                                        <option selected value="">Pilih CMS</option>
                                                        <?php foreach ($users->result() as $user) { ?>
                                                            <option <?= $user->id_user == $fs_konsumen->assign_cms ? 'selected' : '' ?> value="<?= $user->id_user ?>"><?= $user->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </center>
                                            </td>
                                        <?php } ?>
                                        <td>
                                            <?php if ($fs_konsumen->is_recommended == 'Recommended') { ?>
                                                <b class="text-primary">Recommended</b><br>
                                            <?php } ?>
                                            <?php if ($fs_konsumen->is_recommended == 'Not Recommended') { ?>
                                                <b class="text-danger">Not Recommended</b>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if ($fs_konsumen->is_recommended == 'Recommended') { ?>
                                                <b class="text-primary">Pass</b><br>
                                            <?php } ?>
                                            <?php if ($fs_konsumen->is_recommended == 'Not Recommended') { ?>
                                                <b class="text-danger">Fail</b>
                                            <?php } ?>
                                        </td>
                                        <td style="white-space: nowrap;">
                                            <center>
                                                <?php if ($this->fungsi->user_login()->level >= 3) { ?>
                                                    <a href="<?= base_url('fs_konsumen/create/' . $fs_konsumen->id) ?>" class="btn btn-primary text-size radius" style="width: 40px;"><i class="fas fa-eye"></i></a>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('fs_konsumen/create/' . $fs_konsumen->id) ?>" class="btn btn-primary text-size radius" style="width: 40px;"><i class="fas fa-edit"></i></a>
                                                <?php } ?>
                                                <a href="<?= base_url('fs_konsumen/generate_pdf_html/' . $fs_konsumen->id) ?>" class="btn btn-danger text-size pdf-cir ml-2"><i class="far fa-file-pdf"></i></a>
                                            </center>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="not-completed" role="tabpanel">
                        <table class="datatable table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Ticket</th>
                                    <th>Tanggal Diubah</th>
                                    <th>Nama Konsumen</th>
                                    <th>Cross Branch</th>
                                    <th>Cabang</th>
                                    <th>Status</th>
                                    <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                        <th>Assign To</th>
                                    <?php } ?>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($not_completed->result() as $fs_konsumen) { ?>
                                    <tr>
                                        <td>
                                            <?= $fs_konsumen->id ?>
                                        </td>
                                        <td data-sort="<?= $fs_konsumen->updated_at ?>">
                                            <?= $fs_konsumen->tanggal_diubah ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->nama_konsumen ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->cross_branch ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->nama_cabang ?>
                                        </td>
                                        <td>
                                            <?php if ($fs_konsumen->status_approval == -1) { ?>
                                                <b class="text-secondary">Not Completed</b>
                                            <?php } else if ($fs_konsumen->status_approval == 0) { ?>
                                                <b class="text-secondary">Head Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 1) { ?>
                                                <b class="text-secondary">Manager Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 2) { ?>
                                                <b class="text-secondary">HO Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 3) { ?>
                                                <b class="text-warning">In Progress</b>
                                            <?php } else if ($fs_konsumen->status_approval == 4) { ?>
                                                <b class="text-danger">Returned</b>
                                            <?php } else if ($fs_konsumen->status_approval == 5) { ?>
                                                <b class="text-secondary">Scoring</b>
                                            <?php } else if ($fs_konsumen->status_approval == 6) { ?>
                                                <b class="text-success">Finished</b>
                                            <?php } ?>
                                        </td>
                                        <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                            <td data-search="<?= $fs_konsumen->name ?>">
                                                <center>
                                                    <select class="form-control text-size survey border" data-fs="<?= $fs_konsumen->id ?>">
                                                        <option selected value="">Pilih CMS</option>
                                                        <?php foreach ($users->result() as $user) { ?>
                                                            <option <?= $user->id_user == $fs_konsumen->assign_cms ? 'selected' : '' ?> value="<?= $user->id_user ?>"><?= $user->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </center>
                                            </td>
                                        <?php } ?>
                                        <td style="white-space: nowrap;">
                                            <center>
                                                <?php if ($this->fungsi->user_login()->level >= 3) { ?>
                                                    <a href="<?= base_url('fs_konsumen/create/' . $fs_konsumen->id) ?>" class="btn btn-primary text-size radius" style="width: 40px;"><i class="fas fa-eye"></i></a>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('fs_konsumen/create/' . $fs_konsumen->id) ?>" class="btn btn-primary text-size radius" style="width: 40px;"><i class="fas fa-edit"></i></a>
                                                <?php } ?>
                                                <a href="<?= base_url('fs_konsumen/generate_pdf_html/' . $fs_konsumen->id) ?>" class="btn btn-danger text-size pdf-cir ml-2"><i class="far fa-file-pdf"></i></a>
                                            </center>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="head-approval" role="tabpanel">
                        <table class="datatable table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Ticket</th>
                                    <th>Tanggal Diubah</th>
                                    <th>Nama Konsumen</th>
                                    <th>Cross Branch</th>
                                    <th>Cabang</th>
                                    <th>Status</th>
                                    <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                        <th>Assign To</th>
                                    <?php } ?>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($head_approval->result() as $fs_konsumen) { ?>
                                    <tr>
                                        <td>
                                            <?= $fs_konsumen->id ?>
                                        </td>
                                        <td data-sort="<?= $fs_konsumen->updated_at ?>">
                                            <?= $fs_konsumen->tanggal_diubah ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->nama_konsumen ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->cross_branch ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->nama_cabang ?>
                                        </td>
                                        <td>
                                            <?php if ($fs_konsumen->status_approval == NULL) { ?>
                                                <b class="text-secondary">Head Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 0) { ?>
                                                <b class="text-secondary">Head Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 1) { ?>
                                                <b class="text-secondary">Manager Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 2) { ?>
                                                <b class="text-secondary">HO Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 3) { ?>
                                                <b class="text-warning">In Progress</b>
                                            <?php } else if ($fs_konsumen->status_approval == 4) { ?>
                                                <b class="text-danger">Returned</b>
                                            <?php } else if ($fs_konsumen->status_approval == 5) { ?>
                                                <b class="text-secondary">Scoring</b>
                                            <?php } else if ($fs_konsumen->status_approval == 6) { ?>
                                                <b class="text-success">Finished</b>
                                            <?php } ?>
                                        </td>
                                        <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                            <td data-search="<?= $fs_konsumen->name ?>">
                                                <center>
                                                    <select class="form-control text-size survey border" data-fs="<?= $fs_konsumen->id ?>">
                                                        <option selected value="">Pilih CMS</option>
                                                        <?php foreach ($users->result() as $user) { ?>
                                                            <option <?= $user->id_user == $fs_konsumen->assign_cms ? 'selected' : '' ?> value="<?= $user->id_user ?>"><?= $user->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </center>
                                            </td>
                                        <?php } ?>
                                        <td style="white-space: nowrap;">
                                            <center>
                                                <?php if ($this->fungsi->user_login()->level >= 3) { ?>
                                                    <a href="<?= base_url('fs_konsumen/create/' . $fs_konsumen->id) ?>" class="btn btn-primary text-size radius" style="width: 40px;"><i class="fas fa-eye"></i></a>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('fs_konsumen/create/' . $fs_konsumen->id) ?>" class="btn btn-primary text-size radius" style="width: 40px;"><i class="fas fa-edit"></i></a>
                                                <?php } ?>
                                                <a href="<?= base_url('fs_konsumen/generate_pdf_html/' . $fs_konsumen->id) ?>" class="btn btn-danger text-size pdf-cir ml-2"><i class="far fa-file-pdf"></i></a>
                                            </center>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="manager-approval" role="tabpanel">
                        <table class="datatable table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Ticket</th>
                                    <th>Tanggal Diubah</th>
                                    <th>Nama Konsumen</th>
                                    <th>Cross Branch</th>
                                    <th>Cabang</th>
                                    <th>Status</th>
                                    <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                        <th>Assign To</th>
                                    <?php } ?>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($manager_approval->result() as $fs_konsumen) { ?>
                                    <tr>
                                        <td>
                                            <?= $fs_konsumen->id ?>
                                        </td>
                                        <td data-sort="<?= $fs_konsumen->updated_at ?>">
                                            <?= $fs_konsumen->tanggal_diubah ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->nama_konsumen ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->cross_branch ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->nama_cabang ?>
                                        </td>
                                        <td>
                                            <?php if ($fs_konsumen->status_approval == NULL) { ?>
                                                <b class="text-secondary">Head Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 0) { ?>
                                                <b class="text-secondary">Head Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 1) { ?>
                                                <b class="text-secondary">Manager Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 2) { ?>
                                                <b class="text-secondary">HO Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 3) { ?>
                                                <b class="text-warning">In Progress</b>
                                            <?php } else if ($fs_konsumen->status_approval == 4) { ?>
                                                <b class="text-danger">Returned</b>
                                            <?php } else if ($fs_konsumen->status_approval == 5) { ?>
                                                <b class="text-secondary">Scoring</b>
                                            <?php } else if ($fs_konsumen->status_approval == 6) { ?>
                                                <b class="text-success">Finished</b>
                                            <?php } ?>
                                        </td>
                                        <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                            <td data-search="<?= $fs_konsumen->name ?>">
                                                <center>
                                                    <select class="form-control text-size survey border" data-fs="<?= $fs_konsumen->id ?>">
                                                        <option selected value="">Pilih CMS</option>
                                                        <?php foreach ($users->result() as $user) { ?>
                                                            <option <?= $user->id_user == $fs_konsumen->assign_cms ? 'selected' : '' ?> value="<?= $user->id_user ?>"><?= $user->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </center>
                                            </td>
                                        <?php } ?>
                                        <td style="white-space: nowrap;">
                                            <center>
                                                <?php if ($this->fungsi->user_login()->level >= 3) { ?>
                                                    <a href="<?= base_url('fs_konsumen/create/' . $fs_konsumen->id) ?>" class="btn btn-primary text-size radius" style="width: 40px;"><i class="fas fa-eye"></i></a>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('fs_konsumen/create/' . $fs_konsumen->id) ?>" class="btn btn-primary text-size radius" style="width: 40px;"><i class="fas fa-edit"></i></a>
                                                <?php } ?>
                                                <a href="<?= base_url('fs_konsumen/generate_pdf_html/' . $fs_konsumen->id) ?>" class="btn btn-danger text-size pdf-cir ml-2"><i class="far fa-file-pdf"></i></a>
                                            </center>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="ho-approval" role="tabpanel">
                        <table class="datatable table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Ticket</th>
                                    <th>Tanggal Diubah</th>
                                    <th>Nama Konsumen</th>
                                    <th>Cross Branch</th>
                                    <th>Cabang</th>
                                    <th>Status</th>
                                    <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                        <th>Assign To</th>
                                    <?php } ?>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($ho_approval->result() as $fs_konsumen) { ?>
                                    <tr>
                                        <td>
                                            <?= $fs_konsumen->id ?>
                                        </td>
                                        <td data-sort="<?= $fs_konsumen->updated_at ?>">
                                            <?= $fs_konsumen->tanggal_diubah ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->nama_konsumen ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->cross_branch ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->nama_cabang ?>
                                        </td>
                                        <td>
                                            <?php if ($fs_konsumen->status_approval == NULL) { ?>
                                                <b class="text-secondary">Head Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 0) { ?>
                                                <b class="text-secondary">Head Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 1) { ?>
                                                <b class="text-secondary">Manager Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 2) { ?>
                                                <b class="text-secondary">HO Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 3) { ?>
                                                <b class="text-warning">In Progress</b>
                                            <?php } else if ($fs_konsumen->status_approval == 4) { ?>
                                                <b class="text-danger">Returned</b>
                                            <?php } else if ($fs_konsumen->status_approval == 5) { ?>
                                                <b class="text-secondary">Scoring</b>
                                            <?php } else if ($fs_konsumen->status_approval == 6) { ?>
                                                <b class="text-success">Finished</b>
                                            <?php } ?>
                                        </td>
                                        <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                            <td data-search="<?= $fs_konsumen->name ?>">
                                                <center>
                                                    <select class="form-control text-size survey border" data-fs="<?= $fs_konsumen->id ?>">
                                                        <option selected value="">Pilih CMS</option>
                                                        <?php foreach ($users->result() as $user) { ?>
                                                            <option <?= $user->id_user == $fs_konsumen->assign_cms ? 'selected' : '' ?> value="<?= $user->id_user ?>"><?= $user->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </center>
                                            </td>
                                        <?php } ?>
                                        <td style="white-space: nowrap;">
                                            <center>
                                                <?php if ($this->fungsi->user_login()->level >= 3) { ?>
                                                    <a href="<?= base_url('fs_konsumen/create/' . $fs_konsumen->id) ?>" class="btn btn-primary text-size radius" style="width: 40px;"><i class="fas fa-eye"></i></a>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('fs_konsumen/create/' . $fs_konsumen->id) ?>" class="btn btn-primary text-size radius" style="width: 40px;"><i class="fas fa-edit"></i></a>
                                                <?php } ?>
                                                <a href="<?= base_url('fs_konsumen/generate_pdf_html/' . $fs_konsumen->id) ?>" class="btn btn-danger text-size pdf-cir ml-2"><i class="far fa-file-pdf"></i></a>
                                            </center>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="scoring" role="tabpanel">
                        <table class="datatable table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Ticket</th>
                                    <th>Tanggal Diubah</th>
                                    <th>Nama Konsumen</th>
                                    <th>Cross Branch</th>
                                    <th>Cabang</th>
                                    <th>Status</th>
                                    <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                        <th>Assign To</th>
                                    <?php } ?>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($scoring->result() as $fs_konsumen) { ?>
                                    <tr>
                                        <td>
                                            <?= $fs_konsumen->id ?>
                                        </td>
                                        <td data-sort="<?= $fs_konsumen->updated_at ?>">
                                            <?= $fs_konsumen->tanggal_diubah ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->nama_konsumen ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->cross_branch ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->nama_cabang ?>
                                        </td>
                                        <td>
                                            <?php if ($fs_konsumen->status_approval == NULL) { ?>
                                                <b class="text-secondary">Head Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 0) { ?>
                                                <b class="text-secondary">Head Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 1) { ?>
                                                <b class="text-secondary">Manager Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 2) { ?>
                                                <b class="text-secondary">HO Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 3) { ?>
                                                <b class="text-warning">In Progress</b>
                                            <?php } else if ($fs_konsumen->status_approval == 4) { ?>
                                                <b class="text-danger">Returned</b>
                                            <?php } else if ($fs_konsumen->status_approval == 5) { ?>
                                                <b class="text-secondary">Scoring</b>
                                            <?php } else if ($fs_konsumen->status_approval == 6) { ?>
                                                <b class="text-success">Finished</b>
                                            <?php } ?>
                                        </td>
                                        <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                            <td data-search="<?= $fs_konsumen->name ?>">
                                                <center>
                                                    <select class="form-control text-size survey border" data-fs="<?= $fs_konsumen->id ?>">
                                                        <option selected value="">Pilih CMS</option>
                                                        <?php foreach ($users->result() as $user) { ?>
                                                            <option <?= $user->id_user == $fs_konsumen->assign_cms ? 'selected' : '' ?> value="<?= $user->id_user ?>"><?= $user->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </center>
                                            </td>
                                        <?php } ?>
                                        <td style="white-space: nowrap;">
                                            <center>
                                                <?php if ($this->fungsi->user_login()->level >= 3) { ?>
                                                    <a href="<?= base_url('fs_konsumen/create/' . $fs_konsumen->id) ?>" class="btn btn-primary text-size radius" style="width: 40px;"><i class="fas fa-eye"></i></a>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('fs_konsumen/create/' . $fs_konsumen->id) ?>" class="btn btn-primary text-size radius" style="width: 40px;"><i class="fas fa-edit"></i></a>
                                                <?php } ?>
                                                <a href="<?= base_url('fs_konsumen/generate_pdf_html/' . $fs_konsumen->id) ?>" class="btn btn-danger text-size pdf-cir ml-2"><i class="far fa-file-pdf"></i></a>
                                            </center>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="returned" role="tabpanel">
                        <table class="datatable table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Ticket</th>
                                    <th>Tanggal Diubah</th>
                                    <th>Nama Konsumen</th>
                                    <th>Cross Branch</th>
                                    <th>Cabang</th>
                                    <th>Status</th>
                                    <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                        <th>Assign To</th>
                                    <?php } ?>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($returned->result() as $fs_konsumen) { ?>
                                    <tr>
                                        <td>
                                            <?= $fs_konsumen->id ?>
                                        </td>
                                        <td data-sort="<?= $fs_konsumen->updated_at ?>">
                                            <?= $fs_konsumen->tanggal_diubah ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->nama_konsumen ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->cross_branch ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->nama_cabang ?>
                                        </td>
                                        <td>
                                            <?php if ($fs_konsumen->status_approval == NULL) { ?>
                                                <b class="text-secondary">Head Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 0) { ?>
                                                <b class="text-secondary">Head Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 1) { ?>
                                                <b class="text-secondary">Manager Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 2) { ?>
                                                <b class="text-secondary">HO Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 3) { ?>
                                                <b class="text-warning">In Progress</b>
                                            <?php } else if ($fs_konsumen->status_approval == 4) { ?>
                                                <b class="text-danger">Returned</b>
                                            <?php } else if ($fs_konsumen->status_approval == 5) { ?>
                                                <b class="text-secondary">Scoring</b>
                                            <?php } else if ($fs_konsumen->status_approval == 6) { ?>
                                                <b class="text-success">Finished</b>
                                            <?php } ?>
                                        </td>
                                        <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                            <td data-search="<?= $fs_konsumen->name ?>">
                                                <center>
                                                    <select class="form-control text-size survey border" data-fs="<?= $fs_konsumen->id ?>">
                                                        <option selected value="">Pilih CMS</option>
                                                        <?php foreach ($users->result() as $user) { ?>
                                                            <option <?= $user->id_user == $fs_konsumen->assign_cms ? 'selected' : '' ?> value="<?= $user->id_user ?>"><?= $user->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </center>
                                            </td>
                                        <?php } ?>
                                        <td style="white-space: nowrap;">
                                            <center>
                                                <?php if ($this->fungsi->user_login()->level >= 3) { ?>
                                                    <a href="<?= base_url('fs_konsumen/create/' . $fs_konsumen->id) ?>" class="btn btn-primary text-size radius" style="width: 40px;"><i class="fas fa-eye"></i></a>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('fs_konsumen/create/' . $fs_konsumen->id) ?>" class="btn btn-primary text-size radius" style="width: 40px;"><i class="fas fa-edit"></i></a>
                                                <?php } ?>
                                                <a href="<?= base_url('fs_konsumen/generate_pdf_html/' . $fs_konsumen->id) ?>" class="btn btn-danger text-size pdf-cir ml-2"><i class="far fa-file-pdf"></i></a>
                                            </center>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="finished" role="tabpanel">
                        <table id="form-survey-completed" class="datatable table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Ticket</th>
                                    <th>Tanggal Diubah</th>
                                    <?php if ($this->fungsi->user_login()->level >= 4 || $this->fungsi->user_login()->level == 5) { ?>
                                        <th>Leads ID</th>
                                        <th>Status Kontrak</th>
                                    <?php } ?>
                                    <th>Nama Konsumen</th>
                                    <th>Cabang</th>
                                    <th>Status</th>
                                    <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                        <th>Assign To</th>
                                    <?php } ?>
                                    <th>Recommendation</th>
                                    <th>Score</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($completed->result() as $fs_konsumen) { ?>
                                    <tr>
                                        <td>
                                            <?= $fs_konsumen->id ?>
                                        </td>
                                        <td data-sort="<?= $fs_konsumen->updated_at ?>">
                                            <?= $fs_konsumen->tanggal_diubah ?>
                                        </td>
                                        <?php if ($this->fungsi->user_login()->level >= 4 || $this->fungsi->user_login()->level == 5) { ?>
                                            <td>
                                                <input type="text" class="form-control leads_id" data-id="<?= $fs_konsumen->id ?>" value="<?= $fs_konsumen->leads_id ?>">
                                            </td>
                                            <td>
                                                <select class="form-control text-size border status_kontrak" data-id="<?= $fs_konsumen->id ?>">
                                                    <option selected value="">Pilih Status</option>
                                                    <option <?= $fs_konsumen->status_kontrak == 'Live' ? 'selected' : '' ?> value="Live">Live</option>
                                                    <option <?= $fs_konsumen->status_kontrak == 'Reject' ? 'selected' : '' ?> value="Reject">Reject</option>
                                                </select>
                                            </td>
                                        <?php } ?>
                                        <td>
                                            <?= $fs_konsumen->nama_konsumen ?>
                                        </td>
                                        <td>
                                            <?= $fs_konsumen->nama_cabang ?>
                                        </td>
                                        <td>
                                            <?php if ($fs_konsumen->status_approval == 0) { ?>
                                                <b class=" text-secondary">Head Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 1) { ?>
                                                <b class="text-secondary">Manager Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 2) { ?>
                                                <b class="text-secondary">HO Approval</b>
                                            <?php } else if ($fs_konsumen->status_approval == 3) { ?>
                                                <b class="text-warning">In Progress</b>
                                            <?php } else if ($fs_konsumen->status_approval == 4) { ?>
                                                <b class="text-danger">Returned</b>
                                            <?php } else if ($fs_konsumen->status_approval == 5) { ?>
                                                <!-- <b class="text-success">Disetujui</b> -->
                                                <b class="text-secondary">Scoring</b>
                                            <?php } else if ($fs_konsumen->status_approval == 6) { ?>
                                                <b class="text-success">Finished</b>
                                            <?php } ?>
                                        </td>
                                        <?php if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) { ?>
                                            <td data-search="<?= $fs_konsumen->name ?>">
                                                <center>
                                                    <select class="form-control text-size survey border" data-fs="<?= $fs_konsumen->id ?>" data-cms="<?= $user->name ?>">
                                                        <option selected value="">Pilih CMS</option>
                                                        <?php foreach ($users->result() as $user) { ?>
                                                            <option <?= $user->id_user == $fs_konsumen->assign_cms ? 'selected' : '' ?> value="<?= $user->id_user ?>">
                                                                <?= $user->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </center>
                                            </td>
                                        <?php } ?>
                                        <td>
                                            <?php if ($fs_konsumen->is_recommended == 'Recommended') { ?>
                                                <b class="text-primary">Recommended</b><br>
                                            <?php } ?>
                                            <?php if ($fs_konsumen->is_recommended == 'Not Recommended') { ?>
                                                <b class="text-danger">Not Recommended</b>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <?php if ($fs_konsumen->is_recommended == 'Recommended') { ?>
                                                <b class="text-primary">Pass</b><br>
                                            <?php } ?>
                                            <?php if ($fs_konsumen->is_recommended == 'Not Recommended') { ?>
                                                <b class="text-danger">Fail</b>
                                            <?php } ?>
                                        </td>
                                        <td style="white-space: nowrap;">
                                            <center>
                                                <?php if ($this->fungsi->user_login()->level >= 3) { ?>
                                                    <a href="<?= base_url('fs_konsumen/create/' . $fs_konsumen->id) ?>" class="btn btn-primary text-size radius" style="width: 40px;"><i class="fas fa-eye"></i></a>
                                                <?php } else { ?>
                                                    <a href="<?= base_url('fs_konsumen/create/' . $fs_konsumen->id) ?>" class="btn btn-primary text-size radius" style="width: 40px;"><i class="fas fa-edit"></i></a>
                                                <?php } ?>
                                                <a href="<?= base_url('fs_konsumen/generate_pdf_html/' . $fs_konsumen->id) ?>" class="btn btn-danger text-size pdf-cir ml-2"><i class="far fa-file-pdf"></i></a>
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
            //ID Leads
            var id_leads = $(this).data('fs');
            //ID CMS
            var assign_cms = $(this).val();

            // alert('assign: ' + assign_cms + ' data id: ' + id_leads);

            $.ajax({
                type: "POST",
                url: "<?= base_url('fs_konsumen/update_assignment') ?>",
                dataType: "JSON",
                data: {
                    assign_cms: assign_cms,
                    id_leads: id_leads
                },
                success: function(res) {
                    alert(assign_cms != '' ? 'Data form survey telah di-assign' :
                        'Assignment telah ditarik');
                    console.log(res);

                }
            });
            // return false;
        });

        $('.status_kontrak').on('change', function() {
            //ID Leads
            var id_leads = $(this).data('id');
            //ID CMS
            var status_kontrak = $(this).val();

            // alert('assign: ' + assign_cms + ' data id: ' + id_leads);

            $.ajax({
                type: "POST",
                url: "<?= base_url('fs_konsumen/update_status_kontrak') ?>",
                dataType: "JSON",
                data: {
                    status_kontrak: status_kontrak,
                    id_leads: id_leads
                },
                success: function(res) {
                    alert(`status kontrak id leads ${id_leads}: ${status_kontrak}`);
                    // console.log(res);

                }
            });
            // return false;
        });

    });
</script>

<script>
    $(document).ready(function() {
        //menyimpan data secara AJAX
        $("#form-survey-completed").on("blur", ".leads_id", function() {
            var leads_id = $(this).val();
            var id = $(this).data('id');
            console.log(leads_id + ' ' + id);
            $.ajax({
                url: '<?= base_url() ?>' + 'fs_konsumen/update_leads_id/',
                type: 'POST',
                data: {
                    leads_id: leads_id,
                    id: id
                },
                success: function(data) {
                    console.log(data);
                    $(this).addClass('is-valid')
                }
            })
        })
    })
</script>