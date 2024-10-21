<?php


class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;

    private $dbh; //database handler
    private $stmt;
    public function  __construct() {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';
        try {
            $this->dbh = new PDO($dsn, 'root', '');
        }catch(PDOException $e) {
            die($e->getMessage());
        }
    public function __construct()
    {
        $this->db = new Database;
    }

       public function  getAllMahasiswa() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
       }
    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' Where id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
}