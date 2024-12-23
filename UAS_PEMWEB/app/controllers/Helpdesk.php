<?php

class Helpdesk extends Controller {
    
    public function index()
    {
        $id_user = $_SESSION['id_user'];
        $data['id_user'] = $id_user;
        $data['judul'] = 'Helpdesk';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar');
        $this->view('helpdesk/index');
        $this->view('templates/footer');
    }

    public function tambah() {
        if (isset($_SESSION['id_user'])) {
            $_POST['id_user'] = $_SESSION['id_user'];
        } else {
            echo "<script>
                    alert('Anda harus login terlebih dahulu!');
                    window.location.href = '" . BASEURL . "/login';
                  </script>";
            exit;
        }

        if ($this->model('UserModels')->addReport($_POST) > 0) {
            echo "<script>
                    alert('Report berhasil dikirim!');
                    window.location.href = '" . BASEURL . "/helpdesk';
                  </script>";
        } else {
            echo "<script>
                    alert('Report gagal dikirim!');
                    window.location.href = '" . BASEURL . "/helpdesk';
                  </script>";
        }
    }
}