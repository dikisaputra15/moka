<?php

class Pdl extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Model_user');
    }

    public function index()
    {
        $data['judul'] = 'Data Pdl';
        // $data['user'] = $this->Model_user->getalluser();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('pdl/pdl', $data);
        $this->load->view('templates/footer'); 
    }

}

?>