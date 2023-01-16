<?php
  class Searchs extends Controller{

  protected $searchModel;
  
    public function __construct(){
      if(!isset($_SESSION['user_id'])){
        redirect('users/login');
      }
      // Load Models

    $this->searchModel = $this->model('Search');

    }
 
    // Load All roomtypes
    public function results(){

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'value1' => trim($_POST['value1']),
        'value2' => trim($_POST['value2']),
      ];

    } 

      $results = $this->searchModel->search();

      $data = [
        'results' => $results
      ];
      
      $this->view('cruises/index', $data);
    }



   
 

  


    

  }