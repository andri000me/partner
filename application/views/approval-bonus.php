<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Approval Bonus</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item active">Approval Bonus</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <a href="<?= base_url('approval_bonus/create') ?>"><button class="btn btn-primary mb-2 btn-kanan text-size">Tambah Data</button></a>
    </div>
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Table List Approval Bonus</h4>
                <table class="datatable table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>ID Ticket</th>
                            <th>Requester</th>
                            <th>Cabang</th>
                            <th>Lead ID</th>
                            <th>Nama Konsumen</th>
                            <th>Produk</th>
                            <th>Date Modified</th>
                            <th>Ticket Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="clickable-row" data-href="detail-partnership.html">
                            <td>
                                1
                            </td>
                            <td>
                                ibrahim Ahmad
                            </td>
                            <td>
                                BSD
                            </td>
                            <td>
                                227
                            </td>
                            <td>
                                Don Aria Sbada
                            </td>
                            <td>
                                My Ihram
                            </td>
                            <td>
                                27 - 01 - 2020
                            </td>
                            <td>
                                <center>
                                    <h6><span class="badge badge-success">Disetujui</span></h6><br>
                                    <h6><span class="badge badge-danger">Ditolak</span></h6>
                                </center>
                            </td>
                            <td>
                                <center><a href="#" class="btn btn-secondary text-size">Detail</a></center>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>