<?php
  class PortCruise {
    private $db;
    
    public function __construct(){
      $this->db = new Database;
    } 




      // Add itineraire
      public function addPortCruise($id_port,$id_cruise){
        $this->db->query('INSERT INTO `port_cruise`(`id_port`, `id_cruise`) VALUES (:id_port,:id_cruise)');
        
        $this->db->bind(':id_port', $id_port);
        $this->db->bind(':id_cruise', $id_cruise);
  
        //Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
  
      }


      public function deletePortCruise($id_port,$id_cruise){
        $this->db->query('DELETE FROM port_cruise 
                          INNER JOIN cruise
                          ON port_cruise.id_cruise = cruise.id');
        
      
        //Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
  
      }















//     // Get All Posts 
//     public function getCruises(){
//       $this->db->query("SELECT *
//                         -- posts.id as postId, 
//                         -- users.id as userId
//                         FROM cruises 
//                         /*INNER JOIN users 
//                         ON posts.user_id = users.id
//                         ORDER BY posts.created_at DESC;*/");

//       $results = $this->db->resultset();

//       return $results;
//     }



   




//     public function getCruisesShipsPorts(){
//       $this->db->query("SELECT cruises.*,
//       ships.nom,
//       ports.nom
//                               FROM cruises 
//                               INNER JOIN ships 
//                               ON cruises.id_ship = ships.id
                              
//                               INNER JOIN port_cruise
//                                ON port_cruise.id_cruise = cruises.id
                               
//                                    INNER JOIN ports
//                                ON port_cruise.id_port = ports.id
                               
//                               ORDER BY cruises.date_depart DESC;
                        
//                         ");

//       $results = $this->db->resultset();

//       return $results;
//     }


//     // Get Post By ID
//     public function getCruiseById($id){
//       $this->db->query('SELECT * FROM cruises WHERE id = :id');

//       $this->db->bind(':id', $id);
      
//       $row = $this->db->single();

//       return $row;
//     }


//     // Add itineraire
//     public function addPortCruise(){
//       $this->db->query('INSERT INTO `port_cruise`(`id_port`, `id_cruise`) VALUES (:id_port,:id_cruise)');
      
//       $this->db->bind(':id_port', $data['id_port']);
//       $this->db->bind(':id_cruise', $data['id_cruise']);

//       //Execute
//       if($this->db->execute()){
//         return true;
//       } else {
//         return false;
//       }

//     }
//     // Add Post
//     public function addCruise($data){
      
      
//       // Prepare Query
//       $this->db->query('INSERT INTO cruises (	id_ship,prix, nombre_nuits, date_depart, port_depart) 
//       VALUES (:id_ship,:prix, :nombre_nuits, :date_depart, :port_depart)');
//       // $this->db->query('SELECT ships.nom as shipName  
//       //                  FROM ships
//       //                  INNER JOIN  cruises 
//       //                  ON ships.id = cruises.id_ship');
//       // Bind Values
//       $this->db->bind(':id_ship', $data['id_ship']);
//       $this->db->bind(':port_depart', $data['port_depart']);
//       $this->db->bind(':prix', $data['prix']);
//       // $this->db->bind(':image', $data['image']);
//       // $this->db->bind(':user_id', $data['user_id']);
//       $this->db->bind(':nombre_nuits', $data['nombre_nuits']);
//       $this->db->bind(':port_depart', $data['port_depart']);
//       $this->db->bind(':date_depart', $data['date_depart']);
   

      
//       //Execute
//       if($this->db->execute()){
//         return true;
//       } else {
//         return false;
//       }
//     } 
//  // // Update Post
//     // public function updateCruise($data){
      
//     //   if(!empty($data['image'])){
//     //     $sql = 'UPDATE ships SET nom = :nom, image = :image, nombre_places = :nombre_places, nombre_chambres = :nombre_chambres WHERE id = :id ';
//     //   }else{
//     //     $sql = 'UPDATE ships SET nom = :nom, nombre_places = :nombre_places, nombre_chambres = :nombre_chambres WHERE id = :id ';
//     //   }      
//     //   $this->db->query($sql);
//     //   // Bind Values
//     //   $this->db->bind(':id', $data['id']);
//     //   $this->db->bind(':nom', $data['nom']);
//     //   $this->db->bind(':nombre_places', $data['nombre_places']);
//     //   $this->db->bind(':nombre_chambres', $data['nombre_chambres']);
//     // if (!empty($data['image'])) {
//     //   $this->db->bind(':image', $data['image']);
//     // }      
//     //   //Execute
//     //   if($this->db->execute()){
//     //     return true;
//     //   } else {
//     //     return false;
//     //   }
//     // }
    


//     // // Delete Post
//     // public function deleteShip($id){
//     //   // Prepare Query
//     //   $this->db->query('DELETE FROM ships WHERE id = :id');

//     //   // Bind Values
//     //   $this->db->bind(':id', $id);
      
//     //   //Execute
//     //   if($this->db->execute()){
//     //     return true;
//     //   } else {
//     //     return false;
//     //   }
//     // }
   
  }