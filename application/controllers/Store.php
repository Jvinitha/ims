<?php
class Store extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Inventory_model');
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
        }
        public function index(){ 
            $this->load->view('login_templates/store_header');
            $this->load->view('login_templates/index_store');
            $this->load->view('login_templates/store_footer');
       
        }
        public function store_category(){ 
           $data['firstname'] = $this -> session -> userdata('firstname');
           //var_dump($data);exit;
            $data['noteone'] = $this->Inventory_model->catone(); 
            $data['notetwo'] = $this->Inventory_model->cattwo();
            $data['notethree'] = $this->Inventory_model->catthree();
           // var_dump($data);exit;
            $this->load->view('login_templates/store_header');
            $this->load->view('login_templates/index_store',$data);
            $this->load->view('login_templates/store_footer');
       
        }
       
        public function detail_page(){
            $id = $this->uri->segment(3);
            $data['mynotes'] = $this->Inventory_model->detail_model($id);
           $this->load->view('login_templates/productlist_header');
            $this->load->view('login_templates/view_detail',$data);
      
        }
        public function location(){
            $this->load->view('login_templates/address');
           
        }


}