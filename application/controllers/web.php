<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
        {

            $this->load->view('v_BukuTamu');
        }
    }
    public function about()
    {
        $data['judul'] = "Halaman About";
        $this->load->view('v_header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('v_footer', $data);
    }
    public function BukuTamu()
    {
        $data['judul'] = "Halaman About";
        $this->load->view('v_header', $data);
        $this->load->view('v_BukuTamu', $data);
        $this->load->view('v_footer', $data);
    }
    public function cetak(){
        $data = [
    'nama' => $this->input->post('nama'),
    'email' => $this->input->post('email'),
    'komentar' => $this->input->post('komentar'),
        ];
    $this->load->view('v_header', $data);
    $this->load->view('v_datatamu', $data);
    $this->load->view('v_footer', $data);
    }
}  