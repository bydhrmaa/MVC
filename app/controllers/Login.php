<?php
class Login extends Controller
{
   public function index()
   {
      $data['title'] = "Login";

      $this->view("templates/header", $data);
      $this->view("user/login", $data);
      $this->view("templates/footer", $data);
   }

   public function checkLogin()
   {
      if ($this->model("User_model")->login($_POST) == "Login Success") {
         Flasher::setFlash('Kamu Berhasil Login!', 'Selamat Datang! ', 'success');
         header('Location:' . BASE_URL . "/user");
         exit;
      } else {
         header('Location:' . BASE_URL . "/login");
         exit;
      }
   }
}
