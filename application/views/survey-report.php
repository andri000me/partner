<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Daftar Data Survey</h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Tabel</a></li>
                <li class="breadcrumb-item active">Daftar Data Survey</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="btn-kanan mb-2">
            <a href="<?= base_url('leads/create') ?>"><button class="btn btn-primary text-size">Buat Data</button></a>
        </div>
    </div>
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Tabel Leads Prospect</h4>
                <p class="text-muted m-b-30 text-size">Gunakan form ini untuk input kosumen prospect / go live untuk keperluan NST, KPI dan Bonus</p>
                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#all" role="tab">
                            <span class="d-block d-sm-none">All Data</span>
                            <span class="d-none d-sm-block">All Data</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pending" role="tab">
                            <span class="d-block d-sm-none">Pending</span>
                            <span class="d-none d-sm-block">Pending</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#finished" role="tab">
                            <span class="d-block d-sm-none">Finished</span>
                            <span class="d-none d-sm-block">Finished</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active p-3" id="all" role="tabpanel">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Ticket</th>
                                    <th>Nama Konsumen</th>
                                    <th>Produk</th>
                                    <th>Cabang</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Tatang
                                    </td>
                                    <td>
                                        My Ihram
                                    </td>
                                    <td>
                                        Bandung
                                    </td>
                                    <td>
                                        Pending
                                    </td>
                                    <td>
                                        <center><a href="<?= base_url('Leads/edit/' . $leads->id_leads) ?>" class="btn btn-secondary text-size radius">Lanjutkan</a></center>
                                        <center><a href="<?= base_url('Leads/detail/' . $leads->id_leads) ?>" class="btn btn-primary text-size radius">Detail</a></center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="pending" role="tabpanel">
                        <table id="datatable-buttons-1" class="table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Ticket</th>
                                    <th>Nama Konsumen</th>
                                    <th>Produk</th>
                                    <th>Cabang</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Tatang
                                    </td>
                                    <td>
                                        My Ihram
                                    </td>
                                    <td>
                                        Bandung
                                    </td>
                                    <td>
                                        Pending
                                    </td>
                                    <td>
                                        <center><a href="<?= base_url('Leads/edit/' . $leads->id_leads) ?>" class="btn btn-secondary text-size radius">Lanjutkan</a></center>
                                        <center><a href="<?= base_url('Leads/detail/' . $leads->id_leads) ?>" class="btn btn-primary text-size radius">Detail</a></center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="finished" role="tabpanel">
                        <table id="datatable-buttons-2" class="table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID Ticket</th>
                                    <th>Nama Konsumen</th>
                                    <th>Produk</th>
                                    <th>Cabang</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Tatang
                                    </td>
                                    <td>
                                        My Ihram
                                    </td>
                                    <td>
                                        Bandung
                                    </td>
                                    <td>
                                        Pending
                                    </td>
                                    <td>
                                        <center><a href="<?= base_url('Leads/edit/' . $leads->id_leads) ?>" class="btn btn-secondary text-size radius">Lanjutkan</a></center>
                                        <center><a href="<?= base_url('Leads/detail/' . $leads->id_leads) ?>" class="btn btn-primary text-size radius">Detail</a></center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>