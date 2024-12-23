<?php

class Katalog extends Controller {
    public function index() {
        $data['judul'] = 'Katalog';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('katalog/index');
        $this->view('templates/footer');
    }
}