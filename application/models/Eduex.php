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
        $query = $this->db->query('SELECT id,link_photo,nama,alamat,penjelasan FROM universitas ORDER BY nama');
        return $query->result();
    }
    public function get_univ1($id) {
        $query = $this->db->query("SELECT id,link_photo,nama,alamat,penjelasan FROM universitas WHERE id = '$id'");
        return $query->result();
    }
    public function get_jurusan_name() {
        $query = $this->db->query('SELECT id,nama FROM jurusan ORDER BY nama');
        return $query->result();
    }
    public function get_jurusan() {
        $query = $this->db->query('SELECT id,foto,nama,penjelasan FROM jurusan ORDER BY nama');
        return $query->result();
    }
    public function get_jurusan1($id) {
        $query = $this->db->query("SELECT id,foto,nama,penjelasan FROM jurusan WHERE id = '$id'");
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
    public function get_pengguna($email) {
        $query = $this->db->query("SELECT * FROM pengguna WHERE email = '$email'");
        return $query->result();
    }
    public function get_review_univ_profil($email) {
        $query = $this->db->query("SELECT review FROM review_universitas WHERE email = '$email'");
        return $query->result();
    }
    public function get_review_jurusan_profil($email) {
        $query = $this->db->query("SELECT review FROM review_jurusan WHERE email = '$email'");
        return $query->result();
    }
    public function insert_review_univ($email, $univ, $review) {
        $query = $this->db->query("INSERT INTO review_universitas (email, universitas, review) VALUES ('$email', '$univ', '$review')");
    }
    public function update_review_univ($email, $review) {
        $query = $this->db->query("UPDATE review_universitas SET review = '$review' WHERE email = '$email'");
    }
    public function insert_review_jurusan($email, $jurusan, $review) {
        $query = $this->db->query("INSERT INTO review_jurusan (email, jurusan, review) VALUES ('$email', '$jurusan', '$review')");
    }
    public function update_review_jurusan($email, $review) {
        $query = $this->db->query("UPDATE review_jurusan SET review = '$review' WHERE email = '$email'");
    }
    public function delete_review_univ($email) {
        $query = $this->db->query("DELETE FROM review_universitas WHERE email = '$email'");
    }
    public function delete_review_jurusan($email) {
        $query = $this->db->query("DELETE FROM review_jurusan WHERE email = '$email'");
    }
    public function get_review_univ($univ) {
        $query = $this->db->query("
        SELECT j.nama, p.angkatan, r.review 
            FROM review_universitas r
            INNER JOIN pengguna p ON r.email = p.email
            INNER JOIN jurusan j ON p.jurusan = j.id
            WHERE r.universitas = '$univ'");
        return $query->result();
    }
    public function get_review_jurusan($jurusan) {
        $query = $this->db->query("
        SELECT u.nama, p.keminatan, p.angkatan, r.review 
            FROM review_jurusan r
            INNER JOIN pengguna p ON r.email = p.email
            INNER JOIN universitas u ON p.universitas = u.id
            WHERE r.jurusan = '$jurusan'");
        return $query->result();
    }
}