<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';

        $this->view('templates/header', $data);
        $this->view('templates/navbar');
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    
}
