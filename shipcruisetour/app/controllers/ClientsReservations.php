<?php
  class ClientsReservations extends Controller{
 
  protected $clientreservationModel;
  protected $roomModel;
  protected $shiproomModel;


  
    public function __construct(){
      if(!isset($_SESSION['user_id'])){
        redirect('users/login');
      }
      // Load Models
      $this->roomModel = $this->model('Room');
      $this->clientreservationModel = $this->model('ClientReservation');
      $this->shiproomModel = $this->model('Ship');


    }


 // Add Post
 public function add(){

   
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Sanitize POST
    $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);



      $id_cruise = $_POST['id_cruise'];
    $finalreservation = $this->clientreservationModel->getTotalPriceById($id_cruise);

    $data = [
      'date' => date('y-m-d'),
      'prix' => $finalreservation->total,
      'id_client' =>  $_SESSION['user_id'],
      'id_chambre' => trim($_POST['id_chambre']),
      'id_cruise' => trim($_POST['id_cruise']),
      'cruise' => $finalreservation->cruisename,
      'room' => $finalreservation->roomtype,
      //'user_id' => $_SESSION['user_id'],   
      'nom_err' => '',
      'pays_err' => '',

    ];

      var_dump($data);
    
     if(empty($data['date'])){
      $data['roomnumber_err'] = 'Please enter the room number';
      // Validate name
      if(empty($data['prix'])){
        $data['ship_err'] = 'Please enter the ship of the room';
      }
      if(empty($data['id_client'])){
        $data['roomtype_err'] = 'Please enter the type of room';
      }
    }

    // Make sure there are no errors
    if(empty($data['roomnumber_err']) && empty($data['ship_err']) && empty($data['roomtype_err'])){
      // Validation passed

      

      $lastInsertIdCruise=$this->clientreservationModel->addClientreservation($data);
      //Execute
      if( $lastInsertIdCruise){

        $this->clientreservationModel->getTotalPriceById($lastInsertIdCruise);






        // Redirect to ports
        flash('Reservation_added', 'Reservation Added');
        redirect('clientsreservations');
      } else {
        die('Something went wrong');
      }
    } else {



      // Load view with errors
      $this->view('clientsreservations/index', $data);
    }

  } else {

    $data = [
      'roomnumber' => '',
      'country' => '',
      'ship' => '',
    ];


    
    $this->view('clientsreservations/add', $data);
  }
}





    // Load All Posts
    public function index(){
    $id_client = $_SESSION['user_id'];
      $clientsreservations = $this->clientreservationModel->getAllClientsreservations();
      $clientReservations = $this->clientreservationModel->getAllClientreservationsById($id_client);


      $data = [
        'clientsreservations' => $clientsreservations,
        'AllClientReservations' => $clientReservations
      ]; 

      if(isset($_SESSION['user_id']))
      //If admin is logged

      // $this->view('clientsreservations/index', $data);

      //If client is logged
        $this->view('pages/reservations', $data);
    }

 

    // Show Single Post
    public function show($id_client){
      $id_client = $_POST['id_cruise'];
      $finalreservation = $this->clientreservationModel->getTotalPriceById($id_client);
  
      $clientsreservations = $this->clientreservationModel->getAllClientreservationsById($id_client);
      $data = [
        'clientsreservations' => $clientsreservations ,
        'finalreservation' => $finalreservation
      ];

      $this->view('pages/reservations', $data);
    }

  


    

   


    
    // Delete Post
    public function delete($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Execute
        if($this->clientreservationModel->deleteReservation($id)){
          // Redirect to login
          flash('Reservations_message', 'Reservations is Canceled ');
          redirect('clientsreservations');
          } else {
            die('Something went wrong');
          }
      } else {
        redirect('clientsreservations');
      }
    }
  }