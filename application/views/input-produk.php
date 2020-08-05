<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Input Produk</h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item active">Input Produk</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="btn-kanan mb-2">
            <a href="#"><button class="btn btn-primary text-size">Input Produk</button></a>
        </div>
    </div>
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="header-title mb-3">Table Input Produk</h4>
                <p class="text-muted m-b-30 text-size">.</p>
                <!-- <p class="text-muted m-b-30 text-size">Tiket di bawah.</p> -->
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama konsumen</th>
                            <th>Jenis Konsumen</th>
                            <th>Produk</th>
                            <th>Status</th>
                            <th>PKS</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 70px">
                                Zukhruf Mu'min
                            </td>
                            <td>
                                Eksternal
                            </td>
                            <td>
                                My cars
                            </td>
                            <td>
                                <center>
                                    <h6><span class="badge badge-success">Verified</span></h6>
                                    <br>
                                    <h6><span class="badge badge-primary">Activated</span></h6>
                                    <br>
                                    <h6><span class="badge badge-danger">HO Approval</span></h6>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <h6><span class="badge badge-success">PKS</span></h6>
                                    <br>
                                    <h6><span class="badge badge-danger">Non PKS</span></h6>
                                </center>
                            </td>
                            <td>
                                <?php if ($mapping->status == 'draft') { ?>
                                    <center><a href="<?= base_url('Partner/edit/' . $mapping->id_partner) ?>" class="btn btn-secondary text-size">Lanjutkan</a></center>
                                <?php } else if ($mapping->status == 'lengkap') { ?>
                                    <center><a href="<?= base_url('Partner/detail/' . $mapping->id_partner) ?>" class="btn btn-primary text-size" style="width: 90px;">Detail</a></center>
                                <?php } ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div>