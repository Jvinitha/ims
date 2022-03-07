
<?php
class Inventory_model extends CI_Model {
        
        public function __construct()
        {
               // $this->load->database();auto load function 
                
        }
        public function add_regmodel($fname,$lname,$email, $code)//get argument values from cntrl
        {
            //$query = $this->db->get('user');
            $status =0;
            $firstname = "";
            $query = $this->db->get_where('user', array('email' => $email));
       
            $row = $query->row();
            if (!isset($row))
            {
                  
                $status =1;
                $data = array(
                    'firstname' => $fname,
                    'lastname' => $lname,
                    'email' => $email,
                    'password' => $code);
            //var_dump($data);exit;
            $this->db->insert('user', $data);
                   
            }
              return $status;
            
              //echo $status;
              
            }

            public function add_loginmodel($email,$code){
               // $firstname ="";
                
                $query = $this->db->get_where('user', array('email' => $email,'password' => $code));
           
                $row = $query->row();
                
            return $row;

        }
    }