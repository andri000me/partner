<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">List User</h4>
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item active">Transfer Data</li>
            </ol> -->
        </div>
    </div>
</div>

<div class="row">
    <!-- <div class="col-md-12">
        <div class="mb-2 btn-kanan">
            <a class="btn btn-primary text-size" href="<?= base_url('transfer_data/create') ?>">Transfer Perdata</a>
            <a href="#" class="btn btn-secondary text-size transfer ml-1" data-toggle="modal" data-target=".bs-example-modal-center">Transfer Semua Data</a>
        </div>
    </div> -->

    <div class=" col-lg-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Table Data Karyawan Cabang</h4>
                <!-- <p class="text-muted m-b-30 text-size">Tekan tombol Transfer Perdata untuk memindahkan data tertentu atau Tekan tombol transfer Semua Data untuk memindahkan semua data.</p> -->
                <table class="datatable table table-striped table-bordered dt-responsive nowrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Jabatan</th>
                            <th>Cabang</th>
                            <th>Aksi</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users->result() as $user) { ?>
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
                                    <!-- <button class="btn btn-primary"></button> -->
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>