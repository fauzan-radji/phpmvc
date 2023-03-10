<?php
class Mahasiswa
{
  private $table = 'mahasiswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAll()
  {
    $this->db->query("SELECT * FROM $this->table");
    return $this->db->resultSet();
  }

  public function find($id)
  {
    $this->db->query("SELECT * FROM $this->table WHERE id = :id");
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function insert($data)
  {
    $query = "INSERT INTO $this->table (nama, nim, email, jurusan) VALUES (:nama, :nim, :email, :jurusan)";
    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('nim', $data['nim']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);

    $this->db->execute();

    return $this->db->rowCount();
  }
}
