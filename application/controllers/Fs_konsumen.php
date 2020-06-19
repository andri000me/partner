<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fs_konsumen extends CI_Controller
{

    public $where;

    public function __construct()
    {
        parent::__construct();

        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $this->where = "(users.id_user = " . $this->fungsi->user_login()->id_user . " OR fs_konsumen.assign_cms = " . $this->fungsi->user_login()->id_user . ")";
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $this->where = "(branches.id_branch = " . $this->fungsi->user_login()->id_branch . " OR leads_full.cabang_cross = " . $this->fungsi->user_login()->id_branch . ")";
        } else {
            $this->where = "id IS NOT NULL";
        }

        check_not_login();
    }

    public function index()
    {
        $data = [
            'data'      => $this->fs_konsumen_model->get($this->where),
            'unfinished'   => $this->fs_konsumen_model->get("tickets.status < 5 AND " . $this->where),
            'completed' => $this->fs_konsumen_model->get("tickets.status = 5 AND " . $this->where),
            'users'     => $this->user_model->get_all("users.id_branch = " . $this->fungsi->user_login()->id_branch)
        ];

        $this->template->load('template/index', 'survey-report', $data);
    }

    public function create($id)
    {
        $where = ['leads_full.id_leads' => $id];
        $user_login = $this->fungsi->user_login();
        $where_data = $user_login->level == 1 ? "id_user = " . $user_login->id_user : (($user_login->level == 2 || $user_login->level == 3) ? "id_branch = " . $user_login->id_branch : "id_user IS NOT NULL");
        $data = [
            'data'              => $this->fs_konsumen_model->get($where)->row(),
            'leads'              => $this->leads_model->get($where)->row(),
            'branches'          => $this->branch_model->get(),

            'agents'    => $this->agent_model->get("agents." . $where_data),
            'partners'  => $this->partner_model->get("partners_full." . $where_data)
        ];

        $this->template->load('template/index', 'survey-report-form', $data);
    }

    public function update()
    {
        $data = [
            // tujuan pembiayaan
            'purpose_jenis_barang'              => !empty($this->input->post('purpose_jenis_barang')) ? $this->input->post('purpose_jenis_barang') : NULL,
            'purpose_tujuan_penggunaan'         => !empty($this->input->post('purpose_tujuan_penggunaan')) ? $this->input->post('purpose_tujuan_penggunaan') : NULL,
            'purpose_kategori_produk'           => !empty($this->input->post('purpose_kategori_produk')) ? $this->input->post('purpose_kategori_produk') : NULL,
            'purpose_detail_barang_jasa'        => !empty($this->input->post('purpose_detail_barang_jasa')) ? $this->input->post('purpose_detail_barang_jasa') : NULL,
            'purpose_harga_beli_ke_merchant'    => !empty($this->input->post('purpose_harga_beli_ke_merchant')) ? $this->input->post('purpose_harga_beli_ke_merchant') : NULL,
            'purpose_harga_jual_ke_konsumen'    => !empty($this->input->post('purpose_harga_jual_ke_konsumen')) ? $this->input->post('purpose_harga_jual_ke_konsumen') : NULL,
            'purpose_uang_muka'                 => !empty($this->input->post('purpose_uang_muka')) ? $this->input->post('purpose_uang_muka') : NULL,
            'purpose_biaya_administrasi'        => !empty($this->input->post('purpose_biaya_administrasi')) ? $this->input->post('purpose_biaya_administrasi') : NULL,
            'purpose_asuransi_jiwa'             => !empty($this->input->post('purpose_asuransi_jiwa')) ? $this->input->post('purpose_asuransi_jiwa') : NULL,
            'purpose_asuransi_kendaraan'        => !empty($this->input->post('purpose_asuransi_kendaraan')) ? $this->input->post('purpose_asuransi_kendaraan') : NULL,
            'purpose_total_uang_muka'           => !empty($this->input->post('purpose_total_uang_muka')) ? $this->input->post('purpose_total_uang_muka') : NULL,
            'purpose_ntf_murni'                 => !empty($this->input->post('purpose_ntf_murni')) ? $this->input->post('purpose_ntf_murni') : NULL,
            'purpose_lama_angsuran'             => !empty($this->input->post('purpose_lama_angsuran')) ? $this->input->post('purpose_lama_angsuran') : NULL,
            'purpose_angsuran_per_bulan'        => !empty($this->input->post('purpose_angsuran_per_bulan')) ? $this->input->post('purpose_angsuran_per_bulan') : NULL,
            'purpose_total_jumlah_tanggungan'   => !empty($this->input->post('purpose_total_jumlah_tanggungan')) ? $this->input->post('purpose_total_jumlah_tanggungan') : NULL,
            'purpose_nama_merchant_1'           => !empty($this->input->post('purpose_nama_merchant_1')) ? $this->input->post('purpose_nama_merchant_1') : NULL,
            'purpose_harga_1'                   => !empty($this->input->post('purpose_harga_1')) ? $this->input->post('purpose_harga_1') : NULL,
            'purpose_alamat_telepon_1'          => !empty($this->input->post('purpose_alamat_telepon_1')) ? $this->input->post('purpose_alamat_telepon_1') : NULL,
            'purpose_nama_merchant_2'           => !empty($this->input->post('purpose_nama_merchant_2')) ? $this->input->post('purpose_nama_merchant_2') : NULL,
            'purpose_harga_2'                   => !empty($this->input->post('purpose_harga_2')) ? $this->input->post('purpose_harga_2') : NULL,
            'purpose_alamat_telepon_2'          => !empty($this->input->post('purpose_alamat_telepon_2')) ? $this->input->post('purpose_alamat_telepon_2') : NULL,
            'purpose_nama_merchant_3'           => !empty($this->input->post('purpose_nama_merchant_3')) ? $this->input->post('purpose_nama_merchant_3') : NULL,
            'purpose_harga_3'                   => !empty($this->input->post('purpose_harga_3')) ? $this->input->post('purpose_harga_3') : NULL,
            'purpose_alamat_telepon_3'          => !empty($this->input->post('purpose_alamat_telepon_3')) ? $this->input->post('purpose_alamat_telepon_3') : NULL,

            //kondisi konsumen (karyawan)
            'condition_karyawan_pekerjaan'                    => !empty($this->input->post('condition_karyawan_pekerjaan')) ? $this->input->post('condition_karyawan_pekerjaan') : NULL,
            'condition_karyawan_tempat_kerja'                 => !empty($this->input->post('condition_karyawan_tempat_kerja')) ? $this->input->post('condition_karyawan_tempat_kerja') : NULL,
            'condition_karyawan_profesi_beresiko'             => !empty($this->input->post('condition_karyawan_profesi_beresiko')) ? $this->input->post('condition_karyawan_profesi_beresiko') : NULL,
            'condition_karyawan_pekerjaan_pasangan'           => !empty($this->input->post('condition_karyawan_pekerjaan_pasangan')) ? $this->input->post('condition_karyawan_pekerjaan_pasangan') : NULL,
            'condition_karyawan_tempat_kerja_pasangan'        => !empty($this->input->post('condition_karyawan_tempat_kerja_pasangan')) ? $this->input->post('condition_karyawan_tempat_kerja_pasangan') : NULL,
            'condition_karyawan_profesi_beresiko_pasangan'    => !empty($this->input->post('condition_karyawan_profesi_beresiko_pasangan')) ? $this->input->post('condition_karyawan_profesi_beresiko_pasangan') : NULL,
            'condition_karyawan_bidang_usaha'                 => !empty($this->input->post('condition_karyawan_bidang_usaha')) ? $this->input->post('condition_karyawan_bidang_usaha') : NULL,
            'condition_karyawan_jabatan'                      => !empty($this->input->post('condition_karyawan_jabatan')) ? $this->input->post('condition_karyawan_jabatan') : NULL,
            'condition_karyawan_lama_bekerja'                 => !empty($this->input->post('condition_karyawan_lama_bekerja')) ? $this->input->post('condition_karyawan_lama_bekerja') : NULL,
            'condition_karyawan_cara_gajian'                  => !empty($this->input->post('condition_karyawan_cara_gajian')) ? $this->input->post('condition_karyawan_cara_gajian') : NULL,
            'condition_karyawan_jumlah_karyawan'              => !empty($this->input->post('condition_karyawan_jumlah_karyawan')) ? $this->input->post('condition_karyawan_jumlah_karyawan') : NULL,
            'condition_karyawan_tahun_berdiri'                => !empty($this->input->post('condition_karyawan_tahun_berdiri')) ? $this->input->post('condition_karyawan_tahun_berdiri') : NULL,
            'condition_karyawan_tanggungan_orangtua'          => !empty($this->input->post('condition_karyawan_tanggungan_orangtua')) ? $this->input->post('condition_karyawan_tanggungan_orangtua') : NULL,
            'condition_karyawan_tanggungan_pasangan'          => !empty($this->input->post('condition_karyawan_tanggungan_pasangan')) ? $this->input->post('condition_karyawan_tanggungan_pasangan') : NULL,
            'condition_karyawan_tanggungan_anak1'             => !empty($this->input->post('condition_karyawan_tanggungan_anak1')) ? $this->input->post('condition_karyawan_tanggungan_anak1') : NULL,
            'condition_karyawan_tanggungan_anak2'             => !empty($this->input->post('condition_karyawan_tanggungan_anak2')) ? $this->input->post('condition_karyawan_tanggungan_anak2') : NULL,
            'condition_karyawan_tanggungan_anak3'             => !empty($this->input->post('condition_karyawan_tanggungan_anak3')) ? $this->input->post('condition_karyawan_tanggungan_anak3') : NULL,
            'condition_karyawan_tanggungan_saudara'           => !empty($this->input->post('condition_karyawan_tanggungan_saudara')) ? $this->input->post('condition_karyawan_tanggungan_saudara') : NULL,
            'condition_karyawan_tanggungan_total'             => !empty($this->input->post('condition_karyawan_tanggungan_total')) ? $this->input->post('condition_karyawan_tanggungan_total') : NULL,

            //kondisi konsumen (wiraswasta)
            'condition_wir_pekerjaan'                   => !empty($this->input->post('condition_wir_pekerjaan')) ? $this->input->post('condition_wir_pekerjaan') : NULL,
            'condition_wir_pekerjaan_pasangan'           => !empty($this->input->post('condition_wir_pekerjaan_pasangan')) ? $this->input->post('condition_wir_pekerjaan_pasangan') : NULL,
            'condition_wir_profesi_beresiko'            => !empty($this->input->post('condition_wir_profesi_beresiko')) ? $this->input->post('condition_wir_profesi_beresiko') : NULL,
            'condition_wir_tempat_kerja_pasangan'       => !empty($this->input->post('condition_wir_tempat_kerja_pasangan')) ? $this->input->post('condition_wir_tempat_kerja_pasangan') : NULL,
            'condition_wir_profesi_beresiko_pasangan'   => !empty($this->input->post('condition_wir_profesi_beresiko_pasangan')) ? $this->input->post('condition_wir_profesi_beresiko_pasangan') : NULL,
            'condition_wir_nama_usaha'                  => !empty($this->input->post('condition_wir_nama_usaha')) ? $this->input->post('condition_wir_nama_usaha') : NULL,
            'condition_wir_bidang_usaha'                => !empty($this->input->post('condition_wir_bidang_usaha')) ? $this->input->post('condition_wir_bidang_usaha') : NULL,
            'condition_wir_tahun_berdiri'               => !empty($this->input->post('condition_wir_tahun_berdiri')) ? $this->input->post('condition_wir_tahun_berdiri') : NULL,
            'condition_wir_jumlah_karyawan'             => !empty($this->input->post('condition_wir_jumlah_karyawan')) ? $this->input->post('condition_wir_jumlah_karyawan') : NULL,
            'condition_wir_jenis_bangunan_usaha'        => !empty($this->input->post('condition_wir_jenis_bangunan_usaha')) ? $this->input->post('condition_wir_jenis_bangunan_usaha') : NULL,
            'condition_wir_pemilik_tempat_usaha'        => !empty($this->input->post('condition_wir_pemilik_tempat_usaha')) ? $this->input->post('condition_wir_pemilik_tempat_usaha') : NULL,
            'condition_wir_kepemilikan_usaha'           => !empty($this->input->post('condition_wir_kepemilikan_usaha')) ? $this->input->post('condition_wir_kepemilikan_usaha') : NULL,
            'condition_wir_bentuk_usaha'                => !empty($this->input->post('condition_wir_bentuk_usaha')) ? $this->input->post('condition_wir_bentuk_usaha') : NULL,
            'condition_wir_cara_bayar'                  => !empty($this->input->post('condition_wir_cara_bayar')) ? $this->input->post('condition_wir_cara_bayar') : NULL,
            'condition_wir_kondisi_usaha'               => !empty($this->input->post('condition_wir_kondisi_usaha')) ? $this->input->post('condition_wir_kondisi_usaha') : NULL,
            'condition_wir_tanggungan_orangtua'         => !empty($this->input->post('condition_wir_tanggungan_orangtua')) ? $this->input->post('condition_wir_tanggungan_orangtua') : NULL,
            'condition_wir_tanggungan_pasangan'         => !empty($this->input->post('condition_wir_tanggungan_pasangan')) ? $this->input->post('condition_wir_tanggungan_pasangan') : NULL,
            'condition_wir_tanggungan_anak1'            => !empty($this->input->post('condition_wir_tanggungan_anak1')) ? $this->input->post('condition_wir_tanggungan_anak1') : NULL,
            'condition_wir_tanggungan_anak2'            => !empty($this->input->post('condition_wir_tanggungan_anak2')) ? $this->input->post('condition_wir_tanggungan_anak2') : NULL,
            'condition_wir_tanggungan_anak3'            => !empty($this->input->post('condition_wir_tanggungan_anak3')) ? $this->input->post('condition_wir_tanggungan_anak3') : NULL,
            'condition_wir_tanggungan_saudara'          => !empty($this->input->post('condition_wir_tanggungan_saudara')) ? $this->input->post('condition_wir_tanggungan_saudara') : NULL,
            'condition_wir_tanggungan_total'            => !empty($this->input->post('condition_wir_tanggungan_total')) ? $this->input->post('condition_wir_tanggungan_total') : NULL,

            //capacity konsumen karyawan
            'capacity_karyawan_income_bruto'            => !empty($this->input->post('capacity_karyawan_income_bruto')) ? $this->input->post('capacity_karyawan_income_bruto') : NULL,
            'capacity_karyawan_income_thp'              => !empty($this->input->post('capacity_karyawan_income_thp')) ? $this->input->post('capacity_karyawan_income_thp') : NULL,
            'capacity_karyawan_ada_bonus_periodik'      => !empty($this->input->post('capacity_karyawan_ada_bonus_periodik')) ? $this->input->post('capacity_karyawan_ada_bonus_periodik') : NULL,
            'capacity_karyawan_bonus1'                  => !empty($this->input->post('capacity_karyawan_bonus1')) ? $this->input->post('capacity_karyawan_bonus1') : NULL,
            'capacity_karyawan_periode1'                => !empty($this->input->post('capacity_karyawan_periode1')) ? $this->input->post('capacity_karyawan_periode1') : NULL,
            'capacity_karyawan_nilai1'                  => !empty($this->input->post('capacity_karyawan_nilai1')) ? $this->input->post('capacity_karyawan_nilai1') : NULL,
            'capacity_karyawan_bonus2'                  => !empty($this->input->post('capacity_karyawan_bonus2')) ? $this->input->post('capacity_karyawan_bonus2') : NULL,
            'capacity_karyawan_periode2'                => !empty($this->input->post('capacity_karyawan_periode2')) ? $this->input->post('capacity_karyawan_periode2') : NULL,
            'capacity_karyawan_nilai2'                  => !empty($this->input->post('capacity_karyawan_nilai2')) ? $this->input->post('capacity_karyawan_nilai2') : NULL,
            'capacity_karyawan_bonus3'                  => !empty($this->input->post('capacity_karyawan_bonus3')) ? $this->input->post('capacity_karyawan_bonus3') : NULL,
            'capacity_karyawan_periode3'                => !empty($this->input->post('capacity_karyawan_periode3')) ? $this->input->post('capacity_karyawan_periode3') : NULL,
            'capacity_karyawan_nilai3'                  => !empty($this->input->post('capacity_karyawan_nilai3')) ? $this->input->post('capacity_karyawan_nilai3') : NULL,
            'capacity_karyawan_total_bonus'             => !empty($this->input->post('capacity_karyawan_total_bonus')) ? $this->input->post('capacity_karyawan_total_bonus') : NULL,
            'capacity_karyawan_ada_income_lainnya'      => !empty($this->input->post('capacity_karyawan_ada_income_lainnya')) ? $this->input->post('capacity_karyawan_ada_income_lainnya') : NULL,
            'capacity_karyawan_income_lainnya1'         => !empty($this->input->post('capacity_karyawan_income_lainnya1')) ? $this->input->post('capacity_karyawan_income_lainnya1') : NULL,
            'capacity_karyawan_nilai_lain1'             => !empty($this->input->post('capacity_karyawan_nilai_lain1')) ? $this->input->post('capacity_karyawan_nilai_lain1') : NULL,
            'capacity_karyawan_income_lainnya2'         => !empty($this->input->post('capacity_karyawan_income_lainnya2')) ? $this->input->post('capacity_karyawan_income_lainnya2') : NULL,
            'capacity_karyawan_nilai_lain2'             => !empty($this->input->post('capacity_karyawan_nilai_lain2')) ? $this->input->post('capacity_karyawan_nilai_lain2') : NULL,
            'capacity_karyawan_total_income_lainnya'    => !empty($this->input->post('capacity_karyawan_total_income_lainnya')) ? $this->input->post('capacity_karyawan_total_income_lainnya') : NULL,
            'capacity_karyawan_saldo_rekening'          => !empty($this->input->post('capacity_karyawan_saldo_rekening')) ? $this->input->post('capacity_karyawan_saldo_rekening') : NULL,
            'capacity_karyawan_income_pasangan'         => !empty($this->input->post('capacity_karyawan_income_pasangan')) ? $this->input->post('capacity_karyawan_income_pasangan') : NULL,
            'capacity_karyawan_total_net_income'        => !empty($this->input->post('capacity_karyawan_total_net_income')) ? $this->input->post('capacity_karyawan_total_net_income') : NULL,
            'capacity_karyawan_outcome_pendidikan'      => !empty($this->input->post('capacity_karyawan_outcome_pendidikan')) ? $this->input->post('capacity_karyawan_outcome_pendidikan') : NULL,
            'capacity_karyawan_outcome_rumah'           => !empty($this->input->post('capacity_karyawan_outcome_rumah')) ? $this->input->post('capacity_karyawan_outcome_rumah') : NULL,
            'capacity_karyawan_outcome_listrik'         => !empty($this->input->post('capacity_karyawan_outcome_listrik')) ? $this->input->post('capacity_karyawan_outcome_listrik') : NULL,
            'capacity_karyawan_outcome_lainnya'         => !empty($this->input->post('capacity_karyawan_outcome_lainnya')) ? $this->input->post('capacity_karyawan_outcome_lainnya') : NULL,
            'capacity_karyawan_total_biaya_outcome'     => !empty($this->input->post('capacity_karyawan_total_biaya_outcome')) ? $this->input->post('capacity_karyawan_total_biaya_outcome') : NULL,
            'capacity_karyawan_ada_hutang'              => !empty($this->input->post('capacity_karyawan_ada_hutang')) ? $this->input->post('capacity_karyawan_ada_hutang') : NULL,
            'capacity_karyawan_hutang1'                 => !empty($this->input->post('capacity_karyawan_hutang1')) ? $this->input->post('capacity_karyawan_hutang1') : NULL,
            'capacity_karyawan_nilai_hutang1'           => !empty($this->input->post('capacity_karyawan_nilai_hutang1')) ? $this->input->post('capacity_karyawan_nilai_hutang1') : NULL,
            'capacity_karyawan_hutang2'                 => !empty($this->input->post('capacity_karyawan_hutang2')) ? $this->input->post('capacity_karyawan_hutang2') : NULL,
            'capacity_karyawan_nilai_hutang2'           => !empty($this->input->post('capacity_karyawan_nilai_hutang2')) ? $this->input->post('capacity_karyawan_nilai_hutang2') : NULL,
            'capacity_karyawan_hutang3'                 => !empty($this->input->post('capacity_karyawan_hutang3')) ? $this->input->post('capacity_karyawan_hutang3') : NULL,
            'capacity_karyawan_nilai_hutang3'           => !empty($this->input->post('capacity_karyawan_nilai_hutang3')) ? $this->input->post('capacity_karyawan_nilai_hutang3') : NULL,
            'capacity_karyawan_total_hutang'            => !empty($this->input->post('capacity_karyawan_total_hutang')) ? $this->input->post('capacity_karyawan_total_hutang') : NULL,
            'capacity_karyawan_total_outcome'           => !empty($this->input->post('capacity_karyawan_total_outcome')) ? $this->input->post('capacity_karyawan_total_outcome') : NULL,
            'capacity_karyawan_kelebihan_net_income'    => !empty($this->input->post('capacity_karyawan_kelebihan_net_income')) ? $this->input->post('capacity_karyawan_kelebihan_net_income') : NULL,

            //capacity konsumen wiraswasta
            'capacity_wir_pilih_data_analisa'       => !empty($this->input->post('capacity_wir_pilih_data_analisa')) ? $this->input->post('capacity_wir_pilih_data_analisa') : NULL,
            'capacity_wir_rek_bulan'                => !empty($this->input->post('capacity_wir_rek_bulan')) ? $this->input->post('capacity_wir_rek_bulan') : NULL,
            'capacity_wir_mutasi1'                  => !empty($this->input->post('capacity_wir_mutasi1')) ? $this->input->post('capacity_wir_mutasi1') : NULL,
            'capacity_wir_mutasi2'                  => !empty($this->input->post('capacity_wir_mutasi2')) ? $this->input->post('capacity_wir_mutasi2') : NULL,
            'capacity_wir_mutasi3'                  => !empty($this->input->post('capacity_wir_mutasi3')) ? $this->input->post('capacity_wir_mutasi3') : NULL,
            'capacity_wir_avr_mutasi'               => !empty($this->input->post('capacity_wir_avr_mutasi')) ? $this->input->post('capacity_wir_avr_mutasi') : NULL,
            'capacity_wir_nota1'                    => !empty($this->input->post('capacity_wir_nota1')) ? $this->input->post('capacity_wir_nota1') : NULL,
            'capacity_wir_nota2'                    => !empty($this->input->post('capacity_wir_nota2')) ? $this->input->post('capacity_wir_nota2') : NULL,
            'capacity_wir_nota3'                    => !empty($this->input->post('capacity_wir_nota3')) ? $this->input->post('capacity_wir_nota3') : NULL,
            'capacity_wir_avr_nota'                 => !empty($this->input->post('capacity_wir_avr_nota')) ? $this->input->post('capacity_wir_avr_nota') : NULL,
            'capacity_wir_sewa'                     => !empty($this->input->post('capacity_wir_sewa')) ? $this->input->post('capacity_wir_sewa') : NULL,
            'capacity_wir_payroll'                  => !empty($this->input->post('capacity_wir_payroll')) ? $this->input->post('capacity_wir_payroll') : NULL,
            'capacity_wir_internet'                 => !empty($this->input->post('capacity_wir_internet')) ? $this->input->post('capacity_wir_internet') : NULL,
            'capacity_wir_lainnya'                  => !empty($this->input->post('capacity_wir_lainnya')) ? $this->input->post('capacity_wir_lainnya') : NULL,
            'capacity_wir_profit_margin'            => !empty($this->input->post('capacity_wir_profit_margin')) ? $this->input->post('capacity_wir_profit_margin') : NULL,
            'capacity_wir_total_operasional'        => !empty($this->input->post('capacity_wir_total_operasional')) ? $this->input->post('capacity_wir_total_operasional') : NULL,
            'capacity_wir_total_income'             => !empty($this->input->post('capacity_wir_total_income')) ? $this->input->post('capacity_wir_total_income') : NULL,
            'capacity_wir_total_net_profit'         => !empty($this->input->post('capacity_wir_total_net_profit')) ? $this->input->post('capacity_wir_total_net_profit') : NULL,
            'capacity_wir_ada_income_lainnya'       => !empty($this->input->post('capacity_wir_ada_income_lainnya')) ? $this->input->post('capacity_wir_ada_income_lainnya') : NULL,
            'capacity_wir_income_lain1'             => !empty($this->input->post('capacity_wir_income_lain1')) ? $this->input->post('capacity_wir_income_lain1') : NULL,
            'capacity_wir_nilai_lain1'              => !empty($this->input->post('capacity_wir_nilai_lain1')) ? $this->input->post('capacity_wir_nilai_lain1') : NULL,
            'capacity_wir_income_lain2'             => !empty($this->input->post('capacity_wir_income_lain2')) ? $this->input->post('capacity_wir_income_lain2') : NULL,
            'capacity_wir_nilai_lain2'              => !empty($this->input->post('capacity_wir_nilai_lain2')) ? $this->input->post('capacity_wir_nilai_lain2') : NULL,
            'capacity_wir_total_lain'               => !empty($this->input->post('capacity_wir_total_lain')) ? $this->input->post('capacity_wir_total_lain') : NULL,
            'capacity_wir_saldo_rekening'           => !empty($this->input->post('capacity_wir_saldo_rekening')) ? $this->input->post('capacity_wir_saldo_rekening') : NULL,
            'capacity_wir_income_pasangan'          => !empty($this->input->post('capacity_wir_income_pasangan')) ? $this->input->post('capacity_wir_income_pasangan') : NULL,
            'capacity_wir_total_nett_income'        => !empty($this->input->post('capacity_wir_total_nett_income')) ? $this->input->post('capacity_wir_total_nett_income') : NULL,
            'capacity_wir_outcome_pendidikan'       => !empty($this->input->post('capacity_wir_outcome_pendidikan')) ? $this->input->post('capacity_wir_outcome_pendidikan') : NULL,
            'capacity_wir_outcome_rumah_tangga'     => !empty($this->input->post('capacity_wir_outcome_rumah_tangga')) ? $this->input->post('capacity_wir_outcome_rumah_tangga') : NULL,
            'capacity_wir_outcome_internet'         => !empty($this->input->post('capacity_wir_outcome_internet')) ? $this->input->post('capacity_wir_outcome_internet') : NULL,
            'capacity_wir_outcome_lainnya'          => !empty($this->input->post('capacity_wir_outcome_lainnya')) ? $this->input->post('capacity_wir_outcome_lainnya') : NULL,
            'capacity_wir_total_biaya_outcome'      => !empty($this->input->post('capacity_wir_total_biaya_outcome')) ? $this->input->post('capacity_wir_total_biaya_outcome') : NULL,
            'capacity_wir_ada_hutang'               => !empty($this->input->post('capacity_wir_ada_hutang')) ? $this->input->post('capacity_wir_ada_hutang') : NULL,
            'capacity_wir_hutang1'                  => !empty($this->input->post('capacity_wir_hutang1')) ? $this->input->post('capacity_wir_hutang1') : NULL,
            'capacity_wir_nilai_hutang1'            => !empty($this->input->post('capacity_wir_nilai_hutang1')) ? $this->input->post('capacity_wir_nilai_hutang1') : NULL,
            'capacity_wir_hutang2'                  => !empty($this->input->post('capacity_wir_hutang2')) ? $this->input->post('capacity_wir_hutang2') : NULL,
            'capacity_wir_nilai_hutang2'            => !empty($this->input->post('capacity_wir_nilai_hutang2')) ? $this->input->post('capacity_wir_nilai_hutang2') : NULL,
            'capacity_wir_hutang3'                  => !empty($this->input->post('capacity_wir_hutang3')) ? $this->input->post('capacity_wir_hutang3') : NULL,
            'capacity_wir_nilai_hutang3'            => !empty($this->input->post('capacity_wir_nilai_hutang3')) ? $this->input->post('capacity_wir_nilai_hutang3') : NULL,
            'capacity_wir_total_hutang'             => !empty($this->input->post('capacity_wir_total_hutang')) ? $this->input->post('capacity_wir_total_hutang') : NULL,
            'capacity_wir_total_outcome'            => !empty($this->input->post('capacity_wir_total_outcome')) ? $this->input->post('capacity_wir_total_outcome') : NULL,
            'capacity_wir_nett_income'              => !empty($this->input->post('capacity_wir_nett_income')) ? $this->input->post('capacity_wir_nett_income') : NULL,
            'capacity_wir_ada_analisa_dari_omset'   => !empty($this->input->post('capacity_wir_ada_analisa_dari_omset')) ? $this->input->post('capacity_wir_ada_analisa_dari_omset') : NULL,
            'capacity_wir_usaha_omset_perhari'      => !empty($this->input->post('capacity_wir_usaha_omset_perhari')) ? $this->input->post('capacity_wir_usaha_omset_perhari') : NULL,
            'capacity_wir_usaha_jumlah_hari_buka'   => !empty($this->input->post('capacity_wir_usaha_jumlah_hari_buka')) ? $this->input->post('capacity_wir_usaha_jumlah_hari_buka') : NULL,
            'capacity_wir_usaha_omset_perbulan'     => !empty($this->input->post('capacity_wir_usaha_omset_perbulan')) ? $this->input->post('capacity_wir_usaha_omset_perbulan') : NULL,
            'capacity_wir_total_omset'              => !empty($this->input->post('capacity_wir_total_omset')) ? $this->input->post('capacity_wir_total_omset') : NULL,

            //capital (aset konsumen)
            'capital_tempat_tinggal_milik'  => !empty($this->input->post('capital_tempat_tinggal_milik')) ? $this->input->post('capital_tempat_tinggal_milik') : NULL,
            'capital_ada_hutang'            => !empty($this->input->post('capital_ada_hutang')) ? $this->input->post('capital_ada_hutang') : NULL,
            'capital_alamat_bkr_ktp'        => !empty($this->input->post('capital_alamat_bkr_ktp')) ? $this->input->post('capital_alamat_bkr_ktp') : NULL,
            'capital_alamat_bkr'            => !empty($this->input->post('capital_alamat_bkr')) ? $this->input->post('capital_alamat_bkr') : NULL,
            'capital_aset1'                 => !empty($this->input->post('capital_aset1')) ? $this->input->post('capital_aset1') : NULL,
            'capital_status_barang1'                => !empty($this->input->post('capital_status_barang1')) ? $this->input->post('capital_status_barang1') : NULL,
            'capital_harga1'                => !empty($this->input->post('capital_harga1')) ? $this->input->post('capital_harga1') : NULL,
            'capital_aset2'                 => !empty($this->input->post('capital_aset2')) ? $this->input->post('capital_aset2') : NULL,
            'capital_status_barang2'                => !empty($this->input->post('capital_status_barang2')) ? $this->input->post('capital_status_barang2') : NULL,
            'capital_harga2'                => !empty($this->input->post('capital_harga2')) ? $this->input->post('capital_harga2') : NULL,
            'capital_aset3'                 => !empty($this->input->post('capital_aset3')) ? $this->input->post('capital_aset3') : NULL,
            'capital_status_barang3'                => !empty($this->input->post('capital_status_barang3')) ? $this->input->post('capital_status_barang3') : NULL,
            'capital_harga3'                => !empty($this->input->post('capital_harga3')) ? $this->input->post('capital_harga3') : NULL,
            'capital_aset4'                 => !empty($this->input->post('capital_aset4')) ? $this->input->post('capital_aset4') : NULL,
            'capital_status_barang4'                => !empty($this->input->post('capital_status_barang4')) ? $this->input->post('capital_status_barang4') : NULL,
            'capital_harga4'                => !empty($this->input->post('capital_harga4')) ? $this->input->post('capital_harga4') : NULL,
            'capital_aset5'                 => !empty($this->input->post('capital_aset5')) ? $this->input->post('capital_aset5') : NULL,
            'capital_status_barang5'                => !empty($this->input->post('capital_status_barang5')) ? $this->input->post('capital_status_barang5') : NULL,
            'capital_harga5'                => !empty($this->input->post('capital_harga5')) ? $this->input->post('capital_harga5') : NULL,
            'capital_total_aset'            => !empty($this->input->post('capital_total_aset')) ? $this->input->post('capital_total_aset') : NULL,

            // character
            'character_nama1'                   => !empty($this->input->post('character_nama1')) ? $this->input->post('character_nama1') : NULL,
            'character_no_telp1'                => !empty($this->input->post('character_no_telp1')) ? $this->input->post('character_no_telp1') : NULL,
            'character_hubungan1'               => !empty($this->input->post('character_hubungan1')) ? $this->input->post('character_hubungan1') : NULL,
            'character_nama2'                   => !empty($this->input->post('character_nama2')) ? $this->input->post('character_nama2') : NULL,
            'character_no_telp2'                => !empty($this->input->post('character_no_telp2')) ? $this->input->post('character_no_telp2') : NULL,
            'character_hubungan2'               => !empty($this->input->post('character_hubungan2')) ? $this->input->post('character_hubungan2') : NULL,
            'character_nama3'                   => !empty($this->input->post('character_nama3')) ? $this->input->post('character_nama3') : NULL,
            'character_no_telp3'                => !empty($this->input->post('character_no_telp3')) ? $this->input->post('character_no_telp3') : NULL,
            'character_hubungan3'               => !empty($this->input->post('character_hubungan3')) ? $this->input->post('character_hubungan3') : NULL,
            'character_hasil_kredit'            => !empty($this->input->post('character_hasil_kredit')) ? $this->input->post('character_hasil_kredit') : NULL,
            'character_hasil_kredit_media_lain' => !empty($this->input->post('character_hasil_kredit_media_lain')) ? $this->input->post('character_hasil_kredit_media_lain') : NULL,

            //collateral (jaminan kendaraan)
            'collateral_merk'               => !empty($this->input->post('collateral_merk')) ? $this->input->post('collateral_merk') : NULL,
            'collateral_jenis'              => !empty($this->input->post('collateral_jenis')) ? $this->input->post('collateral_jenis') : NULL,
            'collateral_model'              => !empty($this->input->post('collateral_model')) ? $this->input->post('collateral_model') : NULL,
            'collateral_tahun_kendaraan'    => !empty($this->input->post('collateral_tahun_kendaraan')) ? $this->input->post('collateral_tahun_kendaraan') : NULL,
            'collateral_nama_bpkb'          => !empty($this->input->post('collateral_nama_bpkb')) ? $this->input->post('collateral_nama_bpkb') : NULL,
            'collateral_lama_punya_mobil'   => !empty($this->input->post('collateral_lama_punya_mobil')) ? $this->input->post('collateral_lama_punya_mobil') : NULL,
            'collateral_guna_mobil'         => !empty($this->input->post('collateral_guna_mobil')) ? $this->input->post('collateral_guna_mobil') : NULL,
            'collateral_pricelist_bfi'      => !empty($this->input->post('collateral_pricelist_bfi')) ? $this->input->post('collateral_pricelist_bfi') : NULL,

            //data religi
            'religi_solat'              => !empty($this->input->post('religi_solat')) ? $this->input->post('religi_solat') : NULL,
            'religi_puasa'              => !empty($this->input->post('religi_puasa')) ? $this->input->post('religi_puasa') : NULL,
            'religi_zakat'              => !empty($this->input->post('religi_zakat')) ? $this->input->post('religi_zakat') : NULL,
            'religi_haji'               => !empty($this->input->post('religi_haji')) ? $this->input->post('religi_haji') : NULL,
            'religi_umroh'              => !empty($this->input->post('religi_umroh')) ? $this->input->post('religi_umroh') : NULL,
            'religi_qurban'             => !empty($this->input->post('religi_qurban')) ? $this->input->post('religi_qurban') : NULL,
            'religi_lembaga_syariah'    => !empty($this->input->post('religi_lembaga_syariah')) ? $this->input->post('religi_lembaga_syariah') : NULL,
            'religi_pengetahuan_riba'   => !empty($this->input->post('religi_pengetahuan_riba')) ? $this->input->post('religi_pengetahuan_riba') : NULL,
            'religi_dosa_hutang'        => !empty($this->input->post('religi_dosa_hutang')) ? $this->input->post('religi_dosa_hutang') : NULL,
            'religi_alasan_syariah'     => !empty($this->input->post('religi_alasan_syariah')) ? $this->input->post('religi_alasan_syariah') : NULL,

            //kesimpulan
            'kesimpulan_strength'     => !empty($this->input->post('kesimpulan_strength')) ? $this->input->post('kesimpulan_strength') : NULL,
            'kesimpulan_weakness'     => !empty($this->input->post('kesimpulan_weakness')) ? $this->input->post('kesimpulan_weakness') : NULL,

            //Hasil Scoring
            'hasil_scoring_nilai_informasi_konsumen'    => !empty($this->input->post('hasil_scoring_nilai_informasi_konsumen')) ? $this->input->post('hasil_scoring_nilai_informasi_konsumen') : NULL,
            'hasil_scoring_nilai_survey_konsumen'       => !empty($this->input->post('hasil_scoring_nilai_survey_konsumen')) ? $this->input->post('hasil_scoring_nilai_survey_konsumen') : NULL,
            'hasil_scoring_nilai_penilaian_merchant'    => !empty($this->input->post('hasil_scoring_nilai_penilaian_merchant')) ? $this->input->post('hasil_scoring_nilai_penilaian_merchant') : NULL,
            'hasil_scoring_nilai_aset_kendaraan'        => !empty($this->input->post('hasil_scoring_nilai_aset_kendaraan')) ? $this->input->post('hasil_scoring_nilai_aset_kendaraan') : NULL,
            'hasil_scoring_nilai_tingkat_religiusitas'  => !empty($this->input->post('hasil_scoring_nilai_tingkat_religiusitas')) ? $this->input->post('hasil_scoring_nilai_tingkat_religiusitas') : NULL,
            'hasil_scoring_grade_informasi_konsumen'    => !empty($this->input->post('hasil_scoring_grade_informasi_konsumen')) ? $this->input->post('hasil_scoring_grade_informasi_konsumen') : NULL,
            'hasil_scoring_grade_survey_konsumen'       => !empty($this->input->post('hasil_scoring_grade_survey_konsumen')) ? $this->input->post('hasil_scoring_grade_survey_konsumen') : NULL,
            'hasil_scoring_grade_penilaian_merchant'    => !empty($this->input->post('hasil_scoring_grade_penilaian_merchant')) ? $this->input->post('hasil_scoring_grade_penilaian_merchant') : NULL,
            'hasil_scoring_grade_aset_kendaraan'        => !empty($this->input->post('hasil_scoring_grade_aset_kendaraan')) ? $this->input->post('hasil_scoring_grade_aset_kendaraan') : NULL,
            'hasil_scoring_grade_tingkat_religiusitas'  => !empty($this->input->post('hasil_scoring_grade_tingkat_religiusitas')) ? $this->input->post('hasil_scoring_grade_tingkat_religiusitas') : NULL,
            'is_recommended'                            => !empty($this->input->post('is_recommended')) ? $this->input->post('is_recommended') : NULL,
        ];
        $where = ['id_leads' => $this->input->post('id_leads')];
        $json = $this->fs_konsumen_model->update($data, $where);

        if ($this->ticket_model->get("tickets.id_leads = " . $this->input->post('id_leads'))->row()->status_approval == '4') {
            $pending = ['status' => '2'];
            $this->ticket_model->update($pending, $where);
        }

        echo json_encode($data);
    }

    //fungsi update assignment ke cms oleh head/manager 
    public function update_assignment()
    {
        // $post = $this->input->post(NULL, TRUE);

        $data = ['assign_cms' => !empty($this->input->post('cms')) ? $this->input->post('cms') : NULL];
        $where = ['id_leads' => $this->input->post('data')];
        $id = $this->fs_konsumen_model->update($data, $where);

        echo json_encode($id);
    }

    //fungsi untuk mengembalikan form survey ke cms
    public function return_fs()
    {
        //tiket ditolak (returned)
        $data = ['status' => 4];

        $where = ['id_leads' => $this->input->post('data')];
        $id = $this->ticket_model->update($data, $where);

        echo json_encode($id);
    }

    public function generate_pdf_html($id)
    {
        $mpdf = new \Mpdf\Mpdf();

        $data = $this->fs_konsumen_model->get("fs_konsumen.id_leads = " . $id)->row();
        $html = $this->load->view('html_to_pdf', ['data' => $data], true);
        $mpdf->SetWatermarkImage(base_url('template/assets/images/logo-bfi-syariah.png'));
        $mpdf->showWatermarkImage = true;
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    public function tambah_lampiran()
    {

        $post = $this->input->post(NULL, TRUE);

        $data = [];

        $lampiran_arr = [];

        //Count total file
        $countfiles = count($_FILES['tambah_lampiran']['name']);

        //Looping all files
        for ($i = 0; $i < $countfiles; $i++) {
            if (!empty($_FILES['tambah_lampiran']['name'][$i])) {
                $_FILES['file']['name'] = $_FILES['tambah_lampiran']['name'][$i];
                $_FILES['file']['type'] = $_FILES['tambah_lampiran']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['tambah_lampiran']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['tambah_lampiran']['error'][$i];
                $_FILES['file']['size'] = $_FILES['tambah_lampiran']['size'][$i];



                //Konfigurasi Upload
                $config['upload_path']         = './uploads/fs_konsumen';
                $config['allowed_types']        = '*';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;

                // Load upload library
                $this->load->library('upload', $config);

                // File upload
                if ($this->upload->do_upload('file')) {
                    // Get data about the file
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];


                    // Initialize array
                    $data['filenames'][] = $filename;

                    $lampiran_arr[] = $filename;
                }
            }
        }

        $where = "fs_konsumen.id_leads = " .  $post['id_leads'];
        //Mengambil nama file lampiran tambahan yang ada
        $lampiran_tambahan = $this->fs_konsumen_model->get($where)->row()->lampiran_tambahan;
        //Konversi nama file dari array ke string
        $comma = implode(",", $lampiran_arr);
        //Jika sudah pernah melampirkan tambahan, maka append nama file di database
        if ($lampiran_tambahan) {
            $data_fs_konsumen['lampiran_tambahan'] = $lampiran_tambahan . "," . $comma;
            $this->fs_konsumen_model->update($data_fs_konsumen, $where);
        } else {
            $data_fs_konsumen['lampiran_tambahan'] = $comma;
            $this->fs_konsumen_model->update($data_fs_konsumen, $where);
        }

        redirect($post['redirect']);
    }

    public function update_recommendation()
    {
        $data = ['is_recommended' => $this->input->post('recommended')];
        $where = ['id_leads' => $this->input->post('data')];
        $id = $this->fs_konsumen_model->update($data, $where);

        echo json_encode($id);
    }
}
