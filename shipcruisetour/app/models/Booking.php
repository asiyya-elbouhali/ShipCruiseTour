<?php
  class Room {
    private $db;
    
    public function __construct(){
      $this->db = new Database;
    } 

    // Get All Posts 
    public function getRooms(){
      $this->db->query("SELECT rooms.*,
                        ships.nom as shipnom,
                        roomtypes.type as roomtype
                        FROM rooms
                        INNER JOIN ships
                        ON rooms.id_ship=ships.id
                        
                        INNER JOIN roomtypes
                        ON rooms.id_type=roomtypes.id");

      $results = $this->db->resultset();

      return $results;
    }



    // Get Post By ID
    public function getRoomById($id){
      $this->db->query('SELECT rooms.*,
                        ships.nom as shipnom,
                        roomtypes.type as roomtype
                        FROM rooms
                        INNER JOIN ships
                        ON rooms.id_ship=ships.id
                        
                        INNER JOIN roomtypes
                        ON rooms.id_type=roomtypes.id
                        WHERE rooms.id=:id');

      $this->db->bind(':id', $id);
      
      $row = $this->db->single();

      return $row;
    }

    // Add Post
    public function addBooking($data){
      // Prepare Query
      $this->db->query('INSERT INTO rooms (room_number, id_ship, id_type) 
      VALUES (:room_number, :id_ship, :id_type)');

      // Bind Values
      $this->db->bind(':room_number', $data['roomnumber']);
      $this->db->bind(':id_ship', $data['ship']);
      $this->db->bind(':id_type', $data['roomtype']);
     
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    } 










    

    // Update Post
    public function updateRoom($data){
        $sql = 'UPDATE rooms SET room_number = :room_number, id_ship = :id_ship, id_type = :id_type WHERE id = :id ';
      $this->db->query($sql);
      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':room_number', $data['roomnumber']);
      $this->db->bind(':id_ship', $data['roomship']); 
      $this->db->bind(':id_type', $data['roomtype']);     
    
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
    


    // Delete Post
    public function deleteRoom($id){
      // Prepare Query
      $this->db->query('DELETE FROM rooms WHERE id = :id');

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