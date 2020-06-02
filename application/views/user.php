<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4><b>List User</b></h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                <li class="breadcrumb-item active">List User</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="mb-2 btn-kanan card-margin-2">
            <a class="btn btn-primary text-size" href="<?= base_url('user/create') ?>"><b>Tambah User</b></a>
        </div>
    </div>

    <div class=" col-lg-12">
        <div class="card m-b-20 card-margin-2">
            <div class="card-body">
                <h4 class="mt-0 mb-4 header-title"><b>Tabel Data Karyawan Cabang</b></h4>
                <!-- <p class="text-muted m-b-30 text-size">Tekan tombol Transfer Perdata untuk memindahkan data tertentu atau Tekan tombol transfer Semua Data untuk memindahkan semua data.</p> -->
                <table id="datatable-buttons" class="table table-hover dt-responsive nowrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Jabatan</th>
                            <th>Cabang</th>
                            <th>Status</th>
                            <th> </th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users->result() as $user) { ?>
                            <tr>
                                <td>
                                    <center>
                                        <div class="zoom-gallery">
                                            <a href="<?= base_url('uploads/foto_profil/' . $user->foto) ?>"><img src="<?= base_url('uploads/foto_profil/' . $user->foto) ?>" alt="" style="height:50px; width:50px;"></a>
                                        </div>
                                    </center>
                                </td>
                                <td>
                                    <?= $user->name ?>
                                </td>
                                <td>
                                    <?= $user->nik ?>
                                </td>
                                <td>
                                    <?= $user->jabatan ?>
                                </td>
                                <td>
                                    <?= $user->nama_cabang ?>
                                </td>
                                <td>
                                    <?= $user->is_active == 0 ? '<b class="text-danger">Non Aktif</b>' : '<b class="text-success">Aktif</b>' ?>
                                </td>
                                <td>
                                    <center>
                                        <a class="btn btn-primary text-size detail-user radius" style="color: white;" data-toggle="modal" data-target="#myModal" data-id="<?= $user->id_user ?>" data-name="<?= $user->name ?>" data-email="<?= $user->email ?>" data-nik="<?= $user->nik ?>" data-level="<?= $user->level ?>" data-branch="<?= $user->id_branch ?>" data-foto="<?= $user->foto ?>" data-active="<?= $user->is_active ?>" data-tanggal="<?= $user->tanggal_daftar ?>">
                                            <b>Detail</b>
                                        </a>
                                        <!-- <form method="post" action="<?= base_url('User/del') ?>">

                                            <input type="hidden" name="user_id" value="<?= $user->id_user ?>">
                                            <button class="btn btn-danger ml-1" onclick="return confirm('Apakah Anda yakin Menghapus data ini?')">Hapus</button>
                                        </form> -->
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

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel"><b>Detail User</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="<?= base_url('User/update') ?>">
                            <!-- ID User -->
                            <input type="hidden" name="id_user" id="id_user">
                            <div class="ml-3 mr-3 mt-3">
                                <div class="form-group">
                                    <label>Nomor Induk Karyawan</label>
                                    <input type="phone" class="form-control text-size placement number-only mb-4" name="nik" id="nik" required placeholder="072104" minlength="6" maxlength="7" autocomplete="off" />
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control text-size mb-4"" name=" name" id="name" required placeholder="Ibrahim Ahmad" />
                                </div>
                                <div class="form-group">
                                    <label class="text-size">Jabatan</label>
                                    <select class="form-control text-size mb-4"" name=" jabatan" id="jabatan" required>
                                        <option selected value="">Pilih Jabatan</option>
                                        <option value="1">CMS</option>
                                        <option value="2">Head</option>
                                        <option value="3">Manager</option>
                                        <option value="4">Admin HO</option>
                                        <option value="5">Head HO</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Cabang</label>
                                    <select class="form-control text-size mb-4" name="id_branch" id="id_branch">
                                        <option selected disabled value="">Pilih Cabang</option>
                                        <?php foreach ($branches->result() as $branch) { ?>
                                            <option value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group text-size mb-4">
                                    <label>Status</label><br>
                                    <div class="form-check form-check-inline mt-2">
                                        <input class="form-check-input" type="radio" name="is_active" required value="0">
                                        <label class="form-check-label">
                                            Non Aktif
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="is_active" required value="1">
                                        <label class="form-check-label">
                                            Aktif
                                        </label>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-md-12 ">
                                                <h5 class="ml-3"><b>Pengaturan Halaman</b></h5>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Branch</label><br>
                                                    <input type="checkbox" name="branch_active" id="branch" switch="none" />
                                                    <label for="branch" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>User</label><br>
                                                    <input type="checkbox" name="user_active" id="user" switch="none" />
                                                    <label for="user" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Leads</label><br>
                                                    <input type="checkbox" name="leads_active" id="leads" switch="none" />
                                                    <label for="leads" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Kerjasama</label><br>
                                                    <input type="checkbox" name="kerjasama_active" id="kerjasama" switch="none" />
                                                    <label for="kerjasama" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Assignment</label><br>
                                                    <input type="checkbox" name="assignment_active" id="assignment" switch="none" />
                                                    <label for="assignment" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>NST</label><br>
                                                    <input type="checkbox" name="nst_active" id="nst" switch="none" />
                                                    <label for="nst" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Approval Bonus</label><br>
                                                    <input type="checkbox" name="approval_bonus_active" id="approval_bonus" switch="none" />
                                                    <label for="approval_bonus" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Transfer Data User</label><br>
                                                    <input type="checkbox" name="transfer_data_active" id="transfer_data" switch="none" />
                                                    <label for="transfer_data" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Product Support</label><br>
                                                    <input type="checkbox" name="product_support_active" id="product_support" switch="none" />
                                                    <label for="product_support" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Tiket</label><br>
                                                    <input type="checkbox" name="ticket_active" id="ticket" switch="none" />
                                                    <label for="ticket" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group mt-3">
                                    <button type="button" class="btn btn-info" id="reset_password"><b>Reset
                                            Password</b></button>
                                </div>

                            </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <div class="mr-3">
                    <button type="button" class="btn btn-secondary waves-effect w-md" data-dismiss="modal"><b>Batal</b></button>
                    <button type="submit" class="btn btn-primary waves-effect w-md waves-light"><b>Update</b></button>
                </div>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<script>
    $(document).ready(function() {
        var foto = "<?= base_url('uploads/foto_profil/') ?>";
        $(".table").on('click', '.detail-user', function() {
            $("#id_user").val($(this).data('id'));
            $("#nik").val($(this).data('nik'));
            $("#name").val($(this).data('name'));
            $("#email").val($(this).data('email'));
            $("#jabatan").val($(this).data('level'));
            $("#id_branch").val($(this).data('branch'));
            $("input:radio[name=is_active]")[$(this).data('active')].checked = true;
            $("#reset_password").data('id', $(this).data('id'));
            $("#foto_profil").attr('src', foto + $(this).data('foto'));

            var id_user = $(this).data('id');
            //Module
            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>' + 'user/get_module/' + id_user,
                dataType: 'json',
                data: {
                    id_user: id_user
                },
                success: function(data) {
                    if (data.branch_active == 1) {
                        $("#branch").prop('checked', true);
                    }
                    if (data.user_active == 1) {
                        $("#user").prop('checked', true);
                    }
                    if (data.leads_active == 1) {
                        $("#leads").prop('checked', true);
                    }
                    if (data.kerjasama_active == 1) {
                        $("#kerjasama").prop('checked', true);
                    }
                    if (data.assignment_active == 1) {
                        $("#assignment").prop('checked', true);
                    }
                    if (data.nst_active == 1) {
                        $("#nst").prop('checked', true);
                    }
                    if (data.transfer_active == 1) {
                        $("#transfer_data").prop('checked', true);
                    }
                    if (data.product_active == 1) {
                        $("#product_support").prop('checked', true);
                    }
                    if (data.approval_bonus_active == 1) {
                        $("#approval_bonus").prop('checked', true);
                    }
                    if (data.ticket_active == 1) {
                        $("#ticket").prop('checked', true);
                    }
                }
            });
        });

        $("#reset_password").click(function() {
            var id_user = $("#id_user").val();
            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>' + 'user/reset_password/' + id_user,
                dataType: 'json',
                data: {
                    id_user: id_user
                },
                success: function(data) {
                    alert('Password si ' + $("#name").val() +
                        ' telah diubah menjadi "bfisyariah" ');
                }
            });
        })
    })
</script>