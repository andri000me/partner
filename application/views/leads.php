<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4><b>Daftar Leads Prospect</b></h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Leads</a></li>
                <li class="breadcrumb-item active">Prospect</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="btn-kanan mb-2 card-margin-2">
            <a href="<?= base_url('leads/create') ?>"><button class="btn btn-primary text-size"><b>Input
                        Prospect</b></button></a>
        </div>
    </div>
    <div class="col-12">
        <div class="card m-b-20 card-margin-2">
            <div class="card-body">
                <h4 class="mt-0 header-title"><b>Tabel Leads Prospect</b></h4>
                <p class="text-muted m-b-30 text-size">Gunakan form ini untuk input kosumen prospect / go live untuk
                    keperluan NST, KPI dan Bonus</p>
                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#belum-funding" role="tab">
                            <span class="d-block d-sm-none mb-1">Belum Funding</span>
                            <span class="d-none d-sm-block mb-1">Belum Funding</span>
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
                        <table id="datatable-buttons" class="table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Leads ID</th>
                                    <th>Nomor KTP</th>
                                    <th>Follow Up By</th>
                                    <th>Requester</th>
                                    <th>Cabang</th>
                                    <th> </th>
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
                                                <center><a href="<?= base_url('Leads/edit/' . $leads->id_leads) ?>" class="btn btn-secondary text-size radius"><b>Lanjutkan</b></a></center>
                                            <?php } else if ($leads->status == 'lengkap') { ?>
                                                <center><a href="<?= base_url('Leads/detail/' . $leads->id_leads) ?>" class="btn btn-primary text-size radius" style="width: 90px;"><b>Detail</b></a>
                                                </center>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane p-3" id="sudah-funding" role="tabpanel">
                        <table id="datatable-buttons-1" class="table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Leads ID</th>
                                    <th>Nomor KTP</th>
                                    <th>Follow Up By</th>
                                    <th>Requester</th>
                                    <th>Cabang</th>
                                    <th> </th>
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
                                                <center><a href="<?= base_url('Leads/edit/' . $leads->id_leads) ?>" class="btn btn-secondary text-size radius"><b>Lanjutkan</b></a></center>
                                            <?php } else if ($leads->status == 'lengkap') { ?>
                                                <center><a href="<?= base_url('Leads/detail/' . $leads->id_leads) ?>" class="btn btn-primary text-size radius"><b>Detail</b></a></center>
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