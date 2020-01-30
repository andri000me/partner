<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Tambah user</h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">User</a></li>
                <li class="breadcrumb-item active">Tambah User</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-20">
            <div class="card-body">
                <div class="ml-3">
                    <h4 class="mt-0 header-title">Form Tambah User</h4>
                    <p class="text-muted m-b-30 text-size">Input data user dengan benar.</p>
                </div>
                <?= $this->session->flashdata('berhasil_register') ?>
                <form method="post" class="form-horizontal m-t-30" action="<?= base_url('User/save') ?>" autocomplete="off">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="ml-3 mr-3">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" class="form-control <?= form_error('name') ? 'has-error' : '' ?>" id="name" name="name" value="<?= set_value('name') ?>" placeholder="Nama Lengkap">
                                    <?= form_error('name') ?>
                                </div>
                                <div class="form-group">
                                    <label for="nik">Nomor Induk Karyawan</label>
                                    <input type="text" class="form-control placement text-size number-only <?= form_error('nik') ? 'has-error' : '' ?>" id="nik" name="nik" value="<?= set_value('nik') ?>" placeholder="Nomor Induk Karyawan" minlength="6" maxlength="7">
                                    <?= form_error('nik') ?>
                                </div>
                                <div class="form-group">
                                    <label for="id_branch">Cabang</label>
                                    <select class="form-control" name="id_branch" id="id_branch">
                                        <option selected disabled value="">Pilih Cabang</option>
                                        <?php foreach ($branches->result() as $branch) {  ?>
                                            <option <?= set_value('id_branch') == $branch->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
                                        <?php } ?>
                                    </select>
                                    <?= form_error('id_branch') ?>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <select class="form-control" name="jabatan" id="jabatan">
                                        <option selected disabled value="">Pilih Jabatan</option>
                                        <option <?= set_value('jabatan') == '1' ? 'selected' : '' ?> value="1">CMS</option>
                                        <option <?= set_value('jabatan') == '2' ? 'selected' : '' ?> value="2">Head</option>
                                        <option <?= set_value('jabatan') == '4' ? 'selected' : '' ?> value="3">Manager</option>
                                        <option <?= set_value('jabatan') == '3' ? 'selected' : '' ?> value="4">Head HO</option>
                                        <option <?= set_value('jabatan') == '5' ? 'selected' : '' ?> value="5">Admini HO</option>
                                    </select>
                                    <?= form_error('name') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Branch</label><br>
                                        <input type="checkbox" name="branch_active" id="branch" switch="none" value="1" />
                                        <label for="branch" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ml-3 mr-3">
                                        <label>User</label><br>
                                        <input type="checkbox" name="user_active" id="user" switch="none" value="1" />
                                        <label for="user" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Leads</label><br>
                                        <input type="checkbox" name="leads_active" id="leads" switch="none" value="1" />
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
                                        <input type="checkbox" name="assignment_active" id="assignment" switch="none" value="1" />
                                        <label for="assignment" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ml-3 mr-3">
                                        <label>Transfer Data User</label><br>
                                        <input type="checkbox" name="transfer_data" id="Transfer_data" switch="none" />
                                        <label for="Transfer_data" data-on-label="On" data-off-label="Off"></label>
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
                                        <label>Product Support</label><br>
                                        <input type="checkbox" name="product_support_active" id="product_support" switch="none" />
                                        <label for="product_support" data-on-label="On" data-off-label="Off"></label>
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
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-0 float-right mt-3 mr-3">
                                <a href="<?= base_url('user') ?>" class="btn btn-secondary waves-effect waves-light text-size">Batal</a>
                                <button class="btn btn-primary w-md waves-effect waves-light text-size ml-1" type="submit">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>