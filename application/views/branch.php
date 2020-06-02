<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box card-margin-2">
            <h4><b>Branch</b></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Help Desk</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Admin</a></li>
                <li class="breadcrumb-item active">Branch</li>
            </ol>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card m-b-20 card-margin-2">
            <div class="card-body">
                <h4 class="mt-0 header-title"><b>Tabel Branch</b></h4>
                <p class="text-muted m-b-30 text-size"></p>
                <form action="<?= base_url('branch/update') ?>" method="post">
                    <table id="" class="datatable table table-hover dt-responsive nowrap text-size" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>ID Cabang</th>
                                <th>Cabang</th>
                                <th>Status</th>
                                <th>Head</th>
                                <th>Manager</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data->result() as $cabang) { ?>
                                <tr>
                                    <td><?= $cabang->id_branch ?></td>
                                    <td><?= $cabang->nama_cabang ?></td>
                                    <td>
                                        <select class="form-control has_superior text-size form-border form-radius" name="has_superior[<?= $cabang->id_branch ?>]" data-id="<?= $cabang->id_branch ?>">
                                            <option <?= $cabang->has_superior == 0 ? 'selected' : '' ?> value="0">Tidak Ada Head & Manager</option>
                                            <option <?= $cabang->has_superior == 1 ? 'selected' : '' ?> value="1">Ada Head</option>
                                            <option <?= $cabang->has_superior == 2 ? 'selected' : '' ?> value="2">Ada Head & Manager</option>
                                        </select>
                                    </td>
                                    <td>
                                        <?php
                                        $this->db->from("users");
                                        $this->db->join("branches", "branches.id_branch = users.id_branch", "inner");
                                        $this->db->where("branches.id_branch = " . $cabang->id_branch . " AND level = 2");
                                        $head = $this->db->get();
                                        ?>
                                        <?php foreach ($head->result() as $nama) { ?>
                                            <?= $nama->name ?>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php
                                        $this->db->from("users");
                                        $this->db->join("branches", "branches.id_branch = users.id_branch", "inner");
                                        $this->db->where("branches.id_branch = " . $cabang->id_branch . " AND level = 3");
                                        $manager = $this->db->get();
                                        ?>
                                        <?php foreach ($manager->result() as $nama) { ?>
                                            <?= $nama->name ?>
                                        <?php  } ?>
                                    </td>
                                </tr>
                            <?php }  ?>
                        </tbody>
                    </table>
                    <button class="btn btn-primary w-md float-right mt-4 text-size"><b>Update</b></button>
                </form>
                </>
            </div>
        </div> <!-- end col -->
    </div>