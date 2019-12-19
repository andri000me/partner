<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Leads Go Live</h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Tabel</a></li>
                <li class="breadcrumb-item active">Leads Go Live</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php if ($this->fungsi->user_login()->level != 4) { ?>
            <div class="btn-kanan mb-2">
                <a href="<?= base_url('leads/create') ?>"><button class="btn btn-primary text-size">Input
                        Leads</button></a>
                <button class="btn btn-success ml-1 text-size" data-toggle="modal" data-target=".bd-example-modal-xl">Follow Up
                    Leads</button>
            </div>
        <?php } ?>
    </div>
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Tabel Konsumen</h4>
                <p class="text-muted m-b-30 text-size">Gunakan form ini untuk input kosumen go live anda dan keperluan KPI dan Perhitungan Bonus</p>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#belum-funding" role="tab">
                            <span class="d-block d-sm-none">Belum Funding</span>
                            <span class="d-none d-sm-block">Belum Funding</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#sudah-funding" role="tab">
                            <span class="d-block d-sm-none">Sudah Funding</i></span>
                            <span class="d-none d-sm-block">Sudah Funding</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active p-3" id="belum-funding" role="tabpanel">
                    <table class="datatable table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Leads ID</th>
                                <th>Nomor KTP</th>
                                <th>Follow Up By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data->result() as $leads) { ?>
                                <tr>
                                    <td>
                                        <?= $leads->nama_konsumen ?>
                                    </td>
                                    <td>
                                        <?= $leads->leads_id ?>
                                    </td>
                                    <td>
                                        <?= $leads->no_ktp ?>
                                    </td>
                                    <td>
                                        <?= $leads->follow_up_by ?>
                                    </td>
                                    <td>
                                        <?php if ($leads->status == 'draft') { ?>
                                            <center><a href="<?= base_url('Leads/edit/' . $leads->id_leads) ?>" class="btn btn-secondary text-size">Lanjutkan</a></center>
                                        <?php } else if ($leads->status == 'lengkap') { ?>
                                            <center><a href="<?= base_url('Leads/detail/' . $leads->id_leads) ?>" class="btn btn-primary text-size">Detail</a></center>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane p-3" id="sudah-funding" role="tabpanel">
                    <table class="datatable table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Leads ID</th>
                                <th>Nomor KTP</th>
                                <th>Follow Up By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data->result() as $leads) { ?>
                                <tr>
                                    <td>
                                        <?= $leads->nama_konsumen ?>
                                    </td>
                                    <td>
                                        <?= $leads->leads_id ?>
                                    </td>
                                    <td>
                                        <?= $leads->no_ktp ?>
                                    </td>
                                    <td>
                                        <?= $leads->follow_up_by ?>
                                    </td>
                                    <td>
                                        <?php if ($leads->status == 'draft') { ?>
                                            <center><a href="<?= base_url('Leads/edit/' . $leads->id_leads) ?>" class="btn btn-secondary text-size">Lanjutkan</a></center>
                                        <?php } else if ($leads->status == 'lengkap') { ?>
                                            <center><a href="<?= base_url('Leads/detail/' . $leads->id_leads) ?>" class="btn btn-primary text-size">Detail</a></center>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header mb-2">
                    <h6 class="modal-title">Cari Data Partner</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id="" class="datatable table table-striped table-bordered dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Leads ID</th>
                            <th>Nomor KTP</th>
                            <th>Follow Up By</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data->result() as $leads) { ?>
                            <tr>
                                <td>
                                    <?= $leads->nama_konsumen ?>
                                </td>
                                <td>
                                    <?= $leads->leads_id ?>
                                </td>
                                <td>
                                    <?= $leads->no_ktp ?>
                                </td>
                                <td>
                                    <?= $leads->follow_up_by ?>
                                </td>
                                <td>
                                    <center><a href="#" class="btn btn-primary">Pilih</a></center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>