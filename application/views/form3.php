    <div class="container mt-6">
        <center>
            <h1>Form Inputan Partner</h1>
        </center>
        <form action="<?= base_url('Home/save') ?>" method="post">
        <div class="form-group">
            <label>KTP / Paspor</label>
            <input type="file" class="form-control" id="ktp" name="ktp" placeholder="KTP / Paspor">
        </div>
        <div class="form-group">
            <label>NPWP</label>
            <input type="file" class="form-control" id="npwp" name="npwp" placeholder="NPWP">
        </div>
        <div class="form-group">
            <label>SIUP / TDP</label>
            <input type="file" class="form-control" id="siup" name="siup" placeholder="SIUP">
        </div>
        <div class="form-group">
            <label>Logo Perusahaan</label>
            <input type="file" class="form-control" id="logo" name="logo" placeholder="Logo Perusahaan">
        </div>
        <div class="form-group">
            <label>On Going Project</label>
            <input type="text" class="form-control" id="on_going_project" name="on_going_project" placeholder="On Going Project">
        </div>
        <div class="form-group">
            <label>Punya Jumlah Plafond</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="punya_jumlah_plafond" id="punya_jumlah_plafond" value="Ya">
                <label class="form-check-label">
                Ya
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="punya_jumlah_plafond" id="punya_jumlah_plafond" value="Tidak">
                <label class="form-check-label">
                Tidak
                </label>
            </div>
        </div>
        <div class="form-group">
            <label>Punya Giro / Cek</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="punya_giro" id="punya_giro" value="Giro">
                <label class="form-check-label">
                Giro
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="punya_giro" id="punya_giro" value="Cek">
                <label class="form-check-label">
                Cek
                </label>
            </div>
        </div>
        <div class="form-group">
            <label>Foto Usaha</label>
            <input type="file" class="form-control" id="foto_usaha" name="foto_usaha" placeholder="Foto Usaha">
        </div>
        <div class="form-group">
            <label>Keterangan Tambahan</label>
            <textarea class="form-control" id="keterangan_tambahan" name="keterangan_tambahan" placeholder="Keterangan Tambahan"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Save</button> 
        </form>
    </div>