<?php


class Home extends Controller
{
    public function index($company = 'SKENSA')
    {
        $data['title'] = 'Home';
        $data['company'] = $company;
        $data['name'] = $this->model('User_model')->getUser();
        $data['users'] = $this->model('User_model')->getAllUser();

        $this->view('templates/header', $data);
        $this->view('templates/navbar', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function about($company = 'SKENSA')
    {
        $data['title'] = 'About';
        $data['company'] = $company;

        $this->view('templates/header', $data);
        $this->view('templates/navbar', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function users($company = 'SKENSA')
    {
        $data['title'] = 'users';
        $data['company'] = $company;
        $data['users'] = $this->model('User_model')->getAllUser();

        $this->view('templates/header', $data);
        $this->view('templates/navbar', $data);
        $this->view('user/user', $data);
        $this->view('templates/footer');
    }
}
