<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index()
    {
        $data = new stdClass();
        $data->page_title = 'Нүүр';
        $data->view = 'home';
        $this->load->view('layouts/layout', $data);
    }
}
