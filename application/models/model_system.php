<?php 

Class model_system extends CI_Model{

    public function simpan_db()
    {
        $pass = $this->input->post('pw');
        $password = password_hash($pass,PASSWORD_DEFAULT);
        $data = array(
            'nik' => $this->input->post('Nik'), 
            'username' => $this->input->post('name'),
            'no_hp' => $this->input->post('nohp'),
            'email' => $this->input->post('Email'),
            'password' => $password,
        
        );

        $this->db->insert('masyarakat', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Your account has been created, Please login now</div>');
        header("Location:".base_url().'Controller/login');
    }

    public function cek_signin($table, $where)
    {
        return $this->db->get_where($table, $where);
    }


    public function get_masyarakat()
    {
        $data = $this->db->get('masyarakat');
        return $data->result();
    }
    public function count_masyarakat()
    {
        $data = $this->db->get('masyarakat');
        return $data->num_rows();
    }

    public function hapus_data($where,$table)
    {
        $this->db->where($where);
		$this->db->delete($table);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table)
    {
        $this->db->where($where);
		$this->db->update($table,$data);
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('masyarakat');
        return $this->db->get();
    }
}