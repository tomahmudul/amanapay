<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Public_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        /*$this->load->library('email');

        $this->email->from('adrian.voicu@avenir.ro', 'Me');
        $this->email->to('avenir.ro@gmail.com');
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send(FALSE);
        echo $this->email->print_debugger();*/
        $this->load->view('welcome_message');

    }
}