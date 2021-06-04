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
    public function register() {
        $this->load->helper('url');
        $this->load->model('Eduex');
        $nama_univ = $this->Eduex->get_univ_name();
        $nama_jurusan = $this->Eduex->get_jurusan_name();
        $data['nama_univ'] = $nama_univ;
        $data['nama_jurusan'] = $nama_jurusan;
        $this->load->view('register', $data);
    }
}