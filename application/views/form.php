  <center>
    <h1>Form Inputan Partner</h1>
  </center>
  <form action="<?= base_url('Home/save') ?>" method="post">
    <div class="form-group">
      <label>Nama Usaha</label>
      <input type="text" class="form-control" id="nama_usaha" name="nama_usaha" placeholder="Nama Usaha">
    </div>
    <div class="form-group">
      <label>Bidang Usaha</label>
      <input type="text" class="form-control" id="bidang_usaha" name="bidang_usaha" placeholder="Bidang Usaha">
    </div>
    <div class="form-group">
      <label>Alamat</label>
      <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
    </div>
    <div class="form-group">
      <label>Nomor Telepon</label>
      <input type="phone" class="form-control" id="telepon" name="telepon" placeholder="Nomor Telepon">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <div class="form-group">
      <label>Bentuk Usaha</label>
      <input type="text" class="form-control" id="bentuk_usaha" name="bentuk_usaha" placeholder="Bentuk Usaha">
    </div>
    <div class="form-group">
      <label>Jumalah Karyawan</label>
      <input type="number" class="form-control" id="jumlah_karyawan" name="jumlah_karyawan" placeholder="Jumalah Karyawan">
    </div>
    <div class="form-group">
      <label>Tahun Berdiri</label>
      <input type="date" class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri">
    </div>
    <div class="form-group">
      <label>Barang Jual</label>
      <input type="text" class="form-control" id="barang_jual" name="barang_jual" placeholder="Barang Jual">
    </div>
    <div class="form-group">
      <label>Sosial Media</label>
      <input type="text" class="form-control" id="sosial_media" name="sosial_media" placeholder="Sosial Media">
    </div>
    <div class="form-group">
      <label>Status Tempat Usaha</label>
      <input type="text" class="form-control" id="status_tempat_usaha" name="status_tempat_usaha" placeholder="Status Tempat Usaha">
    </div>
    <div class="form-group">
      <label>Jenis Pembayaran</label>
      <select class="form-control" id="jenis_pembayaran" name="jenis_pembayaran" placeholder="Status Tempat Usaha">
        <option value="Tunai">Tunai</option>
        <option value="Kredit">Kredit</option>
        <option value="Ngutang">Ngutang</option>
      </select>
    </div>
    <div class="form-group">
      <label>Omset</label>
      <input type="number" class="form-control" id="omset" name="omset" placeholder="Omset">
    </div>
    <div class="form-group">
      <label>Jumlah Cabang</label>
      <input type="number" class="form-control" id="jumlah_cabang" name="jumlah_cabang" placeholder="Jumlah Cabang">
    </div>
    <div class="form-group">
      <label>Promosi</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="promosi" id="promosi" value="Ya">
        <label class="form-check-label">
          Ya!
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="promosi" id="promosi" value="Tidak">
        <label class="form-check-label">
          Tidak :(
        </label>
      </div>
    </div>
    <div class="form-group">
      <label>Hobi</label>
      <input type="text" class="form-control" id="hobi" name="hobi" placeholder="Hobi">
    </div>
    <div class="form-group">
      <label>Puanya Pinjaman</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Ya">
        <label class="form-check-label">
          Ya!
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="punya_pinjaman" id="punya_pinjaman" value="Tidak">
        <label class="form-check-label">
          Tidak :(
        </label>
      </div>

    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
  </form>