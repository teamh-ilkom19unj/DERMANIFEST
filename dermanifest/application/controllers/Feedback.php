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
}
