 <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Partner extends CI_Controller
    {

        public $where;

        public function __construct()
        {
            parent::__construct();

            //Jika CMS login maka memunculkan data berdasarkan `id_user`
            if ($this->fungsi->user_login()->level == 1) {
                $this->where = "id_user = " . $this->fungsi->user_login()->id_user;
            }
            //Jika Sharia/Manager login maka memunculkan data berdasarkan data di cabangya.
            else if ($this->fungsi->user_login()->level == 2 || $this->fungsi->user_login()->level == 3) {
                $this->where = "id_branch = " . $this->fungsi->user_login()->id_branch;
            } else {
                $this->where = "id_user IS NOT NULL AND partners_full.status = 'lengkap'";
            }

            check_not_login();
        }

        private function lampiran($attachment)
        {
            //Konfigurasi Upload
            $config['upload_path']         = './uploads/partners';
            $config['allowed_types']        = '*';
            $config['max_size']             = 0;
            $config['max_width']            = 0;
            $config['max_height']           = 0;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload($attachment)) {
                return $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
            } else {
                return $this->upload->data('file_name');
            }
        }

        //form post data partner
        private function data()
        {
            $post = $this->input->post(NULL, TRUE);

            $data = [
                //Mapping Partners
                'nama_usaha'            => !empty($post['nama_usaha'])              ? $post['nama_usaha'] : NULL,
                'email'                 => !empty($post['email'])                   ? $post['email'] : NULL,
                'telepon'               => !empty($post['telepon'])                 ? $post['telepon'] : NULL,
                'kategori_produk'       => !empty($post['kategori_produk'])         ? $post['kategori_produk'] : NULL,
                'bidang_usaha'          => !empty($post['bidang_usaha'])            ? $post['bidang_usaha'] : NULL,
                'bentuk_usaha'          => !empty($post['bentuk_usaha'])            ? $post['bentuk_usaha'] : NULL,
                'alamat'                => !empty($post['alamat'])                  ? $post['alamat'] : NULL,

                //Stage 1
                'kelurahan'             => !empty($post['kelurahan'])               ? $post['kelurahan'] : NULL,
                'kecamatan'             => !empty($post['kecamatan'])               ? $post['kecamatan'] : NULL,
                'kode_pos'              => !empty($post['kode_pos'])                ? $post['kode_pos'] : NULL,
                'provinsi'              => !empty($post['provinsi'])                ? $post['provinsi'] : NULL,
                'status_tempat_usaha'   => !empty($post['status_tempat_usaha'])     ? $post['status_tempat_usaha'] : NULL,
                // 'bentuk_usaha'          => !empty($post['bentuk_usaha'])            ? $post['bentuk_usaha'] : NULL,
                'jumlah_karyawan'       => !empty($post['jumlah_karyawan'])         ? $post['jumlah_karyawan'] : NULL,
                'tahun_berdiri'         => !empty($post['tahun_berdiri'])           ? $post['tahun_berdiri'] : NULL,

                //Stage 2
                'nama_pemilik'          => !empty($post['nama_pemilik'])            ? $post['nama_pemilik'] : NULL,
                'barang_jual'           => !empty($post['barang_jual'])             ? $post['barang_jual'] : NULL,
                'sosial_media'          => !empty($post['sosial_media'])            ? $post['sosial_media'] : NULL,
                'hobi'                  => !empty($post['hobi'])                    ? $post['hobi'] : NULL,
                'jenis_pembayaran'      => !empty($post['jenis_pembayaran'])        ? implode(",", $post['jenis_pembayaran']) : NULL,
                'omset'                 => !empty($post['omset'])                   ? str_replace(",", "", $post['omset']) : NULL,
                'jumlah_cabang'         => !empty($post['jumlah_cabang'])           ? $post['jumlah_cabang'] : NULL,
                'pernah_promosi'        => !empty($post['pernah_promosi'])          ? $post['pernah_promosi'] : NULL,
                'punya_pinjaman'        => !empty($post['punya_pinjaman'])          ? $post['punya_pinjaman'] : NULL,
                'on_going_project'      => !empty($post['on_going_project'])        ? $post['on_going_project'] : NULL,
                'punya_jumlah_plafond'  => !empty($post['punya_jumlah_plafond'])    ? $post['punya_jumlah_plafond'] : NULL,
                'punya_giro_cek'        => !empty($post['punya_giro_cek'])          ? $post['punya_giro_cek'] : NULL,
                'keterangan_tambahan'   => !empty($post['keterangan_tambahan'])     ? $post['keterangan_tambahan'] : NULL,
                'rekening_bank'         => !empty($post['rekening_bank'])           ? $post['rekening_bank'] : NULL,
                'cabang_bank'           => !empty($post['cabang_bank'])             ? $post['cabang_bank'] : NULL,
                'nama_bank'             => !empty($post['nama_bank'])               ? $post['nama_bank'] : NULL,
                'atas_nama'             => !empty($post['atas_nama'])               ? $post['atas_nama'] : NULL,
                'npwp_penyedia_jasa'    => !empty($post['npwp_penyedia_jasa'])       ? $post['npwp_penyedia_jasa'] : NULL,
                'ttd_pks'               => !empty($post['ttd_pks'])                ? $post['ttd_pks'] : NULL,


                //Timestamp
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),

                //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
                'id_user'               => $this->fungsi->user_login()->id_user,
                //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
                'id_branch'             => $this->fungsi->user_login()->id_branch
            ];
            return $data;
        }


        public function index_mapping()
        {
            $data = [
                'data' => $this->partner_model->get("partners_full.status = 'mapping' AND partners_full." . $this->where)
            ];

            $this->template->load('template/index', 'mapping', $data);
        }

        public function index()
        {
            $data = [
                'data' => $this->partner_model->get("(partners_full.status = 'draft' OR partners_full.status = 'lengkap') AND partners_full." . $this->where, TRUE),
                'maintains' => $this->partner_model->get("partners_full." . $this->where)
            ];

            $this->template->load('template/index', 'partner', $data);
        }

        public function create_mapping()
        {
            $this->template->load('template/index', 'mapping-form');
        }

        public function create()
        {
            $data = [
                'data' => $this->partner_model->get(),
                'mappings' => $this->partner_model->get("partners_full.status = 'mapping' AND partners_full." . $this->where)
            ];

            $this->template->load('template/index', 'partner-form', $data);
        }


        public function edit_mapping($id)
        {
            $data = [
                'data' => $this->partner_model->get(['partners_full.id_partner' => $id])->row()
            ];
            $this->template->load('template/index', 'mapping-edit', $data);
        }

        public function edit($id)
        {
            $where = ['partners_full.id_partner' => $id];

            $data = [
                'data' => $this->partner_model->get($where)->row(),
                'mappings' => $this->partner_model->get("partners_full.status = 'mapping' AND partners_full." . $this->where)
            ];

            $this->template->load('template/index', 'partner-edit', $data);
        }

        public function detail($id)
        {
            $where = ['partners_full.id_partner' => $id];

            $data = [
                'data'          => $this->partner_model->get($where)->row(),
                'ticket'        => $this->ticket_model->get($where)->row(),
                'maintains'      => $this->maintain_partner_model->get($where),
                'activities'    => $this->partner_activity_model->get($where),
                'comments'      => $this->comment_model->get($where)
            ];
            $this->template->load('template/index', 'partner-detail', $data);
            // echo json_encode($data['data']);
        }

        public function save_mapping()
        {
            $post = $this->input->post(NULL, TRUE);

            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

            $this->form_validation->set_rules('nama_usaha', 'Nama Usaha', 'required');
            $this->form_validation->set_rules('bidang_usaha', 'Bidang Usaha', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('telepon', 'Telepon', 'is_unique[partners_full.telepon]', ['is_unique' => 'Nomor telepon sudah terdaftar, mohon ganti nomor telepon']);
            $this->form_validation->set_rules('email', 'Email', 'valid_email|is_unique[partners_full.email]', ['is_unique' => 'Alamat E-mail sudah terdaftar, mohon ganti Alamat E-mail']);
            $this->form_validation->set_rules('kategori_produk', 'Kategori Produk', 'required');

            if ($this->form_validation->run() != FALSE) {
                $data = [
                    'nama_usaha'            => $post['nama_usaha'],
                    'bidang_usaha'          => $post['bidang_usaha'],
                    'bentuk_usaha'          => $post['bentuk_usaha'],
                    'alamat'                => $post['alamat'],
                    'telepon'               => $post['telepon'],
                    'email'                 => isset($post['email']) ? $post['email'] : NULL,
                    'kategori_produk'       => $post['kategori_produk'],
                    'catatan'               => $post['catatan'],

                    //Timestamp
                    'created_at'            => date('Y-m-d H:i:s'),
                    'updated_at'            => date('Y-m-d H:i:s'),

                    //Memasukkan id user, agar mengetahui user siapa yang menginput data mapping
                    'id_user'               => $this->fungsi->user_login()->id_user,
                    //Memasukkan id cabang, agar mengetahui cabang mana yang menginput data mapping
                    'id_branch'             => $this->fungsi->user_login()->id_branch
                ];

                //Konfigurasi Upload
                $config['upload_path']         = './uploads/partners';
                $config['allowed_types']        = '*';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('foto_usaha')) {
                    $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
                } else {
                    $data['foto_usaha'] = $this->upload->data('file_name');
                }

                $data['status'] = 'mapping';
                //Memasukkan data mapping ke database `partners`
                $id = $this->partner_model->create($data);

                //Memberi pesan berhasil data menyimpan data mapping
                $this->session->set_flashdata("berhasil_simpan", "Data Mapping Partner berhasil disimpan. <a href='#'>Lihat Data</a>");

                redirect('index_mapping');
            } else {
                $this->template->load('template/index', 'mapping-form');
            }
        }

        public function save()
        {
            $post = $this->input->post(NULL, TRUE);


            // $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

            // $this->form_validation->set_rules('telepon', 'Telepon', 'is_uniquelepon]', ['is_unique' => 'Nomor telepon sudah terdaftar, mohon ganti nomor telepon']);
            // $this->form_validation->set_rules('email', 'Email', 'valid_email|is_uniqueail]', ['is_unique' => 'Alamat E-mail sudah terdaftar, mohon ganti Alamat E-mail']);


            // $this->mapping_partner->update($data_mapping, $where_mapping);                             
            $data = $this->data();

            $data['ktp']                        = $this->lampiran('ktp');
            $data['npwp']                       = $this->lampiran('npwp');
            $data['buku_tabungan_perusahaan']   = $this->lampiran('buku_tabungan_perusahaan');
            $data['siup']                       = $this->lampiran('siup');
            $data['logo_perusahaan']            = $this->lampiran('logo_perusahaan');
            $data['foto_usaha']                 = $this->lampiran('foto_usaha');
            $data['form_mou']                   = $this->lampiran('form_mou');

            if (isset($post['draft'])) {
                $data['status'] = 'draft';
            } else if (isset($post['process'])) {
                $data['status'] = 'lengkap';
            }

            // Jika Leads Database dipilih / terisi, maka leads database yang ada akan diupdate
            if (!empty($post['id_partner'])) {
                $id = $post['id_partner'];
                unset($data['created_at']);

                $this->partner_model->update($data, ["id_partner" => $id]);
            }
            // Jika tak dipilih, maka akan membuat record leads baru
            else {
                $id = $this->partner_model->create($data);
            }

            //Menambah antrian tiket untuk data Partner
            if (isset($post['process'])) {
                //Jika sudah mou 'Iya' dan Form Mou diupload.
                if (!$this->upload->do_upload('form_mou')) {
                    $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
                } else {
                    $ticket = [
                        'date_verified_ttd' => date('Y-m-d H:i:s'),
                        'verified_by' => $this->fungsi->user_login()->id_user
                    ];
                }
                $id_ticket = $this->tiket->tambah_tiket('id_partner', $id, !empty($ticket) ? $ticket : NULL);
                //Membuat notifikasi tiket baru untuk Admin
                $this->notifikasi->send($id_ticket, 'Tiket Baru', 46);
            }

            //Membuat history activity inputan data partner
            $partner_activity_model = [
                'activity' => 'Data Partner telah dibuat',
                'date_activity' => date('Y-m-d H:i:s'),
                'id_partner' => $id,
                'id_user' => $this->fungsi->user_login()->id_user
            ];

            $this->partner_activity_model->create($partner_activity_model);

            if ($id) {
                //Memberi pesan berhasil data menyimpan data mapping
                $this->session->set_flashdata("berhasil_simpan", "Data Partner berhasil disimpan. <a href='#'>Lihat Data</a>");
                redirect('Partner');
            }
        }

        public function update()
        {
            $post = $this->input->post(NULL, TRUE);

            $data = $this->data();
            //unset data created_at, id_user, id_branch. Karena untuk update data
            unset($data["created_at"], $data["id_user"], $data["id_branch"]);

            $data['ktp']                        = $this->lampiran('ktp');
            $data['npwp']                       = $this->lampiran('npwp');
            $data['buku_tabungan_perusahaan']   = $this->lampiran('buku_tabungan_perusahaan');
            $data['siup']                       = $this->lampiran('siup');
            $data['logo_perusahaan']            = $this->lampiran('logo_perusahaan');
            $data['foto_usaha']                 = $this->lampiran('foto_usaha');
            $data['form_mou']                   = $this->lampiran('form_mou');

            if (isset($post['draft'])) {
                $data['status'] = 'draft';
            } else if (isset($post['process'])) {
                $data['status'] = 'lengkap';
                //Jika sudah mou 'Iya' dan Form Mou diupload.
                if (!$this->upload->do_upload('form_mou')) {
                    $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
                } else {
                    $ticket = [
                        'date_verified_ttd' => date('Y-m-d H:i:s'),
                        'verified_by' => $this->fungsi->user_login()->id_user
                    ];
                }
                //Menambah antrian tiket untuk data Partner
                $id_ticket = $this->tiket->tambah_tiket('id_partner', $post['id_partner'], !empty($ticket) ? $ticket : NULL);

                //Membuat notifikasi tiket baru untuk Admin
                $this->notifikasi->send($id_ticket, 'Tiket Baru', 46);
            }

            //Memasukkan data mapping ke database `partners`
            $where = ['id_partner' => $post['id_partner']];
            $id = $this->partner_model->update($data, $where);

            //Membuat history activity inputan data partner
            $partner_activity_model = [
                'activity'      => 'Perubahan pada data Partner',
                'date_activity' => date('Y-m-d H:i:s'),
                'id_partner'    => $post['id_partner'],
                'id_user'       => $this->fungsi->user_login()->id_user
            ];

            $this->partner_activity_model->create($partner_activity_model);

            if ($id) {
                //Memberi pesan berhasil data menyimpan data mapping
                $this->session->set_flashdata("berhasil_simpan", "Data Mapping berhasil disimpan. <a href='#'>Lihat Data</a>");

                redirect('Partner');
            }
        }

        public function update_mapping()
        {
            $post = $this->input->post(NULL, TRUE);

            $this->form_validation->set_rules('nama_usaha', 'Nama Usaha', 'required');
            $this->form_validation->set_rules('bidang_usaha', 'Bidang Usaha', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            // $this->form_validation->set_rules('telepon', 'Telepon', 'required');
            $this->form_validation->set_rules('email', 'Email', 'valid_email');
            $this->form_validation->set_rules('kategori_produk', 'Kategori Produk', 'required');

            if ($this->form_validation->run() != FALSE) {
                $data = [
                    'nama_usaha'            => $post['nama_usaha'],
                    'bidang_usaha'          => $post['bidang_usaha'],
                    'bentuk_usaha'          => $post['bentuk_usaha'],
                    'alamat'                => $post['alamat'],
                    'telepon'               => $post['telepon'],
                    'email'                 => isset($post['email']) ? $post['email'] : NULL,
                    'kategori_produk'       => $post['kategori_produk'],
                    'catatan'               => $post['catatan'],

                    //Timestamp
                    // 'created_at'            => date('Y-m-d H:i:s'),
                    'updated_at'            => date('Y-m-d H:i:s')
                ];

                //Konfigurasi Upload
                $config['upload_path']         = './uploads/partners';
                $config['allowed_types']        = '*';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('foto_usaha')) {
                    $this->session->set_flashdata("upload_error", "<div class='alert alert-danger'>" . $this->upload->display_errors() . "</div>");
                } else {
                    $data['foto_usaha'] = $this->upload->data('file_name');
                }

                $where = ['id_partner' => $post['id_partner']];

                //Memasukkan data mapping ke database `partners`
                $id = $this->partner_model->update($data, $where);

                //Memberi pesan berhasil data menyimpan data mapping
                $this->session->set_flashdata("berhasil_simpan", "Data Mapping berhasil diupdate. <a href='#'>Lihat Data</a>");

                redirect($post['redirect']);
            } else {
                $data = [
                    'data' => $this->partner_model->get("partners_full.status = 'mapping' AND partners_full." . $this->where)
                ];
                $this->template->load('template/index', 'mapping-edit', $data);
            }
        }

        public function update_detail()
        {
            $post = $this->input->post(NULL, TRUE);

            $data = $this->data();
            unset($data["ttd_pks"]);
            //unset data created_at, id_user, id_branch. Karena untuk update data
            unset($data["created_at"], $data["id_user"], $data["id_branch"]);

            $where = ['id_partner' => $post['id_partner']];
            $this->partner_model->update($data, $where);

            //Membuat history activity inputan data partner
            $partner_activity_model = [
                'activity' => 'Perubahan pada data Partner',
                'date_activity' => date('Y-m-d H:i:s'),
                'id_partner' => $post['id_partner'],
                'id_user' => $post['id_user']
            ];

            $this->partner_activity_model->create($partner_activity_model);

            //Membuat notifikasi Perubahan Data untuk Admin
            $this->notifikasi->send($post['id_ticket'], 'Perubahan Data');

            //Mengupdate status tiket
            $this->tiket->update_tiket($post['id_ticket']);

            $this->session->set_flashdata("alert", "<div class='alert alert-success' role='alert'>Data Merchant berhasil diupdate</div>");
            redirect($post['redirect']);
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
                    $config['upload_path']         = './uploads/partners';
                    $config['allowed_types']        = '*';
                    $config['max_size']             = 0;
                    $config['max_width']            = 0;
                    $config['max_height']           = 0;
                    // $config['file_name']            = $_FILES['tambah_lampiran']['name'][$i]; 

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

            $where = "partners_full.id_partner = " .  $post['id_partner'];
            //Mengambil nama file lampiran tambahan yang ada
            $lampiran_tambahan = $this->partner_model->get($where)->row()->lampiran_tambahan;
            //Konversi nama file dari array ke string
            $comma = implode(",", $lampiran_arr);
            //Jika sudah pernah melampirkan tambahan, maka append nama file di database
            if ($lampiran_tambahan) {
                $data_partner['lampiran_tambahan'] = $lampiran_tambahan . "," . $comma;
                $this->partner_model->update($data_partner, $where);
            } else {
                $data_partner['lampiran_tambahan'] = $comma;
                $this->partner_model->update($data_partner, $where);
            }

            $this->session->set_flashdata("alert", "<div class='alert alert-success' role='alert'>Data Lampiran berhasil ditambah</div>");
            redirect($post['redirect']);
        }

        public function update_ttd()
        {
            // $post = $this->input->post(null, TRUE);
            $data = [
                'ttd_pks'           => $this->input->post('ttd_pks')
            ];

            $where = ['id_partner' => $this->input->post('id_partner')];
            $data = $this->partner_model->update($data, $where);

            echo json_encode($data);

            $notification = $this->notifikasi->send($this->input->post('id_partner'), 'Ditanda tangan oleh');
        }

        //Upload Formulir MOU
        public function upload_mou()
        {
            //Konfigurasi Upload
            $config['upload_path']         = './uploads/partners';
            $config['allowed_types']        = '*';
            $config['max_size']             = 0;
            $config['max_width']            = 0;
            $config['max_height']           = 0;
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('upload_mou')) {
                echo $this->upload->display_errors();
            } else {
                $where = ['id_partner' => $this->input->post('id_partner')];

                $data['form_mou'] = $this->upload->data('file_name');
                $this->partner_model->update($data, $where);

                $data_ticket = [
                    'date_verified_ttd' =>  date('Y-m-d H:i:s'),
                    'verified_by'       => $this->fungsi->user_login()->id_user
                ];
                // meng-update tanggal tanda tangan kerjasama
                $this->ticket_model->update($data_ticket, $where);

                $id_partner = $this->ticket_model->get(['tickets.id_partner' => $this->input->post('id_partner')])->row();
                //Jika data tiket sudah diapprove namun belum di upload form pks, maka ketika user upload form mou, tiket kembali ke status `pending`
                if ($id_partner->status_ticket == 5 || $id_partner->status_ticket == 6) {
                    //merubah status tiket kembali ke pending
                    $data_ticket = ['status' => 2];
                    // meng-update tanggal tanda tangan kerjasama
                    $this->ticket_model->update($data_ticket, ['id_partner' => $this->input->post('id_partner')]);
                }

                redirect($this->input->post('redirect'));
            }
        }

        public function download_lampiran($id)
        {

            $where = ['partners_full.id_partner' => $id];
            $data = $this->partner_model->get($where)->row();
            $data_maintain = $this->maintain_partner_model->get($where);

            $uploads = [
                $data->ktp,
                $data->npwp,
                $data->buku_tabungan_perusahaan,
                $data->siup,
                $data->logo_perusahaan,
                $data->foto_usaha,
                $data->form_mou,
            ];

            // Download lampiran partner
            foreach ($uploads as $upload => $file) {
                if ($file != NULL || $file != '') {
                    ${'upload' . $upload} =  FCPATH . 'uploads/partners/' . $file;
                    $this->zip->read_file(${"upload" . $upload});
                }
                // echo $upload . $file . '<br>';
            }

            // Download lampiran maintain partner
            if ($data_maintain->num_rows() > 0) {
                $iteration = 0;
                foreach ($data_maintain->result() as $file) {
                    ${'maintain' . $iteration} = FCPATH . 'uploads/maintains/' . $file->photo_activity;
                    $this->zip->read_file(${'maintain' . $iteration});
                    $iteration++;
                }
            }

            //Download Data lampiran tambahan
            $lampiran_tambahan =  explode(",", $data->lampiran_tambahan);
            foreach ($lampiran_tambahan as $file) {
                if ($file != NULL || $file != '') {
                    ${'upload' . $upload} =  FCPATH . 'uploads/partners/' . $file;
                    $this->zip->read_file(${"upload" . $upload});
                    // echo $file . '<br>';
                }
            }
            // Download
            $nama_usaha = str_replace(" ", "_", $data->nama_usaha);
            $filename = $nama_usaha . "_$data->id_partner.zip";
            $this->zip->download($filename);
        }
    }
