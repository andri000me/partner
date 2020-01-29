<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">List User</h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Helpdesk</a></li>
                <li class="breadcrumb-item active">User</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="mb-2 btn-kanan">
            <a class="btn btn-primary text-size" href="<?= base_url('user/create') ?>">Tambah User</a>
        </div>
    </div>

    <div class=" col-lg-12">
        <div class="card m-b-20">
            <div class="card-body">
                <h4 class="mt-0 header-title">Table Data Karyawan Cabang</h4>
                <!-- <p class="text-muted m-b-30 text-size">Tekan tombol Transfer Perdata untuk memindahkan data tertentu atau Tekan tombol transfer Semua Data untuk memindahkan semua data.</p> -->
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>Jabatan</th>
                            <th>Cabang</th>
                            <th>Status</th>
                            <th>Aksi</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users->result() as $user) { ?>
                            <?php if ($user->id_user == $this->fungsi->user_login()->id_user) continue; ?>
                            <tr>
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
                                    <center>
                                        <?= $user->is_active == 0 ? '<h6><span class="badge badge-danger">Non Aktif</span></h6>' : '<h6><span class="badge badge-success">Aktif</span></h6>' ?>
                                    </center>
                                </td>
                                <td>
                                    <center>
                                        <a class="btn btn-primary text-size detail-user" style="color: white;" data-toggle="modal" data-target="#myModal" data-id="<?= $user->id_user ?>" data-name="<?= $user->name ?>" data-email="<?= $user->email ?>" data-nik="<?= $user->nik ?>" data-level="<?= $user->level ?>" data-branch="<?= $user->id_branch ?>" data-foto="<?= $user->foto ?>" data-active="<?= $user->is_active ?>" data-tanggal="<?= $user->tanggal_daftar ?>">
                                            Detail
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
                <h5 class="modal-title mt-0" id="myModalLabel">Detail User</h5>
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
                                    <input type="phone" class="form-control text-size placement number-only" name="nik" id="nik" required placeholder="072104" minlength="6" maxlength="7" />
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control text-size" name="name" id="name" required placeholder="Ibrahim Ahmad" />
                                </div>
                                <div class="form-group">
                                    <label class="text-size">Jabatan</label>
                                    <select class="form-control text-size" name="jabatan" id="jabatan" required>
                                        <option selected value="">Pilih Jabatan</option>
                                        <option value="1">CMS</option>
                                        <option value="2">Sharia Head</option>
                                        <option value="3">Sharia Manager</option>
                                        <option value="4">Administrator</option>
                                        <option value="5">Admin Tele</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Cabang</label>
                                    <select class="form-control text-size" name="id_branch" id="id_branch">
                                        <option selected disabled value="">Pilih Cabang</option>
                                        <?php foreach ($branches->result() as $branch) { ?>
                                            <option value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group text-size">
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
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group float-right mt-3">
                                            <button type="button" class="btn btn-warning" id="reset_password">Reset Password</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-md-12 ">
                                                <h5>Pengaturan Halaman</h5>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Branch</label><br>
                                                    <input type="checkbox" name="branch" id="branch" switch="none"/>
                                                    <label for="branch" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>User</label><br>
                                                    <input type="checkbox" name="user" id="user" switch="none" />
                                                    <label for="user" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Leads</label><br>
                                                    <input type="checkbox" name="leads" id="leads" switch="none" />
                                                    <label for="leads" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Kerjasama</label><br>
                                                    <input type="checkbox" name="kerjasama" id="kerjasama" switch="none" />
                                                    <label for="kerjasama" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Assignment</label><br>
                                                    <input type="checkbox" name="assignment" id="assignment" switch="none" />
                                                    <label for="assignment" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>NST</label><br>
                                                    <input type="checkbox" name="nst" id="nst" switch="none" />
                                                    <label for="nst" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Transfer Data</label><br>
                                                    <input type="checkbox" name="transfer_data" id="Transfer_data" switch="none" />
                                                    <label for="Transfer_data" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group ml-3 mr-3">
                                                    <label>Product Support</label><br>
                                                    <input type="checkbox" name="product_support" id="product_support" switch="none" />
                                                    <label for="product_support" data-on-label="On" data-off-label="Off"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <div class="mr-3">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
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

            //Module
            
        });

        $("#reset_password").click(function() {
            var id_user = $("#id_user").val();
            $.ajax({
                type: 'POST',
                url: '<?= base_url('User/reset_password/') ?>' + id_user,
                dataType: 'json',
                data: {
                    id_user: id_user
                },
                success: function(data) {
                    alert('Password si ' + $("#name").val() + ' telah diubah menjadi "bfisyariah" ');
                }
            });
        })
    })
</script>