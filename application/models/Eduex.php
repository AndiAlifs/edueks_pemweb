<?php

class Eduex extends CI_Model {

    public function get_univ_name() {
        $this->load->database();
        $query = $this->db->query('SELECT nama FROM universitas ORDER BY nama');
        return $query->result();
    }

    public function get_jurusan_name() {
        $this->load->database();
        $query = $this->db->query('SELECT nama FROM jurusan ORDER BY nama');
        return $query->result();
    }
}