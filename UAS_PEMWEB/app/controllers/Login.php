<?php

class Login extends Controller {
    public function index() {
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }

    public function masuk() {
        session_start();
        $user = $this->model('UserModels')->getUserByEmail($_POST['email']);
        if ($user) {
            if ($_POST['password'] === $user['password']) {
                $_SESSION['id_user'] = $user['id_user'];
                $_SESSION['user'] = $user;
                echo "<script>
                        localStorage.setItem('id_user', " . $user['id_user'] . ");
                        localStorage.setItem('username', '" . $user['username'] . "');
                        localStorage.setItem('email', '" . $user['email'] . "');
                        localStorage.setItem('role', '" . $user['role'] . "');
                        if ('" . $user['role'] . "' === 'user') {
                            window.location.href = '" . BASEURL . "/home';
                        } else if ('" . $user['role'] . "' === 'admin') {
                            window.location.href = '" . BASEURL . "/homeAdmin';
                        }
                      </script>";
                exit;
            } else {
                echo "<script>
                        alert('Password salah!');
                        window.location.href = '" . BASEURL . "/login';
                      </script>";
            }
        } else {
            echo "<script>
                    alert('Email tidak terdaftar!');
                    window.location.href = '" . BASEURL . "/login';
                  </script>";
        }
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        echo "<script>
                localStorage.removeItem('user_id');
                localStorage.removeItem('username');
                localStorage.removeItem('email');
                localStorage.removeItem('role');
                window.location.href = '" . BASEURL . "/login';
              </script>";
    }
}