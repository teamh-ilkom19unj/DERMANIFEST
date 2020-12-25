<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->session->userdata('username') != null) {
            $this->session->set_flashdata('status', $this->session->flashdata('status'));
            $this->session->set_flashdata('msg', $this->session->flashdata('msg'));
            redirect(base_url('home'));
        }
        $head = [
            'css' => 'landing',
            'title' => 'Dermanifest'
        ];

        $footer = [
            'footer' => true
        ];

        $landing = [
            'isLogin' => false
        ];
        $this->load->view('layout/header', $head);
        $this->load->view('layout/menu');
        $this->load->view('landing', $landing);
        $this->load->view('layout/footer', $footer);
    }

    /**
     * Index page for login activity
     * @var string $login_btn State of sign in button was clicked.
     * @return void
     */
    public function login()
    {
        if ($this->session->userdata('username') != null) {
            $this->session->set_flashdata('status', $this->session->flashdata('status'));
            $this->session->set_flashdata('msg', $this->session->flashdata('msg'));
            redirect(base_url('home'));
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
                $user = $this->User_model->getUser($username);
                if ($user != null) {
                    if (password_verify($password, $user->password)) {
                        $this->session->set_userdata('id', $this->my_encrypt->encrypt($user->id));
                        $this->session->set_userdata('username', $username);
                        $this->session->set_userdata('nama', $user->nama);
                        $this->session->set_userdata('email', $user->email);
                        $this->session->set_userdata('alamat', $user->alamat);
                        $this->session->set_userdata('nomorTelepon', $user->nomorTelepon);
                        Log_helper('login', 'user log in ke akun dermanifest');
                        if ($this->input->get('redirect'))
                            redirect($this->input->get('redirect'));
                        else
                            redirect(base_url('home'));
                    } else {
                        $errorMsg['errorMsg'] = 'The username and password you entered did not match our records. Please double-check and try again.';
                    }
                } else {
                    $errorMsg['errorMsg'] = 'The username and password you entered did not match our records. Please double-check and try again.';
                }
            }
            $errorMsg['role'] = 'login';
        }

        $signup_btn = $this->input->post('sign-up-btn') == 'Sign Up';
        if ($signup_btn) {
            if ($this->fv->run('signup')) {
                $data = $this->input->post();
                $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
                unset($data['sign-up-btn']);
                $user = $this->User_model->addUser($data);
                if ($user) {
                    $this->session->set_flashdata('success', 'Berhasil melakukan pendaftaran. Silahkan login.');
                    redirect();
                } else {
                    $errorMsg['errorMsg'] = 'Gagal melakukan pendaftaran. Silahkan coba lagi.';
                }
            }
        }

        $head = [
            'css' => 'login',
            'title' => 'Dermanifest - Log In atau Daftar'
        ];

        $footer = [
            'footer' => false
        ];
        $this->load->view('layout/header', $head);
        $this->load->view('login', $errorMsg);
        $this->load->view('layout/footer', $footer);
    }

    public function logout()
    {
        Log_helper('logout', 'user log out dari akun dermanifest');
        session_destroy();
        redirect(base_url());
    }
}
