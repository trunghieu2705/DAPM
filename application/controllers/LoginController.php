<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use CodeIgniter\Controller;
use Config\Services;

class LoginController extends CI_Controller {
   
    public function __construct()
   {
        parent:: __construct();
       $this->load->library('form_validation');
       //$this->load->model('<ecom_tutorial>/models/LoginModel');
     }

	public function index()
	{
        $this->load->view('template/header');
		$this->load->view('login/index');
        $this->load->view('template/footer');

	}
    public function login(){
        
        $this->form_validation->set_rules('email', 'Email', 'required', ['required' => 'Bạn nên điền %s']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Bạn nên điền %s']);
        if($this->form_validation->run()){
            $this->load->view('dashboard/index');
            $email = md5($this->input->post('email'));
            $password = md5($this->input->post('password'));
           // $result = $this->LoginModel->checkLogin($email,$password);
        }
        else{
            $this -> index();
       }
       
    }
}