<?php
  class Ports extends Controller{
  protected $portModel;
  // protected $userModel; 
  
    public function __construct(){
      if(!isset($_SESSION['user_id'])){
        redirect('users/login');
      }
      // Load Models
      $this->portModel = $this->model('Port');
    }

    // Load All Posts
    public function index(){
      $ports = $this->portModel->getPorts();

      $data = [
        'ports' => $ports
      ];
      
      $this->view('ports/index', $data);
    }

    // Show Single Post
    public function show($id){
      $port = $this->portModel->getPortById($id);
      $data = [
        'port' => $port 
      ];

      $this->view('ports/show', $data);
    }

    // Add Post
    public function add(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
       
        $data = [
          'nom' => trim($_POST['nom']),
          'pays' => trim($_POST['pays']),
          'user_id' => $_SESSION['user_id'],   
          'nom_err' => '',
          'pays_err' => '',

        ]; 

       

         if(empty($data['nom'])){
          $data['nom_err'] = 'Please enter port name';
          // Validate name
          if(empty($data['pays'])){
            $data['pays_err'] = 'Please enter the country of this port';
          }
        }

        // Make sure there are no errors
        if(empty($data['nom_err']) && empty($data['pays_err'])){
          // Validation passed


          //Execute
          if($this->portModel->addPort($data)){
            // Redirect to ports
            flash('port_added', 'Port Added');
            redirect('ports');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('ports/add', $data);
        }

      } else {
        $data = [
          'nom' => '',
          'pays' => ''
        ];

        $this->view('ports/add', $data);
      }
    }


    

    // Edit Post
    public function edit($id){ 
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST
        $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

         $data = [
          'id' => $id,
          'nom' => trim($_POST['nom']),
          'pays' => trim($_POST['pays']),
          'user_id' => $_SESSION['user_id'],   
          'nom_err' => '',
          'pays_err' => '',

        ];

         
         // Validate 
         if(empty($data['nom'])){
          $data['nom_err'] = 'Please enter port name';
          // Validate name
          if(empty($data['nombreplaces'])){
            $data['nombreplaces_err'] = 'Please enter the number of places in your port';
          }
          if(empty($data['nombrechambres'])){
            $data['nombrechambres_err'] = 'Please enter the number of rooms in your port';
          }
        }

        // Make sure there are no errors
        if(empty($data['nom_err']) && empty($data['nombreplaces_err']) && empty($data['nombrechambres_err'])){
          // Validation passed
          //Execute
          if($this->portModel->updatePort($data)){
            // Redirect to login
            flash('port_edited', 'Port Edited');
            redirect('ports');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('ports/edit', $data);
        }

      } else {


        
        // Get post from model
        $port = $this->portModel->getPortById($id);


        $data = [
          'id'=>$port->id,
          'nom'=>$port->nom,
          'pays'=>$port->pays,

        ];

        $this->view('ports/edit', $data);
      }
    }


    
    // Delete Post
    public function delete($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Execute
        if($this->portModel->deletePort($id)){
          // Redirect to login
          flash('port_message', 'Port Removed');
          redirect('ports');
          } else {
            die('Something went wrong');
          }
      } else {
        redirect('ports');
      }
    }
  }