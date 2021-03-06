<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4><b>Daftar Leads Prospect</b></h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
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
            <?php if ($this->fungsi->user_login()->level == 5) { ?>
                <button class="btn btn-danger float-right" id="btn-hapus"><i class="fa fa-trash"></i></button>
            <?php } ?>
        </div>
    </div>
    <div class="col-12">
        <div class="card m-b-20 card-margin-2">
            <div class="card-body">
                <h4 class="mt-0 header-title"><b>Tabel Leads Prospect</b></h4>
                <p class="text-muted m-b-30 text-size">Gunakan form ini untuk input kosumen prospect / go live untuk
                    keperluan NST, KPI dan Bonus</p>
                <table id="datatable-buttons" class="table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <?php if ($this->fungsi->user_login()->level == 5) { ?>
                                <th></th>
                            <?php } ?>
                            <th>ID</th>
                            <th>Tanggal Diubah</th>
                            <th>Nama</th>
                            <th>Nomor KTP</th>
                            <th>Follow Up By</th>
                            <th>Requester</th>
                            <th>Cabang</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data->result() as $leads) { ?>
                            <tr>
                                <?php if ($this->fungsi->user_login()->level == 5) { ?>
                                    <td><input class="data-key" type="checkbox" value="<?= $leads->id_leads ?>"></td>
                                <?php } ?>
                                <td><?= $leads->id_leads ?></td>
                                <td><?= $leads->tanggal_diubah ?></td>
                                <td>
                                    <?= $leads->nama_konsumen ?>
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
        </div>
    </div> <!-- end col -->
</div>

<!-- fungsi delete data -->
<script>
    $(document).ready(function() {
        // <!-- Script untuk delete key -->
        removeKey = () => {
            var key = [];
            $(".data-key:checked").each(function(i) {
                key[i] = $(this).val();
            });
            var keyToString = key.join();
            console.log(keyToString);
            if (key.length === 0) {
                alert("Pilih setidaknya satu data!");
            } else {
                // for (var i = 0; i < key.length; i++) {
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('leads/delete') ?>",
                    data: {
                        keyToString: keyToString
                    },
                    success: function(data) {
                        alert(data);
                        window.location.reload();
                    }
                });
                // }
            }
        };
        // removeKey();
        $("#btn-hapus").on("click", function() {
            var confirmation = confirm('Apakah Anda yakin ingin menghapus data yang dipilih?');
            if (confirmation) {
                removeKey();
            }
        });
    })
</script>