<?php
defined('BASEPATH') or exit('No drect script access allow');

class My_template extends CI_controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function template($template_name, $vars = array(), $return = FALSE)
    {
        if ($return) :
            $content  = $this->load->view('include/header', $vars, $return);
            $content .= $this->load->view($template_name, $vars, $return);
            $content .= $this->load->view('include/footer', $vars, $return);

            return $content;
        else :
            $this->load->view('include/header', $vars);
            $this->load->view($template_name, $vars);
            $this->load->view('include/footer', $vars);
        endif;
    }
}
