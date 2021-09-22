<?php  
	class Blog_model extends CI_Model {

       public function __construct()
        {
            parent::__construct();        		
        }

        public function wp_posts()
        {

            $query = $this->db->select('*')->from('wp_posts')->get();
            return $query->result();
           
        }

        public function wp_users()
        {

            $query = $this->db->select('ID, user_nicename, display_name, user_email ')->from('wp_users')->get();
            return $query->result();
           
        }

    }	
?>