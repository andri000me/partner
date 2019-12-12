<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Form Inputan Partner</h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                <li class="breadcrumb-item active">Basic Tables</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php if ($this->fungsi->user_login()->level != 4) { ?>
            <div class="btn-kanan mb-2">
                <a href="<?= base_url('leads/create') ?>"><button class="btn btn-primary text-size">Rekrut
                        Leads</button></a>
                <a href="maintain_leads.html"><button class="btn btn-success ml-1 text-size">Maintain
                        Leads</button></a>
            </div>
        <?php } ?>
    </div>
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Mapping Lokasi Partner</h4>
                <p class="text-muted m-b-30 text-size">Gunakan form ini untuk mendata calon partner
                    yang
                    berpotensi di area cabang anda. Pastikan anda memasukan data yang valid agar
                    memudahkan anda dalam memaintain partner anda.</p>
                <table class="datatable table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
    </div> <!-- end col -->
</div>