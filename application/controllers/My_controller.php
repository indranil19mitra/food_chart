<?php
defined('BASEPATH') or exit('no direct script access allow');

class My_controller extends CI_Controller
{
    public $temp = null;
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        include_once(APPPATH . 'controllers/My_template.php');
        $this->temp = new My_template();
    }

    public function index()
    {
        $data['page'] = 'index';
        $data['page_title'] = $data['page'];
        $this->temp->template_one($data);
        // $this->temp->template('index');
    }

    public function home_page()
    {
        $data['page'] = 'home/index';
        $data['page_title'] = $data['page'];
        $this->temp->template_one($data);
    }
}
