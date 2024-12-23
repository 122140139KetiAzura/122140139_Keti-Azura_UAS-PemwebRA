<?php

class HomeAdmin extends Controller {
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
        $data['judul'] = 'Homepage Admin';
        $data['laporan'] = $this->model('UserModels')->getAllReportWithBalasan();
        $this->view('templates/header', $data);
        $this->view('templates/sidebarAdmin');
        $this->view('homeAdmin/index', $data);
        $this->view('templates/footer');
    }

    public function selesai() {
        $data['judul'] = 'Report Selesai';
        $data['laporan'] = $this->model('UserModels')->getAllReportWithoutBalasan();
        $this->view('templates/header', $data);
        $this->view('templates/sidebarAdmin');
        $this->view('homeAdmin/selesai', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['laporan'] = $this->model('UserModels')->getReportById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebarAdmin');
        $this->view('homeAdmin/detail', $data);
        $this->view('templates/footer');
    }

    public function update() {
        session_start(); 
        if (isset($_SESSION['id_user'])) {
            $_POST['id_user'] = $_SESSION['id_user'];
        } else {
            echo "<script>
                    alert('Anda harus login terlebih dahulu!');
                    window.location.href = '" . BASEURL . "/login';
                  </script>";
            exit;
        }

        if ($this->model('UserModels')->updateReport($_POST) > 0) {
            echo "<script>
                    alert('Report berhasil diupdate!');
                    window.location.href = '" . BASEURL . "/HomeAdmin';
                  </script>";
        } else {
            echo "<script>
                    alert('Report gagal diupdate!');
                    window.location.href = '" . BASEURL . "/HomeAdmin';
                  </script>";
        }
    }

    
}