<?php
  class Ship {
    private $db;
    
    public function __construct(){
      $this->db = new Database;
    }

    // Get All Posts 
    public function getShips(){
      $this->db->query("SELECT *
                        FROM ships");

      $results = $this->db->resultset();

      return $results;
    }


    public function getShipsChoices() {
    $this->db->query("SELECT DISTINCT ships.nom, ships.id  FROM cruises
                      INNER JOIN ships
                      ON cruises.id_ship = ships.id
                      ");
          $results = $this->db->resultset();
          return $results;
    }





    public function getShipNameById($id)
    {
      $this->db->query('SELECT nom FROM ships WHERE id = :id');

      $this->db->bind(':id', $id);
      
      $row = $this->db->single();

      return $row;
    }




    // Get Post By ID
    public function getShipById($id){
      $this->db->query('SELECT * FROM ships WHERE id = :id');

      $this->db->bind(':id', $id);
      
      $row = $this->db->single();

      return $row;
    }

    // Add Post
    public function addShip($data){
      // Prepare Query
      $this->db->query('INSERT INTO ships (nom, image, nombre_places, nombre_chambres) 
      VALUES (:nom, :image, :nombre_places, :nombre_chambres)');

      // Bind Values
      $this->db->bind(':nom', $data['nom']);
      $this->db->bind(':image', $data['image']);
      // $this->db->bind(':user_id', $data['user_id']);
      $this->db->bind(':nombre_places', $data['nombre_places']);
      $this->db->bind(':nombre_chambres', $data['nombre_chambres']);

      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    } 

    // Update Post
    public function updateShip($data){
      
      if(!empty($data['image'])){
        $sql = 'UPDATE ships SET nom = :nom, image = :image, nombre_places = :nombre_places, nombre_chambres = :nombre_chambres WHERE id = :id ';
      }else{
        $sql = 'UPDATE ships SET nom = :nom, nombre_places = :nombre_places, nombre_chambres = :nombre_chambres WHERE id = :id ';
      }      
      $this->db->query($sql);
      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':nom', $data['nom']);
      $this->db->bind(':nombre_places', $data['nombre_places']);
      $this->db->bind(':nombre_chambres', $data['nombre_chambres']);
    if (!empty($data['image'])) {
      $this->db->bind(':image', $data['image']);
    }      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
    


    // Delete Post
    public function deleteShip($id){
      // Prepare Query
      $this->db->query('DELETE FROM ships WHERE id = :id');

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