<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{    
    function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('id') == null)
        //     redirect('login');
    }

    public function get()
    {
        if (!$this->input->is_ajax_request())
            show_error('No direct script access allowed');

        $this->load->model('Product_model');
        $data = $this->Product_model->get($this->input->get('id'));
        if ($data != null)
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(200)
                ->set_output(json_encode($data));
        else
            $this->output
                ->set_content_type('application/json')
                ->set_status_header(204);
    }

    public function list()
    {
        Log_helper('melihat produk', 'user melihat list produk untuk dibeli');

        $head = [
            'css' => 'product_list',
            'title' => 'Product List'
        ];

        $footer = [
            'footer' => true
        ];
        $this->load->view('layout/header', $head);
        $this->load->view('layout/menu');
        $this->load->view('product_list');
        $this->load->view('layout/footer', $footer);
    }

    public function detail()
    {
        Log_helper('melihat detail', 'user melihat detail produk untuk dibeli');

        $head = [
            'css' => 'product_detail',
            'title' => 'Product Detail'
        ];

        $footer = [
            'footer' => true
        ];
        $this->load->view('layout/header', $head);
        $this->load->view('layout/menu');
        $this->load->view('product_detail');
        $this->load->view('layout/footer', $footer);
    }

    public function comparison()
    {
        Log_helper('compare', 'user membandingkan produk');

        $head = [
            'css' => 'compare',
            'title' => 'Comparison'
        ];

        $footer = [
            'footer' => true
        ];
        $this->load->view('layout/header', $head);
        $this->load->view('layout/menu');
        $this->load->view('comparison');
        $this->load->view('layout/footer', $footer);
    }
}
