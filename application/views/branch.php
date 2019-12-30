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
                <form action="<?= base_url('branch/update') ?>" method="post">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                    <td style="width: 90px">
                                        <center><?= $cabang->id_branch ?></center>
                                    </td>
                                    <td>
                                        <?= $cabang->nama_cabang ?>
                                    </td>
                                    <td style="width: 300px;">
                                        <div class="form-group mb-0">
                                            <select class="form-control has_superior" name="has_superior[<?= $cabang->id_branch ?>]" data-id="<?= $cabang->id_branch ?>">
                                                <option <?= $cabang->has_superior == 0 ? 'selected' : '' ?> value="0">Tidak Ada Head & Manager</option>
                                                <option <?= $cabang->has_superior == 1 ? 'selected' : '' ?> value="1">Ada Head</option>
                                                <option <?= $cabang->has_superior == 2 ? 'selected' : '' ?> value="2">Ada Head & Manager</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            <?php }  ?>
                        </tbody>
                    </table>
                    <button class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>