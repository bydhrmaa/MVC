<?php
class User extends Controller
{
    public function index()
    {
        $data["title"] = "mvc";
        $data["user"] = $this->model("User_model")->show_profile($_SESSION);
        $data["company"] = "Skensa";

        $this->view('templates/header', $data);
        $this->view('templates/navbar', $data);
        $this->view('user/profile', $data);
        $this->view('templates/footer');
    }
}
