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
        <div>
            <a href="<?= base_url('Agent/create') ?>"><button class="btn btn-primary mb-4">Rekrut Agent / BA</button></a>
        </div>
    </div>
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Agent</h4>
                <p class="text-muted m-b-30">Gunakan form ini untuk mendata calon partner yang
                    berpotensi di area cabang anda. Pastikan anda memasukan data yang valid agar
                    memudahkan anda dalam memaintain partner anda.</p>
                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama Usaha</th>
                            <th>Jenis Agent</th>
                            <th>Pekerjaan</th>
                            <th>E-mail</th>
                            <th>Nomor KTP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data->result() as $agent) { ?>
                            <tr class="clickable-row" data-href="detail-agent.html">
                                <td><?= $agent->nama_lengkap ?></td>
                                <td><?= $agent->jenis_agent ?></td>
                                <td><?= $agent->pekerjaan ?></td>
                                <td><?= $agent->email ?></td>
                                <td><?= $agent->no_ktp ?></td>
                                <td>
                                    <center><a class="btn btn-primary" href="<?= base_url('Agent/edit/' . $agent->id_agent) ?>">Detail</a></center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->

</div>