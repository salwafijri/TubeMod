<?php

class KeywordController extends Controller {

    public function index() {

        if (!isset($_SESSION['user'])) {
            header("Location: ../AuthController/login");
            exit;
        }

        $model = $this->model('KeywordModel');

        if (isset($_POST['add'])) {
            $model->insert($_POST['word'], $_POST['category']);
        }

        if (isset($_GET['delete'])) {
            $model->delete($_GET['delete']);
        }

        if (isset($_POST['update'])) {
            $model->update($_POST['id'], $_POST['word'], $_POST['category']);
        }

        $result = $model->getAll();

        $this->view('keywords', ['result'=>$result]);
    }
}