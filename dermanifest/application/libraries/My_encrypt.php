<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_encrypt
{

    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->encryption->initialize(array(
            'cipher' => 'aes-256',
            'mode' => 'ctr'
        ));
    }

    public function encrypt($string)
    {

        $encrypted = $this->CI->encryption->encrypt($string);
        $encrypted = strtr($encrypted, array('/' => '~', '=' => '.', '+' => '-'));
        return $encrypted;
    }

    public function decrypt($encrypted)
    {
        $decrypted = strtr($encrypted, array('~' => '/', '.' => '=', '-' => '+'));
        $decrypted = $this->CI->encryption->decrypt($decrypted);
        return $decrypted;
    }
}
