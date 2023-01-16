<?php
  class ClientReservation {
    private $db;

    public function __construct(){
      $this->db = new Database;
    } 

    // Get All Rooms in the cruise 
    public function getAllClientsreservations(){
      $Limit = 6;
      $page_number = isset($_GET['page']) ? (int)$_GET['page']: 1;
      $page_number = $page_number < 1 ? 1 : $page_number;
      $offset = ($page_number - 1) * $Limit;
      $this->db->queryPaginated("SELECT *
                        FROM reservations  LIMIT $Limit OFFSET $offset");

      $results = $this->db->resultset();

      return $results;
    }

    public function getAllClientreservationsById($id_client){
    $Limit = 6;
    $page_number = isset($_GET['page']) ? (int)$_GET['page']: 1;
    $page_number = $page_number < 1 ? 1 : $page_number;
    $offset = ($page_number - 1) * $Limit;

      $this->db->query("SELECT reservations.*,
             reservations.id AS id_reservation,
             cruises.date_depart AS cruiseDepart,
             cruises.nom AS cruiseName,
             roomtypes.type AS roomType,
             users.nom AS clientName
             FROM reservations
             INNER JOIN cruises 
             ON reservations.id_cruise = cruises.id
             INNER JOIN rooms
             ON reservations.id_chambre = rooms.id
             INNER JOIN roomtypes
             ON rooms.id_type=roomtypes.id
              INNER JOIN users
              ON reservations.id_client = users.id
              WHERE id_client= :id_client              
              ORDER BY cruises.date_depart DESC
              LIMIT $Limit OFFSET $offset ");
              
              $this->db->bind(':id_client', $id_client);
      $results = $this->db->resultset();
    //die(var_dump($results));
       return $results;
    }

    public function getTotalPriceById($id){
      $this->db->query('SELECT cruises.prix as cruiseprice,
                      roomtypes.prix as roomprice,
                      cruises.nom as cruisename,
                      roomtypes.type as roomtype,
                      SUM(cruises.prix + roomtypes.prix) as total
                        FROM cruises
                        INNER JOIN ships
                        ON cruises.id_ship=ships.id

                        INNER JOIN rooms
                        ON rooms.id_ship=ships.id
                        
                        INNER JOIN roomtypes
                        ON rooms.id_type=roomtypes.id
                        
                        WHERE cruises.id =:id');

$this->db->bind(':id', $id);

$row = $this->db->single();
return $row;
}

     // Add Clients Reservations
     public function addClientreservation($data){
    
    // Prepare Query

      $this->db->query('INSERT INTO reservations (date, prix, id_client, id_cruise, id_chambre) 
      VALUES (:date, :prix, :id_client, :id_cruise,  :id_chambre)');

      // Bind Values
      $this->db->bind(':date', $data['date']);
      $this->db->bind(':prix', $data['prix']);
      $this->db->bind(':id_cruise', $data['id_cruise']);
      $this->db->bind(':id_client', $data['id_client']);
      $this->db->bind(':id_chambre', $data['id_chambre']);
      
     
      //Execute
      if($this->db->execute()){
        return $this->db->lastInsertId();
      } else {
        return false;
      }
    } 




    public function getRoomsCruiseById($id){
      $this->db->query("SELECT rooms.id as id,
                        ships.nom as shipnom,
                        roomtypes.type as roomtype
                        FROM rooms
                        INNER JOIN ships
                        ON rooms.id_ship=ships.id

                        INNER JOIN roomtypes
                        ON rooms.id_type=roomtypes.id
                        
                        INNER JOIN cruises
                        ON cruises.id_ship=ships.id
                        
                        WHERE cruises.id = :id ");
      $this->db->bind(':id', $id);
      
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




    // Delete Post
    public function deleteReservation($id){
      // Prepare Query
      $this->db->query('DELETE reservations  FROM reservations 
                        INNER JOIN cruises ON cruises.id = reservations.id_cruise
                        WHERE cruises.date_depart  > CURRENT_DATE + 2 AND reservations.id = :id');

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