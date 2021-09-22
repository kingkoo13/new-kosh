<?php  
	class Login_model extends CI_Model {

        private $salt;
        private $password;
        private $admin_id;
    
        public function __construct()
        {
            parent::__construct();        		
        }

        public function login()
        {

            $email = strtolower(trim($this->db->escape($this->input->post('email')), "''"));
            
            $password = trim($this->db->escape($this->input->post('password')), "''");
            $user = $this->get_user($email);
            if($user = $this->get_user($email))            
            {
                foreach ($user as $key) 
                {
                    $this->password =  $key['password'];
                    $this->salt =  $key['salt'];
                    $this->user_id =  $key['id'];
                }

                $password = hash('sha512', $password . $this->salt);
                
                if($password === $this->password )
                {
                    return $this->user_id;
                }
                    return FALSE;    
            }
            return FALSE;    
        }

        public function get_user($email)
        {
            $field = is_numeric($email) ? 'mobile_number' : 'email';
            $sql = "SELECT * FROM user WHERE $field = ?";
            $q = $this->db->query($sql, array($email));

            if($q->num_rows() > 0)
            {
                return $q->result_array();
            }
                return FALSE;
        }
	}	
?>