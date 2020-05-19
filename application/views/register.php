<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-5">
            <h4><b>Form Register</b></h4>
            <ol class="breadcrumb text-size">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">List User</a></li>
                <li class="breadcrumb-item active">Tambah User</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-primary font-size gradient card-margin-5 mb-5" role="alert">
            <div class="ml-4 mr-4 mt-3 mb-3">
                <h5 class="alert-heading"><i class="fas fa-info-circle"></i> Hati - hati dalam menginput data</h5>
                <p>Input data user dengan benar.</p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card m-b-20 card-margin-5">
            <div class="card-body">
                <div class="ml-3">
                    <h4 class="mt-0 header-title"><b>Form Register User</b></h4>
                    <!-- <p class="text-muted m-b-30 text-size"></p> -->
                </div>
                <?= $this->session->flashdata('berhasil_register') ?>
                <form method="post" class="form-horizontal m-t-30" action="<?= base_url('User/save') ?>" autocomplete="off">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-margin">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" class="form-control mb-4 <?= form_error('name') ? 'has-error' : '' ?>" id="name" name="name" required value="<?= set_value('name') ?>" placeholder="Nama Lengkap">
                                    <?= form_error('name') ?>
                                </div>
                                <div class="form-group">
                                    <label for="nik">Nomor Induk Karyawan</label>
                                    <input type="text" class="form-control mb-4 placement text-size number-only <?= form_error('nik') ? 'has-error' : '' ?>" id="nik" name="nik" required value="<?= set_value('nik') ?>" placeholder="Nomor Induk Karyawan" minlength="6" maxlength="7">
                                    <?= form_error('nik') ?>
                                </div>
                                <div class="form-group">
                                    <label for="id_branch">Cabang</label>
                                    <select class="form-control mb-4" name="id_branch" id="id_branch" required>
                                        <option selected disabled value="">Pilih Cabang</option>
                                        <?php foreach ($branches->result() as $branch) {  ?>
                                            <option <?= set_value('id_branch') == $branch->id_branch ? 'selected' : '' ?> value="<?= $branch->id_branch ?>"><?= $branch->nama_cabang ?></option>
                                        <?php } ?>
                                    </select>
                                    <?= form_error('id_branch') ?>
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <select class="form-control mb-4" name="jabatan" id="jabatan" required>
                                        <option selected disabled value="">Pilih Jabatan</option>
                                        <option <?= set_value('jabatan') == '1' ? 'selected' : '' ?> value="1">CMS</option>
                                        <option <?= set_value('jabatan') == '2' ? 'selected' : '' ?> value="2">Head</option>
                                        <option <?= set_value('jabatan') == '3' ? 'selected' : '' ?> value="3">Manager</option>
                                        <option <?= set_value('jabatan') == '4' ? 'selected' : '' ?> value="4">Admin HO</option>
                                        <option <?= set_value('jabatan') == '5' ? 'selected' : '' ?> value="5">Head HO</option>
                                    </select>
                                    <?= form_error('jabatan') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="form-group form-margin">
                                        <label>Branch</label><br>
                                        <input type="checkbox" name="branch_active" id="branch_active" switch="none" />
                                        <label for="branch_active" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-margin">
                                        <label>User</label><br>
                                        <input type="checkbox" name="user_active" id="user_active" switch="none" />
                                        <label for="user_active" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-margin">
                                        <label>Leads</label><br>
                                        <input type="checkbox" name="leads_active" id="leads_active" switch="none" />
                                        <label for="leads_active" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="form-group form-margin">
                                        <label>Kerjasama</label><br>
                                        <input type="checkbox" name="kerjasama_active" id="kerjasama_active" switch="none" />
                                        <label for="kerjasama_active" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-margin">
                                        <label>Assignment</label><br>
                                        <input type="checkbox" name="assignment_active" id="assignment_active" switch="none" />
                                        <label for="assignment_active" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-margin">
                                        <label>Transfer Data User</label><br>
                                        <input type="checkbox" name="transfer_data_active" id="Transfer_data_active" switch="none" />
                                        <label for="Transfer_data_active" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="form-group form-margin">
                                        <label>Approval Bonus</label><br>
                                        <input type="checkbox" name="approval_bonus_active" id="approval_bonus_active" switch="none" />
                                        <label for="approval_bonus_active" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-margin">
                                        <label>Product Support</label><br>
                                        <input type="checkbox" name="product_support_active" id="product_support_active" switch="none" />
                                        <label for="product_support_active" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group form-margin">
                                        <label>NST</label><br>
                                        <input type="checkbox" name="nst_active" id="nst_active" switch="none" />
                                        <label for="nst_active" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="form-group form-margin">
                                        <label>Tiket</label><br>
                                        <input type="checkbox" name="ticket_active" id="ticket_active" switch="none" />
                                        <label for="ticket_active" data-on-label="On" data-off-label="Off"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-0 float-right mt-4 mr-4">
                                <a href="<?= base_url('user') ?>" class="btn btn-secondary btn-width waves-effect waves-light text-size">Batal</a>
                                <button class="btn btn-primary btn-width waves-effect waves-light text-size ml-1" type="submit">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>