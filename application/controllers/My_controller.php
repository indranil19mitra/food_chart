<?php
defined('BASEPATH') or exit('no direct script access allow');

class My_controller extends CI_Controller
{
    public $temp;
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        include_once(APPPATH . 'controllers/My_template.php');
        $this->temp = new My_template();
    }

    public function index()
    {
        // $data['page'] = 'index';
        // $data['page_title'] = $data['page'];
        // $this->temp->template_one($data);
        $this->temp->template('index');
    }

    public function homePage()
    {
        $data['page'] = 'index';
        $html = $this->load->view('home', $data, true);
        $result = array('html' => $html, 'status' => 'success');
        $obj = (object) array_merge((array) $result);
        echo json_encode($obj);
        // $this->temp->template('home');
        // $result = array('status' => 'success');
        // echo json_encode($result);
    }
}
