<?php

class Eduex_model extends CI_Model {

    public function get_univ_name() {
        $this->load->database();
        $query = $this->db->query('SELECT nama FROM universitas ORDER BY nama');
        return $query->result();
    }
}