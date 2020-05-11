<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Leads Prospect</h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Tabel</a></li>
                <li class="breadcrumb-item active">Leads Prospect</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="btn-kanan mb-2">
            <a href="<?= base_url('leads/create') ?>"><button class="btn btn-primary text-size">Input
                    Prospect</button></a>
        </div>
    </div>
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Tabel Leads Prospect</h4>
                <p class="text-muted m-b-30 text-size">Gunakan form ini untuk input kosumen prospect / go live untuk
                    keperluan NST, KPI dan Bonus</p>
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
                <div class="tab-content">
                    <div class="tab-pane active p-3" id="belum-funding" role="tabpanel">
                        <table id="datatable-buttons"
                            class="table table-striped table-bordered dt-responsive wrap text-size"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Leads ID</th>
                                    <th>Nomor KTP</th>
                                    <th>Follow Up By</th>
                                    <th>Requester</th>
                                    <th>Cabang</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($belum_funding->result() as $leads) { ?>
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
                                        <?= $leads->name ?>
                                    </td>
                                    <td>
                                        <?= $leads->nama_cabang ?>
                                    </td>
                                    <td>
                                        <?php if ($leads->status == 'draft') { ?>
                                        <center><a href="<?= base_url('Leads/edit/' . $leads->id_leads) ?>"
                                                class="btn btn-secondary text-size">Lanjutkan</a></center>
                                        <?php } else if ($leads->status == 'lengkap') { ?>
                                        <center><a href="<?= base_url('Leads/detail/' . $leads->id_leads) ?>"
                                                class="btn btn-primary text-size" style="width: 90px;">Detail</a>
                                        </center>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="sudah-funding" role="tabpanel">
                        <table id="datatable-buttons-1"
                            class="table table-striped table-bordered dt-responsive wrap text-size"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Leads ID</th>
                                    <th>Nomor KTP</th>
                                    <th>Follow Up By</th>
                                    <th>Requester</th>
                                    <th>Cabang</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($sudah_funding->result() as $leads) { ?>
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
                                        <?= $leads->name ?>
                                    </td>
                                    <td>
                                        <?= $leads->nama_cabang ?>
                                    </td>
                                    <td>
                                        <?php if ($leads->status == 'draft') { ?>
                                        <center><a href="<?= base_url('Leads/edit/' . $leads->id_leads) ?>"
                                                class="btn btn-secondary text-size">Lanjutkan</a></center>
                                        <?php } else if ($leads->status == 'lengkap') { ?>
                                        <center><a href="<?= base_url('Leads/detail/' . $leads->id_leads) ?>"
                                                class="btn btn-primary text-size">Detail</a></center>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>