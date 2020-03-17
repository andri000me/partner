<?php
// upload file xls
$target = basename($_FILES['leads_database']['name']);
move_uploaded_file($_FILES['leads_database']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['leads_database']['name'], 0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['leads_database']['name'], false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index = 0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i = 2; $i <= $jumlah_baris; $i++) {

    // menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
    $nama     = $data->val($i, 1);
    $alamat   = $data->val($i, 2);
    $telepon  = $data->val($i, 3);

    if ($nama != "" && $alamat != "" && $telepon != "") {
        // input data ke database (table data_pegawai)
        mysqli_query($koneksi, "INSERT into data_pegawai values('','$nama','$alamat','$telepon')");
        $berhasil++;
    }
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['leads_database']['name']);

// alihkan halaman ke index.php
header("location:index.php?berhasil=$berhasil");