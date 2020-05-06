<?php
class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	// Halaman Login
	public function index()
	{
		check_already_login();

		$this->load->view('login');
	}

	//Halaman reset password
	public function lupa_password()
	{
		$post = $this->input->post(null, TRUE);

		if (isset($_POST['reset_password'])) {

			$email = $post['email'];
			$data = $this->user_model->get($email);

			// Jika email ada di database, maka lakukan proses ubah password
			if ($data->num_rows() > 0) {

				// Fungsi untuk ubah password random
				function generateMixedPassword($length = 8)
				{
					$base = 'abcdefghijklmnopqrstuvwxyz';
					$baseD = '0123456789';

					$r = array();

					for ($i = 0; $i < $length; $i += 2) {
						$r[] = substr($base, rand(0, strlen($base) - 1), 1);
					}
					for ($i = 0; $i < $length; $i += 2) {
						$r[] = substr($baseD, rand(0, strlen($baseD) - 1), 1);
					}
					shuffle($r);

					return implode('', $r);
				}

				$generate = generateMixedPassword();
				$random_password = $generate;

				$this->user_model->update(['password' => md5($random_password)], ['email' => $email]);

				$akun = $data->row();

				// Konfigurasi email
				$config = [
					'mailtype'  => 'html',
					'charset'   => 'utf-8',
					'protocol'  => 'smtp',
					'smtp_host' => 'srv50.niagahoster.com',
					'smtp_user' => 'administrator@bfisyariah.id',    // Ganti dengan email gmail kamu
					'smtp_pass' => 'Tralala1',      // Password gmail kamu
					'smtp_port' => 465,
					'crlf'      => "\r\n",
					'newline'   => "\r\n"
				];

				// Load library email dan konfigurasinya
				$this->load->library('email', $config);

				// Email dan nama pengirim
				$this->email->from('administrator@bfisyariah.id', 'BFI Syariah Head Office');

				// Email penerima
				$this->email->to($email); // Ganti dengan email tujuan kamu	

				// Subject email
				$this->email->subject('Lupa Password');

				// Isi email
				$this->email->message("Detail Akun Anda: \n NIK: $akun->nik \n Nama: $akun->name \n E-mail: $akun->email \n Password:" . $random_password);

				// Tampilkan pesan sukses atau error
				if ($this->email->send()) {
					echo 'Sukses! email berhasil dikirim.';
				} else {
					echo 'Error! email tidak dapat dikirim.';
				}
			} else {
				echo "akun tidak ditemukan";
			}
		} else {
			$this->load->view('recoverpw');
		}
	}

	//Proses Login
	public function process()
	{
		$post = $this->input->post(null, TRUE);

		$nik = $post['nik'];
		$password = md5($post['password']);


		$query = $this->user_model->login($nik);
		$row = $query->row();

		// $aktivitas_terakhir = $this->user_model->last_activity($row->id_user)->row();

		//cek login
		if ($query->num_rows() > 0 && ($row->nik == $nik || $row->email == $nik) && $row->password == $password && $row->is_active == 1) {
			$params = [
				'id_user' => $row->id_user,
				'id_branch' => $row->id_branch,
				'nik' => $row->nik,
				'level' => $row->level
			];

			//Menyimpan Session
			$this->session->set_userdata($params);

			$login_log = [
				'login_date' => date('Y-m-d H:i:s'),
				'id_user' => $row->id_user,
				'keterangan' => 'login'
			];
			$this->user_model->login_log($login_log);

			echo "<script>window.location='" . site_url("profile") . "'</script>";
		} else if ($query->num_rows() > 0 && ($row->nik == $nik || $row->email == $nik) && $row->password == $password && $row->is_active == 0) {
			$this->session->set_flashdata("password_salah", "<div class='text text-danger'>Akun ditemukan namun belum di-aktivasi, silahkan hubungi HO untuk aktivasi.</div>");
			$this->session->set_flashdata("nik", $nik);
			redirect('Auth');
		} else if ($query->num_rows() > 0 && ($row->nik == $nik || $row->email == $nik) && $row->password != $password) {
			$this->session->set_flashdata("password_salah", "<div class='text text-danger'>Password Anda Salah.</div>");
			$this->session->set_flashdata("nik", $nik);
			redirect('Auth');
		} else {
			$this->session->set_flashdata("akun_salah", "<div class='text text-danger'>Akun tidak ditemukan.</div>");
			redirect('Auth');
		}
	}

	// Update Profil
	public function update_password()
	{
		$post = $this->input->post(null, TRUE);

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		$this->form_validation->set_rules('password', 'Password', 'trim');
		$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'trim|matches[password]');


		if ($this->form_validation->run() != FALSE) {
			$md5_password = md5($post['password']);
			$data = [
				'password' => $md5_password
			];

			$where = [
				'id_user' => $this->fungsi->user_login()->id_user
			];

			$this->user_model->update($data, $where);

			redirect('profile');
		} else {
			$data = [
				'data' => $this->user_model->get($this->fungsi->user_login()->nik)->row()
			];
			$this->template->load('template/index', 'profile', $data);
		}
	}

	// Proses Logout
	public function logout()
	{
		$params = ['id_user', 'id_branch', 'nik', 'level'];
		$this->session->unset_userdata($params);
		redirect('Auth');
	}
}