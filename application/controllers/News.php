<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['news'] = $this->news_model->get_news1("B010M5MORO");


                //var_dump($data['news']);exit;
                $data['title'] = 'News archive';

                $this->load->view('templates/header', $data);
                $this->load->view('news/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($slug = "B010M5MORO")
        {
                //echo $slug;exit;
                $data['news_item'] = $this->news_model->get_news1($slug);
                
                $data['first'] = $data['news_item']['text'];
                
                if (empty($data['news_item']))
                {
                        show_404();
                }

               // echo $data['title'] = $first;
                //var_dump ($data);exit;
                $data['title'] = $data['news_item']['slug'];
                $this->load->view('templates/header', $data);
                $this->load->view('news/view', $data);
                $this->load->view('templates/footer');
        }
        public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Create a news item';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('news/create');
        $this->load->view('templates/footer');

    }
    else
    {
        $this->news_model->set_news();
        $this->load->view('news/success');
    }
}
//public function _remap()
//{
     //echo "yess";  //override the all function only display remap;insdied not mention on url
//}
}