<?php
class User_model
{
   private $table = "users";
   private $db;

   private $name =  "Test";
   public function getUser()
   {
      return $this->name;
   }

   public function __construct()
   {
      $this->db = new Database;
   }

   public function getAllUser()
   {
      $this->db->query("SELECT * FROM {$this->table}");
      return $this->db->resultAll();
   }

   public function getUserById($id)
   {
      $this->db->query("SELECT * FROM {$this->table} WHERE id=:$id");
      $this->db->bind("id", $id);

      return $this->db->resultSingle();
   }

   // register user | create user
   public function createUser($post)
   {
      if ($post["password"] == $post["ulangi_password"]) {

         $query = "INSERT INTO {$this->table} (username, email, first_name, last_name, password) VALUES (:username, :email, :first_name, :last_name, :password)";
         $this->db->query($query);

         $this->db->bind('username', $post['username']);
         $this->db->bind('email', $post['email']);
         $this->db->bind('first_name', $post['firstName']);
         $this->db->bind('last_name', $post['lastName']);
         $this->db->bind('password', md5($post['password']) . SALT);
         $this->db->execute();

         return $this->db->rowCount();
      } else {
         return 0;
      }
   }

   public function login($post)
   {
      $this->db->query("SELECT * FROM {$this->table} WHERE email=:email");

      $this->db->bind("email", $post["email"]);

      $allData = $this->db->resultSingle();

      $hashPassword = $allData["password"];

      if (md5($post["password"]) + SALT == $hashPassword) {
         $_SESSION["login"] = "sudah_login";
         $_SESSION["email"] = $allData["email"];
         return "Login Success";
      } else {
         return "try again";
      }
   }

   public function show_profile($post)
   {
      $this->db->query("SELECT * FROM {$this->table} WHERE email=:email");
      $this->db->bind("email", $post["email"]);

      return $this->db->resultSingle();
   }
}
