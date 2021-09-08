<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/home/<method_name>
	 */	

	public function __construct()
	{
		parent::__construct();	
	}

	public function index()
	{
		$this->front_end_layouts->set_title('User');
		$this->front_end_layouts->view('templates/front_end/user');
	}

	public function user_login()
	{
		$this->front_end_layouts->set_title('User Login');
		$this->front_end_layouts->view('templates/front_end/user_login');
	}

	public function user_signup()
	{
		$this->front_end_layouts->set_title('User Registration');
		$this->front_end_layouts->view('templates/front_end/user_signup');
	}
}