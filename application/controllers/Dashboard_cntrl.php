<?php
class Dashboard_cntrl extends CI_Controller {

        public function __construct()
        {
            //echo FCPATH . 'assets/uploads/';exit;

                parent::__construct();
                $this->load->model('Inventory_model');
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
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
        public function product(){
            $foo['firstname'] = $this -> session -> userdata('firstname');//pass only array val to html
            $this->load->view('login_templates/dashboard_header',$foo);
            $this->load->view('login_templates/product_tab');
            $this->load->view('login_templates/dashboard_footer');
        }
        public function product_add(){
        $myproduct = $this->Inventory_model->product_model();
        //var_dump($myproduct);exit;
        echo json_encode($myproduct);
        }
        public function form(){
            $foo['firstname'] = $this -> session -> userdata('firstname');//pass only array val to html
            $mydrop['categorys'] = $this->Inventory_model->category();
            //var_dump($mydrop);exit;
            $this->load->view('login_templates/dashboard_header',$foo);
            $this->load->view('login_templates/product_form',$mydrop);
            $this->load->view('login_templates/dashboard_footer');
        }
        public function form_add(){
            $request = $_POST;
            //var_dump($request);exit;
            $config['upload_path'] = FCPATH . 'assets/uploads/';//fc path declare basepath of frontend
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '100';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
            $config['encrypt_name']  = TRUE;
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload())
            {
                $error = array('error' => $this->upload->display_errors());  
                $this->load->view('product_form', $error);
            }
            else
            {
                $upload_data = $this->upload->data();
                $filename = $upload_data['file_name']; 
                $title = $request['title'];
                $category = $request['category'];
                $price = $request['price'];
                $description = $request['description'];
                $myinsert = $this->Inventory_model->form_insert($filename,$title,$category,$price,$description);
                redirect(site_url('dashboard_cntrl/product'));
            }

            }
            public function form_edit(){
                $data = array();
                $id = $this->uri->segment(3);
                $data['categorys'] = $this->Inventory_model->category();
                //pass value to view as array
                if (empty($id))
                { 
                 show_404();
                }else{
                  $data['note'] = $this->Inventory_model->edititem($id);
                  $foo['firstname'] = $this -> session -> userdata('firstname');//pass only array val to html
                  $this->load->view('login_templates/dashboard_header',$foo);
                  $this->load->view('login_templates/product_edit', $data);//pass two array value to one name data
                  $this->load->view('login_templates/dashboard_footer');
                }

            }
            public function form_update($id){
                //echo $id;exit;getting id from input fireld
                //$id = $this->uri->segment(3);
                
                $request = $_POST;
                //var_dump($request);exit;
                $config['upload_path'] = FCPATH . 'assets/uploads/';//fc path declare basepath of frontend
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']	= '100';
                $config['max_width']  = '1024';
                $config['max_height']  = '768';
                $config['encrypt_name']  = TRUE;
                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload())
                {
                   
                    $error = array('error' => $this->upload->display_errors());  
                    $this->load->view('product_form', $error);
                }
                else
                {
                    //echo $id;exit;
                    $upload_data = $this->upload->data();
                    $filename = $upload_data['file_name']; 
                    $title = $request['title'];
                    $category = $request['category'];
                    $price = $request['price'];
                    $description = $request['description'];
                    $myinsert = $this->Inventory_model->updateitem($id,$filename,$title,$category,$price,$description);
                    redirect(site_url('dashboard_cntrl/product'));
                }
    
                }
                public function form_delete(){
                    $id = $this->uri->segment(3);
                    if (empty($id))
                    { 
                     show_404();
                    }else{
                      $record = $this->Inventory_model->deleteitem($id);
                      redirect(site_url('dashboard_cntrl/product'));

                    }
    
                }
                public function categoryload(){
                    $foo['firstname'] = $this -> session -> userdata('firstname');//pass only array val to html
                    $this->load->view('login_templates/dashboard_header',$foo);
                    $this->load->view('login_templates/category_form');
                    $this->load->view('login_templates/dashboard_footer');
                }
                public function category_add(){
                    $category = $_POST['category'];
                    $catinsert = $this->Inventory_model->category_insert($category);
                    redirect(site_url('dashboard_cntrl/product'));
                }
                public function categorytable(){
                    $foo['firstname'] = $this -> session -> userdata('firstname');//pass only array val to html
                    $this->load->view('login_templates/dashboard_header',$foo);
                    $this->load->view('login_templates/category_tab');
                    $this->load->view('login_templates/dashboard_footer');
                }
                public function categorytab_add(){
                    $cattab = $this->Inventory_model->category_model();
                    echo json_encode($cattab);
                    }
                    public function category_edit(){
                        $id = $this->uri->segment(3);
                        $data = array();//pass value to view as array
                        if (empty($id))
                        { 
                         show_404();
                        }else{
                          $data['mynote'] = $this->Inventory_model->editcat($id);
                          $foo['firstname'] = $this -> session -> userdata('firstname');//pass only array val to html
                          $this->load->view('login_templates/dashboard_header',$foo);
                          $this->load->view('login_templates/category_editform', $data);
                          $this->load->view('login_templates/dashboard_footer');
                        }
                    }
                    public function category_update($id){
                        //id from form multipart url
                    $category = $_POST['category'];
                    $myupdate = $this->Inventory_model->updatecat($id,$category);
                    redirect(site_url('dashboard_cntrl/categorytable'));
                }
                public function category_delete(){
                    $id = $this->uri->segment(3);
                    if (empty($id))
                    { 
                     show_404();
                    }else{
                      $record = $this->Inventory_model->deletecat($id);
                      redirect(site_url('dashboard_cntrl/categorytable'));

                    }
    
                }

    }
