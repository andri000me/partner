<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Transfer Data</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item active">Transfer Data</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-lg-12">
        <div class="card m-b-20">

            <div class="card-body">

                <h4 class="mt-0 header-title">Table Data karyawan</h4>
                <p class="text-muted m-b-30 text-size">Silahkan pilih karyawan yang datanya akan di Transfer.</p>

                <table class="datatable table table-striped table-bordered dt-responsive nowrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nik</th>
                            <th>Jabatan</th>
                            <th>Cabang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Bambank
                            </td>
                            <td>
                                000007
                            </td>
                            <td>
                                CMS
                            </td>
                            <td>
                                Jakarta
                            </td>
                            <td>
                                <center><a href="#" class="btn btn-secondary text-size" data-toggle="modal" data-target=".bs-example-modal-center">Pilih</a></center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Transfer Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ml-3 mr-3 text-center">
                                <label>
                                    <h4>Pemilik data yang akan di Transfer</h4>
                                </label>
                                <input type="text" class="form-control text-size" name="" id="" value="bambank" required placeholder="bambank" readonly>
                                <?= form_error('nama_usaha'); ?>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <center>
                                <div class="fas fa-sync"></div>
                            </center>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group ml-3 mr-3 text-size text-center">
                                <label>
                                    <h4>Penerima Data</h4>
                                </label>
                                <select class="form-control text-size" name="cabang_cross" id="cabang_cross">
                                    <option selected disabled value="">Pilih Nama Penerima</option>
                                    <!-- <?php foreach ($branches->result() as $branch) { ?>
                                        <?php if ($branch->id_branch == $this->fungsi->user_login()->id_branch) continue; ?>
                                        <option <?= set_value('cabang_cross') == $branch->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
                                    <?php } ?> -->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <center>
                                <button type="submit" class="btn btn-primary waves-effect waves-light text-size ml-1">
                                    Transfer
                                </button>
                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>