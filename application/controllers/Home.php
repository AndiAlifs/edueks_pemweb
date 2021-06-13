<?php

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Eduex');
        session_start();
    }
    public function index($cek=1) {
        $data['email'] = $this->input->post('email');
        $data['cek'] = $cek;
        $this->load->view('home', $data);
    }
    public function univ($cek) {
        $data['universitas'] = $this->Eduex->get_univ();
        $data['cek'] = $cek;
        $this->load->view('univ', $data);
    }
    public function review_univ($cek) {
        $id = $this->input->post('univ');
        $data['cek'] = $cek;
        $data['universitas'] = $this->Eduex->get_univ1($id);
        $data['universitas'] = $data['universitas'][0];
        $data['review'] = $this->Eduex->get_review_univ($data['universitas']->id);
        $this->load->view('review_univ', $data);
    }
    public function jurusan($cek) {
        $data['jurusan'] = $this->Eduex->get_jurusan();
        $data['cek'] = $cek;
        $this->load->view('jurusan', $data);
    }
    public function review_jurusan($cek) {
        $id = $this->input->post('jurusan');
        $data['cek'] = $cek;
        $data['jurusan'] = $this->Eduex->get_jurusan1($id);
        $data['jurusan'] = $data['jurusan'][0];
        $data['review'] = $this->Eduex->get_review_univ($data['jurusan']->id);
        $this->load->view('review_jurusan', $data);
    }
    public function profil($cek) {
        $data['cek'] = $cek;
        $email = $_SESSION['email'];
        $data['profil'] = $this->Eduex->get_profil($email);
        $data['profil'] = $data['profil'][0];
        $data['univ'] = $this->Eduex->get_review_univ_profil($email);
        $data['jurusan'] = $this->Eduex->get_review_jurusan_profil($email);
        $this->load->view('profil', $data);
    }
    public function review($cek) {
        $data['cek'] = $cek;
        $this->load->view('review', $data);
    }
    public function review_process() {
        $bentuk = $this->input->post('bentuk');
        $jenis = $this->input->post('jenis');
        $review = $this->input->post('review');
        $email = $_SESSION['email'];
        $pengguna = $this->Eduex->get_pengguna($email);
        $pengguna = $pengguna[0];
        if($jenis == "univ") {
            if($bentuk == "tambah") {
                $this->Eduex->insert_review_univ($pengguna->email, $pengguna->universitas, $review);
            } else {
                $this->Eduex->update_review_univ($pengguna->email, $review);
            }
            redirect("home/profil/1");
        } else {
            if($bentuk == "tambah") {
                $this->Eduex->insert_review_jurusan($pengguna->email, $pengguna->jurusan, $review);
            } else {
                $this->Eduex->update_review_jurusan($pengguna->email, $review);
            }
            redirect("home/profil/1");
        }
    }
    public function review_update($cek) {
        $data['cek'] = $cek;
        $email = $_SESSION['email'];
        $data['univ'] = $this->Eduex->get_review_univ_profil($email);
        $data['jurusan'] = $this->Eduex->get_review_jurusan_profil($email);
        $this->load->view('review', $data);
    }
    public function review_delete() {
        $email = $_SESSION['email'];
        $jenis = $this->input->post('review');
        if($jenis == "univ") {
            $this->Eduex->delete_review_univ($email);
        } else {
            $this->Eduex->delete_review_jurusan($email);
        }
        redirect("home/profil/1");
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