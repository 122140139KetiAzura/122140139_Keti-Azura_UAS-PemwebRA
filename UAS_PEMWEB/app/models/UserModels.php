<?php

require_once '../app/core/Database.php';

class UserModels
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserByEmail($email)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email=:email');
        $this->db->bind('email', $email);
        return $this->db->single();
    }

    public function register($data)
    {
        $this->db->query('INSERT INTO ' . $this->table . ' (name, email, password) VALUES(:name, :email, :password)');
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getAllReportWithoutBalasan() {
        $this->db->query('SELECT * FROM laporan WHERE balasan IS NULL');
        return $this->db->resultSet();
    }

    public function getAllReportWithBalasan() {
        $this->db->query('SELECT * FROM laporan WHERE balasan IS NOT NULL');
        return $this->db->resultSet();
    }
    
    public function addReport($data) {
        $query = "INSERT INTO laporan (id_user, waktu, judul, deskripsi, status_laporan, kategori) VALUES (:id_user, NOW(), :judul, :deskripsi, 'dikirim', :kategori)";
        $this->db->query($query);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getReportById($id)
    {
        $this->db->query('SELECT * FROM laporan WHERE id_laporan=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getReportByIdWithoutBalasan($id_user) {
        $this->db->query('SELECT * FROM laporan WHERE id_user=:id_user AND balasan IS NULL');
        $this->db->bind('id_user', $id_user);
        return $this->db->single();
    }

    public function getReportByIdWithBalasan($id_user) {
        $this->db->query('SELECT * FROM laporan WHERE id_user=:id_user AND balasan IS NOT NULL');
        $this->db->bind('id_user', $id_user);
        return $this->db->single();
    }

    public function updateReport($data) {
        $query = "UPDATE laporan SET balasan = :balasan WHERE id_laporan = :id_laporan";
        $this->db->query($query);
        $this->db->bind('balasan', $data['balasan']);
        $this->db->bind('id_laporan', $data['id_laporan']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function addUser($data) {
        $query = "INSERT INTO user (username, email, password, role) VALUES (:username, :email, :password, 'user')";
        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}