<?php

class Model_user extends CI_Model
{
   public function getAlluser()
   {
      $query = "SELECT * from tb_user";
      return $this->db->query($query)->result_array();
   }

    public function insert($data, $table)
   {
      $this->db->insert($table, $data);
   }

    public function delete($id)
   {
      $this->db->delete('tb_user', ['id_user' => $id]);
   }

  public function getuserById($id_user)
   {
      return $this->db->get_where('tb_user', ['id_user' => $id_user])->row_array();
   }

	public function updateuser()
   {
      $nip = $this->input->post('nip');
      $nama = $this->input->post('nama');
      $jabatan = $this->input->post('jabatan');
      $password = $this->input->post('password');
      $unit = $this->input->post('unit');

      $data = [
      	'nip' => $nip,
      	'nama' => $nama,
      	'password' => $password,
      	'jabatan' => $jabatan,
      	'unit' => $unit
      ];

      $this->db->update('tb_user', $data, ['id_user' => $this->input->post('id_user')]);
   }


}

?>