<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {


	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('dashboard/index');
        $this->load->view('template/footer');
	}
}
