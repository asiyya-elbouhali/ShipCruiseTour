<?php
  class Port {
    private $db;
    
    public function __construct(){
      $this->db = new Database;
    }

    // Get All Posts 
    public function getPorts(){
      $this->db->query("SELECT * FROM ports");

      $results = $this->db->resultset();

      return $results;
    }

    public function getPortNameById($id){
      $this->db->query('SELECT nom FROM ports WHERE id = :id');

      $this->db->bind(':id', $id);
      
      $row = $this->db->single();

      return $row;
    }

    // Get Post By ID
    public function getPortById($id){
      $this->db->query('SELECT * FROM ports WHERE id = :id');

      $this->db->bind(':id', $id);
      
      $row = $this->db->single();

      return $row;
    }

    // Add Post
    public function addPort($data){
      // Prepare Query
      $this->db->query('INSERT INTO ports (nom, pays) 
      VALUES (:nom, :pays)');

      // Bind Values
      $this->db->bind(':nom', $data['nom']);
      $this->db->bind(':pays', $data['pays']);
     
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    } 

    // Update Post
    public function updatePort($data){
        $sql = 'UPDATE ports SET nom = :nom, pays = :pays WHERE id = :id ';
      $this->db->query($sql);
      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':nom', $data['nom']);
      $this->db->bind(':pays', $data['pays']);     
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
    


    // Delete Post
    public function deletePort($id){
      // Prepare Query
      $this->db->query('DELETE FROM ports WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $id);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  }