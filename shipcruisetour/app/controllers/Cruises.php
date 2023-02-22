<?php
  class Cruises extends Controller{
  protected $cruiseModel;
   protected $shipModel;
   protected $portModel; 
   protected $port_cruiseModel; 
 
   
  
    public function __construct(){
      if(!isset($_SESSION['user_id'])){
        redirect('users/login');
      }
      // Load Models
       $this->cruiseModel = $this->model('Cruise');
       $this->shipModel = $this->model('Ship');
       $this->portModel = $this->model('Port');
       $this->port_cruiseModel = $this->model('PortCruise');

    } 
 
    // Load All Posts
    public function index(){
      $cruises = $this->cruiseModel->getCruisesShipsPorts();

      $data = [
        'cruises' => $cruises
      ];

      $this->view('cruises/index', $data);
    }

    // Show Single Post
    public function show($id){
      $cruise = $this->cruiseModel->getCruisesShipsPortsById($id);
      $data = [
        'cruise' => $cruise 
      ];

      $this->view('cruises/show', $data);
    }












 

    // Add Post
    public function add(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $target_dir = "./uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            echo "<a href='cruises'>return to cruises</a>";
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image = "uploads/" . $_FILES["image"]["name"];


}
}




        $idPort=$_POST['port_depart'];   
        // $idShip=$_POST['id_ship'];    
        $portName=$this->portModel->getPortNameById($idPort);   
        // $shipName=$this->shipModel->getShipNameById($idShip);   


        $data = [
          'nom' => trim($_POST['nom']),
          'itineraire' => trim($_POST['itineraire']),
          'prix' => trim($_POST['prix']),
          'image' => trim($image),
          'nombre_nuits' => trim($_POST['nombrenuits']),
          'date_depart' => trim($_POST['datedepart']),
          'port_depart' =>  $portName->nom,
          'id_ship' => $_POST['id_ship'],
          'descriptif' => trim($_POST['descriptif']),
          'user_id' => $_SESSION['user_id'],   
          'prix_err' => '',
          'image_err' => '',
          'nombrenuits_err' => '',
          'portdepart_err' => '',
          'datedepart_err' => '',
      
        ];
       

          if(empty($data['nom'])){
            $data['nom_err'] = 'Please enter the cruise name';
          if(empty($data['prix'])){
            $data['prix_err'] = 'Please enter the cruise date';
          // Validate name
          }
          if(empty($data['image'])){
            $data['image_err'] = 'Please enter the number of places in your ship';
          }
          if(empty($data['nombrenuits'])){
            $data['nombrenuits_err'] = 'Please enter the number of places in your ship';
          }
          if(empty($data['portdepart'])){
            $data['portdepart_err'] = 'Please enter the number of places in your ship';
          }
          if(empty($data['datedepart'])){
            $data['datedepart_err'] = 'Please enter the picture of your ship';
          }
          if(empty($data['ship'])){
            $data['ship_err'] = 'Please enter the picture of your ship';
          }
          if(empty($data['descriptif'])){
            $data['descriptif_err'] = 'Please enter a descriptif about the cruise';
          }
        }

        // Make sure there are no errors
        if(empty($data['prix_err']) && empty($data['image_err']) && empty($data['nombrenuits_err']) && empty($data['portdepart_err']) && empty($data['datedepart_err'])&& empty($data['ship_err']) && empty($data['nom_err'])&& empty($data['descriptif_err'])){
          // Validation passed

        
          //Execute_
          $lastInsertedIdCruise=$this->cruiseModel->addCruise($data);
          if($lastInsertedIdCruise){

       
            // add port_cruise
            $this->port_cruiseModel->addPortCruise($idPort, $lastInsertedIdCruise);

            
            // Redirect to ships
            flash('cruise_added', 'Cruise Added');
            redirect('cruises');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('cruises/add', $data);
        }

      } else {
      
        $ships=$this->shipModel->getShips();
        $ports=$this->portModel->getPorts();
        $todayDate = new DateTime("", new DateTimeZone('Europe/Paris'));
        date_default_timezone_set('America/New_York');
        echo date("Y-m-d", $todayDate->format('U'));
        $dateNow=date("Y-m-d", $todayDate->format('U'));
        $data = [
          'nom' => '', 
          'prix' => '',
          'image' => '',
          'descriptif' => '',
          'nombre_nuits' => '',
          'port_depart' => '',
          'date_depart' => '',
          'id_ship' => '',
          'ports' => $ports,
          'ships' => $ships,
          'date' => $dateNow
          
        ];

        $this->view('cruises/add', $data);
        
      }
    }


    

    // Edit Post
    public function edit($id){

  


      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
      if (isset($_FILES["image"]["tmp_name"])) {
        $target_dir = "./uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


        if (
          $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
          && $imageFileType != "gif"
        ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
        }

        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
          // echo "<a href='cruises'>return to cruises</a>";
        } else {
          if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image = "uploads/" . $_FILES["image"]["name"];
          }
        }
      }
      else{
        $image = "";
      }

      $data = [
        'id' => $id,
        'nom' => trim($_POST['nom']),
        'prix' => trim($_POST['prix']),
        'image' => trim($image),
        'nombre_nuits' => trim($_POST['nombrenuits']),
        'port_depart' => trim($_POST['portdepart']),
        'date_depart' => trim($_POST['datedepart']),
        'id_ship' => trim($_POST['id_ship']),
        'descriptif' => trim($_POST['descriptif']),
        'user_id' => $_SESSION['user_id'],   
        'prix_err' => '',
        'image_err' => '',
        'nombrenuits_err' => '',
        'portdepart_err' => '',
        'datedepart_err' => ''
      ];


 

         
      if(empty($data['nom'])){
        $data['nom_err'] = 'Please enter the cruise name';
      if(empty($data['prix'])){
        $data['prix_err'] = 'Please enter the cruise date';
      // Validate name
      }
      if(empty($data['image'])){
        $data['image_err'] = 'Please enter the number of places in your ship';
      }
      if(empty($data['nombrenuits'])){
        $data['nombrenuits_err'] = 'Please enter the number of places in your ship';
      }
      if(empty($data['portdepart'])){
        $data['portdepart_err'] = 'Please enter the number of places in your ship';
      }
      if(empty($data['datedepart'])){
        $data['datedepart_err'] = 'Please enter the picture of your ship';
      }
      if(empty($data['ship'])){
        $data['ship_err'] = 'Please enter the picture of your ship';
      }
      if(empty($data['descriptif'])){
        $data['descriptif_err'] = 'Please enter a descriptif about the cruise';
      }
    }

        // Make sure there are no errors
        if(empty($data['prix_err']) && empty($data['image_err']) && empty($data['nombrenuits_err']) && empty($data['portdepart_err']) && empty($data['datedepart_err'])&& empty($data['ship_err'])&& empty($data['nom_err'])&& empty($data['descriptif_err'])){
          // Validation passed


          //Execute
          if($this->cruiseModel->updateCruise($data)){
            // Redirect to ships
            flash('cruise_updated', 'Cruise Updated');
            redirect('cruises');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('cruises/edit', $data);
        }

      } else {

      
    
        
        // Get post from model
        $cruise = $this->cruiseModel->getCruisesShipsPortsById($id);

        $allships=$this->shipModel->getShips();
        $allports = $this->portModel->getPorts();
        
        
        $data = [
          'id'=>$cruise->id,
          'nom'=>$cruise->nom,
          'prix'=>$cruise->prix,
          'image'=>$cruise->image,
          'descriptif'=>$cruise->descriptif,
          'nombre_nuits'=>$cruise->nombre_nuits,
          'port_depart'=>$cruise->port_depart,
          'date_depart'=>$cruise->date_depart,
          'id_ship'=>$cruise->id_ship,
          'allships'=> $allships,
          'allports'=>$allports

        ];

        $this->view('cruises/edit', $data);
      }
    }


    
    // Delete Post
    public function delete($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Execute
        if($this->cruiseModel->deleteCruise($id)){
          // Redirect to login
          flash('cruise_message', 'Cruise Removed');
          redirect('cruises');
          } else {
            die('Something went wrong');
          }
      } else {
        redirect('cruises');
      }
    }



  
  }