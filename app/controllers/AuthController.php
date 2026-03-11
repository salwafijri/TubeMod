<?php

class AuthController extends Controller {

    public function login() {

        if (isset($_POST['login'])) {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }

            $_SESSION['user'] = "admin";

            header("Location: " . BASEURL . "/home");
            exit;
        }

        $this->view('login');
    }

    public function logout()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION = [];
        session_unset();
        session_destroy();
        setcookie(session_name(), '', time() - 3600, '/');

        header("Location: " . BASEURL . "/home");
        exit;
    }
}