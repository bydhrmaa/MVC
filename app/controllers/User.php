<?php

class User extends Controller
{
    public function index()
    {
        $data['title'] = 'User';

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }

    
}
