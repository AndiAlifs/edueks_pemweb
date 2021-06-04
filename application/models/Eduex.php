<?php

class Eduex extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function get_univ_name() {
        $query = $this->db->query('SELECT id,nama FROM universitas ORDER BY nama');
        return $query->result();
    }
    public function get_univ() {
        $query = $this->db->query('SELECT foto,nama,alamat,penjelasan FROM universitas ORDER BY nama');
        return $query->result();
    }
    public function get_jurusan_name() {
        $query = $this->db->query('SELECT id,nama FROM jurusan ORDER BY nama');
        return $query->result();
    }
    public function get_jurusan() {
        $query = $this->db->query('SELECT foto,nama,penjelasan FROM jurusan ORDER BY nama');
        return $query->result();
    }
    public function login($email, $password) {
        $query = $this->db->query("CALL SP_Login('$email', '$password')");
        return $query->result();
    }
    public function register($email, $universitas, $jurusan, $password, $nama, $keminatan, $angkatan) {
        if(is_null($keminatan)) {
            $query = $this->db->query("INSERT INTO pengguna VALUES ('$email', '$jurusan', '$universitas', '$password', '$nama', NULL, '$angkatan')");
        } else {
            $query = $this->db->query("INSERT INTO pengguna VALUES ('$email', '$jurusan', '$universitas', '$password', '$nama', '$keminatan', '$angkatan')");
        }
    }
    public function get_profil($email) {
        $query = $this->db->query("
        SELECT p.nama pnama, p.email, u.nama unama, j.nama jnama, p.angkatan, p.keminatan FROM pengguna p
            INNER JOIN universitas u ON p.universitas = u.id
            INNER JOIN jurusan j ON p.jurusan = j.id
         WHERE email = '$email'");
        return $query->result();
    }
}