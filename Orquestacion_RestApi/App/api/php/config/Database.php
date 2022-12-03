<?php 
  class Database {
    // Parametros de la DB
    private $host = 'db';
    private $db_name = 'isc';
    private $username = 'root';
    private $password = 'test';
    private $conn;

    // Coneccion a la DB
    public function connect() {
      $this->conn = null;

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }

      return $this->conn;
    }
  }