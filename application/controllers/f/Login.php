<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://localhost/dailyshop/
	 *	- or -
	 *		http://localhost/dailyshop/index.php/home/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://localhost/dailyshop/
	 *-
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/home/<method_name>
	 */	

	public function __construct()
	{
		parent::__construct();
	
		$this->load->model('f/login_model');	
	}

	public function index()
	{
		if(!isset($this->session->userdata['logged_in']))
		{
			$this->load->view('templates/front_end/user_login');
		}
		else
		{
			redirect('/a/dashboard/');
		}
	}

	public function login_lookup()
	{
		$user_id = $this->login_model->login();

		echo $user_id;

		if ($user_id) 
		{          
			
			$newdata = array(
		  
			    'username'  => $this->input->post('email'),
			    'user_id'  => $user_id,
			    'logged_in' => TRUE
			);

			$this->session->set_userdata($newdata);

		    redirect('/a/dashboard/');
		}
		else
		{
			$this->session->set_flashdata('error_message', 'Please fill in correct information!');
		    redirect('user-login');
		}
	}

	public function logout_lookup()
	{		
		if(!isset($this->session->userdata['logged_in']))
		{
			redirect('/a/login/');
		}
		else
		{
			$this->session->sess_destroy();
			redirect('/a/login/');
		}
	}
}