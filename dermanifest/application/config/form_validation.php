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
    'simpan-feedback' => array(
        array(
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'trim|required|max_length[50]',
            'errors' => array(
                'in_list' => 'Jawaban pertanyaan ke-1 tidak sesuai',
            ),
        ),
        array(
            'field' => 'jwb_1',
            'label' => 'Jawaban Pertanyaan Ke-1',
            'rules' => 'trim|required|in_list[1,2,3,4,5]',
            'errors' => array(
                'in_list' => 'Jawaban pertanyaan ke-1 tidak sesuai',
            ),
        ),
        array(
            'field' => 'jwb_2',
            'label' => 'Jawaban Pertanyaan Ke-2',
            'rules' => 'trim|required|in_list[1,2,3,4,5]',
            'errors' => array(
                'in_list' => 'Jawaban pertanyaan ke-2 tidak sesuai',
            ),
        ),
        array(
            'field' => 'jwb_3',
            'label' => 'Jawaban Pertanyaan Ke-3',
            'rules' => 'trim|required|in_list[1,2,3,4,5]',
            'errors' => array(
                'in_list' => 'Jawaban pertanyaan ke-3 tidak sesuai',
            ),
        ),
        array(
            'field' => 'jwb_4',
            'label' => 'Jawaban Pertanyaan Ke-4',
            'rules' => 'trim|required|in_list[1,2,3,4,5]',
            'errors' => array(
                'in_list' => 'Jawaban pertanyaan ke-4 tidak sesuai',
            ),
        ),
        array(
            'field' => 'jwb_5',
            'label' => 'Jawaban Pertanyaan Ke-5',
            'rules' => 'trim|required|in_list[1,2,3,4,5]',
            'errors' => array(
                'in_list' => 'Jawaban pertanyaan ke-5 tidak sesuai',
            ),
        ),
    )
);

$config['error_prefix'] = '<p class="mb-0">';
$config['error_suffix'] = '</p>';
