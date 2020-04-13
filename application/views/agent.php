<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Data Agent</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-size"><a href="javascript:void(0);">Partner</a></li>
                <li class="breadcrumb-item text-size"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item active text-size">Agent</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php if ($this->fungsi->user_login()->level != 4) { ?>
        <div class="btn-kanan">
            <a href="<?= base_url('Agent/create') ?>"><button class="btn btn-primary mb-2 text-size">Rekrut Agent /
                    BA</button></a>
        </div>
        <?php } ?>
    </div>
    <div class="col-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Agent</h4>
                <p class="text-muted m-b-30 text-size">Gunakan form ini untuk mendata calon partner yang
                    berpotensi di area cabang anda. Pastikan anda memasukan data yang valid agar
                    memudahkan anda dalam memaintain partner anda.</p>
                <table id="datatable-agent" class="table table-striped table-bordered dt-responsive wrap text-size"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>
                                Nama Usaha
                            </th>
                            <th>
                                Jenis Agent
                            </th>
                            <th>
                                Pekerjaan
                            </th>
                            <th>
                                E-mail
                            </th>
                            <th>
                                Nomor KTP
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                                PKS
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data->result() as $agent) { ?>
                        <tr class="clickable-row" data-href="detail-agent.html">
                            <td>
                                <?= $agent->nama_lengkap ?>
                            </td>
                            <td>
                                <?= $agent->jenis_agent ?>
                            </td>
                            <td>
                                <?= $agent->pekerjaan ?>
                            </td>
                            <td>
                                <?= $agent->email ?>
                            </td>
                            <td>
                                <?= $agent->no_ktp ?>
                            </td>
                            <td>
                                <center>
                                    <?php if($agent->status_ticket == 5){ ?>
                                    <h6><span class="badge badge-success">Terverifikasi</span></h6>
                                    <?php } else if($agent->status_ticket == 6) { ?>
                                    <h6><span class="badge badge-primary">Teraktivasi</span></h6>
                                    <?php } else if($agent->status_ticket == 4){ ?>
                                    <h6><span class="badge badge-danger">Ditolak</span></h6>
                                    <?php } else if($agent->status_ticket < 4){ ?>
                                    <h6><span class="badge badge-secondary">Belum Terverifikasi</span></h6>
                                    <?php } ?>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <?php if($agent->ttd_pks == 'Ya'){ ?>
                                    <h6><span class="badge badge-success">Sudah Tanda Tangan
                                            Kerjasama</span></h6>
                                    <?php } else { ?>
                                    <h6><span class="badge badge-danger">Belum Tanda Tangan
                                            Kerjasama</span></h6>
                                    <?php } ?>
                                </center>
                            </td>
                            <td>
                                <?php if ($agent->status == 'draft') { ?>
                                <center><a class="btn btn-secondary text-size"
                                        href="<?= base_url('Agent/edit/' . $agent->id_agent) ?>">Lanjutkan</a></center>
                                <?php } ?>
                                <?php if ($agent->status == 'lengkap') { ?>
                                <center><a class="btn btn-primary text-size"
                                        href="<?= base_url('Agent/detail/' . $agent->id_agent) ?>"
                                        style="width: 90px;">Detail</a></center>
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

<script>
$(document).ready(function() {
    $('.penginput').on('change', function() {
        var data = $(this).data('data');
        var penginput = $(this).val();

        alert('penginput: ' + penginput + ' data id: ' + data);

        $.ajax({
            type: "POST",
            url: "<?= base_url('transfer_data/update_data/agent') ?>",
            dataType: "JSON",
            data: {
                data: data,
                penginput: penginput
            },
            success: function(data) {
                alert('Success');
            }
        });
        return false;
    });
})
</script>