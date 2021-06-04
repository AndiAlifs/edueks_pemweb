<?php

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Eduex');
        session_start();
    }
    public function index($cek) {
        $data['email'] = $this->input->post('email');
        $data['cek'] = $cek;
        $this->load->view('home', $data);
    }
    public function univ($cek) {
        $data['universitas'] = $this->Eduex->get_univ();
        $data['cek'] = $cek;
        $this->load->view('univ', $data);
    }
    public function jurusan($cek) {
        $data['jurusan'] = $this->Eduex->get_jurusan();
        $data['cek'] = $cek;
        $this->load->view('jurusan', $data);
    }
    public function profil($cek) {
        $data['cek'] = $cek;
        $email = $_SESSION['email'];
        $data['profil'] = $this->Eduex->get_profil($email);
        $data['profil'] = $data['profil'][0];
        $this->load->view('profil', $data);
    }
    public function login() {
        $this->load->view('login');
    }
    public function login_process() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $row =  $this->Eduex->login($email, $password);
        $cek = $this->input->post('cek');
        $_SESSION['email'] = $email;
        if($row) {
            redirect("home/index/" . $cek);
        } else {
            $this->load->view('login');
        }
    }
    public function register() {
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
        $this->Eduex->register($email, $universitas, $jurusan, $password, $nama, $keminatan, $angkatan);
        redirect('home/login');
    }
}