<a href="<?= base_url('Partner/mapping') ?>"><button class="btn btn-primary mt-4 mb-4"> + Tambah Data Mapping</button></a>

<table id="myTable" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Nama Usaha</th>
            <th>Bidang Usaha</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data->result() as $partner) { ?>
            <tr>
                <td><?= $partner->nama_usaha ?></td>
                <td><?= $partner->bidang_usaha ?></td>
                <td><?= $partner->alamat ?></td>
                <td><?= $partner->telepon ?></td>
                <td><?= $partner->email ?></td>
                <td>
                    <center><a href="#" class="btn btn-primary">Detail</a></center>
                </td>
            <?php } ?>
            </tr>
    </tbody>
    <tfoot>
        <tr>
            <th>Nama Usaha</th>
            <th>Bidang Usaha</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </tfoot>
</table>