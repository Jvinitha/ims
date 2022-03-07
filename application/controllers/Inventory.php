<?php
class Inventory extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Inventory_model');
                $this->load->helper('form');
                $this->load->library('form_validation');
                $this->load->helper('url');
                
                
        }

        public function login()
        {
            $this->load->view('login_templates/header');
            $this->load->view('login_templates/login');
            $this->load->view('login_templates/footer');  
        }
        public function add_login(){
            $Item = file_get_contents("php://input");
            $request = json_decode($Item);
            if(isset($request->updatetype)  && ($request->updatetype == 'check')){
                $updatetype= $request->updatetype;
                $email = $request->email; 
                $passcode = $request->password;
                $code = md5($passcode);
             $logdisplay = $this->Inventory_model->add_loginmodel($email,$code);
             if(isset($logdisplay)){//return row val from model
                // var_dump($logdisplay);exit;
                $firstname = $logdisplay->firstname;
                $email = $logdisplay->email;
                $id = $logdisplay->id;
                $the_session = array("id" => "$id","firstname" => "$firstname","email" => "$email");
                $this->session->set_userdata($the_session); //set session values
                echo json_encode(array('status'=>"sucess"));
               // $this->load->view('login_templates/dashboard');
            }else{
                    echo json_encode(array('status'=>"invalid"));
                }
            }
        }
        
        public function register(){
            $this->load->view('login_templates/header');
            $this->load->view('login_templates/register');
            $this->load->view('login_templates/footer');

        }
        
        public function add_register()
        {
            $Item = file_get_contents("php://input");

            $request = json_decode($Item);
           
         //$request =  (object) array("updatetype"=>"add","firstname"=>"ram","lastname"=>"ravi","email"=>"selva@gmail.com","password"=>"vini123");

            if(isset($request->updatetype)  && ($request->updatetype == 'add')){
                $updatetype= $request->updatetype;
                $fname = $request->firstname;
                $lname = $request->lastname;
                $email = $request->email; 
                $passcode = $request->password;
                $code = md5($passcode);
        //echo $fname; exit;
           
           $mydisplay = $this->Inventory_model->add_regmodel($fname,$lname,$email,$code);//argument pass to model access
               // $this->load->view('news/success');
              
               if($mydisplay==1){
                echo json_encode(array('status'=>"inserted"));
            }else{
                    echo json_encode(array('status'=>"already"));
                }


            }
                
        }
        
        

    }