<?php
class Store extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Inventory_model');
                $this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->load->library('cart');
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
        public function cart_details(){
            $id = $this->uri->segment(3);
            $data = $this->Inventory_model->detail_cart($id);
            $productId =$data['id'];
            $title =$data['title'];
            $image =$data['image'];
            $price =$data['price'];
            $description =$data['description'];
            $note = array(
                'id'      => $productId,
                'qty'     => 1,
                'name'    =>  $title,
                'image'   =>  $image,
                'price'   =>  $price,
                'description' =>  $description
        );
             $this->cart->insert($note);
             redirect(site_url('store/cart_display'));
        }
        public function cart_display(){
            //$foo = $this->cart->contents();
            //var_dump($foo);exit;
            $data['myvalue']=$this->cart_info();
            $this->load->view('login_templates/store_header');
           $this->load->view('login_templates/address',$data);
           $this->load->view('login_templates/store_footer');
        }
       public function cart_update(){
        $Item = file_get_contents("php://input");
        $request = json_decode($Item);
        $updatetype= $request->updatetype;
        $rowid= $request->row_id;
        $qty= $request->qty;
    
            $mydata = array(
                'rowid' => $rowid,
                'qty'   => $qty
                         );
        $this->cart->update($mydata);
            //$this->load->view('login_templates/address');
           $myval=$this->cart_info();
            echo $myval;
        
         }
         public function cart_info(){
             $data = $this->cart->contents();
             $product_sum = 0;
             $shipping_sum = 0;
             
             foreach($data as $tab){
                $product_sum = $product_sum+$tab['subtotal']; 
                $shipping_sum = $shipping_sum+(20* $tab['qty']);
                $info[] = array('id' => $tab['id'],
                'title' => $tab['name'],
                'image' => $tab['image'],   
                'price' => $tab['price'],
                'qty'     => $tab['qty'],
                'description' => $tab['description'],
                'rowid' => $tab['rowid'],
                'subtotal' => $tab['subtotal']);

                
             }
           
             
             //var_dump( $info);
             $total_shipping =  $shipping_sum+30;
             $total= $product_sum+ $total_shipping;
             $myinfo= array('product_total' =>$product_sum,'shipping' =>$total_shipping,'total' => $total,'product_info' =>$info);
            
          
            //var_dump( $myinfo);exit;
           $foo =  json_encode($myinfo);
           return $foo;
         }
         public function cart_view(){
            $this->load->view('login_templates/store_header');
            $this->load->view('login_templates/location_view');
            $this->load->view('login_templates/store_footer');
         }
         public function cart_location(){
            $user_id = $this -> session -> userdata('id');

            $userid = $user_id;
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $country = $_POST['country'];
            $pincode = $_POST['zipcode'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $myinsert = $this->Inventory_model->location_insert($userid,$firstname,$lastname,$address,$phone,$country,$pincode,$city,$state);
            redirect(site_url('store/cart_display'));
           
        }
        public function edit_cartaddress(){
            $id = $this->uri->segment(3);
            $data['notes'] = $this->Inventory_model->edit_address($id);
            $this->load->view('login_templates/store_header');
            $this->load->view('login_templates/location_edit',$data);
            $this->load->view('login_templates/store_footer');
        }
        public function update_cartaddress($id){
            $user_id = $this -> session -> userdata('id');
            $userid = $user_id;
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $country = $_POST['country'];
            $pincode = $_POST['zipcode'];
            $city = $_POST['city'];
            $state = $_POST['state'];
        $myupdate = $this->Inventory_model->location_update($id,$userid,$firstname,$lastname,$address,$phone,$country,$pincode,$city,$state);
        redirect(site_url('store/review_cart'));
    }
    public function review_cart(){
        $data['myvalue']=$this->cart_info();
        $data['myaddress'] = $this->Inventory_model->address_display();
       // var_dump($data);exit;
        $this->load->view('login_templates/store_header');
       $this->load->view('login_templates/cart_reviewpg',$data);
       $this->load->view('login_templates/store_footer');   
    }
  
}