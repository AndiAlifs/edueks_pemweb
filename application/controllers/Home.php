<?php

class Home extends CI_Controller {
    public function index() {
        $this->load->helper('url');
        $this->load->view('home');
    }
    public function univ() {
        $this->load->helper('url');
        $this->load->view('univ');
    }
    public function jurusan() {
        $this->load->helper('url');
        $this->load->view('jurusan');
    }
    public function login() {
        $this->load->helper('url');
        $this->load->view('login');
    }
    public function login_process() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->model('Eduex');
        $row =  $this->Eduex->login($email, $password);
        $this->load->helper('url');
        if($row) {
            $this->load->view('home');
        } else {
            $this->load->view('login');
        }
    }
    public function register() {
        $this->load->helper('url');
        $this->load->model('Eduex');
        $nama_univ = $this->Eduex->get_univ_name();
        $nama_jurusan = $this->Eduex->get_jurusan_name();
        $data['nama_univ'] = $nama_univ;
        $data['nama_jurusan'] = $nama_jurusan;
        $this->load->view('register', $data);
    }
    public function register_process() {
        $email = $this->input->post('email');
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');
        $universitas = $this->input->post('universitas');
        $jurusan = $this->input->post('jurusan');
        $angkatan = $this->input->post('angkatan');
        $keminatan = $this->input->post('keminatan');
        $this->load->model('Eduex');
        $this->Eduex->register($email, $universitas, $jurusan, $password, $nama, $keminatan, $angkatan);
        $this->load->helper('url');
        redirect('home/login');
    }
}