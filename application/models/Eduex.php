<?php

class Eduex extends CI_Model {

    public function get_univ_name() {
        $this->load->database();
        $query = $this->db->query('SELECT id,nama FROM universitas ORDER BY nama');
        return $query->result();
    }

    public function get_jurusan_name() {
        $this->load->database();
        $query = $this->db->query('SELECT id,nama FROM jurusan ORDER BY nama');
        return $query->result();
    }

    public function login($email, $password) {
        $this->load->database();
        $query = $this->db->query("CALL SP_Login('$email', '$password')");
        return $query->result();
    }

    public function register($email, $universitas, $jurusan, $password, $nama, $keminatan, $angkatan) {
        $this->load->database();
        if(is_null($keminatan)) {
            $query = $this->db->query("INSERT INTO pengguna VALUES ('$email', '$jurusan', '$universitas', '$password', '$nama', NULL, '$angkatan')");
        } else {
            $query = $this->db->query("INSERT INTO pengguna VALUES ('$email', '$jurusan', '$universitas', '$password', '$nama', '$keminatan', '$angkatan')");
        }
    }
}