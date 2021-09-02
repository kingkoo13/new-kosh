<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coachesprofile extends CI_Controller {

/*
	this is a custom development

	http://localhost/new-kosh/coaches

*/

	public function __construct()
	{
		parent::__construct();	
	}

	public function index()
	{
		$this->front_end_layouts->set_title('Profile');
		$this->front_end_layouts->view('templates/front_end/coachesprofile');
	}
}