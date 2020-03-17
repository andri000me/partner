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

    public function agent($id)
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

    public function partner($id)
    {
        $this->load->model('partner_model');
        $this->load->model('maintain_partner_model', 'maintain_partner');

        $where = ['partners.id_partner' => $id];
        $data = $this->partner_model->get($where)->row();
        $data_tiket = $this->ticket_model->get($where)->row();
        $data_maintain = $this->maintain_partner->get($where);

        $uploads = [
            $data->ktp,
            $data->npwp,
            $data->buku_tabungan_perusahaan,
            $data->siup,
            $data->logo_perusahaan,
            $data->foto_usaha,
            $data->foto_usaha_mapping,

            //form mou
            $data_tiket->form_mou
        ];

        foreach ($uploads as $upload => $file) {
            if ($file != NULL || $file != '') {
                ${'upload' . $upload} =  FCPATH . 'uploads/partners/' . $file;
                $this->zip->read_file(${"upload" . $upload});
            }
            // echo $upload . $file . '<br>';
        }

        if ($data_maintain->num_rows() > 0) {
            $iteration = 0;
            foreach ($data_maintain->result() as $file) {
                ${'maintain' . $iteration} = FCPATH . 'uploads/maintains/' . $file->photo_activity;
                $this->zip->read_file(${'maintain' . $iteration});
                $iteration++;
            }
        }
        // Download
        $filename = "ID_Partner_$data->id_partner.zip";
        $this->zip->download($filename);
    }

    public function leads()
    {
    }
}
