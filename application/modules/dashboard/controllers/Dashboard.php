<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model','Dashboard', TRUE);
    }
    
    public function index()
    {
        echo 'index';
    }
}