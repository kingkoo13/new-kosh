<?php  
	class Contact_model extends CI_Model {
        
        public function __construct()
        {
            parent::__construct();
            //$this->load->model('a/patient_model');              
            //$this->load->model('a/doctor_model');              
        }

        public function insert_contact()
        {

            echo $this->db->escape($this->input->post('name'));    
            /*if(empty($this->session->admin_id))
            {
                $this->admin_id = 0;
            }
            else
            {
                $this->admin_id = html_escape($this->session->admin_id);
            }

            if(empty($this->input->post('name')))
            {
                $this->name = html_escape(strtolower(trim($this->db->escape($this->input->post('name')), "'' ")));
            }
            else
            {
                $this->doctor_id = html_escape(strtolower(trim($this->db->escape($this->input->post('doctor')), "'' ")));
            }  

            if(!empty($this->input->post('patient_id')))
            {
                $this->patient_id = html_escape(trim($this->db->escape($this->input->post('patient_id')), "'' "));
            }            
            else
            {
                $this->patient_id = $this->db->insert_id(); 
            }

            $this->morning_shift = $this->trim_time(html_escape(trim($this->input->post('morning_shift'))), "'' ");
           
            $this->evening_shift = $this->trim_time(html_escape(trim($this->input->post('evening_shift'))), "'' ");

            $this->visit_purpose = html_escape(trim($this->db->escape($this->input->post('visit_purpose')), "'' "));

            $this->date = html_escape(trim($this->db->escape($this->input->post('submitted_date')), "'' "));
        
            if(empty($this->date))
            {
                $this->date = date("Y-m-d");
            }

            date_default_timezone_set("Asia/Karachi");
            
            $date = date("Y-m-d H:i:s");
            
            $this->insert_date = $date;

            $this->update_date = $date;

            $data = array(

                'admin_id' => $this->admin_id,

                'doctor_id' => $this->doctor_id,

                'patient_id' => $this->patient_id,

                'date' => $this->date,

                'morning_shift' => $this->morning_shift,

                'evening_shift' => $this->evening_shift,

                'visit_purpose' => $this->visit_purpose,

                'inserted_date' => $this->insert_date,
                                
                'updated_date' => $this->update_date

            );



            $this->db->insert('appointment', $data);*/


        }
    }

?>