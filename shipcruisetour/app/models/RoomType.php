<?php
  class RoomType {
    private $db;
    
    public function __construct(){
      $this->db = new Database;
    } 

          // Get All Posts 
    public function getRoomTypes(){
      $this->db->query("SELECT * FROM roomtypes");

      $results = $this->db->resultset();

      return $results;
    }

    public function getRoomTypeNameById($id){
      $this->db->query('SELECT type FROM roomtypes WHERE id = :id');

      $this->db->bind(':id', $id);
      
      $row = $this->db->single();

      return $row;
    }

    // Get Post By ID
    public function getRoomTypeById($id){
      $this->db->query('SELECT * FROM roomtypes WHERE id = :id');

      $this->db->bind(':id', $id);
      
      $row = $this->db->single();

      return $row;
    }

   // Add Room Type
   public function addRoomType($data){
    $this->db->query('INSERT INTO `roomtypes`(`prix`, `capacite`, `type`) VALUES (:prix, :capacite, :type)');
    
    $this->db->bind(':prix', $data['prix'] );
    $this->db->bind(':capacite', $data['capacite']);
    $this->db->bind(':type', $data['type']);


    //Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }

  }

    // Update Post
    public function updateRoomType($data){
        $sql = 'UPDATE roomtypes SET prix = :prix, capacite = :capacite, type = :type  WHERE id = :id ';
      $this->db->query($sql);
      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':prix', $data['prix']);
      $this->db->bind(':capacite', $data['capacite']);
      $this->db->bind(':type', $data['type']);     
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
    


    // Delete Post
    public function deleteRoomType($id){
      // Prepare Query
      $this->db->query('DELETE FROM roomtypes WHERE id = :id');

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