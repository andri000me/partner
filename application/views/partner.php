<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4><b>Daftar Merchant</b></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item text-size"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item text-size"><a href="javascript:void(0);">Kerjasama</a></li>
                <li class="breadcrumb-item text-size active">Daftar Merchant</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <!-- <a href="<?= base_url('Partner/create') ?>"><button class="btn btn-primary mb-4">Rekrut Partner</button></a>
            <a href="#"><button class="btn btn-success ml-3 mb-4" data-toggle="modal" data-target=".bd-example-modal-xl">Maintain Partner</button></a> -->
        <?php if ($this->fungsi->user_login()->level != 4) { ?>
            <div class="btn-kanan mb-2 card-margin-2">
                <a href="<?= base_url('Partner/create') ?>"><button class="btn btn-primary text-size"><b>Rekrut
                            Merchant</b></button></a>
                <a href="#"><button class="btn btn-primary ml-1 text-size" data-toggle="modal" data-target=".bd-example-modal-xl"><b>Maintain Merchant</b></button></a>
                <button class="btn btn-danger float-right" id="btn-hapus"><i class="fa fa-trash"></i></button>
            </div>
        <?php } ?>
    </div>
    <div class="col-12">
        <div class="card m-b-20 card-margin-2">
            <div class="card-body">
                <h4 class="mt-0 header-title"><b>Tabel Data Merchant</b></h4>
                <p class="text-muted m-b-30 text-size">Tekan Tombol rekrut Merchant untuk menambahkan data yang baru dan data akan tersimpan di tabel, tekan tombol Detail untuk melihat data yang telah diinput.</p>
                <table id="datatable-buttons" class="table table-hover dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID Partner</th>
                            <th>Nama Usaha</th>
                            <th>Produk</th>
                            <th>Kerjasama</th>
                            <th>Cabang</th>
                            <th>Status</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data->result() as $partner) { ?>
                            <tr>
                                <td><input class="data-key" type="checkbox" value="<?= $partner->id_partner ?>"></td>
                                <td>
                                    <?= $partner->id_partner ?>
                                </td>
                                <td>
                                    <?= $partner->nama_usaha ?>
                                </td>
                                <td>
                                    <?= $partner->kategori_produk ?>
                                </td>
                                <!-- Kerjasama -->
                                <td>
                                    <?php if ($partner->ttd_pks == 'Ya') { ?>
                                        <b class="text-success">PKS</b>
                                    <?php } else { ?>
                                        <b class="text-danger">Non-PKS</b>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?= $partner->nama_cabang ?>
                                </td>
                                <!-- Status -->
                                <td>
                                    <?php if ($partner->status_ticket == 6) { ?>
                                        <b class="text-primary">Teraktivasi</b>
                                    <?php } else if ($partner->status_ticket == 5) { ?>
                                        <b class="text-success">Terverifikasi</b>
                                    <?php } else if ($partner->status_ticket == 4) { ?>
                                        <b class="text-danger">Ditolak</b>
                                    <?php } else if ($partner->status_ticket == 2) { ?>
                                        <b class="text-secondary">Pending HO</b>
                                    <?php } else if ($partner->status_ticket == 1) { ?>
                                        <b class="text-secondary">Menunggu Persetujuan Manager</b>
                                    <?php } else if ($partner->status_ticket == 0) { ?>
                                        <b class="text-secondary">Menunggu Persetujuan Head</b>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if ($partner->status == 'draft') { ?>
                                        <center><a href="<?= base_url('Partner/edit/' . $partner->id_partner) ?>" class="btn btn-secondary text-size radius"><b>Lanjutkan</b></a></center>
                                    <?php } else if ($partner->status == 'lengkap') { ?>
                                        <center><a href="<?= base_url('Partner/detail/' . $partner->id_partner) ?>" class="btn btn-primary text-size radius" style="width: 90px;"><b>Detail</b></a></center>
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

<!-- Modal Maintain -->
<div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-header mb-3">
                    <h6 class="modal-title"><b>Cari Data Merchant</b></h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <table id="" class="datatable-modal table table-hover dt-responsive wrap text-size table-modal" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>
                                <div class="text-size">Usaha</div>
                            </th>
                            <th>
                                <div class="text-size">Kategori Produk</div>
                            </th>
                            <th>
                                <div class="text-size">Telepon</div>
                            </th>
                            <th>
                                <div class="text-size"> </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($maintains->result() as $maintain) { ?>
                            <tr>
                                <td class="not-clickable">
                                    <div class="text-size"><?= $maintain->nama_usaha ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $maintain->kategori_produk ?></div>
                                </td>
                                <td>
                                    <div class="text-size"><?= $maintain->telepon ?></div>
                                </td>
                                <td>
                                    <center>
                                        <a class="btn btn-primary text-size radius" href="<?= base_url('Maintain_partner/create/' . $maintain->id_partner) ?>"><b>Maintain</b></a>
                                    </center>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

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
                    url: "<?= base_url('partner/delete') ?>",
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