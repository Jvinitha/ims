<?php
class Dashboard_cntrl extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Inventory_model');
                $this->load->helper('form');
                $this->load->library('form_validation');
                $this->load->helper('url');
                if(!isset($_SESSION['firstname'])){//check session after destroy allow only if login to enter index and logout page
                    redirect(site_url('inventory/login')); 
                   
              }
    
        }
        public function index(){
            
            $foo['firstname'] = $this -> session -> userdata('firstname');//pass only array val to html
            
            $this->load->view('login_templates/dashboard_header',$foo);
            $this->load->view('login_templates/page_content');
            $this->load->view('login_templates/dashboard_footer');
       
        }
        public function logout(){
            
            session_destroy();
            redirect(site_url('inventory/login')); 
       
        }
    }
