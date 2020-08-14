<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4><b>Daftar Leads Database</b></h4>
            <p class="text-muted m-b-30 text-size">Gunakan halaman ini untuk input leads interest, tabel ini juga
                dapat digunakan sebagai database anda agar memudahkan pencarian data.</p>
            <!-- <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Leads</a></li>
                <li class="breadcrumb-item active">Database</li>
            </ol> -->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="btn-kanan mb-2 card-margin-2">
            <a href=" <?= base_url('leads/create_database') ?>"><button class="btn btn-primary text-size"><b>Buat Leads</b></button></a>
            <!-- <a href=" <?= base_url('mapping_leads/export_template') ?>"><button class="btn btn-primary text-size">Export Template Excel</button></a>
            <a href=" <?= base_url('mapping_leads/form') ?>"><button class="btn btn-primary text-size">Import Template Excel</button></a> -->
            <?php if ($this->fungsi->user_login()->level == 5) { ?>
                <button class="btn btn-danger float-right" id="btn-hapus"><i class="fa fa-trash"></i></button>
            <?php } ?>
        </div>
    </div>
    <div class="col-12">
        <div class="card m-b-20 card-margin-2">
            <div class="card-body">
                <!-- <h4 class="mt-0 header-title"><b>Tabel Daftar Leads</b></h4> -->
                <?= $this->session->flashdata('alert') ?>
                <table id="datatable-buttons" class="table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <?php if ($this->fungsi->user_login()->level == 5) { ?>
                                <th></th>
                            <?php } ?>
                            <th>ID</th>
                            <th>Nama Konsumen</th>
                            <!-- <th>Telepon</th> -->
                            <th>Source</th>
                            <th>Produk</th>
                            <th>Pemohon</th>
                            <th>Cabang</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data->result() as $mapping_leads) { ?>
                            <tr>
                                <?php if ($this->fungsi->user_login()->level == 5) { ?>
                                    <td><input class="data-key" type="checkbox" value="<?= $mapping_leads->id_leads ?>"></td>
                                <?php } ?>
                                <td><?= $mapping_leads->id_leads ?></td>
                                <td>
                                    <?= $mapping_leads->nama_konsumen ?>
                                </td>
                                <!-- <td>
                                    <?= $mapping_leads->telepon ?>
                                </td> -->
                                <td>
                                    <?= $mapping_leads->soa ?>
                                </td>
                                <td>
                                    <?= $mapping_leads->produk ?>
                                </td>
                                <td>
                                    <?= $mapping_leads->name ?>
                                </td>
                                <td>
                                    <?= $mapping_leads->nama_cabang ?>
                                </td>
                                <td>
                                    <center><a class="btn btn-primary text-size radius" href="<?= base_url('leads/edit_database/' . $mapping_leads->id_leads) ?>"><b>Lihat</b></a>
                                    </center>
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