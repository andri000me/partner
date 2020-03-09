<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Form Inputan Partner</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-size"><a href="javascript:void(0);">Lexa</a></li>
                <li class="breadcrumb-item text-size"><a href="javascript:void(0);">Tables</a></li>
                <li class="breadcrumb-item active text-size">Basic Tables</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php if ($this->fungsi->user_login()->level != 4) { ?>
            <div class="btn-kanan">
                <a href="<?= base_url('Agent/create') ?>"><button class="btn btn-primary mb-2 text-size">Rekrut Agent / BA</button></a>
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
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>
                                <div class="text-size">Nama Usaha</div>
                            </th>
                            <th>
                                <div class="text-size">Jenis Agent</div>
                            </th>
                            <th>
                                <div class="text-size">Pekerjaan</div>
                            </th>
                            <th>
                                <div class="text-size">E-mail</div>
                            </th>
                            <th>
                                <div class="text-size">Nomor KTP</div>
                            </th>
                            <th>
                                <div class="text-size">Action</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data->result() as $agent) { ?>
                            <tr class="clickable-row" data-href="detail-agent.html">
                                <td>
                                    <div class="text-size"><?= $agent->nama_lengkap ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $agent->jenis_agent ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $agent->pekerjaan ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $agent->email ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $agent->no_ktp ?></div>
                                </td>
                                <td>
                                    <?php if ($agent->status == 'draft') { ?>
                                        <center><a class="btn btn-secondary text-size" href="<?= base_url('Agent/edit/' . $agent->id_agent) ?>">Lanjutkan</a></center>
                                    <?php } ?>
                                    <?php if ($agent->status == 'lengkap') { ?>
                                        <center><a class="btn btn-primary text-size" href="<?= base_url('Agent/detail/' . $agent->id_agent) ?>" style="width: 90px;">Detail</a></center>
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