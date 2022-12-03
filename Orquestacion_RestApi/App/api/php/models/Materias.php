<?php 
  class Materias {
    // DB stuff
    private $conn;
    private $table = 'materias';

    // Propiedades de la reticula
    public $clave;
    public $materia;
    public $semestre;
    public $creditos;

    // Constructor de la DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Materias
    public function read() {
      // Create query
      $query = 'SELECT *  FROM ' . $this->table;
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }

    // Create Post
    public function create() {
          // Create query
          $query = 'INSERT INTO ' . $this->table . ' SET clave = :clave, materia = :materia, semestre = :semestre, creditos = :creditos';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->clave = htmlspecialchars(strip_tags($this->clave));
          $this->materia = htmlspecialchars(strip_tags($this->materia));
          $this->semestre = htmlspecialchars(strip_tags($this->semestre));
          $this->creditos = htmlspecialchars(strip_tags($this->creditos));

          // Bind data
          $stmt->bindParam(':clave', $this->clave);
          $stmt->bindParam(':materia', $this->materia);
          $stmt->bindParam(':semestre', $this->semestre);
          $stmt->bindParam(':creditos', $this->creditos);  

          // Execute query
          if($stmt->execute()) {
            return true;
          }

      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
    }

    // Update Post
    public function update() {
          // Create query
          $query = 'UPDATE ' . $this->table . '
                                SET materia = :materia, semestre = :semestre, creditos = :creditos
                                WHERE clave = :clave';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->materia = htmlspecialchars(strip_tags($this->materia));
          $this->semestre = htmlspecialchars(strip_tags($this->semestre));
          $this->creditos = htmlspecialchars(strip_tags($this->creditos));
          $this->clave = htmlspecialchars(strip_tags($this->clave));

          // Bind data
          $stmt->bindValue(':materia', $this->materia);
          $stmt->bindValue(':semestre', $this->semestre);
          $stmt->bindValue(':creditos', $this->creditos);
          $stmt->bindValue(':clave', $this->clave);

          // Execute query
          if($stmt->execute()) {
            return true;
          }

          // Print error if something goes wrong
          printf("Error: %s.\n", $stmt->error);

          return false;
    }

    // Delete Post
    public function delete() {
          // Create query
          $query = 'DELETE FROM ' . $this->table . ' WHERE clave = :clave';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->clave = htmlspecialchars(strip_tags($this->clave));

          // Bind data
          $stmt->bindParam(':clave', $this->clave);

          // Execute query
          if($stmt->execute()) {
            return true;
          }

          // Print error if something goes wrong
          printf("Error: %s.\n", $stmt->error);

          return false;
    }
    
  }