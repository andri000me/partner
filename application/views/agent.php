<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4><b>Daftar Agent / BA</b></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-size"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item text-size"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item active text-size">Agent / BA</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <?php if ($this->fungsi->user_login()->level != 4) { ?>
            <div class="btn-kanan card-margin-2">
                <a href="<?= base_url('Agent/create') ?>"><button class="btn btn-primary mb-2 text-size"><b>Rekrut Agent /
                            BA</b></button></a>
            </div>
        <?php } ?>
    </div>
    <div class="col-12">
        <div class="card m-b-20 card-margin-2">
            <div class="card-body">
                <h4 class="mt-0 header-title"><b>Tabel Data Agent / BA</b></h4>
                <p class="text-muted m-b-30 text-size">Tekan Tombol rekrut Agen / BA untuk menambahkan data yang baru dan data akan tersimpan di tabel, tekan tombol Detail untuk melihat data yang telah diinput.</p>
                <table id="datatable-agent" class="table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                            <th>Status</th>
                            <th> </th>
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
                                    <?php if ($agent->status_ticket == 6) { ?>
                                        <b class="text-primary">Teraktivasi</b>
                                    <?php } else if ($agent->status_ticket == 5) { ?>
                                        <b class="text-success">Terverifikasi</b>
                                    <?php } else if ($agent->status_ticket == 4) { ?>
                                        <b class="text-danger">Ditolak</b>
                                    <?php } else if ($agent->status_ticket == 2) { ?>
                                        <b class="text-secondary">Pending HO</b>
                                    <?php } else if ($agent->status_ticket == 1) { ?>
                                        <b class="text-secondary">Menunggu Persetujuan Manager</b>
                                    <?php } else if ($agent->status_ticket == 0) { ?>
                                        <b class="text-secondary">Menunggu Persetujuan Head</b>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if ($agent->status == 'draft') { ?>
                                        <center><a class="btn btn-secondary text-size radius" href="<?= base_url('Agent/edit/' . $agent->id_agent) ?>"><b>Lanjutkan</b></a></center>
                                    <?php } ?>
                                    <?php if ($agent->status == 'lengkap') { ?>
                                        <center><a class="btn btn-primary text-size radius" href="<?= base_url('Agent/detail/' . $agent->id_agent) ?>"><b>Detail</b></a></center>
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