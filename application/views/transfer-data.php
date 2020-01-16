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

                <a class="btn btn-primary" href="<?= base_url('transfer_data/create') ?>">Create +</a>

                <table class="datatable table table-striped table-bordered dt-responsive nowrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Jabatan</th>
                            <th>Cabang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data->result() as $user) { ?>
                            <tr>
                                <td>
                                    <?= $user->name ?>
                                </td>
                                <td>
                                    <?= $user->nik ?>
                                </td>
                                <td>
                                    <?= $user->jabatan ?>
                                </td>
                                <td>
                                    <?= $user->nama_cabang ?>
                                </td>
                                <td>
                                    <center><a href="#" class="btn btn-secondary text-size transfer" data-toggle="modal" data-target=".bs-example-modal-center" data-nama="<?= $user->name ?>" data-id="<?= $user->id_user ?>">Transfer Semua</a></center>
                                </td>
                            </tr>
                        <?php } ?>
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
                <form action="<?= base_url('transfer_data/update') ?>" method="post">
                    <!-- ID User -->
                    <input type="hidden" id="id_user" name="id_user">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ml-3 mr-3 text-center">
                                <label>
                                    <h4>Pemilik data yang akan di Transfer</h4>
                                </label>
                                <input type="text" class="form-control text-size" id="nama_user" value="" required placeholder="bambank" readonly>
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
                                <select class="form-control text-size" name="transfer_to" id="transfer_to">
                                    <option selected disabled value="">Pilih Nama Penerima</option>
                                    <?php foreach ($data->result() as $user) { ?>
                                        <option value="<?= $user->id_user ?>"><?= $user->name ?></option>
                                    <?php } ?>
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

<script>
    $(document).ready(function() {
        $(".transfer").click(function() {
            var id_user = $(this).data("id");
            var nama_user = $(this).data("nama");

            $("#id_user").val(id_user);
            $("#nama_user").val(nama_user);
        })
    })
</script>