<?php
class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('user_model');
	}

	// Halaman Login
	public function index()
	{
		$this->load->view('login');
	}

	//Halaman reset password
	public function lupa_password()
	{
		$post = $this->input->post(null, TRUE);
		
		if (isset($_POST['reset_password'])) {

			$email = $post['email'];
			$data = $this->user_model->get($email);

			if ($data->num_rows() > 0) {

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
				// Script untuk ubah password random
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


		$query = $this->user_model->login($nik, $password);

		//cek login
		if ($query->num_rows() > 0) {
			$row = $query->row();
			$params = [
				'nik' => $row->nik
			];

			//Menyimpan Session
			$this->session->set_userdata($params);
			echo "<script>window.location='" . site_url("Home") . "'</script>";
		} else {
			echo "<script>alert('Akun tidak cocok/belum diaktivasi'); window.location='" . site_url("Auth") . "'</script>";
		}
	}

	// Proses Logout
	public function logout()
	{
		$params = ['nik'];
		$this->session->unset_userdata($params);
		redirect('Auth');
	}
}
