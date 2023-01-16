<?php
  class Pages extends Controller{

  protected $cruiseModel;
  protected $clientreservationModel;



    public function __construct(){

      $this->cruiseModel = $this->model('Cruise');
      $this->clientreservationModel = $this->model('ClientReservation');


     
    }

    // Load Homepage
    public function index(){
      // If logged in, redirect to posts
    if (isset($_SESSION['user_id'])) {
      $this->view('pages/index');
    }
      //Set Data
      $data = [
        'title' => 'Welcome To SharePosts',
        'description' => 'Simple social network built on the TraversyMVC PHP framework'
      ];

      // Load homepage/index view
      $this->view('pages/index', $data);
    }

      // Load cruises page   
      public function croisieres(){
    // var_dump($_GET);

    // var_dump($_POST);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // echo "post";
      $port = $_POST['port'];
      $ship = $_POST['ship'];

  $cruises = $this->cruiseModel->searchByPortShipDate($port,$ship,"123");


  $data = [
    'cruises' => $cruises
  ];
 
} else {
      // echo "get";
  $cruises = $this->cruiseModel->getCruisesShipsPorts();
    //  die ("get");
}
 
    

        $data = [
          'cruises' => $cruises
        ];

        // echo "<br><pre>";
        // die($data|'cruises');
        // echo "<pre>";
      $this->view('pages/croisieres', $data);

      }


      public function booking($id_cruise){

      $roomscruise = $this->clientreservationModel->getRoomsCruiseById($id_cruise);
        //Set Data
        $data = [ 
          'rooms' => $roomscruise,
          'id_cruise' => $id_cruise
        ];
              // var_dump($data);

        // Load about view
        $this->view('pages/booking', $data);

      }

    




      public function about(){
        //Set Data
        $data = [
          'version' => '1.0.0'
        ];

        // Load about view
        $this->view('pages/about', $data);
      }




    // Load Reservation page for client if logged in
    public function reservations($id_cruise){

         $totalprice = $this->clientreservationModel->getTotalPriceById($id_cruise);


      //Set Data
      $data = [
        'totalprice' => $totalprice
        
      ];

      // Load homepage/index view
      $this->view('pages/reservations', $data);
    }
















  }