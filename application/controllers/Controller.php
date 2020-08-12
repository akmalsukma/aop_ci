<?php


class Controller extends CI_Controller  {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_system');
    }

    public function index()
    {
        $this->load->view('home');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function register()
    {
        $data['masyarakat'] = $this->model_system->get_masyarakat();
        $data['c_masyarakat'] = $this->model_system->count_masyarakat();
        $this->load->view('register',  $data);
    }

    public function check_signin()
    {
        $Email = $this->input->post('Email');
        $pass = $this->input->post('pw');
        $where = array(
            'email' => "$Email",
            'password' => $pass
        );
        $cek = $this->model_system->cek_signin("masyarakat",$where)->num_rows();

        if ($cek > 0) {
            $this->db->query("UPDATE `masyarakat` SET `status` = 'Online' WHERE `masyarakat`.`email` = '$Email';");
            $data_user = $this->model_system->cek_signin("masyarakat",$where)->result();
            foreach ($data_user as $user) 
            {
                $data_session = array(   
                    'Nik' => "$user->nik",
                    'name' => "$user->username",
                    'mail' => "$user->email",
                    'Nohp' => "$user->no_hp",
                    'Pw' => "$user->password",
                    'Status' => "$user->status" 
                );
            }
            
            $this->session->set_userdata($data_session);
            
            redirect(base_url('')."/".$this->session->userdata('name'));
        }
        else {
            echo "Email dan Password Salah";
        }    
    }

    public function simpan_data()
    {
        $this->model_system->simpan_db();
    }


}
?>