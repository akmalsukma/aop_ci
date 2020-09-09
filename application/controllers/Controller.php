<?php

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Controller extends CI_Controller  {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('model_system');
    }

    public function index()
    {
        $this->load->view('home');
    }

    public function Home()
    {
        
            $data['user'] = $this->db->get_where('masyarakat', ['email' => 
            $this->session->userdata('email')])->row_array();

            $this->load->view('pengaduan',$data);
        
    }

    public function speak()
    {
            $data['user'] = $this->db->get_where('masyarakat', ['email' => 
            $this->session->userdata('email')])->row_array();

            $this->load->view('speak',$data);
    
        
        
        
    }

    public function login()
    {
        // $data['user'] = $this->db->get_where('masyarakat', ['email' => 
        // $this->session->userdata('email')])->row_array();
        $this->load->view('login');
    }

    public function register()
    {
            $this->load->view('register');    
    }

    public function check_signin()
    {
        $this->form_validation->set_rules('Email', 'email', 'required|trim|valid_email');
        $this->form_validation->set_rules('pw', 'Password', 'required|trim|min_length[3]');

        if ($this->form_validation->run() == false) {
            
            $this->load->view('login');    
        }
        else{
        
        $Email = $this->input->post('Email');
        $pass = $this->input->post('pw');


        //pengecekan admin dan masyarakat
        $datauser = $this->db->get_where('masyarakat', ['email' => $Email])->row_array();
        $dataadmin=$this->db->get_where('admin', ['email' => $Email])->row_array();
        

        if ($datauser) {
            $this->db->query("UPDATE `masyarakat` SET `status` = 'Online' WHERE `masyarakat`.`email` = '$Email';");
            if (password_verify($pass,$datauser['password'])) {
                $data = [
                    'nik' => $datauser['nik'] ,
                    'username' => $datauser['username'],
                    'email' => $datauser['email'],
                    'status' => $datauser['status']

                ];
                $this->session->set_userdata($data);
                redirect('Controller/home');
            }
            else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Your Password is wrong!!</div>');
                redirect('Controller/login');

            }
        }
        elseif ($dataadmin) {
            $pw = md5($pass);
            $pwadmin =$this->db->get_where('admin', ['password' => $pw])->row_array();
            if ($pwadmin) {
                $data = [
                    'id' => $dataadmin['id'] ,
                    'username' => $dataadmin['username'],
                    'email' => $dataadmin['email']
                ];
                $this->session->set_userdata($data);
                redirect('controller/admin_home');
            }
            else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Your Password is wrong!!</div>');
                redirect('Controller/login');

            }
               
        }
        else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Your account is not registered</div>');
        }


        }    
    }

    public function logout()
    {
        
        $this->session->unset_userdata('nik');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('status');
        $this->db->query("UPDATE `masyarakat` SET `status` = 'Offline' WHERE `masyarakat`.`nik` = '$nik';");
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                You have been logged out</div>');
        redirect(base_url('Controller/login'));
    }

    public function simpan_data()
    {
        $this->form_validation->set_rules('Nik', 'nik', 'required|trim');
        $this->form_validation->set_rules('name', 'username', 'required|trim');
        $this->form_validation->set_rules('nohp', 'handphone', 'required|trim');
        $this->form_validation->set_rules('Email', 'email', 'required|trim|valid_email');
        $this->form_validation->set_rules('pw', 'Password', 'required|trim|min_length[3]');


        if ($this->form_validation->run() == false) {
            
            $this->load->view('register');    
        } else {
            $this->model_system->simpan_db();
        }
        
    }

    public function expression_view()
    {
        $data['masyarakat'] = $this->model_system->get_masyarakat();
        $data['c_masyarakat'] = $this->model_system->count_masyarakat();
        $this->load->view('expression',$data);
    }

    public function edit($nik) 
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => 
        $this->session->userdata('email')])->row_array();
        $where = array('nik' => $nik);
		$data['masyarakat'] = $this->model_system->edit_data($where,'masyarakat')->row_array();
		$this->load->view('v_edit',$data);
    }

    public function delete($nik)
    {
        $where = array('nik' => $nik);
	    $this->model_system->hapus_data($where,'masyarakat');
	    redirect('Controller/admin_home');
    }

    public function update()
    {
        $nik = $this->input->post('nik');
	    $username = $this->input->post('name');
	    $Email = $this->input->post('mail');
        $no_hp = $this->input->post('nohp');
        $pass = $this->input->post('pw');
        $password = password_hash($pass,PASSWORD_DEFAULT);
        
	    $data = array(
		    'nik' => $nik,
		    'username' => $username,
            'email' => $Email,
            'no_hp' => $no_hp,
            'password' => $password
	    );
 
	    $where = array(
		    'nik' => $nik
	    );
 
	    $this->model_system->update_data($where,$data,'masyarakat');
	    redirect('controller/admin_home');
    }


    public function print_pdf()
    {
        ob_start();

        $data['masyarakat'] = $this->model_system->get_masyarakat();
        $data['c_masyarakat'] = $this->model_system->count_masyarakat();
        $this->load->view('v_pdf',$data);

        $html =ob_get_contents();
                    ob_end_clean();

        require './asset/html2pdf/autoload.php';

        $pdf = new Spipu\Html2Pdf\Html2Pdf('P', 'A4', 'en');
        $pdf->WriteHTML($html);


        $pdf->Output('Data_Masyarakat_'.date('d-m-Y').'.pdf', 'D');

    }

    public function print_xls()
    {
        $data['masyarakat'] = $this->model_system->get_masyarakat();
        $data['c_masyarakat'] = $this->model_system->count_masyarakat();
        $this->load->view('v_pdf',$data);

        $user = $this->model_system->getAll()->result();

        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
                    ->setCellValue('A1', 'No')
                    ->setCellValue('B1', 'NIK')
                    ->setCellValue('C1', 'Username')
                    ->setCellValue('D1', 'Email')
                    ->setCellValue('E1', 'No HP');

        $kolom = 2;
        $nomor = 1;
        foreach($user as $users) {

             $spreadsheet->setActiveSheetIndex(0)
                         ->setCellValue('A' . $kolom, $nomor)
                         ->setCellValue('B' . $kolom, $users->nik)
                         ->setCellValue('C' . $kolom, $users->username)
                         ->setCellValue('D' . $kolom, $users->email)
                         ->setCellValue('E' . $kolom, $users->no_hp);

             $kolom++;
             $nomor++;

        }

        $writer = new Xlsx($spreadsheet);
        ob_end_clean();

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Latihan.xlsx"');
        header('Cache-Control: max-age=0');

         $writer->save('php://output');

    }

    public function admin_home()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => 
        $this->session->userdata('email')])->row_array();

        $data['masyarakat'] = $this->model_system->get_masyarakat();
        $data['c_masyarakat'] = $this->model_system->count_masyarakat();
        $this->load->view('admin_home', $data);
    }

}
?>