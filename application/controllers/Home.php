<?php

class Home extends CI_Controller {
    public function index() {
        $this->load->view('home');
    }
    public function univ() {
        $this->load->view('review_univ');
    }
}