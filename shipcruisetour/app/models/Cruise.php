<?php
  class Cruise {
    private $db;
    
    public function __construct(){
      $this->db = new Database;
    } 

    // Get All Posts  
    public function getCruises(){
      $this->db->query("SELECT *
                        FROM cruises");

      $results = $this->db->resultset();

      return $results;
    }


    // Get All Places 
    public function getPlaces(){
      $this->db->query("SELECT SUM(ships.nombre_places) AS cruisePlaces FROM cruises INNER JOIN ships ON cruises.id_ship = ships.id");

      $results = $this->db->resultset();

      return $results;
    }

 

    // Get All Reserved Places 
    public function getReservedPlaces(){
      $this->db->query("SELECT SUM(roomtypes.capacite) AS placesReserved
                        FROM reservations
                        INNER JOIN rooms
                        ON reservations.id_chambre = rooms.id
                        INNER JOIN roomtypes
                        ON rooms.id_type= roomtypes.id
                        INNER JOIN cruises 
                        ON reservations.id_cruise=cruises.id
                        ");

      $results = $this->db->resultset();

      return $results;
    }




    // SELECT cruises.*,
		// 				ships.nombre_places AS cruiseCapacity,
		// 				SUM(roomtypes.capacite) AS placesReserved
    //                     FROM cruises
    //                     INNER JOIN ships
    //                     ON cruises.id_ship=ships.id
    //                     INNER JOIN reservations 
    //                     ON reservations.id_cruise=cruises.id
    //                     INNER JOIN rooms
    //                     ON reservations.id_chambre = rooms.id
    //                     INNER JOIN roomtypes
    //                     ON rooms.id_type= roomtypes.id
    //                     GROUP BY cruises.id
    //                     HAVING ((cruiseCapacity > placesReserved) AND (cruises.date_depart > CURRENT_DATE))


    // SELECT SUM(roomtypes.capacite) AS placesReserved
    //                     FROM reservations
    //                     INNER JOIN rooms
    //                     ON reservations.id_chambre = rooms.id
    //                     INNER JOIN roomtypes
    //                     ON rooms.id_type= roomtypes.id
    //                     INNER JOIN cruises 
    //                     ON reservations.id_cruise=cruises.id
    //                     WHERE cruises.nom=:cruiseName
    
 

    // public function search(){
      
    //   $this->db->like('title', $query);
    //   $this->db->or_like('description', $query);
    //   $results = $this->db->get('items')->result();
    //   return $results;

    // }

    public function getCruisesShipsPorts(){
      $Limit = 6;
      $page_number = isset($_GET['page']) ? (int)$_GET['page']: 1;
      $page_number = $page_number < 1 ? 1 : $page_number;
      $offset = ($page_number - 1) * $Limit;
      $this->db->queryPaginated("SELECT cruises.*,
                        ships.nom as shipnom,
                        ports.nom as portnom
                        FROM cruises 
                        INNER JOIN ships 
                        ON cruises.id_ship = ships.id
                        
                        INNER JOIN port_cruise
                        ON port_cruise.id_cruise = cruises.id
                        
                        INNER JOIN ports
                        ON port_cruise.id_port = ports.id
                        
                        ORDER BY cruises.prix ASC  LIMIT $Limit OFFSET $offset
                        
                        ");

      $results = $this->db->resultset(); 

      return $results;
    }


    public function getCruisesShipsPortsForClients(){
      $Limit = 6;
      $page_number = isset($_GET['page']) ? (int)$_GET['page']: 1;
      $page_number = $page_number < 1 ? 1 : $page_number;
      $offset = ($page_number - 1) * $Limit;
      $this->db->queryPaginated("SELECT cruises.*,
      ships.nombre_places AS cruiseCapacity,
      SUM(roomtypes.capacite) AS placesReserved
                  FROM cruises
                  INNER JOIN ships
                  ON cruises.id_ship=ships.id
                  INNER JOIN reservations 
                  INNER JOIN rooms
                  ON reservations.id_chambre = rooms.id
                  INNER JOIN roomtypes
                  ON rooms.id_type= roomtypes.id
                  GROUP BY cruises.id
                  HAVING ((cruises.date_depart > CURRENT_DATE) AND ships.nombre_places > SUM(roomtypes.capacite))
                  ORDER BY cruises.prix ASC  LIMIT $Limit OFFSET $offset
                        
                        ");

      $results = $this->db->resultset(); 

      return $results;
    }





    public function getDatesChoices(){
        $this->db->query('SELECT DISTINCT MONTH(date_depart) AS month FROM cruises ');
        $results = $this->db->resultset();
        return $results;


    }



    
    public function searchByPortShipDate($port, $ship, $date){
                  $this->db->query("SELECT cruises.*,
                  ships.nom as shipnom,
                  ports.nom as portnom
                  FROM cruises 
                  INNER JOIN ships 
                  ON cruises.id_ship = ships.id
                
                  INNER JOIN port_cruise
                  ON port_cruise.id_cruise = cruises.id
                 
                     INNER JOIN ports
                  ON port_cruise.id_port = ports.id
                  WHERE port_depart LIKE '$port' 
                  OR ships.nom LIKE '$ship' OR MONTH(cruises.date_depart) LIKE '$date' ");
 
      $results = $this->db->resultset();

     return $results;
    }

    // Get Post By ID
    public function getCruisesShipsPortsById($id){
      $this->db->query('SELECT cruises.*, 
                      ships.nom as shipnom
                      FROM cruises 
                      INNER JOIN ships 
                      ON cruises.id_ship = ships.id 
                      WHERE cruises.id =:id');

      $this->db->bind(':id', $id);
      
      $row = $this->db->single();

      return $row;
    }

    public function getCruiseById($id){
      $this->db->query('SELECT * FROM cruises WHERE id = :id');

      $this->db->bind(':id', $id);
      
      $row = $this->db->single();

      return $row;
    }


   
    // Add Post
    public function addCruise($data){
      
      
      // Prepare Query
      $this->db->query('INSERT INTO cruises ( nom,	id_ship, image, prix, nombre_nuits, date_depart, port_depart,descriptif,itineraire) 
      VALUES (:nom, :id_ship, :image, :prix, :nombre_nuits, :date_depart, :port_depart, :descriptif, :itineraire)');
      // Bind Values

      $this->db->bind(':nom', $data['nom']);
      $this->db->bind(':id_ship', $data['id_ship']);
      $this->db->bind(':descriptif', $data['descriptif']);
      $this->db->bind(':port_depart', $data['port_depart']);
      $this->db->bind(':prix', $data['prix']);
      $this->db->bind(':image', $data['image']);
      // $this->db->bind(':user_id', $data['user_id']);
      $this->db->bind(':nombre_nuits', $data['nombre_nuits']);
      $this->db->bind(':itineraire', $data['itineraire']);
      $this->db->bind(':date_depart', $data['date_depart']); 
      
      //Execute
      if($this->db->execute()){
        return $this->db->lastInsertId();
      } else {
        return false;
      }
    } 




 

 // Update Post
    public function updateCruise($data){

      if(!empty($data['image'])){
        $sql = 'UPDATE cruises SET nom = :nom, prix = :prix, image = :image, nombre_nuits = :nombre_nuits, port_depart = :port_depart, date_depart = :date_depart, id_ship = :id_ship, descriptif = :descriptif WHERE id = :id ';
      }else{
        $sql = 'UPDATE cruises SET nom = :nom, prix = :prix, nombre_nuits = :nombre_nuits, date_depart = :date_depart, port_depart = :port_depart, id_ship = :id_ship, descriptif = :descriptif WHERE id = :id ';
      }      
      $this->db->query($sql);
      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':nom', $data['nom']);
      $this->db->bind(':id_ship', $data['id_ship']);
      $this->db->bind(':prix', $data['prix']);
      $this->db->bind(':nombre_nuits', $data['nombre_nuits']);
      $this->db->bind(':port_depart', $data['port_depart']);
      $this->db->bind(':date_depart', $data['date_depart']);
      $this->db->bind(':descriptif', $data['descriptif']);

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
    public function deleteCruise($id){
      // Prepare Query
      $this->db->query('DELETE FROM cruises WHERE id = :id');

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