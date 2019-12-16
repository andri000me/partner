<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Cabang</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item active">Cabang</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card m-b-20">
            <div class="card-body">
                <table id="datatable-buttons-branch" class="table table-striped table-bordered dt-responsive wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ID Cabang</th>
                            <th>Nama Cabang</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data->result() as $cabang) { ?>
                            <tr>
                                <td>
                                    <div class="text-size"><?= $cabang->id_branch ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $cabang->nama_cabang ?></div>
                                </td>
                                <td>
                                    <div class="text-size">
                                        <div class="form-group mb-0">
                                            <select class="form-control has_superior" name="has_superior" data-id="<?= $cabang->id_branch ?>">
                                                <option <?= $cabang->has_superior == 0 ? 'selected' : '' ?> value="0">Tidak Ada Head & Manager</option>
                                                <option <?= $cabang->has_superior == 1 ? 'selected' : '' ?> value="1">Ada Head</option>
                                                <option <?= $cabang->has_superior == 2 ? 'selected' : '' ?> value="2">Ada Head & Manager</option>
                                            </select>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php }  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div>