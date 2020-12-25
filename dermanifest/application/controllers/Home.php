<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()

    {
        parent::__construct();
        if ($this->session->userdata('id') == null)
            redirect('login');
    }

    public function index()
    {
        Log_helper('landing', 'user masuk ke halaman landing');

        $head = [
            'css' => 'landing',
            'title' => 'Dermanifest'
        ];

        $footer = [
            'footer' => true
        ];

        $landing = [
            'isLogin' => true
        ];
        $this->load->view('layout/header', $head);
        $this->load->view('layout/menu');
        $this->load->view('landing', $landing);
        $this->load->view('layout/footer', $footer);
    }
}
