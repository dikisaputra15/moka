<?php

class User extends CI_Controller{
   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user');
    }

    public function index()
    {
        $data['judul'] = 'Data User';
        $data['user'] = $this->Model_user->getalluser();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/user', $data);
        $this->load->view('templates/footer'); 
    }

    public function tambahuser()
    {
       $nip = $this->input->post('nip');
       $password = $this->input->post('password');
       $nama = $this->input->post('nama');
       $jabatan = $this->input->post('jabatan');
       $unit = $this->input->post('unit');
       $data = [
             'nip' => $nip,
             'nama' => $nama,
             'password' => $password,
             'jabatan' => $jabatan,
             'unit' => $unit
           ];
      $this->Model_user->insert($data, 'tb_user');
       redirect('User');
    }

    public function edituser($id_user)
    {
       $data['title'] = 'Edit';
       $data['user'] = $this->Model_user->getuserById($id_user);
       $this->form_validation->set_rules('id_user', 'id_user', 'required');
       $this->form_validation->set_rules('nip', 'nip', 'required');
       if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('user/edit_user', $data);
            $this->load->view('templates/footer'); 
       } else {
          $this->Model_user->updateuser();
          redirect('User');
       }
    }

    public function hapususer($id)
    {
       $this->Model_user->delete($id);
       redirect('User');
    }

}

?>