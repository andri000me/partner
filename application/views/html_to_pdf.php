<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PDF</title>
    <style>
        body {
            font-family: "Verdana", Helvetica, sans-serif;
        }

        th {
            text-align: left;
        }

        .border th,
        .border td {
            border: 1px solid black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center">Form Survey Report</h1>

    <!-- Data Konsumen -->
    <div id="data_konsumen">
        <h2 style="font-weight: bold">Data Konsumen</h2>
        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?= $data->nama_konsumen ?></td>
            </tr>
            <tr>
                <td>Nomor Handphone</td>
                <td>:</td>
                <td><?= $data->telepon ?></td>
            </tr>
            <tr>
                <td>Nomor WhatsApp</td>
                <td>:</td>
                <td><?= $data->nomor_wa ?></td>
            </tr>
            <tr>
                <td>Nomor KTP</td>
                <td>:</td>
                <td><?= $data->no_ktp ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?= $data->email ?></td>
            </tr>
            <tr>
                <td>Jenis Konsumen</td>
                <td>:</td>
                <td><?= $data->jenis_konsumen ?></td>
            </tr>
            <tr>
                <td>Asal Aplikasi</td>
                <td>:</td>
                <td><?= $data->soa ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?= $data->tanggal_lahir ?></td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>:</td>
                <td><?= $data->pendidikan ?></td>
            </tr>
            <tr>
                <td>Pekerjaan Konsumen</td>
                <td>:</td>
                <td><?= $data->pekerjaan_konsumen ?></td>
            </tr>
            <tr>
                <td>Status Pernikahan</td>
                <td>:</td>
                <td><?= $data->status_pernikahan ?></td>
            </tr>
            <tr>
                <td>Lokasi Rumah</td>
                <td>:</td>
                <td><?= $data->lokasi_rumah ?></td>
            </tr>
            <tr>
                <td>Nama Partner</td>
                <td>:</td>
                <td><?= $data->nama_partner ?></td>
            </tr>
            <tr>
                <td>Nama Agent</td>
                <td>:</td>
                <td><?= $data->nama_agent ?></td>
            </tr>
            <tr>
                <td>Acitivty Marketing</td>
                <td>:</td>
                <td><?= $data->activity_marketing ?></td>
            </tr>
            <tr>
                <td>Cross Branch</td>
                <td>:</td>
                <td><?= $data->cross_branch ?></td>
            </tr>
            <tr>
                <td>Nama Cabang Cross</td>
                <td>:</td>
                <td><?= $data->cabang_cross ?></td>
            </tr>
        </table>
    </div>

    <!-- Tujuan Pembiayaan (purpose) -->
    <div id="tujuan_pembiayaan">
        <h2 style="font-weight: bold">Tujuan Pembiayaan</h2>
        <table>
            <tr>
                <td>Jenis Barang / Jasa</td>
                <td>:</td>
                <td><?= $data->purpose_jenis_barang ?></td>
            </tr>
            <tr>
                <td>Tujuan Penggunaan</td>
                <td>:</td>
                <td><?= $data->purpose_tujuan_penggunaan ?></td>
            </tr>
            <tr>
                <td>Kategori Produk</td>
                <td>:</td>
                <td><?= $data->purpose_kategori_produk ?></td>
            </tr>
            <tr>
                <td>Detail Barang / Jasa</td>
                <td>:</td>
                <td><?= $data->purpose_detail_barang_jasa ?></td>
            </tr>
        </table>
        <h3>Informasi Pembiayaan</h3>
        <table>
            <tr>
                <td>Harga Beli ke Merchant</td>
                <td>:</td>
                <td><?= $data->purpose_harga_beli_ke_merchant ?></td>
            </tr>
            <tr>
                <td>Harga Jual ke Konsumen</td>
                <td>:</td>
                <td><?= $data->purpose_harga_jual_ke_konsumen ?></td>
            </tr>
            <tr>
                <td>Uang Muka</td>
                <td>:</td>
                <td><?= $data->purpose_uang_muka ?></td>
            </tr>
            <tr>
                <td>Biaya Administrasi</td>
                <td>:</td>
                <td><?= $data->purpose_biaya_administrasi ?></td>
            </tr>
            <tr>
                <td>Asuransi Jiwa</td>
                <td>:</td>
                <td><?= $data->purpose_asuransi_jiwa ?></td>
            </tr>
            <tr>
                <td>Asuransi Kendaraan</td>
                <td>:</td>
                <td><?= $data->purpose_asuransi_kendaraan ?></td>
            </tr>
            <tr>
                <td>Total Uang Muka</td>
                <td>:</td>
                <td><?= $data->purpose_total_uang_muka ?></td>
            </tr>
            <tr>
                <td>NTF Murni</td>
                <td>:</td>
                <td><?= $data->purpose_ntf_murni ?></td>
            </tr>
            <tr>
                <td>Lama Angsuran</td>
                <td>:</td>
                <td><?= $data->purpose_lama_angsuran ?></td>
            </tr>
            <tr>
                <td>Angsuran per Bulan</td>
                <td>:</td>
                <td><?= $data->purpose_angsuran_per_bulan ?></td>
            </tr>
        </table>
        <h3>Informasi Pendapatan Periodik</h3>
        <table class="border">
            <thead>
                <tr>
                    <th>Nama Merchant / Toko</th>
                    <th>Harga</th>
                    <th>Alamat / Telepon</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $data->purpose_nama_merchant_1 ?></td>
                    <td><?= $data->purpose_harga_1 ?></td>
                    <td><?= $data->purpose_alamat_telepon_1 ?></td>
                </tr>
                <tr>
                    <td><?= $data->purpose_nama_merchant_2 ?></td>
                    <td><?= $data->purpose_harga_2 ?></td>
                    <td><?= $data->purpose_alamat_telepon_2 ?></td>
                </tr>
                <tr>
                    <td><?= $data->purpose_nama_merchant_3 ?></td>
                    <td><?= $data->purpose_harga_3 ?></td>
                    <td><?= $data->purpose_alamat_telepon_3 ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Jika Karyawan -->
    <?php if ($data->pekerjaan_konsumen == 'Karyawan') {  ?>
        <div id="karyawan">
            <div id="kondisi-karyawan">
                <h2>Kondisi Konsumen</h2>
                <table>
                    <tr>
                        <td>Pekerjaan Konsumen</td>
                        <td><?= $data->condition_karyawan_pekerjaan ?></td>
                    </tr>
                    <tr>
                        <td>Penjelasan Profesi Beresiko</td>
                        <td><?= $data->condition_karyawan_profesi_beresiko ?></td>
                    </tr>
                    <tr>
                        <td>Nama Perusahaan Bekerja</td>
                        <td><?= $data->condition_karyawan_tempat_kerja ?></td>
                    </tr>
                    <tr>
                        <td>Bidang Usaha</td>
                        <td><?= $data->condition_karyawan_bidang_usaha ?></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan Pasangan</td>
                        <td><?= $data->condition_karyawan_pekerjaan_pasangan ?></td>
                    </tr>
                    <tr>
                        <td>Penjelasan Profesi Beresiko Pasangan</td>
                        <td><?= $data->condition_karyawan_profesi_beresiko_pasangan ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Kerja / Usaha Pasangan</td>
                        <td><?= $data->condition_karyawan_tempat_kerja_pasangan ?></td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td><?= $data->condition_karyawan_jabatan ?></td>
                    </tr>
                    <tr>
                        <td>Lama Bekerja</td>
                        <td><?= $data->condition_karyawan_lama_bekerja ?></td>
                    </tr>
                </table>
                <h3>Jumlah Tanggungan</h3>
                <table class="border">
                    <tr>
                        <td>Orang Tua</td>
                        <td><?= $data->condition_karyawan_tanggungan_orangtua ?></td>
                    </tr>
                    <tr>
                        <td>Pasangan</td>
                        <td><?= $data->condition_karyawan_tanggungan_pasangan ?></td>
                    </tr>
                    <tr>
                        <td>Anak Usia Belum Sekolah</td>
                        <td><?= $data->condition_karyawan_tanggungan_anak1 ?></td>
                    </tr>
                    <tr>
                        <td>Anak Usia TK - SMA</td>
                        <td><?= $data->condition_karyawan_tanggungan_anak2 ?></td>
                    </tr>
                    <tr>
                        <td>Anak Usia Perguruan Tinggi</td>
                        <td><?= $data->condition_karyawan_tanggungan_anak3 ?></td>
                    </tr>
                    <tr>
                        <td>Saudara / Keluarga Lainnya</td>
                        <td><?= $data->condition_karyawan_tanggungan_saudara ?></td>
                    </tr>
                    <tr>
                        <td>Total Tanggungan</td>
                        <td><?= $data->condition_karyawan_tanggungan_total ?></td>
                    </tr>
                </table>
                <br>
                <table>
                    <tr>
                        <td>Pembayaran gaji via</td>
                        <td><?= $data->condition_karyawan_cara_gajian ?></td>
                    </tr>
                    <tr>
                        <td>Lama Bekerja</td>
                        <td><?= $data->condition_karyawan_lama_bekerja ?></td>
                    </tr>
                    <tr>
                        <td>Total karyawan</td>
                        <td><?= $data->condition_karyawan_jumlah_karyawan ?></td>
                    </tr>
                    <tr>
                        <td>Tahun Berdiri</td>
                        <td><?= $data->condition_karyawan_tahun_berdiri ?></td>
                    </tr>
                </table>
            </div>
            <div id="kapsasitas-karyawan">
                <h2>Kapasitas Konsumen</h2>
                <h3>Pendapatan</h3>
                <table>
                    <tr>
                        <td>Pendapatan Bruto (Gaji)</td>
                        <td><?= $data->capacity_karyawan_income_bruto ?></td>
                    </tr>
                    <tr>
                        <td>Take Home Pay</td>
                        <td><?= $data->capacity_karyawan_income_thp ?></td>
                    </tr>
                    <tr>
                        <td>Apakah ada bonus periodik?</td>
                        <td><?= $data->capacity_karyawan_ada_bonus_periodik ?></td>
                    </tr>
                </table>
                <h3>Informasi pendapatan periodik</h3>
                <table class="border">
                    <thead>
                        <tr>
                            <th>Deskripsi</th>
                            <th>Periode Bulan</th>
                            <th>Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $data->capacity_karyawan_bonus1 ?></td>
                            <td><?= $data->capacity_karyawan_periode1 ?></td>
                            <td><?= $data->capacity_karyawan_nilai1 ?></td>
                        </tr>
                        <tr>
                            <td><?= $data->capacity_karyawan_bonus2 ?></td>
                            <td><?= $data->capacity_karyawan_periode2 ?></td>
                            <td><?= $data->capacity_karyawan_nilai2 ?></td>
                        </tr>
                        <tr>
                            <td><?= $data->capacity_karyawan_bonus3 ?></td>
                            <td><?= $data->capacity_karyawan_periode3 ?></td>
                            <td><?= $data->capacity_karyawan_nilai3 ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">Total Pendapatan Periodik</td>
                            <td><?= $data->capacity_karyawan_total_bonus ?></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table>
                    <tr>
                        <td>Apakah ada pendapatan lainnya?</td>
                        <td><?= $data->capacity_karyawan_ada_income_lainnya ?></td>
                    </tr>
                </table>
                <!-- <h3>Informasi pendapatan</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Deskripsi</th>
                            <th>Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $data->capacity_karyawan_income_lainnya1 ?></td>
                            <td><?= $data->capacity_karyawan_nilai_lain1 ?></td>
                        </tr>
                        <tr>
                            <td><?= $data->capacity_karyawan_income_lainnya2 ?></td>
                            <td><?= $data->capacity_karyawan_nilai_lain2 ?></td>
                        </tr>
                        <tr>
                            <td>Total Pendapatan Lainnya</td>
                            <td><?= $data->capacity_karyawan_total_income_lainnya ?></td>
                        </tr>
                    </tbody>
                </table> -->
                <h3>Biaya Operasional</h3>
                <table class="border">
                    <tr>
                        <td>Biaya Sewa (jika sewa)</td>
                        <td><?= $data->capacity_karyawan_sewa ?></td>
                    </tr>
                    <tr>
                        <td>Gaji Karyawan per Bulan</td>
                        <td><?= $data->capacity_karyawan_payroll ?></td>
                    </tr>
                    <tr>
                        <td>Biaya Internet / Pulsa / Listrik</td>
                        <td><?= $data->capacity_karyawan_internet ?></td>
                    </tr>
                    <tr>
                        <td>Biaya Lainnya</td>
                        <td><?= $data->capacity_karyawan_lainnya ?></td>
                    </tr>
                    <tr>
                        <td>Total Biaya Operasional</td>
                        <td><?= $data->capacity_karyawan_total_operasional ?></td>
                    </tr>
                    <tr>
                        <td>Total Pendapatan Omset</td>
                        <td><?= $data->capacity_karyawan_total_income ?></td>
                    </tr>
                    <tr>
                        <td>Total Nett Profit</td>
                        <td><?= $data->capacity_karyawan_total_net_profit ?></td>
                    </tr>
                    <tr>
                        <td>Presentase Profit Margin (%)</td>
                        <td><?= $data->capacity_karyawan_profit_margin ?></td>
                    </tr>
                </table>
                <br>
                <table>
                    <tr>
                        <td>Saldo Rekening Saat Ini</td>
                        <td><?= $data->capacity_karyawan_saldo_rekening ?></td>
                    </tr>
                    <tr>
                        <td>Pendapatan Pasangan</td>
                        <td><?= $data->capacity_karyawan_income_pasangan ?></td>
                    </tr>
                    <tr>
                        <td>Total Pendapatan</td>
                        <td><?= $data->capacity_karyawan_total_net_income ?></td>
                    </tr>
                </table>
                <h3>Pengeluaran</h3>
                <h3>Informasi Pengeluaran</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Deskripsi</th>
                            <th>Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Biaya Pendidikan</td>
                            <td><?= $data->capacity_karyawan_outcome_pendidikan ?></td>
                        </tr>
                        <tr>
                            <td>Biaya Rumah Tangga</td>
                            <td><?= $data->capacity_karyawan_outcome_rumah ?></td>
                        </tr>
                        <tr>
                            <td>Biaya Internet / Pulsa / Listrik</td>
                            <td><?= $data->capacity_karyawan_outcome_listrik ?></td>
                        </tr>
                        <tr>
                            <td>Biaya Lain-lain</td>
                            <td><?= $data->capacity_karyawan_outcome_lainnya ?></td>
                        </tr>
                        <tr>
                            <td>Total Pengeluaran</td>
                            <td><?= $data->capacity_karyawan_total_biaya_outcome ?></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table>
                    <tr>
                        <td>Apakah ada hutang di tempat lain?</td>
                        <td><?= $data->capacity_karyawan_ada_hutang ?></td>
                    </tr>
                </table>
                <h3>Informasi hutang lainnya</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Deskripsi</th>
                            <th>Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $data->capacity_karyawan_hutang1 ?></td>
                            <td><?= $data->capacity_karyawan_nilai_hutang1 ?></td>
                        </tr>
                        <tr>
                            <td><?= $data->capacity_karyawan_hutang2 ?></td>
                            <td><?= $data->capacity_karyawan_nilai_hutang2 ?></td>
                        </tr>
                        <tr>
                            <td><?= $data->capacity_karyawan_hutang3 ?></td>
                            <td><?= $data->capacity_karyawan_nilai_hutang3 ?></td>
                        </tr>
                        <tr>
                            <td>Total Pengeluaran</td>
                            <td><?= $data->capacity_karyawan_total_hutang ?></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table>
                    <tr>
                        <td>Total Pengeluaran</td>
                        <td><?= $data->capacity_karyawan_total_outcome ?></td>
                    </tr>
                    <tr>
                        <td>Kelebihan Pendapatan</td>
                        <td><?= $data->capacity_karyawan_kelebihan_net_income ?></td>
                    </tr>
                </table>
            </div>
        </div>
    <?php } ?>

    <!-- Jika Wiraswasta -->
    <?php if ($data->pekerjaan_konsumen == 'Wiraswasta') {  ?>
        <div id="wiraswasta">
            <div id="kondisi-wiraswasta">
                <h2>Kondisi Konsumen (Wiraswasta)</h2>
                <table>
                    <tr>
                        <td>Pekerjaan Konsumen</td>
                        <td>:</td>
                        <td><?= $data->condition_karyawan_pekerjaan ?></td>
                    </tr>
                    <tr>
                        <td>Penjelasan Profesi Beresiko</td>
                        <td>:</td>
                        <td><?= $data->condition_wir_profesi_beresiko ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Kerja / Usaha Pasangan</td>
                        <td>:</td>
                        <td><?= $data->condition_wir_tempat_kerja_pasangan ?></td>
                    </tr>
                    <tr>
                        <td>Penjelasan Profesi Beresiko Pasangan</td>
                        <td>:</td>
                        <td><?= $data->condition_wir_profesi_beresiko_pasangan ?></td>
                    </tr>
                </table>

                <h3>Jumlah Tanggungan</h3>
                <table class="border">
                    <tr>
                        <td>Orang Tua</td>
                        <td><?= $data->condition_wir_tanggungan_orangtua ?></td>
                    </tr>
                    <tr>
                        <td>Pasangan</td>
                        <td><?= $data->condition_wir_tanggungan_pasangan ?></td>
                    </tr>
                    <tr>
                        <td>Anak Usia Belum Sekolah</td>
                        <td><?= $data->condition_wir_tanggungan_anak1 ?></td>
                    </tr>
                    <tr>
                        <td>Anak Usia TK - SMA</td>
                        <td><?= $data->condition_wir_tanggungan_anak2 ?></td>
                    </tr>
                    <tr>
                        <td>Anak Usia Perguruan Tinggi</td>
                        <td><?= $data->condition_wir_tanggungan_anak3 ?></td>
                    </tr>
                    <tr>
                        <td>Saudara / Keluarga Lainnya</td>
                        <td><?= $data->condition_wir_tanggungan_saudara ?></td>
                    </tr>
                    <tr>
                        <td>Total Jumlah Tanggungan</td>
                        <td><?= $data->condition_wir_tanggungan_total ?></td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td>Nama Usaha</td>
                        <td>:</td>
                        <td><?= $data->condition_wir_nama_usaha ?></td>
                    </tr>
                    <tr>
                        <td>Bidang Usaha</td>
                        <td>:</td>
                        <td><?= $data->condition_wir_bidang_usaha ?></td>
                    </tr>
                    <tr>
                        <td>Tahun Berdiri</td>
                        <td>:</td>
                        <td><?= $data->condition_wir_tahun_berdiri ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Karyawan</td>
                        <td>:</td>
                        <td><?= $data->condition_wir_jumlah_karyawan ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Bangunan Usaha</td>
                        <td>:</td>
                        <td><?= $data->condition_wir_jenis_bangunan_usaha ?></td>
                    </tr>
                    <tr>
                        <td>Pemilik Tempat Usaha</td>
                        <td>:</td>
                        <td><?= $data->condition_wir_pemilik_tempat_usaha ?></td>
                    </tr>
                    <tr>
                        <td>Kepemilikan Usaha</td>
                        <td>:</td>
                        <td><?= $data->condition_wir_kepemilikan_usaha ?></td>
                    </tr>
                    <tr>
                        <td>Bentuk Usaha</td>
                        <td>:</td>
                        <td><?= $data->condition_wir_bentuk_usaha ?></td>
                    </tr>
                    <tr>
                        <td>Metode Pembayaran</td>
                        <td>:</td>
                        <td><?= $data->condition_wir_cara_bayar ?></td>
                    </tr>
                    <tr>
                        <td>Kondisi Usaha</td>
                        <td>:</td>
                        <td><?= $data->condition_wir_kondisi_usaha ?></td>
                    </tr>
                </table>

            </div>

            <div id="kapasitas-wiraswasta">
                <h2>Kapasitas Konsumen (Wiraswasta)</h2>
                <h3>Pendapatan</h3>
                <table>
                    <tr>
                        <td>Data Analisa</td>
                        <td>:</td>
                        <td><?= $data->capacity_wir_pilih_data_analisa ?></td>
                    </tr>
                </table>

                <h3>Informasi Kredit Rekening (jika kredit rekening)</h3>
                <table class="border">
                    <tr>
                        <td>Mutasi Kredit Bulan Pertama</td>
                        <td><?= $data->capacity_wir_mutasi1 ?></td>
                    </tr>
                    <tr>
                        <td>Mutasi Kredit Bulan Kedua</td>
                        <td><?= $data->capacity_wir_mutasi2 ?></td>
                    </tr>
                    <tr>
                        <td>Mutasi Kredit Bulan Ketiga</td>
                        <td><?= $data->capacity_wir_mutasi3 ?></td>
                    </tr>
                    <tr>
                        <td>Average Kredit</td>
                        <td><?= $data->capacity_wir_avr_mutasi ?></td>
                    </tr>
                </table>

                <h3>Informasi Total Nilai Nota (jika nota)</h3>
                <table class="border">
                    <tr>
                        <td>Total Nota Bulan Pertama</td>
                        <td><?= $data->capacity_wir_nota1 ?></td>
                    </tr>
                    <tr>
                        <td>Total Nota Bulan Kedua</td>
                        <td><?= $data->capacity_wir_nota2 ?></td>
                    </tr>
                    <tr>
                        <td>Total Nota Bulan Ketiga</td>
                        <td><?= $data->capacity_wir_nota3 ?></td>
                    </tr>
                    <tr>
                        <td>Average Kredit</td>
                        <td><?= $data->capacity_wir_avr_nota ?></td>
                    </tr>
                </table>

                <h3>Biaya Operasional</h3>
                <table class="border">
                    <tr>
                        <td>Biaya Sewa (jika sewa)</td>
                        <td><?= $data->capacity_wir_sewa ?></td>
                    </tr>
                    <tr>
                        <td>Gaji Karyawan per Bulan</td>
                        <td><?= $data->capacity_wir_payroll ?></td>
                    </tr>
                    <tr>
                        <td>Biaya Internet / Pulsa / Listrik</td>
                        <td><?= $data->capacity_wir_internet ?></td>
                    </tr>
                    <tr>
                        <td>Biaya Lainnya</td>
                        <td><?= $data->capacity_wir_lainnya ?></td>
                    </tr>
                    <tr>
                        <td>Total Biaya Operasional</td>
                        <td><?= $data->capacity_wir_total_operasional ?></td>
                    </tr>
                    <tr>
                        <td>Total Pendapatan Omset</td>
                        <td><?= $data->capacity_wir_total_income ?></td>
                    </tr>
                    <tr>
                        <td>Total Nett Profit</td>
                        <td><?= $data->capacity_wir_total_net_profit ?></td>
                    </tr>
                    <tr>
                        <td>Presentase Profit Margin (%)</td>
                        <td><?= $data->capacity_wir_profit_margin ?></td>
                    </tr>
                </table>
                <br>
                <table>
                    <tr>
                        <td>Apakah Ada Pendapatan Lainnya?</td>
                        <td>:</td>
                        <td><?= $data->capacity_wir_ada_income_lainnya ?></td>
                    </tr>
                </table>
                <br>
                <table class="border">
                    <thead>
                        <tr>
                            <th>Deskripsi</th>
                            <th>Nominal (Nett)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $data->capacity_wir_income_lain1 ?></td>
                            <td><?= $data->capacity_wir_nilai_lain1 ?></td>
                        </tr>
                        <tr>
                            <td><?= $data->capacity_wir_income_lain2 ?></td>
                            <td><?= $data->capacity_wir_nilai_lain2 ?></td>
                        </tr>
                        <tr>
                            <td>Total Pendapatan</td>
                            <td><?= $data->capacity_wir_total_lain ?></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table>
                    <tr>
                        <td>Saldo Rekening Saat Ini</td>
                        <td><?= $data->capacity_wir_saldo_rekening ?></td>
                    </tr>
                    <tr>
                        <td>Pendapatan Pasangan</td>
                        <td><?= $data->capacity_wir_income_pasangan ?></td>
                    </tr>
                    <tr>
                        <td>Total Pendapatan</td>
                        <td><?= $data->capacity_wir_total_nett_income ?></td>
                    </tr>
                </table>

                <h3>Pengeluaran</h3>
                <h3>Informasikan pengeluaran</h3>
                <table class="border">
                    <thead>
                        <tr>Deskripsi</tr>
                        <tr>Nominal</tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Biaya Pendidikan</td>
                            <td><?= $data->capacity_wir_outcome_pendidikan ?></td>
                        </tr>
                        <tr>
                            <td>Biaya Rumah Tangga</td>
                            <td><?= $data->capacity_wir_outcome_rumah_tangga ?></td>
                        </tr>
                        <tr>
                            <td>Biaya Internet / Pulsa / Listrik</td>
                            <td><?= $data->capacity_wir_outcome_internet ?></td>
                        </tr>
                        <tr>
                            <td>Biaya Lain-lain</td>
                            <td><?= $data->capacity_wir_outcome_lainnya ?></td>
                        </tr>
                        <tr>
                            <td>Total Pengeluaran</td>
                            <td><?= $data->capacity_wir_total_biaya_outcome ?></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <table>
                    <tr>
                        <td>Apakah ada hutang ditempat lain?</td>
                        <td>:</td>
                        <td><?= $data->capacity_wir_ada_hutang ?></td>
                    </tr>
                </table>
                <h3>Informasi hutang lainnya</h3>
                <table class="border">
                    <thead>
                        <tr>
                            <th>Deskripsi</th>
                            <th>Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $data->capacity_wir_hutang1 ?></td>
                            <td><?= $data->capacity_wir_nilai_hutang1 ?></td>
                        </tr>
                        <tr>
                            <td><?= $data->capacity_wir_hutang2 ?></td>
                            <td><?= $data->capacity_wir_nilai_hutang2 ?></td>
                        </tr>
                        <tr>
                            <td><?= $data->capacity_wir_hutang3 ?></td>
                            <td><?= $data->capacity_wir_nilai_hutang3 ?></td>
                        </tr>
                        <tr>
                            <td>Total Hutang</td>
                            <td><?= $data->capacity_wir_total_hutang ?></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    <?php } ?>

    <!-- Aset Konsumen (Capital) -->
    <div id="aset-konsumen">
        <table>
            <tr>
                <td>Kepemilikan Tempat Tinggal Saat Ini</td>
                <td>:</td>
                <td><?= $data->capital_tempat_tinggal_milik ?></td>
            </tr>
            <tr>
                <td>Informasi Alamat BKR</td>
                <td>:</td>
                <td><?= $data->capital_alamat_bkr ?></td>
            </tr>
            <tr>
                <td>Apakah ada hutang di tempat lain?</td>
                <td>:</td>
                <td><?= $data->capital_ada_hutang ?></td>
            </tr>
        </table>
        <h3>Informasi 5 Aset Berharga Yang Dimiliki</h3>
        <table class="border">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Status Barang</th>
                    <th>Nominal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $data->capital_aset1 ?></td>
                    <td><?= $data->capital_status_barang1 ?></td>
                    <td><?= $data->capital_harga1 ?></td>
                </tr>
                <tr>
                    <td><?= $data->capital_aset2 ?></td>
                    <td><?= $data->capital_status_barang2 ?></td>
                    <td><?= $data->capital_harga2 ?></td>
                </tr>
                <tr>
                    <td><?= $data->capital_aset3 ?></td>
                    <td><?= $data->capital_status_barang3 ?></td>
                    <td><?= $data->capital_harga3 ?></td>
                </tr>
                <tr>
                    <td><?= $data->capital_aset4 ?></td>
                    <td><?= $data->capital_status_barang4 ?></td>
                    <td><?= $data->capital_harga4 ?></td>
                </tr>
                <tr>
                    <td><?= $data->capital_aset5 ?></td>
                    <td><?= $data->capital_status_barang5 ?></td>
                    <td><?= $data->capital_harga5 ?></td>
                </tr>
                <tr>
                    <td>Total Nilai Aset</td>
                    <td><?= $data->capital_total_aset ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Konfirmasi Karakter (Character) -->
    <div id="konfirmasi-karakter">
        <h2>Konfirmasi Karakter</h2>
        <table class="border">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Hubungan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $data->character_nama1 ?></td>
                    <td><?= $data->character_no_telp1 ?></td>
                    <td><?= $data->character_hubungan1 ?></td>
                </tr>
                <tr>
                    <td><?= $data->character_nama2 ?></td>
                    <td><?= $data->character_no_telp2 ?></td>
                    <td><?= $data->character_hubungan2 ?></td>
                </tr>
                <tr>
                    <td><?= $data->character_nama3 ?></td>
                    <td><?= $data->character_no_telp3 ?></td>
                    <td><?= $data->character_hubungan3 ?></td>
                </tr>
            </tbody>
        </table>
        <br>
        <table>
            <tr>
                <td>Informasikan hasil kredit checking</td>
                <td>:</td>
                <td><?= $data->character_hasil_kredit ?></td>
            </tr>
            <tr>
                <td>Hasil credit checking media lain</td>
                <td>:</td>
                <td><?= $data->character_hasil_kredit_media_lain ?></td>
            </tr>
        </table>
    </div>

    <!-- Jaminan Kendaraan (Collateral) -->
    <div id="jaminan-kendaraan">
        <h2>Jaminan Kendaraan</h2>
        <table>
            <tr>
                <td>Merk Kendaraan</td>
                <td>:</td>
                <td><?= $data->collateral_merk ?></td>
            </tr>
            <tr>
                <td>Jenis Kendaraan</td>
                <td>:</td>
                <td><?= $data->collateral_jenis ?></td>
            </tr>
            <tr>
                <td>Model Kendaraan</td>
                <td>:</td>
                <td><?= $data->collateral_model ?></td>
            </tr>
            <tr>
                <td>Tahun Mobil</td>
                <td>:</td>
                <td><?= $data->collateral_tahun_kendaraan ?></td>
            </tr>
            <tr>
                <td>Atas Nama BPKB</td>
                <td>:</td>
                <td><?= $data->collateral_nama_bpkb ?></td>
            </tr>
            <tr>
                <td>Lama Memiliki Mobil</td>
                <td>:</td>
                <td><?= $data->collateral_lama_punya_mobil ?></td>
            </tr>
            <tr>
                <td>Penggunaan Mobil</td>
                <td>:</td>
                <td><?= $data->collateral_guna_mobil ?></td>
            </tr>
            <tr>
                <td>Harga BFI Finance</td>
                <td>:</td>
                <td><?= $data->collateral_pricelist_bfi ?></td>
            </tr>
        </table>
    </div>

    <!-- Data Religi -->
    <div id="religi">
        <h2>Data Religi</h2>
        <table>
            <tr>
                <td>Berapa banyak sholat wajib yang dilaksanakan oleh konsumen setiap harinya?</td>
                <td>:</td>
                <td><?= $data->religi_solat ?></td>
            </tr>
            <tr>
                <td>Berapa banyak frekuensi puasa yang dilakukan oleh konsumen dalam 1 bulan ramadhan?</td>
                <td>:</td>
                <td><?= $data->religi_puasa ?></td>
            </tr>
            <tr>
                <td>Apakah pernah melakukan zakat mal (bukan zakat fitrah)?</td>
                <td>:</td>
                <td><?= $data->religi_zakat ?></td>
            </tr>
            <tr>
                <td>Apakah pernah menjalankan Ibadah Haji?</td>
                <td>:</td>
                <td><?= $data->religi_haji ?></td>
            </tr>
            <tr>
                <td>Apakah pernah menjalankan Ibadah Umroh</td>
                <td>:</td>
                <td><?= $data->religi_umroh ?></td>
            </tr>
            <tr>
                <td>Apakah pernah menjalankan kurban pada Idul Adha?</td>
                <td>:</td>
                <td><?= $data->religi_qurban ?></td>
            </tr>
            <tr>
                <td>Apakah pernah berhubungan dengan lembaga keuangan syariah terkait dengan pinjaman, tabungan,
                    investasi
                    dan sebagainya?</td>
                <td>:</td>
                <td><?= $data->religi_lembaga_syariah ?></td>
            </tr>
            <tr>
                <td>Apakah konsumen memiliki pengetahaun yang cukup tentang ekonomi syariah dan riba?</td>
                <td>:</td>
                <td><?= $data->religi_pengetahuan_riba ?></td>
            </tr>
            <tr>
                <td>Apakah konsumen tahu tentang dosa tidak membayar hutang di akhirat?</td>
                <td>:</td>
                <td><?= $data->religi_dosa_hutang ?></td>
            </tr>
            <tr>
                <td>Alasan konsumen memilih lembaga keuangan syariah?</td>
                <td>:</td>
                <td><?= $data->religi_alasan_syariah ?></td>
            </tr>
        </table>
    </div>

    <!-- Kesimpulan -->
    <div id="kesimpulan">
        <h2>Hasil Analisa Konsumen</h2>
        <table>
            <tr>
                <td>Strength</td>
                <td>:</td>
                <td><?= $data->kesimpulan_strength ?></td>
            </tr>
            <tr>
                <td>Weakness</td>
                <td>:</td>
                <td><?= $data->kesimpulan_weakness ?></td>
            </tr>
        </table>
    </div>

    <div id="hasil_scoring">
        <h2>Hasil Scoring HO</h2>
        <table>
            <thead>
                <tr>
                    <th>Penilaian Scoring</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Informasi & Aplikasi Konsumen</td>
                    <td><?= $data->hasil_scoring_nilai_informasi_konsumen ?></td>
                    <td><?= $data->hasil_scoring_grade_informasi_konsumen ?></td>
                </tr>
                <tr>
                    <td>Survey Konsumen</td>
                    <td><?= $data->hasil_scoring_nilai_survey_konsumen ?></td>
                    <td><?= $data->hasil_scoring_grade_survey_konsumen ?></td>
                </tr>
                <tr>
                    <td>Penilaian Merchant</td>
                    <td><?= $data->hasil_scoring_nilai_penilaian_merchant ?></td>
                    <td><?= $data->hasil_scoring_grade_penilaian_merchant ?></td>
                </tr>
                <tr>
                    <td>Aset Kendaraan</td>
                    <td><?= $data->hasil_scoring_nilai_aset_kendaraan ?></td>
                    <td><?= $data->hasil_scoring_grade_aset_kendaraan ?></td>
                </tr>
                <tr>
                    <td>Tingkat Reliugisitas</td>
                    <td><?= $data->hasil_scoring_nilai_tingkat_religiusitas ?></td>
                    <td><?= $data->hasil_scoring_grade_tingkat_religiusitas ?></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>