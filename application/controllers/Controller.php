<?php


class Controller extends CI_Controller  {
    
    public function index()
    {
        $this->load->view('home');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function register()
    {
        $this->load->view('register');
    }
}
