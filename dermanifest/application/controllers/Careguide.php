<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Careguide extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('id') == null)
        //     redirect('login');
        $this->load->model('Artikel_model');
    }

    public function index()
    {
        Log_helper('care guide', 'user masuk ke halaman care guide');

        $head = [
            'css' => 'care-guide',
            'title' => 'Care Guide'
        ];

        $footer = [
            'footer' => true
        ];
        $data['artikel'] = $this->Artikel_model->getArtikel();
        $this->load->view('layout/header', $head);
        $this->load->view('layout/menu');
        $this->load->view('care_guide/index', $data);
        $this->load->view('layout/footer', $footer);
    }

    public function skintone()
    {
        Log_helper('onboarding', 'user masuk ke halaman onboarding');

        $head = [
            'css' => 'care-guide',
            'title' => 'Warna Kulit'
        ];

        $footer = [
            'footer' => true
        ];

        $this->load->model('Kulit_model');
        $data['warna'] = $this->Kulit_model->getWarna();
        $this->load->view('layout/header', $head);
        $this->load->view('layout/menu');
        $this->load->view('care_guide/warna_kulit', $data);
        $this->load->view('layout/footer', $footer);
    }

    public function skin()
    {
        $head = [
            'css' => 'jeniskulit',
            'title' => 'Jenis Kulit'
        ];

        $footer = [
            'footer' => true
        ];
        $get = $this->input->get();
        $data['get'] = $get;
        $this->load->model('Kulit_model');
        $data['jenis'] = $this->Kulit_model->getJenis();
        $this->load->view('layout/header', $head);
        $this->load->view('layout/menu');
        $this->load->view('care_guide/jenis_kulit', $data);
        $this->load->view('layout/footer', $footer);
    }

    public function skincondition()
    {
        $head = [
            'css' => 'care-guide',
            'title' => 'Kondisi Kulit'
        ];

        $footer = [
            'footer' => true
        ];
        $get = $this->input->get();
        $str = '';
        $x = 1;
        $count = count($get);
        if ($count != null)
            foreach ($get as $key => $value) {
                if ($x != 1) {
                    if ($count == $x)
                        $str .= '&' . $key . '=' . $value;
                    else
                        $str .= '&' . $key . '=' . $value . '&';
                } else {
                    $str .= $key . '=' . $value;
                }
                $x++;
            }
        $data['link'] = $str;
        $data['get'] = $get;
        $this->load->model('Kulit_model');
        $data['kondisi'] = $this->Kulit_model->getKondisi();
        $this->load->view('layout/header', $head);
        $this->load->view('layout/menu');
        $this->load->view('care_guide/kondisi_kulit', $data);
        $this->load->view('layout/footer', $footer);
    }

    public function result()
    {
        Log_helper('result', 'user masuk mengecek hasil onboarding');

        $head = [
            'css' => 'care-guide',
            'title' => 'Hasil Artikel'
        ];

        $footer = [
            'footer' => true
        ];
        $get = $this->input->get();
        foreach ($get as $key => $value) {
            if ($key != 'kondisi') {
                $get[$key] = $this->my_encrypt->decrypt($value);
            } else {
                foreach ($value as $k => $v) {
                    $get[$key][$k] = $this->my_encrypt->decrypt($v);
                }
            }
        }
        $this->load->model('Artikel_model');
        $data['search'] = $this->Artikel_model->search($get);
        $this->load->view('layout/header', $head);
        $this->load->view('layout/menu');
        $this->load->view('care_guide/hasil', $data);
        $this->load->view('layout/footer', $footer);
    }
}
