<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('admin-username') != null) {
            $this->session->set_flashdata('status', $this->session->flashdata('status'));
            $this->session->set_flashdata('msg', $this->session->flashdata('msg'));
            redirect(base_url('admin/dashboard'));
        }
        if (in_array($this->input->get('q'), ['signup', 'login']))
            $errorMsg['role'] = $this->input->get('q');
        else
            $errorMsg['role'] = 'signup';
        $errorMsg['errorMsg'] = !empty($this->session->flashdata('msg')) ? $this->session->flashdata('msg') : '';
        $errorMsg['successMsg'] = !empty($this->session->flashdata('success')) ? $this->session->flashdata('success') : '';

        $login_btn = $this->input->post('login-btn') == 'Log In';
        if ($login_btn) {
            if ($this->fv->run('login')) {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $this->load->model('Admin_model');
                $user = $this->Admin_model->getUser($username);
                if ($user != null) {
                    if (password_verify($password, $user->password)) {
                        $this->session->set_userdata('admin-id', $this->my_encrypt->encrypt($user->id));
                        $this->session->set_userdata('admin-username', $username);
                        $this->session->set_userdata('admin-nama', $user->nama);
                        $this->session->set_userdata('admin-email', $user->email);
                        if ($this->input->get('redirect'))
                            redirect($this->input->get('redirect'));
                        else
                            redirect(base_url('admin/dashboard'));
                    } else {
                        $errorMsg['errorMsg'] = 'The username and password you entered did not match our records. Please double-check and try again.';
                    }
                } else {
                    $errorMsg['errorMsg'] = 'The username and password you entered did not match our records. Please double-check and try again.';
                }
            }
            $errorMsg['role'] = 'login';
        }

        $head = [
            'css' => 'login',
            'title' => 'Dermanifest - Admin Log In'
        ];

        $footer = [
            'footer' => false
        ];
        $this->load->view('layout/header', $head);
        $this->load->view('login', $errorMsg);
        $this->load->view('layout/footer', $footer);
    }
    public function dashboard()
    {
        if ($this->session->userdata('admin-username') == null) {
            redirect(base_url());
        }
        $head = [
            'css' => 'login',
            'title' => 'Dermanifest - Admin Log In'
        ];

        $footer = [
            'footer' => false
        ];

        $this->load->model('Kulit_model');
        $data['warnaKulit'] = $this->Kulit_model->getWarna();
        $data['jenisKulit'] = $this->Kulit_model->getJenis();
        $data['kondisiKulit'] = $this->Kulit_model->getKondisi();

        $this->load->view('layout/header', $head);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('layout/footer', $footer);
    }

    public function simpanArtikel()
    {
        if ($this->input->post('simpan-btn') != 'simpan')
            redirect(base_url());

        if ($this->fv->run('simpan-artikel')) {
            $data = $this->input->post();
            unset($data['simpan-btn']);
            unset($data['files']);
            if (isset($_FILES["banner"]["name"])) {
                $this->load->library('upload');
                $config['upload_path'] = './assets/images/coverartikel/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['file_name'] = str_replace('/', ' ', $data['nama']);
                $config['max_size'] = 1024 * 10; //10MB
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('banner')) {
                    $this->session->set_flashdata('status', 'gagal');
                    $this->session->set_flashdata('msg', 'Gagal mengunggah foto cover');
                    redirect(base_url('admin/dashboard'));
                }
                $cover = $this->upload->data();
                $data['banner'] = $cover['file_name'];
                $this->load->model('Artikel_model');
                if ($this->Artikel_model->tambah($data)) {
                    $this->session->set_flashdata('status', 'success');
                    $this->session->set_flashdata('msg', 'Berhasil menambahkan artikel');
                } else {
                    $this->session->set_flashdata('status', 'gagal');
                    $this->session->set_flashdata('msg', 'Gagal menambahkan artikel');
                    unlink('.assets/images/coverartikel' . $cover['file_name']);
                }
            } else {
                $this->session->set_flashdata('status', 'gagal');
                $this->session->set_flashdata('msg', 'Cover foto tidak ditemukan');
            }
        } else {
            $this->session->set_flashdata('status', 'gagal');
            $this->session->set_flashdata('msg', validation_errors());
            var_dump(validation_errors());
        }
        redirect(base_url('admin/dashboard'));
    }

    function uploadImage()
    {
        if (isset($_FILES["image"]["name"])) {
            $this->load->library('upload');
            $config['upload_path'] = './assets/images/artikel';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                $this->upload->display_errors();
                return FALSE;
            } else {
                $data = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/artikel/' . $data['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['quality'] = '60%';
                $config['width'] = 800;
                $config['height'] = 800;
                $config['new_image'] = './assets/images/artikel/' . $data['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                echo base_url() . 'assets/images/artikel/' . $data['file_name'];
            }
        }
    }

    //Delete image summernote
    function deleteImage()
    {
        $src = $this->input->post('src');
        $file_name = str_replace(base_url(), '', $src);
        if (unlink($file_name)) {
            echo 'File Delete Successfully';
        }
    }
}
