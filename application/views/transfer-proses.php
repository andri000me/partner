<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box text size">
            <h4 class="page-title">Transfer Data</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item active">Transfer Data</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-lg-12">
        <div class="card m-b-20">

            <div class="card-body text-size">

                <h4 class="mt-0 header-title">Proses Transfer Data</h4>
                <p class="text-muted m-b-30 text-size">Silahkan pilih data yang akan di transfer.</p>

                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#database" role="tab">
                            <span class="d-block d-sm-none">Leads Database</span>
                            <span class="d-none d-sm-block">Leads Database</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#prospect" role="tab">
                            <span class="d-block d-sm-none">Leads Prospect</span>
                            <span class="d-none d-sm-block">Leads Prospect</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#mapping" role="tab">
                            <span class="d-block d-sm-none">Mapping Partner</span>
                            <span class="d-none d-sm-block">Mapping Partner</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#partnership" role="tab">
                            <span class="d-block d-sm-none">Partnership</span>
                            <span class="d-none d-sm-block">Partnership</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#agent" role="tab">
                            <span class="d-block d-sm-none">Agent</span>
                            <span class="d-none d-sm-block">Agent</span>
                        </a>
                    </li>
                </ul>

                <form action="<?= base_url('transfer_data/update_transfer') ?>" method="post">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active p-3" id="database" role="tabpanel">
                            <table class="datatable table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Nama Konsumen</th>
                                        <th>Handphone/Whatsapp</th>
                                        <th>SOA</th>
                                        <th>Produk</th>
                                        <th>Detail Produk</th>
                                        <th>Penginput</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($mapping_leads->result() as $data) { ?>
                                        <tr>
                                            <td>
                                                <?= $data->nama_konsumen ?>
                                            </td>
                                            <td>
                                                <?= $data->telepon ?>
                                            </td>
                                            <td>
                                                <?= $data->soa ?>
                                            </td>
                                            <td>
                                                <?= $data->produk ?>
                                            </td>
                                            <td>
                                                <?= $data->detail_produk ?>
                                            </td>
                                            <td data-search="<?= $data->name ?>">
                                                <center>
                                                    <select class="form-control text-size leads" name="leads_transfer[<?= $data->mapping_id_leads ?>]" id="transfer_to" data-data="<?= $data->mapping_id_leads ?>">
                                                        <option selected disabled value="">Pilih Penginput</option>
                                                        <?php foreach ($users->result() as $user) { ?>
                                                            <option <?= $user->id_user == $data->id_user ? 'selected' : '' ?> value="<?= $user->id_user ?>"><?= $user->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </center>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane p-3" id="prospect" role="tabpanel">
                            <table class="datatable table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Leads ID</th>
                                        <th>Nomor KTP</th>
                                        <th>Follow Up By</th>
                                        <th>Funding</th>
                                        <th>Penginput</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($leads->result() as $data) { ?>
                                        <tr>
                                            <td>
                                                <?= $data->nama_konsumen ?>
                                            </td>
                                            <td>
                                                <?= $data->leads_id ?>
                                            </td>
                                            <td>
                                                <?= $data->no_ktp ?>
                                            </td>
                                            <td>
                                                <?= $data->follow_up_by ?>
                                            </td>
                                            <td>
                                                sudah / belum funding
                                            </td>
                                            <td data-search="<?= $data->name ?>">
                                                <center>
                                                    <select class="form-control text-size leads" name="leads_transfer[<?= $data->mapping_id_leads ?>]" id="transfer_to" data-data="<?= $data->mapping_id_leads ?>">
                                                        <option selected disabled value="">Pilih Penginput</option>
                                                        <?php foreach ($users->result() as $user) { ?>
                                                            <option <?= $user->id_user == $data->id_user ? 'selected' : '' ?> value="<?= $user->id_user ?>"><?= $user->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </center>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane p-3" id="mapping" role="tabpanel">
                            <table class="datatable table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Nama Usaha</th>
                                        <th>Bidang Usaha</th>
                                        <th>Alamat</th>
                                        <th>Telepon</th>
                                        <th>E-mail</th>
                                        <th>Produk</th>
                                        <th>Penginput</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($mapping_partner->result() as $data) { ?>
                                        <tr>
                                            <td>
                                                <?= $data->nama_usaha ?>
                                            </td>
                                            <td>
                                                <?= $data->bidang_usaha ?>
                                            </td>
                                            <td>
                                                <?= $data->alamat ?>
                                            </td>
                                            <td>
                                                <?= $data->telepon ?>
                                            </td>
                                            <td>
                                                <?= $data->email ?>
                                            </td>
                                            <td>
                                                <?= $data->kategori_produk ?>
                                            </td>
                                            <td data-search="<?= $data->name ?>">
                                                <center>
                                                    <select class="form-control text-size partner" name="partner_transfer[<?= $data->mapping_id_partner ?>]" id="transfer_to" data-data="<?= $data->mapping_id_partner ?>">
                                                        <option selected disabled value="">Pilih Penginput</option>
                                                        <?php foreach ($users->result() as $user) { ?>
                                                            <option <?= $user->id_user == $data->id_user ? 'selected' : '' ?> value="<?= $user->id_user ?>"><?= $user->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </center>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane p-3" id="partnership" role="tabpanel">
                            <table class="datatable table table-striped table-bordered dt-responsive wrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Nama Usaha</th>
                                        <th>Bidang Usaha</th>
                                        <th>Telepon</th>
                                        <th>Email</th>
                                        <th>Produk</th>
                                        <th>Alamat</th>
                                        <th>Penginput</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($partner->result() as $data) { ?>
                                        <tr>
                                            <td>
                                                <?= $data->nama_usaha ?>
                                            </td>
                                            <td>
                                                <?= $data->bidang_usaha ?>
                                            </td>
                                            <td>
                                                <?= $data->telepon ?>
                                            </td>
                                            <td>
                                                <?= $data->email ?>
                                            </td>
                                            <td>
                                                <?= $data->kategori_produk ?>
                                            </td>
                                            <td>
                                                <?= $data->alamat ?>
                                            </td>
                                            <td data-search="<?= $data->name ?>">
                                                <center>
                                                    <select class="form-control text-size partner" name="partner_transfer[<?= $data->mapping_id_partner ?>]" id="transfer_to" data-data="<?= $data->mapping_id_partner ?>">
                                                        <option selected disabled value="">Pilih Penginput</option>
                                                        <?php foreach ($users->result() as $user) { ?>
                                                            <option <?= $user->id_user == $data->id_user ? 'selected' : '' ?> value="<?= $user->id_user ?>"><?= $user->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </center>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane p-3" id="agent" role="tabpanel">
                            <table id="" class="datatable table table-striped table-bordered dt-responsive wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                            <div class="text-size">Penginput</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($agent->result() as $data) { ?>
                                        <tr>
                                            <td>
                                                <div class="text-size"><?= $data->nama_lengkap ?></div>
                                            </td>
                                            <td>
                                                <div class="text-size"><?= $data->jenis_agent ?></div>
                                            </td>
                                            <td>
                                                <div class="text-size"><?= $data->pekerjaan ?></div>
                                            </td>
                                            <td>
                                                <div class="text-size"><?= $data->email ?></div>
                                            </td>
                                            <td>
                                                <div class="text-size"><?= $data->no_ktp ?></div>
                                            </td>
                                            <td data-search="<?= $data->name ?>">
                                                <center>
                                                    <select class="form-control text-size agent" name="agent_transfer[<?= $data->id_agent ?>]" id="transfer_to" data-data="<?= $data->id_agent ?>">
                                                        <option selected disabled value="">Pilih Penginput</option>
                                                        <?php foreach ($users->result() as $user) { ?>
                                                            <option <?= $user->id_user == $data->id_user ? 'selected' : '' ?> value="<?= $user->id_user ?>"><?= $user->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </center>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="form-group mb-0 float-right mt-3 mr-3">
                        <a href="<?= base_url('transfer_data') ?>" class="btn btn-secondary waves-effect waves-light text-size">Batal</a>
                        <button type="submit" class="btn btn-primary waves-effect waves-light text-size ml-1">
                            Transfer
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.agent').on('change', function() {
            var data = $(this).data('data');
            var penginput = $(this).val();

            // alert('penginput: ' + penginput + ' data id: ' + data);

            $.ajax({
                type: "POST",
                url: "<?= base_url('transfer_data/update_agent') ?>",
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

        $('.leads').on('change', function() {
            var data = $(this).data('data');
            var penginput = $(this).val();

            // alert('penginput: ' + penginput + ' data id: ' + data);

            $.ajax({
                type: "POST",
                url: "<?= base_url('transfer_data/update_leads') ?>",
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

        $('.partner').on('change', function() {
            var data = $(this).data('data');
            var penginput = $(this).val();

            // alert('penginput: ' + penginput + ' data id: ' + data);

            $.ajax({
                type: "POST",
                url: "<?= base_url('transfer_data/update_partner') ?>",
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