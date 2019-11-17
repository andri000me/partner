<div class="content">
    <div class="container-fluid">
        <?= $this->session->flashdata('berhasil_simpan') ?>
        <div class="row">
            <div class="col-12">
                <a href="<?= base_url('Partner/mapping') ?>"><button class="btn btn-primary mt-4 mb-4"> + Tambah Data Mapping</button></a>
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Data Partner</h4>
                        <div class="table-rep-plugin">
                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped">
                                    <thead>
                                        <tr>
                                        <tr>
                                            <th>Nama Usaha</th>
                                            <th>Bidang Usaha</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data->result() as $partner) { ?>
                                            <tr>
                                                <td><?= $partner->nama_usaha ?></td>
                                                <td><?= $partner->bidang_usaha ?></td>
                                                <td><?= $partner->alamat ?></td>
                                                <td><?= $partner->telepon ?></td>
                                                <td><?= $partner->email ?></td>
                                                <td>
                                                    <center><a href="<?= base_url('Partner/kerjasama/' . $partner->id_partner) ?>" class="btn btn-primary">Detail</a></center>
                                                </td>
                                            <?php } ?>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->

</div> <!-- content -->