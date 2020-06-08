<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4><b>Transfer Data</b></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                <li class="breadcrumb-item active">Transfer Data</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="mb-2 btn-kanan card-margin-2">
            <a class="btn btn-primary text-size" href="<?= base_url('transfer_data/create') ?>"><b>Transfer Data</b></a>
            <a href="#" class="btn btn-primary text-size transfer ml-1" data-toggle="modal" data-target=".bs-example-modal-center"><b>Transfer Semua</b></a>
        </div>
    </div>

    <div class=" col-lg-12">
        <div class="card m-b-20 card-margin-2">
            <div class="card-body">
                <h4 class="mt-0 header-title"><b>Table Data karyawan</b></h4>
                <p class="text-muted m-b-30 text-size">Tekan tombol Transfer Perdata untuk memindahkan data tertentu atau Tekan tombol transfer Semua untuk memindahkan semua data.</p>
                <table id="datatable-buttons" class="table table-hover dt-responsive nowrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Jabatan</th>
                            <th>Cabang</th>
                            <!-- <th>Action</th> -->
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
                                <!-- <td>
                                    <center><a href="#" class="btn btn-secondary text-size transfer" data-toggle="modal" data-target=".bs-example-modal-center" data-nama="<?= $user->name ?>" data-id="<?= $user->id_user ?>">Transfer Semua</a></center>
                                </td> -->
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
                <h5 class="modal-title mt-0"><b>Transfer Data</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('transfer_data/update') ?>" method="post">
                    <!-- ID User -->
                    <input type="hidden" id="id_user" name="id_user">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ml-3 mr-3 text-size text-center">
                                <label>
                                    <h4>Nama pemilik data yang datanya akan di Transfer</h4>
                                </label>
                                <select class="form-control text-size" name="transfer_from" id="transfer_from">
                                    <option selected disabled value="">Pilih Nama Pemilik</option>
                                    <?php foreach ($data->result() as $user) { ?>
                                        <option value="<?= $user->id_user ?>"><?= $user->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <center>
                                <div class="fas fa-sync fa-3x mt-3 mb-3"></div>
                            </center>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group ml-3 mr-3 text-size text-center">
                                <label>
                                    <h4>Nama penerima Data</h4>
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
                            <button type="submit" class="btn btn-primary waves-effect waves-light text-size mt-2 float-right mr-3">
                                <b>Transfer Data</b>
                            </button>
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