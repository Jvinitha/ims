
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
        public function category(){
            $query = $this->db->get_where('category', array('delete_date' => '0'));
            $drop = $query->result_array();
        return $drop;
    }
        public function product_model2(){
             $query = $this->db->get_where('product', array('delete_date' => '0'));
             $datatab = $query->result_array();
              foreach($datatab as $tab){
                $id=$tab['category_id'];
             $name = $this->db->get_where('category', array('id' => $id));
             $catname = $name->row();
             $category_name =$catname->category;
             //$info[''] =$tab['category_id'];
             $info[] = array(//mention array bcz storing multiple set of array values
                'id' => $tab['id'],
                'title' => $tab['title'],
                'category_id' => $category_name,
                'image' => $tab['image'],
                'price' => $tab['price'],
                'description' => $tab['description']);
                }
         return $info;

     }
     public function product_model(){//use any one method from above
        $this->db->select('product.id,product.title,category.category,product.image,product.price,product.description');
        $this->db->from('product');
        $this->db->join('category','category.id=product.category_id');
        $query = $this->db->get();
       $data=$query->result_array();
      
       return $data;

     }

        public function form_insert($filename,$title,$category,$price,$description){
            $data = array(//storing one set of array
                'image' => $filename,
                'title' => $title,
                'category_id' => $category,
                'price' => $price,
                'description' => $description);
        //var_dump($data);exit;
        $this->db->insert('product', $data);
        }
        public function edititem($id){
            
        $query = $this->db->get_where('product', array('id' => $id));
        return $query->row();
        }
        public function updateitem($id,$filename,$title,$category,$price,$description){
            //echo $id;exit;
            $data = array(
                'image' => $filename,
                'title' => $title,
                'category_id' => $category,
                'price' => $price,
                'description' => $description);
                $this->db->where('id', $id);
                 $this->db->update('product', $data);
            
            }
            public function deleteitem($id){
                //echo $id;exit;
                $this->db->set('delete_date', '1');
                $this->db->where('id', $id);
                $this->db->update('product');
                
                }
                public function category_insert($category){
                    $data = array(
                        'category' => $category,
                    );
                //var_dump($data);exit;
                $this->db->insert('category', $data);
                }
                public function category_model(){
                    $query = $this->db->get_where('category', array('delete_date' => '0'));
                    $row = $query->result_array();
                    return $row;
            }
            public function editcat($id){
                $query = $this->db->get_where('category', array('id' => $id));
                return $query->row();
                }
                public function updatecat($id,$category){
                    //echo $id;exit;
                    $data = array(
                        'category' => $category,
                    );
                        $this->db->where('id', $id);
                         $this->db->update('category', $data);
                    
                    }
                    public function deletecat($id){
                        //echo $id;exit;
                     
                        $this->db->where('id', $id);
                        $this->db->update('category');
                        
                        }
                        public function catone(){
                            $this->db->select('*');
                            $this->db->from('product');
                            $this->db->where('category_id', '1');
                            $query = $this->db->get();
                            $row = $query->result_array();
                            return $row;
                            }   
                            public function cattwo(){
                                $this->db->select('*');
                                $this->db->from('product');
                                $this->db->where('category_id', '2');
                                $query = $this->db->get();
                                $row = $query->result_array();
                                return $row;
                                }   
                                public function catthree(){
                                    $this->db->select('*');
                                    $this->db->from('product');
                                    $this->db->where('category_id', '6');
                                    $query = $this->db->get();
                                    $row = $query->result_array();
                                    return $row;
                                    }   
                                    public function detail_model($id){
            
                                        $query = $this->db->get_where('product', array('id' => $id));
                                        return $query->row();
                                        }       
    }
