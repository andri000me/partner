<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Zip extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->helper('url');

        // Load zip library
        $this->load->library('zip');
        $this->load->model('ticket_model');
    }

    public function index()
    {
        // Load view
        $this->load->view('index_view');
    }

    // Create zip
    public function create_zip($id_ticket, $folder)
    {
        $where = ['id_ticket' => $id_ticket];
        $data = $this->ticket_model->get($where)->row();
        if ($folder == 'agents') {
            $uploads = [
                //Agent
                $data->ktp_agent,
                $data->npwp_agent,
                $data->buku_tabungan,
                $data->foto_selfie,
                $data->form_mou
            ];
        } else if ($folder == 'partners') {
            $uploads = [
                //Partner
                $data->ktp_partner,
                $data->npwp_partner,
                $data->buku_tabungan_perusahaan,
                $data->siup,
                $data->logo_perusahaan,
                $data->foto_usaha,
                $data->foto_usaha_mapping,
                $data->form_mou
            ];
        }

        foreach ($uploads as $upload => $file) {
            if ($file != NULL || $file != '') {
                ${'upload' . $upload} =  FCPATH . 'uploads/' . $folder . '/' . $file;
                $this->zip->read_file(${"upload" . $upload});
            }
            // echo $upload . $file . '<br>';
        }

        // Download
        $filename = "ID_Ticket_$data->id_ticket.zip";
        $this->zip->download($filename);
    }
}
