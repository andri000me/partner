<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Form Inputan Partner</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Lexa</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                <li class="breadcrumb-item active">Basic Tables</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="btn-kanan">
            <a href="<?= base_url('leads/create') ?>"><button class="btn btn-primary mb-4 test-size">Rekrut
                    Leads</button></a>
            <a href="maintain_leads.html"><button class="btn btn-success ml-1 mb-4 test-size">Maintain
                    Leads</button></a>
        </div>
    </div>
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Mapping Lokasi Partner</h4>
                <p class="text-muted m-b-30 text-size">Gunakan form ini untuk mendata calon partner
                    yang
                    berpotensi di area cabang anda. Pastikan anda memasukan data yang valid agar
                    memudahkan anda dalam memaintain partner anda.</p>
                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama Konsumen</th>
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
                                    <div class="text-size"><?= $leads->nama_konsumen ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $leads->leads_id ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $leads->no_ktp ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $leads->follow_up_by ?></div>
                                </td>
                                <td>

                                    <?php if ($leads->status == 'draft') { ?>
                                        <center><a href="<?= base_url('Leads/edit/' . $leads->id_leads) ?>" class="btn btn-secondary">Lanjutkan</a></center>
                                    <?php } else if ($leads->status == 'lengkap') { ?>
                                        <center><a href="<?= base_url('Leads/detail/' . $leads->id_leads) ?>" class="btn btn-primary">Detail</a></center>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div>