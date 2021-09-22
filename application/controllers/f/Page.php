<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

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
		//$this->front_end_layouts->set_title('About Us');
		//$this->front_end_layouts->view('templates/front_end/index');
	}

	public function about_us()
	{
		$this->front_end_layouts->set_title('About Us');
		$this->front_end_layouts->view('templates/front_end/about_us');
	}

	public function vision_mission()
	{
		$this->front_end_layouts->set_title('Vision & Mission');
		$this->front_end_layouts->view('templates/front_end/vision_mission');
	}

	public function founders()
	{
		$this->front_end_layouts->set_title('Founders');
		$this->front_end_layouts->view('templates/front_end/founders');
	}

	public function journey()
	{
		$this->front_end_layouts->set_title('Journey');
		$this->front_end_layouts->view('templates/front_end/journey');
	}

	public function mentors()
	{
		$this->front_end_layouts->set_title('Mentors');
		$this->front_end_layouts->view('templates/front_end/mentors');
	}

	public function free_courses()
	{
		$this->front_end_layouts->set_title('Free Courses');
		$this->front_end_layouts->view('templates/front_end/free_courses');
	}

	public function all_programs()
	{
		$this->front_end_layouts->set_title('All Programs');
		$this->front_end_layouts->view('templates/front_end/all_programs');
	}

	public function program()
	{
		$this->front_end_layouts->set_title('Program');
		$this->front_end_layouts->view('templates/front_end/program');
	}

	public function membership()
	{
		$this->front_end_layouts->set_title('Membership');
		$this->front_end_layouts->view('templates/front_end/membership');
	}

	public function book()
	{
		$this->front_end_layouts->set_title('Book');
		$this->front_end_layouts->view('templates/front_end/book');
	}

	public function who_we_are()
	{
		$this->front_end_layouts->set_title('Who We ARE');
		$this->front_end_layouts->view('templates/front_end/who_we_are');
	}

	public function our_team()
	{
		$this->front_end_layouts->set_title('Our Team');
		$this->front_end_layouts->view('templates/front_end/our_team');
	}

	public function press()
	{
		$this->front_end_layouts->set_title('Press');
		$this->front_end_layouts->view('templates/front_end/press');
	}

	public function careers()
	{
		$this->front_end_layouts->set_title('Careers');
		$this->front_end_layouts->view('templates/front_end/careers');
	}

	public function blogs()
	{
		$this->front_end_layouts->set_title('Blogs');
		$this->load->model('f/blog_model');
		$data['blog_data'] = $this->blog_model->wp_posts(); 
		$data['wp_users'] = $this->blog_model->wp_users(); 
		$this->front_end_layouts->view('templates/front_end/blogs', $data);
	}

	public function blog()
	{
		$this->front_end_layouts->set_title('Blog');
		$this->front_end_layouts->view('templates/front_end/blog');
	}

	public function support()
	{
		$this->front_end_layouts->set_title('Support');
		$this->front_end_layouts->view('templates/front_end/support');
	}

	public function contact_us()
	{
		$this->front_end_layouts->set_title('Contact Us');
		$this->front_end_layouts->view('templates/front_end/contact_us');
	}

	public function partnerships()
	{
		$this->front_end_layouts->set_title('Partnerships');
		$this->front_end_layouts->view('templates/front_end/partnerships');
	}

	public function faqs()
	{
		$this->front_end_layouts->set_title('Faq\'s');
		$this->front_end_layouts->view('templates/front_end/faqs');
	}

	/*razor pay */

	public function pay()
	{
		$data['inputs'] = $this->input->post();
		
		$data['razorpay_keys'] = [
			'keyId' => RAZOR_KEY_ID,
			'secretKey' => RAZOR_KEY_SECRET
		];
		
		//print_r($data);
	
		$this->front_end_layouts->view('templates/front_end/razorpay/pay',$data);
	}

	public function verify(){
		$this->front_end_layouts->set_title('success');
		//$data['response'] = $this->input->post();
		$this->front_end_layouts->view('templates/front_end/razorpay/verify');
	}
	
	/*razor pay */
}