<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config = array(
    'login' => array(
        array(
            'field' => 'username',
            'label' => 'Username / Email',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required'
        )
    ),
    'signup' => array(
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'trim|required|max_length[50]|is_unique[user.email]',
            'errors' => array(
                'is_unique' => 'Email sudah digunakan, silahkan gunakan email lain.',
            ),
        ),
        array(
            'field' => 'username',
            'label' => 'Username',
            'rules' => 'trim|required|max_length[30]|is_unique[user.username]',
            'errors' => array(
                'is_unique' => 'Username sudah digunakan, silahkan gunakan username lain.',
            ),
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'trim|required|min_length[8]'
        )
    ),
    'simpan-artikel' => array(
        array(
            'field' => 'nama',
            'label' => 'Nama Artikel',
            'rules' => 'trim|required|max_length[50]'
        ),
        array(
            'field' => 'jenis[]',
            'label' => 'Jenis Kulit',
            'rules' => 'trim|required|numeric',
            'errors' => array(
                'numeric' => 'Jenis kulit tidak ditemukan',
            ),
        ),
        array(
            'field' => 'warna[]',
            'label' => 'Warna Kulit',
            'rules' => 'trim|required|numeric',
            'errors' => array(
                'numeric' => 'Warna kulit tidak ditemukan',
            ),
        ),
        array(
            'field' => 'kondisi[]',
            'label' => 'Kondisi Kulit',
            'rules' => 'trim|required|numeric',
            'errors' => array(
                'numeric' => 'Kondisi kulit tidak ditemukan',
            ),
        ),
        array(
            'field' => 'konten',
            'label' => 'Konten Artikel',
            'rules' => 'trim|required'
        )
    )
);

$config['error_prefix'] = '<p class="mb-0">';
$config['error_suffix'] = '</p>';
