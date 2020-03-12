<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapping_leads extends CI_Controller
{
    public $where;


    public function __construct()
    {
        parent::__construct();
        $this->load->model('mapping_leads_model', 'mapping_leads');
        $this->load->model('partner_model');
        $this->load->model('agent_model');
        $this->load->model('leads_follow_up_model');

        $this->load->helper('fungsi');
        $this->load->library('form_validation');

        //Jika CMS login maka memunculkan data berdasarkan `id_user`
        if ($this->fungsi->user_login()->level == 1) {
            $this->where = ['id_user' => $this->fungsi->user_login()->id_user];
        }
        //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
        else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
            $this->where = ['id_branch' => $this->fungsi->user_login()->id_branch];
        } else {
            $this->where = NULL;
        }

        check_not_login();
    }

    public function index()
    {
        $data = [
            'data' => $this->mapping_leads->get($this->where)
        ];

        $this->template->load('template/index', 'leads-mapping', $data);
    }

    public function create()
    {
        $data = [
            'agents' => $this->agent_model->get($this->where),
            'partners' => $this->partner_model->get($this->where)
        ];
        $this->template->load('template/index', 'leads-mapping-form', $data);
    }

    public function edit($id)
    {
        $data = [
            'data' => $this->mapping_leads->get(['A.id_mapping_leads' => $id])->row(),
            'agents' => $this->agent_model->get($this->where),
            'partners' => $this->partner_model->get($this->where),
            'follow_up' => $this->leads_follow_up_model->get(['mapping_leads.id_mapping_leads' => $id])
        ];
        $this->template->load('template/index', 'leads-mapping-edit', $data);
    }

    public function save()
    {
        $post = $this->input->post(NULL, TRUE);

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        $this->form_validation->set_rules('telepon', 'Telepon', 'required|is_unique[mapping_leads.telepon]', ['is_unique' => 'Nomor Telepon sudah terdaftar, mohon ganti nomor telepon']);

        if ($this->form_validation->run() != FALSE) {
            $data = [
                'nama_konsumen'         => !empty($post['nama_konsumen']) ? $post['nama_konsumen'] : NULL,
                'telepon'               => !empty($post['telepon']) ? $post['telepon'] : NULL,
                'soa'                   => !empty($post['soa']) ? $post['soa'] : NULL,
                'produk'                => !empty($post['produk']) ? $post['produk'] : NULL,
                'detail_produk'         => !empty($post['detail_produk']) ? $post['detail_produk'] : NULL,
                // Untuk SOA EGC
                'nik_egc'               => !empty($post['nik_egc']) ? $post['nik_egc'] : NULL,
                'posisi_egc'            => !empty($post['posisi_egc']) ? $post['posisi_egc'] : NULL,
                'cabang_egc'            => !empty($post['cabang_egc']) ? $post['cabang_egc'] : NULL,
                // Untuk SOA CGC / RO
                'nomor_kontrak'         => !empty($post['nomor_kontrak']) ? $post['nomor_kontrak'] : NULL,
                'referral_konsumen'     => !empty($post['referral_konsumen']) ? $post['referral_konsumen'] : NULL,
                // Untuk SOA Event
                'nama_event'            => !empty($post['nama_event']) ? $post['nama_event'] : NULL,

                'nama_partner'            => !empty($post['data_partner']) ? $post['data_partner'] : NULL,
                'nama_agent'            => !empty($post['data_agent']) ? $post['data_agent'] : NULL,

                //Timestamp
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s'),

                'id_mapping'            => !empty($post['id_mapping']) ? $post['id_mapping'] : NULL,
                'id_agent'              => !empty($post['id_agent']) ? $post['id_agent'] : NULL,
                //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
                'id_user'               => $this->fungsi->user_login()->id_user,
                //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
                'id_branch'             => $this->fungsi->user_login()->id_branch
            ];

            //Memasukkan data mapping ke database `leadss`
            $id = $this->mapping_leads->create($data);

            //Memberi pesan berhasil data menyimpan data mapping
            $this->session->set_flashdata("berhasil_simpan", "Data Mapping Leads berhasil disimpan. <a href='#'>Lihat Data</a>");

            redirect('Mapping_leads');
        } else {
            $data = [
                'agents' => $this->agent_model->get($this->where),
                'partners' => $this->partner_model->get($this->where),
            ];
            $this->template->load('template/index', 'leads-mapping-form', $data);
        }
    }

    public function update()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'nama_konsumen'         => $post['nama_konsumen'],
            'telepon'               => $post['telepon'],
            'soa'                   => $post['soa'],
            'produk'                => $post['produk'],
            'detail_produk'         => $post['detail_produk'],
            // Untuk SOA EGC
            'nik_egc'               => !empty($post['nik_egc']) ? $post['nik_egc'] : NULL,
            'posisi_egc'            => !empty($post['posisi_egc']) ? $post['posisi_egc'] : NULL,
            'cabang_egc'            => !empty($post['cabang_egc']) ? $post['cabang_egc'] : NULL,
            // Untuk SOA CGC / RO
            'nomor_kontrak'         => !empty($post['nomor_kontrak']) ? $post['nomor_kontrak'] : NULL,
            'referral_konsumen'     => !empty($post['referral_konsumen']) ? $post['referral_konsumen'] : NULL,
            // Untuk SOA Event
            'nama_event'            => !empty($post['nama_event']) ? $post['nama_event'] : NULL,

            'nama_partner'            => !empty($post['data_partner']) ? $post['data_partner'] : NULL,
            'nama_agent'            => !empty($post['data_agent']) ? $post['data_agent'] : NULL,

            //Timestamp
            // 'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s'),

            'id_mapping'            => !empty($post['id_mapping']) ? $post['id_mapping'] : NULL,
            'id_agent'              => !empty($post['id_agent']) ? $post['id_agent'] : NULL,

            //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
            // 'id_user'               => $this->fungsi->user_login()->id_user,
            //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
            // 'id_branch'             => $this->fungsi->user_login()->id_branch
        ];

        $where = ['id_mapping_leads' => $post['id_mapping_leads']];

        //Memasukkan data mapping ke database `leadss`
        $id = $this->mapping_leads->update($data, $where);

        //Memberi pesan berhasil data menyimpan data mapping
        $this->session->set_flashdata("berhasil_simpan", "Data Mapping Leads berhasil diupdate. <a href='#'>Lihat Data</a>");

        redirect($post['redirect']);
    }

    // Import / Export Excel data to MySQL 
    public function export_template()
    {
        $this->load->view("excel/leads_database");
    }

    public function import_template()
    {
        $this->load->view("excel/excel_reader2");
        $this->load->view("excel/import_leads_database");
    }

    public function form()
    {
        $data = array(); // Buat variabel $data sebagai array

        if (isset($_POST['preview'])) { // Jika user menekan tombol Preview pada form
            // lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
            $upload = $this->SiswaModel->upload_file($this->filename);

            if ($upload['result'] == "success") { // Jika proses upload sukses
                // Load plugin PHPExcel nya
                include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

                $excelreader = new PHPExcel_Reader_Excel2007();
                $loadexcel = $excelreader->load('excel/' . $this->filename . '.xlsx'); // Load file yang tadi diupload ke folder excel
                $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

                // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
                // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
                $data['sheet'] = $sheet;
            } else { // Jika proses upload gagal
                $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
        }

        $this->load->view('form', $data);
    }

    public function import()
    {
        // Load plugin PHPExcel nya
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('excel/' . $this->filename . '.xlsx'); // Load file yang telah diupload ke folder excel
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

        // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
        $data = array();

        $numrow = 1;
        foreach ($sheet as $row) {
            // Cek $numrow apakah lebih dari 1
            // Artinya karena baris pertama adalah nama-nama kolom
            // Jadi dilewat saja, tidak usah diimport
            if ($numrow > 1) {
                // Kita push (add) array data ke variabel data
                array_push($data, array(
                    'nis' => $row['A'], // Insert data nis dari kolom A di excel
                    'nama' => $row['B'], // Insert data nama dari kolom B di excel
                    'jenis_kelamin' => $row['C'], // Insert data jenis kelamin dari kolom C di excel
                    'alamat' => $row['D'], // Insert data alamat dari kolom D di excel
                ));
            }

            $numrow++; // Tambah 1 setiap kali looping
        }
        // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
        $this->SiswaModel->insert_multiple($data);

        redirect("Siswa"); // Redirect ke halaman awal (ke controller siswa fungsi index)
    }
}
