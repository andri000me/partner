  <div class="container mt-20">
    <center>
      <h1>Form Inputan Partner</h1>
    </center>
    <form action="<?= base_url('Home/save_stage1') ?>" method="post">
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
      <button class="btn btn-primary" type="submit">Save</button>
      <button class="btn btn-primary" type="submit">Continue</button>
    </form>
  </div>