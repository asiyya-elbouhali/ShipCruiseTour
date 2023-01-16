<?php
  class PortCruises extends Controller{
  protected $portcruiseModel;

 
  
    public function __construct(){
      if(!isset($_SESSION['user_id'])){
        redirect('users/login');
      }
      // Load Models
      $this->cruiseModel = $this->model('PortCruise');
    
    }
 

    public function add($id_port,$id_cruise){

      
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
        'prix' => trim($_POST['prix']),
        'image' => trim($image),
        'nombre_nuits' => trim($_POST['nombrenuits']),
        'port_depart' => trim($_POST['portdepart']),
        'date_depart' => trim($_POST['datedepart']),
        'ship' => trim($_POST['ship']),
        'user_id' => $_SESSION['user_id'],   
        'prix_err' => '',
        'image_err' => '',
        'nombrenuits_err' => '',
        'portdepart_err' => '',
        'datedepart_err' => ''
      ]; 

         
         if(empty($data['prix'])){
          $data['prix_err'] = 'Please enter the cruise date';
          // Validate name
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
        }

        // Make sure there are no errors
        if(empty($data['prix_err']) && empty($data['image_err']) && empty($data['nombrenuits_err']) && empty($data['portdepart_err']) && empty($data['datedepart_err'])&& empty($data['ship_err'])){
          // Validation passed


          //Execute
          if($this->cruiseModel->addCruise($data)){
            // Redirect to ships
            flash('cruise_added', 'Cruise Added');
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
        $cruise = $this->cruiseModel->getCruiseById($id);

        // Check for owner
        // if($ship->user_id != $_SESSION['user_id']){
        //   redirect('ships');
        // }
        
        
        $data = [
          'id'=>$cruise->id,
          'prix'=>$cruise->prix,
          'image'=>$cruise->image,
          'nombre_nuits'=>$cruise->nombre_nuits,
          'port_depart'=>$cruise->port_depart,
          'date_depart'=>$cruise->date_depart,
          'ship'=>$cruise->ship

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