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

    //Notification Method
    private function notification($id_ticket, $message)
    {
        $notification = [
            'pengirim'          => $this->fungsi->user_login()->id_user,
            // 'penerima'          => $this->ticket_model->get(['id_ticket' => $id_ticket])->row()->user_id,
            'penerima_cabang'   => 46,
            'type'              => $message,
            'id_ticket'         => $id_ticket,
            'created_at'        => date('Y-m-d H:i:s')
        ];

        return $notification;
    }

    private function is_set($id, $name, $number = FALSE)
    {
        $data = $this->fs_konsumen_model->get(['leads_full.id_leads' => $id])->row();
        if (!empty($this->input->post($name)) && !$number) {
            $return = $this->input->post($name);
        } else if (!empty($this->input->post($name)) && $number) {
            $return = str_replace(",", "", $this->input->post($name));
        } else {
            $return = $data->{$name};
        }
        return $return;
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
        $id_leads = $this->input->post('id_leads');
        $data = [
            // tujuan pembiayaan
            'purpose_jenis_barang'              => $this->is_set($id_leads, 'purpose_jenis_barang'),
            'purpose_tujuan_penggunaan'         => $this->is_set($id_leads, 'purpose_tujuan_penggunaan'),
            'purpose_kategori_produk'           => $this->is_set($id_leads, 'purpose_kategori_produk'),
            'purpose_detail_barang_jasa'        => $this->is_set($id_leads, 'purpose_detail_barang_jasa'),
            'purpose_harga_beli_ke_merchant'    => $this->is_set($id_leads, 'purpose_harga_beli_ke_merchant', TRUE),
            'purpose_harga_jual_ke_konsumen'    => $this->is_set($id_leads, 'purpose_harga_jual_ke_konsumen', TRUE),
            'purpose_uang_muka'                 => $this->is_set($id_leads, 'purpose_uang_muka', TRUE),
            'purpose_biaya_administrasi'        => $this->is_set($id_leads, 'purpose_biaya_administrasi', TRUE),
            'purpose_asuransi_jiwa'             => $this->is_set($id_leads, 'purpose_asuransi_jiwa', TRUE),
            'purpose_asuransi_kendaraan'        => $this->is_set($id_leads, 'purpose_asuransi_kendaraan', TRUE),
            'purpose_total_uang_muka'           => $this->is_set($id_leads, 'purpose_total_uang_muka', TRUE),
            'purpose_ntf_murni'                 => $this->is_set($id_leads, 'purpose_ntf_murni', TRUE),
            'purpose_lama_angsuran'             => $this->is_set($id_leads, 'purpose_lama_angsuran', TRUE),
            'purpose_angsuran_per_bulan'        => $this->is_set($id_leads, 'purpose_angsuran_per_bulan', TRUE),
            'purpose_total_jumlah_tanggungan'   => $this->is_set($id_leads, 'purpose_total_jumlah_tanggungan', TRUE),
            'purpose_nama_merchant_1'           => $this->is_set($id_leads, 'purpose_nama_merchant_1'),
            'purpose_harga_1'                   => $this->is_set($id_leads, 'purpose_harga_1', TRUE),
            'purpose_alamat_telepon_1'          => $this->is_set($id_leads, 'purpose_alamat_telepon_1'),
            'purpose_nama_merchant_2'           => $this->is_set($id_leads, 'purpose_nama_merchant_2'),
            'purpose_harga_2'                   => $this->is_set($id_leads, 'purpose_harga_2', TRUE),
            'purpose_alamat_telepon_2'          => $this->is_set($id_leads, 'purpose_alamat_telepon_2'),
            'purpose_nama_merchant_3'           => $this->is_set($id_leads, 'purpose_nama_merchant_3'),
            'purpose_harga_3'                   => $this->is_set($id_leads, 'purpose_harga_3', TRUE),
            'purpose_alamat_telepon_3'          => $this->is_set($id_leads, 'purpose_alamat_telepon_3'),

            //kondisi konsumen (karyawan)
            'condition_karyawan_pekerjaan'                    => $this->is_set($id_leads, 'condition_karyawan_pekerjaan'),
            'condition_karyawan_tempat_kerja'                 => $this->is_set($id_leads, 'condition_karyawan_tempat_kerja'),
            'condition_karyawan_profesi_beresiko'             => $this->is_set($id_leads, 'condition_karyawan_profesi_beresiko'),
            'condition_karyawan_pekerjaan_pasangan'           => $this->is_set($id_leads, 'condition_karyawan_pekerjaan_pasangan'),
            'condition_karyawan_tempat_kerja_pasangan'        => $this->is_set($id_leads, 'condition_karyawan_tempat_kerja_pasangan'),
            'condition_karyawan_profesi_beresiko_pasangan'    => $this->is_set($id_leads, 'condition_karyawan_profesi_beresiko_pasangan'),
            'condition_karyawan_bidang_usaha'                 => $this->is_set($id_leads, 'condition_karyawan_bidang_usaha'),
            'condition_karyawan_jabatan'                      => $this->is_set($id_leads, 'condition_karyawan_jabatan'),
            'condition_karyawan_lama_bekerja'                 => $this->is_set($id_leads, 'condition_karyawan_lama_bekerja'),
            'condition_karyawan_cara_gajian'                  => $this->is_set($id_leads, 'condition_karyawan_cara_gajian'),
            'condition_karyawan_jumlah_karyawan'              => $this->is_set($id_leads, 'condition_karyawan_jumlah_karyawan'),
            'condition_karyawan_tahun_berdiri'                => $this->is_set($id_leads, 'condition_karyawan_tahun_berdiri'),
            'condition_karyawan_tanggungan_orangtua'          => $this->is_set($id_leads, 'condition_karyawan_tanggungan_orangtua'),
            'condition_karyawan_tanggungan_pasangan'          => $this->is_set($id_leads, 'condition_karyawan_tanggungan_pasangan'),
            'condition_karyawan_tanggungan_anak1'             => $this->is_set($id_leads, 'condition_karyawan_tanggungan_anak1'),
            'condition_karyawan_tanggungan_anak2'             => $this->is_set($id_leads, 'condition_karyawan_tanggungan_anak2'),
            'condition_karyawan_tanggungan_anak3'             => $this->is_set($id_leads, 'condition_karyawan_tanggungan_anak3'),
            'condition_karyawan_tanggungan_saudara'           => $this->is_set($id_leads, 'condition_karyawan_tanggungan_saudara'),
            'condition_karyawan_tanggungan_total'             => $this->is_set($id_leads, 'condition_karyawan_tanggungan_total'),

            //kondisi konsumen (wiraswasta)
            'condition_wir_pekerjaan'                   => $this->is_set($id_leads, 'condition_wir_pekerjaan'),
            'condition_wir_pekerjaan_pasangan'           => $this->is_set($id_leads, 'condition_wir_pekerjaan_pasangan'),
            'condition_wir_profesi_beresiko'            => $this->is_set($id_leads, 'condition_wir_profesi_beresiko'),
            'condition_wir_tempat_kerja_pasangan'       => $this->is_set($id_leads, 'condition_wir_tempat_kerja_pasangan'),
            'condition_wir_profesi_beresiko_pasangan'   => $this->is_set($id_leads, 'condition_wir_profesi_beresiko_pasangan'),
            'condition_wir_nama_usaha'                  => $this->is_set($id_leads, 'condition_wir_nama_usaha'),
            'condition_wir_bidang_usaha'                => $this->is_set($id_leads, 'condition_wir_bidang_usaha'),
            'condition_wir_tahun_berdiri'               => $this->is_set($id_leads, 'condition_wir_tahun_berdiri'),
            'condition_wir_jumlah_karyawan'             => $this->is_set($id_leads, 'condition_wir_jumlah_karyawan'),
            'condition_wir_jenis_bangunan_usaha'        => $this->is_set($id_leads, 'condition_wir_jenis_bangunan_usaha'),
            'condition_wir_pemilik_tempat_usaha'        => $this->is_set($id_leads, 'condition_wir_pemilik_tempat_usaha'),
            'condition_wir_kepemilikan_usaha'           => $this->is_set($id_leads, 'condition_wir_kepemilikan_usaha'),
            'condition_wir_bentuk_usaha'                => $this->is_set($id_leads, 'condition_wir_bentuk_usaha'),
            'condition_wir_cara_bayar'                  => $this->is_set($id_leads, 'condition_wir_cara_bayar'),
            'condition_wir_kondisi_usaha'               => $this->is_set($id_leads, 'condition_wir_kondisi_usaha'),
            'condition_wir_tanggungan_orangtua'         => $this->is_set($id_leads, 'condition_wir_tanggungan_orangtua'),
            'condition_wir_tanggungan_pasangan'         => $this->is_set($id_leads, 'condition_wir_tanggungan_pasangan'),
            'condition_wir_tanggungan_anak1'            => $this->is_set($id_leads, 'condition_wir_tanggungan_anak1'),
            'condition_wir_tanggungan_anak2'            => $this->is_set($id_leads, 'condition_wir_tanggungan_anak2'),
            'condition_wir_tanggungan_anak3'            => $this->is_set($id_leads, 'condition_wir_tanggungan_anak3'),
            'condition_wir_tanggungan_saudara'          => $this->is_set($id_leads, 'condition_wir_tanggungan_saudara'),
            'condition_wir_tanggungan_total'            => $this->is_set($id_leads, 'condition_wir_tanggungan_total'),

            //capacity konsumen karyawan
            'capacity_karyawan_income_bruto'            => $this->is_set($id_leads, 'capacity_karyawan_income_bruto', TRUE),
            'capacity_karyawan_income_thp'              => $this->is_set($id_leads, 'capacity_karyawan_income_thp', TRUE),
            'capacity_karyawan_ada_bonus_periodik'      => $this->is_set($id_leads, 'capacity_karyawan_ada_bonus_periodik'),
            'capacity_karyawan_bonus1'                  => $this->is_set($id_leads, 'capacity_karyawan_bonus1'),
            'capacity_karyawan_periode1'                => $this->is_set($id_leads, 'capacity_karyawan_periode1'),
            'capacity_karyawan_nilai1'                  => $this->is_set($id_leads, 'capacity_karyawan_nilai1', TRUE),
            'capacity_karyawan_bonus2'                  => $this->is_set($id_leads, 'capacity_karyawan_bonus2'),
            'capacity_karyawan_periode2'                => $this->is_set($id_leads, 'capacity_karyawan_periode2'),
            'capacity_karyawan_nilai2'                  => $this->is_set($id_leads, 'capacity_karyawan_nilai2', TRUE),
            'capacity_karyawan_bonus3'                  => $this->is_set($id_leads, 'capacity_karyawan_bonus3'),
            'capacity_karyawan_periode3'                => $this->is_set($id_leads, 'capacity_karyawan_periode3'),
            'capacity_karyawan_nilai3'                  => $this->is_set($id_leads, 'capacity_karyawan_nilai3', TRUE),
            'capacity_karyawan_total_bonus'             => $this->is_set($id_leads, 'capacity_karyawan_total_bonus', TRUE),
            'capacity_karyawan_ada_income_lainnya'      => $this->is_set($id_leads, 'capacity_karyawan_ada_income_lainnya'),
            'capacity_karyawan_income_lainnya1'         => $this->is_set($id_leads, 'capacity_karyawan_income_lainnya1'),
            'capacity_karyawan_nilai_lain1'             => $this->is_set($id_leads, 'capacity_karyawan_nilai_lain1', TRUE),
            'capacity_karyawan_income_lainnya2'         => $this->is_set($id_leads, 'capacity_karyawan_income_lainnya2'),
            'capacity_karyawan_nilai_lain2'             => $this->is_set($id_leads, 'capacity_karyawan_nilai_lain2', TRUE),
            'capacity_karyawan_total_income_lainnya'    => $this->is_set($id_leads, 'capacity_karyawan_total_income_lainnya', TRUE),
            'capacity_karyawan_saldo_rekening'          => $this->is_set($id_leads, 'capacity_karyawan_saldo_rekening', TRUE),
            'capacity_karyawan_income_pasangan'         => $this->is_set($id_leads, 'capacity_karyawan_income_pasangan', TRUE),
            'capacity_karyawan_total_net_income'        => $this->is_set($id_leads, 'capacity_karyawan_total_net_income', TRUE),
            'capacity_karyawan_outcome_pendidikan'      => $this->is_set($id_leads, 'capacity_karyawan_outcome_pendidikan', TRUE),
            'capacity_karyawan_outcome_rumah'           => $this->is_set($id_leads, 'capacity_karyawan_outcome_rumah', TRUE),
            'capacity_karyawan_outcome_listrik'         => $this->is_set($id_leads, 'capacity_karyawan_outcome_listrik', TRUE),
            'capacity_karyawan_outcome_lainnya'         => $this->is_set($id_leads, 'capacity_karyawan_outcome_lainnya', TRUE),
            'capacity_karyawan_total_biaya_outcome'     => $this->is_set($id_leads, 'capacity_karyawan_total_biaya_outcome', TRUE),
            'capacity_karyawan_ada_hutang'              => $this->is_set($id_leads, 'capacity_karyawan_ada_hutang'),
            'capacity_karyawan_hutang1'                 => $this->is_set($id_leads, 'capacity_karyawan_hutang1'),
            'capacity_karyawan_nilai_hutang1'           => $this->is_set($id_leads, 'capacity_karyawan_nilai_hutang1', TRUE),
            'capacity_karyawan_hutang2'                 => $this->is_set($id_leads, 'capacity_karyawan_hutang2'),
            'capacity_karyawan_nilai_hutang2'           => $this->is_set($id_leads, 'capacity_karyawan_nilai_hutang2', TRUE),
            'capacity_karyawan_hutang3'                 => $this->is_set($id_leads, 'capacity_karyawan_hutang3'),
            'capacity_karyawan_nilai_hutang3'           => $this->is_set($id_leads, 'capacity_karyawan_nilai_hutang3', TRUE),
            'capacity_karyawan_total_hutang'            => $this->is_set($id_leads, 'capacity_karyawan_total_hutang', TRUE),
            'capacity_karyawan_total_outcome'           => $this->is_set($id_leads, 'capacity_karyawan_total_outcome', TRUE),
            'capacity_karyawan_kelebihan_net_income'    => $this->is_set($id_leads, 'capacity_karyawan_kelebihan_net_income', TRUE),

            //capacity konsumen wiraswasta
            'capacity_wir_pilih_data_analisa'       => $this->is_set($id_leads, 'capacity_wir_pilih_data_analisa'),
            'capacity_wir_rek_bulan'                => $this->is_set($id_leads, 'capacity_wir_rek_bulan'),
            'capacity_wir_mutasi1'                  => $this->is_set($id_leads, 'capacity_wir_mutasi1', TRUE),
            'capacity_wir_mutasi2'                  => $this->is_set($id_leads, 'capacity_wir_mutasi2', TRUE),
            'capacity_wir_mutasi3'                  => $this->is_set($id_leads, 'capacity_wir_mutasi3', TRUE),
            'capacity_wir_avr_mutasi'               => $this->is_set($id_leads, 'capacity_wir_avr_mutasi', TRUE),
            'capacity_wir_nota1'                    => $this->is_set($id_leads, 'capacity_wir_nota1', TRUE),
            'capacity_wir_nota2'                    => $this->is_set($id_leads, 'capacity_wir_nota2', TRUE),
            'capacity_wir_nota3'                    => $this->is_set($id_leads, 'capacity_wir_nota3', TRUE),
            'capacity_wir_avr_nota'                 => $this->is_set($id_leads, 'capacity_wir_avr_nota', TRUE),
            'capacity_wir_sewa'                     => $this->is_set($id_leads, 'capacity_wir_sewa', TRUE),
            'capacity_wir_payroll'                  => $this->is_set($id_leads, 'capacity_wir_payroll', TRUE),
            'capacity_wir_internet'                 => $this->is_set($id_leads, 'capacity_wir_internet', TRUE),
            'capacity_wir_lainnya'                  => $this->is_set($id_leads, 'capacity_wir_lainnya', TRUE),
            'capacity_wir_profit_margin'            => $this->is_set($id_leads, 'capacity_wir_profit_margin', TRUE),
            'capacity_wir_total_operasional'        => $this->is_set($id_leads, 'capacity_wir_total_operasional', TRUE),
            'capacity_wir_total_income'             => $this->is_set($id_leads, 'capacity_wir_total_income', TRUE),
            'capacity_wir_total_net_profit'         => $this->is_set($id_leads, 'capacity_wir_total_net_profit', TRUE),
            'capacity_wir_ada_income_lainnya'       => $this->is_set($id_leads, 'capacity_wir_ada_income_lainnya'),
            'capacity_wir_income_lain1'             => $this->is_set($id_leads, 'capacity_wir_income_lain1'),
            'capacity_wir_nilai_lain1'              => $this->is_set($id_leads, 'capacity_wir_nilai_lain1', TRUE),
            'capacity_wir_income_lain2'             => $this->is_set($id_leads, 'capacity_wir_income_lain2'),
            'capacity_wir_nilai_lain2'              => $this->is_set($id_leads, 'capacity_wir_nilai_lain2', TRUE),
            'capacity_wir_total_lain'               => $this->is_set($id_leads, 'capacity_wir_total_lain', TRUE),
            'capacity_wir_saldo_rekening'           => $this->is_set($id_leads, 'capacity_wir_saldo_rekening', TRUE),
            'capacity_wir_income_pasangan'          => $this->is_set($id_leads, 'capacity_wir_income_pasangan', TRUE),
            'capacity_wir_total_nett_income'        => $this->is_set($id_leads, 'capacity_wir_total_nett_income', TRUE),
            'capacity_wir_outcome_pendidikan'       => $this->is_set($id_leads, 'capacity_wir_outcome_pendidikan', TRUE),
            'capacity_wir_outcome_rumah_tangga'     => $this->is_set($id_leads, 'capacity_wir_outcome_rumah_tangga', TRUE),
            'capacity_wir_outcome_internet'         => $this->is_set($id_leads, 'capacity_wir_outcome_internet', TRUE),
            'capacity_wir_outcome_lainnya'          => $this->is_set($id_leads, 'capacity_wir_outcome_lainnya', TRUE),
            'capacity_wir_total_biaya_outcome'      => $this->is_set($id_leads, 'capacity_wir_total_biaya_outcome', TRUE),
            'capacity_wir_ada_hutang'               => $this->is_set($id_leads, 'capacity_wir_ada_hutang'),
            'capacity_wir_hutang1'                  => $this->is_set($id_leads, 'capacity_wir_hutang1'),
            'capacity_wir_nilai_hutang1'            => $this->is_set($id_leads, 'capacity_wir_nilai_hutang1', TRUE),
            'capacity_wir_hutang2'                  => $this->is_set($id_leads, 'capacity_wir_hutang2'),
            'capacity_wir_nilai_hutang2'            => $this->is_set($id_leads, 'capacity_wir_nilai_hutang2', TRUE),
            'capacity_wir_hutang3'                  => $this->is_set($id_leads, 'capacity_wir_hutang3'),
            'capacity_wir_nilai_hutang3'            => $this->is_set($id_leads, 'capacity_wir_nilai_hutang3', TRUE),
            'capacity_wir_total_hutang'             => $this->is_set($id_leads, 'capacity_wir_total_hutang', TRUE),
            'capacity_wir_total_outcome'            => $this->is_set($id_leads, 'capacity_wir_total_outcome', TRUE),
            'capacity_wir_nett_income'              => $this->is_set($id_leads, 'capacity_wir_nett_income', TRUE),
            'capacity_wir_ada_analisa_dari_omset'   => $this->is_set($id_leads, 'capacity_wir_ada_analisa_dari_omset'),
            'capacity_wir_usaha_omset_perhari'      => $this->is_set($id_leads, 'capacity_wir_usaha_omset_perhari', TRUE),
            'capacity_wir_usaha_jumlah_hari_buka'   => $this->is_set($id_leads, 'capacity_wir_usaha_jumlah_hari_buka'),
            'capacity_wir_usaha_omset_perbulan'     => $this->is_set($id_leads, 'capacity_wir_usaha_omset_perbulan'),
            'capacity_wir_total_omset'              => $this->is_set($id_leads, 'capacity_wir_total_omset', TRUE),
            'capacity_wir_gross_profit'              => $this->is_set($id_leads, 'capacity_wir_gross_profit', TRUE),

            //capital (aset konsumen)
            'capital_tempat_tinggal_milik'  => $this->is_set($id_leads, 'capital_tempat_tinggal_milik'),
            'capital_ada_hutang'            => $this->is_set($id_leads, 'capital_ada_hutang'),
            'capital_alamat_bkr_ktp'        => $this->is_set($id_leads, 'capital_alamat_bkr_ktp'),
            'capital_alamat_bkr'            => $this->is_set($id_leads, 'capital_alamat_bkr'),
            'capital_aset1'                 => $this->is_set($id_leads, 'capital_aset1'),
            'capital_status_barang1'                => $this->is_set($id_leads, 'capital_status_barang1'),
            'capital_harga1'                => $this->is_set($id_leads, 'capital_harga1', TRUE),
            'capital_aset2'                 => $this->is_set($id_leads, 'capital_aset2'),
            'capital_status_barang2'                => $this->is_set($id_leads, 'capital_status_barang2'),
            'capital_harga2'                => $this->is_set($id_leads, 'capital_harga2', TRUE),
            'capital_aset3'                 => $this->is_set($id_leads, 'capital_aset3'),
            'capital_status_barang3'                => $this->is_set($id_leads, 'capital_status_barang3'),
            'capital_harga3'                => $this->is_set($id_leads, 'capital_harga3', TRUE),
            'capital_aset4'                 => $this->is_set($id_leads, 'capital_aset4'),
            'capital_status_barang4'                => $this->is_set($id_leads, 'capital_status_barang4'),
            'capital_harga4'                => $this->is_set($id_leads, 'capital_harga4', TRUE),
            'capital_aset5'                 => $this->is_set($id_leads, 'capital_aset5'),
            'capital_status_barang5'                => $this->is_set($id_leads, 'capital_status_barang5'),
            'capital_harga5'                => $this->is_set($id_leads, 'capital_harga5', TRUE),
            'capital_total_aset'            => $this->is_set($id_leads, 'capital_total_aset'),

            // character
            'character_nama1'                   => $this->is_set($id_leads, 'character_nama1'),
            'character_no_telp1'                => $this->is_set($id_leads, 'character_no_telp1'),
            'character_hubungan1'               => $this->is_set($id_leads, 'character_hubungan1'),
            'character_nama2'                   => $this->is_set($id_leads, 'character_nama2'),
            'character_no_telp2'                => $this->is_set($id_leads, 'character_no_telp2'),
            'character_hubungan2'               => $this->is_set($id_leads, 'character_hubungan2'),
            'character_nama3'                   => $this->is_set($id_leads, 'character_nama3'),
            'character_no_telp3'                => $this->is_set($id_leads, 'character_no_telp3'),
            'character_hubungan3'               => $this->is_set($id_leads, 'character_hubungan3'),
            'character_hasil_kredit'            => $this->is_set($id_leads, 'character_hasil_kredit'),
            'character_hasil_kredit_media_lain' => $this->is_set($id_leads, 'character_hasil_kredit_media_lain'),

            //collateral (jaminan kendaraan)
            'collateral_merk'               => $this->is_set($id_leads, 'collateral_merk'),
            'collateral_jenis'              => $this->is_set($id_leads, 'collateral_jenis'),
            'collateral_model'              => $this->is_set($id_leads, 'collateral_model'),
            'collateral_tahun_kendaraan'    => $this->is_set($id_leads, 'collateral_tahun_kendaraan'),
            'collateral_nama_bpkb'          => $this->is_set($id_leads, 'collateral_nama_bpkb'),
            'collateral_lama_punya_mobil'   => $this->is_set($id_leads, 'collateral_lama_punya_mobil'),
            'collateral_guna_mobil'         => $this->is_set($id_leads, 'collateral_guna_mobil'),
            'collateral_pricelist_bfi'      => $this->is_set($id_leads, 'collateral_pricelist_bfi'),

            //data religi
            'religi_solat'              => $this->is_set($id_leads, 'religi_solat'),
            'religi_puasa'              => $this->is_set($id_leads, 'religi_puasa'),
            'religi_zakat'              => $this->is_set($id_leads, 'religi_zakat'),
            'religi_haji'               => $this->is_set($id_leads, 'religi_haji'),
            'religi_umroh'              => $this->is_set($id_leads, 'religi_umroh'),
            'religi_qurban'             => $this->is_set($id_leads, 'religi_qurban'),
            'religi_lembaga_syariah'    => $this->is_set($id_leads, 'religi_lembaga_syariah'),
            'religi_pengetahuan_riba'   => $this->is_set($id_leads, 'religi_pengetahuan_riba'),
            'religi_dosa_hutang'        => $this->is_set($id_leads, 'religi_dosa_hutang'),
            'religi_alasan_syariah'     => $this->is_set($id_leads, 'religi_alasan_syariah'),

            //kesimpulan
            'kesimpulan_strength'     => $this->is_set($id_leads, 'kesimpulan_strength'),
            'kesimpulan_weakness'     => $this->is_set($id_leads, 'kesimpulan_weakness'),

            //Hasil Scoring
            'hasil_scoring_nilai_informasi_konsumen'    => $this->is_set($id_leads, 'hasil_scoring_nilai_informasi_konsumen'),
            'hasil_scoring_nilai_survey_konsumen'       => $this->is_set($id_leads, 'hasil_scoring_nilai_survey_konsumen'),
            'hasil_scoring_nilai_penilaian_merchant'    => $this->is_set($id_leads, 'hasil_scoring_nilai_penilaian_merchant'),
            'hasil_scoring_nilai_aset_kendaraan'        => $this->is_set($id_leads, 'hasil_scoring_nilai_aset_kendaraan'),
            'hasil_scoring_nilai_tingkat_religiusitas'  => $this->is_set($id_leads, 'hasil_scoring_nilai_tingkat_religiusitas'),
            'hasil_scoring_grade_informasi_konsumen'    => $this->is_set($id_leads, 'hasil_scoring_grade_informasi_konsumen'),
            'hasil_scoring_grade_survey_konsumen'       => $this->is_set($id_leads, 'hasil_scoring_grade_survey_konsumen'),
            'hasil_scoring_grade_penilaian_merchant'    => $this->is_set($id_leads, 'hasil_scoring_grade_penilaian_merchant'),
            'hasil_scoring_grade_aset_kendaraan'        => $this->is_set($id_leads, 'hasil_scoring_grade_aset_kendaraan'),
            'hasil_scoring_grade_tingkat_religiusitas'  => $this->is_set($id_leads, 'hasil_scoring_grade_tingkat_religiusitas'),
            'is_recommended'                            => $this->is_set($id_leads, 'is_recommended'),
        ];
        $where = ['id_leads' => $this->input->post('id_leads')];
        $json = $this->fs_konsumen_model->update($data, $where);

        if ($this->ticket_model->get("tickets.id_leads = " . $this->input->post('id_leads'))->row()->status_approval == '4') {
            $pending = ['status' => '2'];
            $this->ticket_model->update($pending, $where);
        }

        // Jika is recommended telah ditentukan, maka set tiket fs ke selesai
        if (empty($this->input->post('is_recommended'))) {
            $this->ticket_model->update(['status' => 5], $where);
        } else {
            $this->ticket_model->update(['status' => 2], $where);
        }

        echo json_encode($data);
    }

    //fungsi update assignment ke cms oleh head/manager 
    public function update_assignment()
    {
        // $post = $this->input->post(NULL, TRUE);

        $data = ['assign_cms' => !empty($this->input->post('cms'))];
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

        //notification
        // $id_ticket = $this->ticket_model->get("tickets.id_leads = " . $this->input->post('data'))->row()->id_ticket;
        // $this->notification($id_ticket, "Data Form ")

        echo json_encode($id);
    }

    //fungsi untuk head approve form survey ke admin ho
    public function kirim_fs($id)
    {
        //tiket diapprove
        $data = ['status' => 2];

        $where = ['id_leads' => $id];
        $id = $this->ticket_model->update($data, $where);

        // echo json_encode($id);
        redirect('fs_konsumen');
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
            if (empty($_FILES['tambah_lampiran']['name'][$i])) {
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

    public function download_lampiran()
    {
        $this->load->model('agent_model');
        $where = ['agents.id_agent' => $id];
        $data = $this->agent_model->get($where)->row();
        $data_tiket = $this->ticket_model->get($where)->row();
        $uploads = [
            $data->ktp,
            $data->npwp,
            $data->buku_tabungan,
            $data->foto_selfie,
            $data->form_f100,

            //form mou
            $data_tiket->form_mou
        ];

        // $uploads[] = $data_tiket->form_f100;

        foreach ($uploads as $upload => $file) {
            if ($file != NULL || $file != '') {
                ${'upload' . $upload} =  FCPATH . 'uploads/agents/' . $file;
                $this->zip->read_file(${"upload" . $upload});
            }
            // echo $upload . $file . '<br>';
        }
        // Download
        $filename = "ID_Agent_$data->id_agent.zip";
        $this->zip->download($filename);
    }
}
