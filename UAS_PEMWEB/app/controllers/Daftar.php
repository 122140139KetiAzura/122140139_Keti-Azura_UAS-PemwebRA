<?php

class Daftar extends Controller {
    public function index() {
        $data['judul'] = 'Daftar Akun';
        $this->view('templates/header', $data);
        $this->view('daftar/index');
        $this->view('templates/footer');
    }

    public function tambah() {
        if ($this->model('UserModels')->addUser($_POST) > 0) {
            echo "<script>
                    alert('Berhasil mendaftar!');
                    window.location.href = '" . BASEURL . "/login';
                  </script>";
        } else {
            echo "<script>
                    alert('Gagal mendaftar!');
                    window.location.href = '" . BASEURL . "/daftar';
                  </script>";
        }
    }
}