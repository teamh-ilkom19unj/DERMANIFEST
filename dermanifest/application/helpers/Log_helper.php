<?php
defined('BASEPATH') or exit('No direct script access allowed');

function Log_helper($activity, $description)
{
    $CI = &get_instance();
    if ($CI->session->userdata('id') != null) {
        $data['idUser'] = $CI->my_encrypt->decrypt($CI->session->userdata('id'));
        $data['activity'] = $activity;
        $data['description'] = $description;

        $CI->load->model('Log_model');
        $CI->Log_model->save($data);
    }
}
