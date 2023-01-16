<?php
  class Rooms extends Controller{
  protected $roomModel;
  protected $roomtypeModel;
  protected $shiproomModel;




  
    public function __construct(){
      if(!isset($_SESSION['user_id'])){
        redirect('users/login');
      }
      // Load Models
      $this->roomModel = $this->model('Room');
      $this->roomtypeModel = $this->model('RoomType');
      $this->shiproomModel = $this->model('Ship');


    }

    // Load All Posts
    public function index(){
      $rooms = $this->roomModel->getRooms();

      $data = [
        'rooms' => $rooms
      ];
      
      $this->view('rooms/index', $data);
    }

    // Show Single Post
    public function show($id){
      $room = $this->roomModel->getRoomById($id);
      $data = [
        'room' => $room 
      ];

      $this->view('rooms/show', $data);
    }

    // Add Post
    public function add(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'roomnumber' => trim($_POST['roomnumber']),
          'ship' => trim($_POST['ship']),
          'roomtype' => trim($_POST['roomtype']),
          'user_id' => $_SESSION['user_id'],   
          'nom_err' => '',
          'pays_err' => '',

        ];  
        
         if(empty($data['roomnumber'])){
          $data['roomnumber_err'] = 'Please enter the room number';
          // Validate name
          if(empty($data['ship'])){
            $data['ship_err'] = 'Please enter the ship of the room';
          }
          if(empty($data['roomtype'])){
            $data['roomtype_err'] = 'Please enter the type of room';
          }
        }

        // Make sure there are no errors
        if(empty($data['roomnumber_err']) && empty($data['ship_err']) && empty($data['roomtype_err'])){
          // Validation passed


          //Execute
          if($this->roomModel->addRoom($data)){
            // Redirect to ports
            flash('room_added', 'Room Added');
            redirect('rooms');
          } else {
            die('Something went wrong');
          }
        } else {



          // Load view with errors
          $this->view('rooms/add', $data);
        }

      } else {
        $allroomtypes = $this->roomtypeModel->getRoomTypes();
        $allshiprooms = $this->shiproomModel->getShips();


        $data = [
          'roomnumber' => '',
          'country' => '',
          'ship' => '',
          'allroomtypes' => $allroomtypes,
          'allshiprooms' => $allshiprooms
        ];

        
        $this->view('rooms/add', $data);
      }
    }


    

    // Edit Post
    public function edit($id){ 
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

         $data = [
          'id' => $id,
          'roomnumber' => trim($_POST['roomnumber']),
          'roomtype' => trim($_POST['id_type']),
          'roomship' => trim($_POST['id_ship']),
          'user_id' => $_SESSION['user_id'],   
          'roomnumber_err' => '',
          'ship_err' => '',

        ];

         
        if(empty($data['roomnumber'])){
          $data['roomnumber_err'] = 'Please enter the room number';
          // Validate name
          if(empty($data['ship'])){
            $data['ship_err'] = 'Please enter the ship of the room';
          }
          if(empty($data['roomtype'])){
            $data['roomtype_err'] = 'Please enter the type of room';
          }
        }

        // Make sure there are no errors
        if(empty($data['roomnumber_err']) && empty($data['ship_err']) && empty($data['roomtype_err'])){
          // Validation passed

          //Execute
          if($this->roomModel->updateRoom($data)){
            // Redirect to login
            flash('room_edited', 'Room Edited');
            redirect('rooms');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('rooms/edit', $data);
        }

      } else {


        
        // Get post from model
        $room = $this->roomModel->getRoomById($id);
        $allroomtypes = $this->roomtypeModel->getRoomTypes();
        $allshiprooms = $this->shiproomModel->getShips();
        


        $data = [
          'id'=>$room->id,
          'room_number'=>$room->room_number,
          'roomship'=>$room->id_ship,
          'roomtype'=>$room->id_type,
          'allshiprooms'=>$allshiprooms,
          'allroomtypes'=>$allroomtypes,


        ];
        

        $this->view('rooms/edit', $data);
      }
    }


    
    // Delete Post
    public function delete($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Execute
        if($this->roomModel->deleteRoom($id)){
          // Redirect to login
          flash('room_message', 'Room Removed');
          redirect('rooms');
          } else {
            die('Something went wrong');
          }
      } else {
        redirect('rooms');
      }
    }
  }