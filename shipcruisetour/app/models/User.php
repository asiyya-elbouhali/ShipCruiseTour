<?php
  class User {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Add User / Register
    public function register($data){
      // Prepare Query
    $this->db->query('INSERT INTO users (nom, email,password,role) 
      VALUES (:nom, :email, :password, 0)');


      // Bind Values
      $this->db->bind(':nom', $data['nom']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':password', $data['password']);
      
       
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // Find USer BY Email
    public function findUserByEmail($email){
      $this->db->query("SELECT * FROM users WHERE email = :email");
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      //Check Rows
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }

    // Login / Authenticate User
    public function login($email, $password){
      $this->db->query("SELECT * FROM users WHERE email = :email");
      $this->db->bind(':email', $email);

      $row = $this->db->single();
      
      $hashed_password = $row->password;
      if($password == $hashed_password){
        return $row;
      } else {
        return false;
      }
    }

    // Find User By ID
    public function getUserById($id){
      $this->db->query("SELECT * FROM users WHERE id = :id && role = 1");
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }


    public function getUserByRole($role){
    $this->db->query("SELECT * FROM users WHERE role = 1");

    }
  }