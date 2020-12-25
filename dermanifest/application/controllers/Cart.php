<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('id') == null)
        //     redirect('login');
    }

    public function index()
    {
        Log_helper('cart', 'user masuk ke halaman cart');

        $head = [
            'css' => 'cart',
            'title' => 'Cart'
        ];

        $footer = [
            'footer' => true
        ];
        $this->load->view('layout/header', $head);
        $this->load->view('layout/menu');
        $this->load->view('cart');
        $this->load->view('layout/footer', $footer);
    }

    public function checkout()
    {
        if ($this->session->userdata('id') == null)
            redirect('login?q=login&redirect=' . base_url() . 'cart/checkout');
        $head = [
            'css' => 'checkout',
            'title' => 'Checkout'
        ];

        $footer = [
            'footer' => false
        ];
        $this->load->view('layout/header', $head);
        $this->load->view('checkout');
        $this->load->view('layout/footer', $footer);
    }

    public function checkoutsummary()
    {
        if ($this->session->userdata('id') == null)
            redirect('login?q=login&redirect=' . base_url() . 'cart/checkoutsummary');
        $head = [
            'css' => 'checkout_summary',
            'title' => 'Checkout Summary'
        ];

        $footer = [
            'footer' => false
        ];
        $this->load->view('layout/header', $head);
        $this->load->view('checkout_summary');
        $this->load->view('layout/footer', $footer);
    }
}
