<?php 

Class model_system extends CI_Model{

    public function simpan_db()
    {
        $data = array(
            'nik' => $this->input->post('Nik'), 
            'username' => $this->input->post('name'),
            'no_hp' => $this->input->post('nohp'),
            'email' => $this->input->post('Email'),
            'password' => $this->input->post('pw'),
        
        );

        $this->db->insert('masyarakat', $data);
        header("Location:".base_url().'Controller/register');
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
}