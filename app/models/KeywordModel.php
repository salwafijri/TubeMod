<?php

require_once '../app/config/database.php';

class KeywordModel {

    private $conn;

    public function __construct() {
        $this->conn = getConnection();
    }

    public function getAll() {
        return $this->conn->query("SELECT * FROM keywords ORDER BY id DESC");
    }

    public function insert($word, $category) {
        $stmt = $this->conn->prepare("INSERT INTO keywords (word, category) VALUES (?, ?)");
        $stmt->bind_param("ss", $word, $category);
        $stmt->execute();
    }

    public function delete($id) {
        $this->conn->query("DELETE FROM keywords WHERE id=$id");
    }

    public function update($id, $word, $category) {
        $stmt = $this->conn->prepare("UPDATE keywords SET word=?, category=? WHERE id=?");
        $stmt->bind_param("ssi", $word, $category, $id);
        $stmt->execute();
    }
}