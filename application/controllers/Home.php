<?php

class Home extends CI_Controller
{
   function __construct()
    {

      parent::__construct();

    }

   public function index()
   {
     
         $data = [
               'judul' => 'Home'
            ];
             
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('Home', $data);
            $this->load->view('templates/footer');
         
   }
      
}

   