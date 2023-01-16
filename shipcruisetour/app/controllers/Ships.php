<?php
  class Ships extends Controller{
  protected $shipModel;
  // protected $userModel; 
  
    public function __construct(){
      if(!isset($_SESSION['user_id'])){
        redirect('users/login');
      }
      // Load Models
      $this->shipModel = $this->model('Ship');
      // $this->userModel = $this->model('User');
    }

    // Load All Posts
    public function index(){
      $ships = $this->shipModel->getShips();

      $data = [
        'ships' => $ships
      ];
      
      $this->view('ships/index', $data);
    }

    // Show Single Post
    public function show($id){
      $ship = $this->shipModel->getShipById($id);
      // $user = $this->userModel->getUserById($post->user_id);
      $data = [
        'ship' => $ship 
      ];

      $this->view('ships/show', $data);
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

        // Check if image file is a actual image or fake image
        
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                // echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        

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
        $data = [
          'nom' => trim($_POST['nom']),
          'nombre_places' => trim($_POST['nombreplaces']),
          'nombre_chambres' => trim($_POST['nombrechambres']),
          'image' => trim($image),
          'user_id' => $_SESSION['user_id'],   
          'nom_err' => '',
          'nombrechambres_err' => '',
          'nombreplaces_err' => ''

        ]; 

       

         if(empty($data['nom'])){
          $data['nom_err'] = 'Please enter ship name';
          // Validate name
          if(empty($data['nombreplaces'])){
            $data['nombreplaces_err'] = 'Please enter the number of places in your ship';
          }
          if(empty($data['image'])){
            $data['image_err'] = 'Please enter the picture of your ship';
          }
          if(empty($data['nombrechambres'])){
            $data['nombrechambres_err'] = 'Please enter the number of rooms in your ship';
          }
        }

        // Make sure there are no errors
        if(empty($data['nom_err']) && empty($data['nombreplaces_err']) && empty($data['nombrechambres_err']) && empty($data['image_err'])){
          // Validation passed


          //Execute
          if($this->shipModel->addShip($data)){
            // Redirect to ships
            flash('ship_added', 'Ship Added');
            redirect('ships');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('ships/add', $data);
        }

      } else {
        $data = [
          'nom' => '',
          'image' => '',
          'nombreplaces' => '',
          'nombrechambres' => '',
        ];

        $this->view('ships/add', $data);
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
          echo "<a href='cruises'>return to cruises</a>";
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
          'image' => trim($image),
          'nombre_places' => trim($_POST['nombreplaces']),
          'nombre_chambres' => trim($_POST['nombrechambres']),
          'user_id' => $_SESSION['user_id'],   
          'nom_err' => '',
          'nombrechambres_err' => '',
          'nombreplaces_err' => ''

        ];

         
         // Validate 
         if(empty($data['nom'])){
          $data['nom_err'] = 'Please enter ship name';
          // Validate name
          if(empty($data['nombreplaces'])){
            $data['nombreplaces_err'] = 'Please enter the number of places in your ship';
          }
          if(empty($data['nombrechambres'])){
            $data['nombrechambres_err'] = 'Please enter the number of rooms in your ship';
          }
        }

        // Make sure there are no errors
        if(empty($data['nom_err']) && empty($data['nombreplaces_err']) && empty($data['nombrechambres_err'])){
          // Validation passed
          //Execute
          if($this->shipModel->updateShip($data)){
            // Redirect to login
            flash('ship_edited', 'Ship Edited');
            redirect('ships');
          } else {
            die('Something went wrong');
          }
        } else {
          // Load view with errors
          $this->view('ships/edit', $data);
        }

      } else {


        
        // Get post from model
        $ship = $this->shipModel->getShipById($id);

        // Check for owner
        // if($ship->user_id != $_SESSION['user_id']){
        //   redirect('ships');
        // }
        

        $data = [
          'id'=>$ship->id,
          'image'=>$ship->image,
          'nom'=>$ship->nom,
          'nombre_places'=>$ship->nombre_places,
          'nombre_chambres'=>$ship->nombre_chambres
        ];

        $this->view('ships/edit', $data);
      }
    }


    
    // Delete Post
    public function delete($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Execute
        if($this->shipModel->deleteShip($id)){
          // Redirect to login
          flash('post_message', 'Post Removed');
          redirect('ships');
          } else {
            die('Something went wrong');
          }
      } else {
        redirect('ships');
      }
    }
  }