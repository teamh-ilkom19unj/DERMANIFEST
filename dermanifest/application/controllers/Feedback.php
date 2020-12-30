<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Feedback extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        Log_helper('feedback', 'user masuk ke halaman feedback');

        $head = [
            'css' => 'feedback',
            'title' => 'Feedback'
        ];

        $footer = [
            'footer' => true
        ];
        $this->load->view('layout/header', $head);
        $this->load->view('layout/menu');
        $this->load->view('feedback');
        $this->load->view('layout/footer', $footer);
    }
    
    public function simpan()
    {
        if ($this->input->post('submit-btn') != 'simpan')
            redirect(base_url());

        if ($this->fv->run('simpan-feedback')) {
            $data = $this->input->post();
            $data['idUser'] = $this->my_encrypt->decrypt($this->session->userdata('id'));
            unset($data['submit-btn']);
            $this->load->model('Feedback_model');
            if ($this->Feedback_model->tambah($data)) {
                $this->session->set_flashdata('status', 'success');
                $this->session->set_flashdata('msg', 'Berhasil mengisi feedback');
            } else {
                $this->session->set_flashdata('status', 'gagal');
                $this->session->set_flashdata('msg', 'Gagal mengisi feedback');
            }
        } else {
            $this->session->set_flashdata('status', 'gagal');
            $this->session->set_flashdata('msg', validation_errors());
            var_dump(validation_errors());
        }
        redirect(base_url('feedback'));
    }
}
