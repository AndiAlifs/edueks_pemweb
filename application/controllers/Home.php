<?php

class Home extends CI_Controller {
    public function index() {
        $this->load->helper('url');
        $this->load->view('home');
    }
    public function univ() {
        $this->load->helper('url');
        $this->load->view('review_univ');
    }
    public function jurusan() {
        $this->load->helper('url');
        $this->load->view('review_jurusan');
    }
}