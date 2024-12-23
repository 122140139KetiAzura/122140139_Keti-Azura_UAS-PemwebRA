<?php

class Home extends Controller {
    public function __construct() {
        session_start();
        $this->checkSession();
    }

    private function checkSession() {
        if (!isset($_SESSION['id_user'])) {
            echo "<script>
                    alert('Anda harus login terlebih dahulu!');
                    window.location.href = '" . BASEURL . "/login';
                  </script>";
            exit;
        }
    }

    public function index() {
        $data['judul'] = 'Home';
        $id_user = $_SESSION['id_user'];
        $data['id_user'] = $id_user;
        $data['user'] = $this->model('UserModels')->getAllUser();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function sending() {
        $id_user = $_SESSION['id_user'];
        $data['judul'] = 'Daftar Laporan';
        $data['laporan'] = $this->model('UserModels')->getReportByIdWithoutBalasan($id_user);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('home/dikirim', $data);
        $this->view('templates/footer');
    }

    public function finish() {
        $id_user = $_SESSION['id_user'];
        $data['judul'] = 'Hasil Laporan';
        $data['laporan'] = $this->model('UserModels')->getReportByIdWithBalasan($id_user);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('home/selesai', $data);
        $this->view('templates/footer');
    }
}