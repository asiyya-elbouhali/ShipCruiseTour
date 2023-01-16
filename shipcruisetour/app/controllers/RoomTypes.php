<?php
  class RoomTypes extends Controller{
  protected $roomtypeModel;

 
  
    public function __construct(){
      if(!isset($_SESSION['user_id'])){
        redirect('users/login');
      }
      // Load Models
      $this->roomtypeModel = $this->model('RoomType');
    
    }
 
    // Load All roomtypes
    public function index(){
      $roomtypes = $this->roomtypeModel->getRoomTypes();

      $data = [
        'roomtypes' => $roomtypes
      ];
      
      $this->view('roomtypes/index', $data);
    }

    // Show Single Post
    public function show($id){
      $roomtype = $this->roomtypeModel->getRoomTypeById($id);

      $data = [
        'roomtype' => $roomtype, 
      ];

      $this->view('roomtypes/show', $data);
    }

    // Add Post

    public function add(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
       
        $data = [
          'prix' => trim($_POST['prix']),
          'capacite' => trim($_POST['capacite']),
          'type' => trim($_POST['type']),
          'user_id' => $_SESSION['user_id'],   
          'prix_err' => '',
          'capacite_err' => '',
          'type_err' => '',


        ]; 

         if(empty($data['prix'])){
          $data['prix_err'] = 'Please enter the price';
          // Validate capacity
          if(empty($data['capacite'])){
            $data['capacite_err'] = 'Please enter room capacity';
          }
          // validate type
          if(empty($data['type'])){
            $data['type_err'] = 'Please enter room type';
          }
        }

        // Make sure there are no errors
        if(empty($data['prix_err']) && empty($data['capacite_err']) && empty($data['type_err'])){
          // Validation passed


          //Execute
          if($this->roomtypeModel->addRoomType($data)){
            // Redirect to rooms
            flash('roomtype_added', 'Room Type Added');
            redirect('roomtypes');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('roomtypes/add', $data);
        }

      } else {
        $data = [
          'prix' => '',
          'capacite' => '',
          'type' => ''
        ];

        $this->view('roomtypes/add', $data);
      }
      
    }
   

    // Edit Post
    public function edit($id){ 
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

         $data = [
          'id' => $id,
          'prix' => trim($_POST['prix']),
          'capacite' => trim($_POST['capacite']),
          'type' => trim($_POST['type']),
          'user_id' => $_SESSION['user_id'],   
          'prix_err' => '',
          'capatite_err' => '',
          'type_err' => '',

        ];

         
        if(empty($data['prix'])){
          $data['prix_err'] = 'Please enter the price';
          // Validate capacity
          if(empty($data['capacite'])){
            $data['capacite_err'] = 'Please enter room capacity';
          }
          // validate type
          if(empty($data['type'])){
            $data['type_err'] = 'Please enter room type';
          }
        }

        // Make sure there are no errors
        if(empty($data['prix_err']) && empty($data['capacite_err']) && empty($data['type_err'])){
          // Validation passed


          //Execute
          if($this->roomtypeModel->updateRoomType($data)){
            // Redirect to login
            flash('roomtype_edited', 'Room type Edited');
            redirect('roomtypes');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('roomtypes/edit', $data);
        }

      } else {


        
        // Get post from model
        $roomtype = $this->roomtypeModel->getRoomTypeById($id);


        $data = [
          'id'=>$roomtype->id,
          'prix'=>$roomtype->prix,
          'capacite'=>$roomtype->capacite,
          'type'=>$roomtype->type,


        ];

        $this->view('roomtypes/edit', $data);
      }
    }


    
    // Delete Post
    public function delete($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Execute
        if($this->roomtypeModel->deleteRoomType($id)){
          // Redirect to login
          flash('roomtype_message', 'Room Type Removed');
          redirect('roomtypes');
          } else {
            die('Something went wrong');
          }
      } else {
        redirect('roomtypes');
      }
    }
  }