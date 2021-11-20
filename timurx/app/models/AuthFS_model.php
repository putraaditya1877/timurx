<?php 
class AuthFS_model{
    // private $table = 'users';
    private $db;
 
      public function __construct(){
        $this->db = new Database;
  
   }
   public function cekUser($email, $password){
       $query = "SELECT * FROM users WHERE email=:email AND password=:password";
       $this->db->query($query);
       $this->db->bind('email', $email);
       $this->db->bind('password', $password);
 
       $this->db->execute();
      return $this->db->rowCount();
   }
   public function setSession($email, $password){
       $query = "SELECT * FROM users WHERE email=:email AND password=:password";
       $this->db->query($query);
       $this->db->bind('email', $email);
       $this->db->bind('password', $password);
  
    //    $this->db->execute();
     return $this->db->resultSet();
   }
}