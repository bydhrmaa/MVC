<?php
class Register extends Controller
{
   public function index($company = "SKENSA")
   {
      $data['title'] = "Register";
      $data['company'] = $company;
      $this->view('templates/header', $data);
      $this->view('user/register', $data);
      $this->view('templates/footer');
   }

   public function insert()
   {

      if ($this->model('User_model')->createUser($_POST) > 0) {
         header('Location:' . BASE_URL . '/login');
         exit;
      } else {
         header('Location:' . BASE_URL . '/register');
         exit;
      }
   }
}
