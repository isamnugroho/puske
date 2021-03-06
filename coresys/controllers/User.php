<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller
{
	var $data = array();
    function __construct()
    {
        parent::__construct();
		$this->data['that'] = $this;
        is_login();
        $this->load->model('Tbl_user_model');
        $this->load->library('form_validation');        
		$this->load->library('datatables');
    }

    public function index()
    {
        // $this->template->load('template','user/tbl_user_list');
		return view('pages/user/tbl_user_list', $this->data);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_user_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_user_model->get_by_id($id);
        if ($row) {
            $data = array(
				'id_users'      => $row->id_users,
				'full_name'     => $row->full_name,
				'email'         => $row->email,
				'password'      => $row->password,
				'images'        => $row->images,
				'id_user_level' => $row->id_user_level,
				'is_aktif'      => $row->is_aktif,
			);
			
			$this->data['id_users'] 		= $row->id_users;
			$this->data['full_name'] 		= $row->full_name;
			$this->data['email'] 			= $row->email;
			$this->data['password'] 		= $row->password;
			$this->data['images'] 			= $row->images;
			$this->data['id_user_level'] 	= $row->id_user_level;
			$this->data['is_aktif'] 		= $row->is_aktif;
			
            // $this->template->load('template','user/tbl_user_read', $data);
			return view('pages/user/tbl_user_read', $this->data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }

    public function create() 
    {
		$this->data['button'] 			= 'Tambah';
		$this->data['action'] 			= site_url('user/create_action');
		$this->data['id_users'] 		= set_value('id_users');
		$this->data['full_name']		= set_value('full_name');
		$this->data['email'] 			= set_value('email');
		$this->data['password'] 		= set_value('password');
		$this->data['images'] 			= set_value('images');
		$this->data['id_user_level'] 	= set_value('id_user_level');
		$this->data['is_aktif'] 	= set_value('is_aktif');
		
        // $this->template->load('template','user/tbl_user_form', $data);
		return view('pages/user/tbl_user_form', $this->data);
    }
    
    
    public function create_action() 
    {
        $this->_rules();
        $foto = $this->upload_foto();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $password       = $this->input->post('password',TRUE);
            $options        = array("cost"=>4);
            $hashPassword   = password_hash($password,PASSWORD_BCRYPT,$options);
            
            $data = array(
				'full_name'     => $this->input->post('full_name',TRUE),
				'email'         => $this->input->post('email',TRUE),
				'password'      => $hashPassword,
				'images'        => $foto['file_name'],
				'id_user_level' => $this->input->post('id_user_level',TRUE),
				'is_aktif'      => $this->input->post('is_aktif',TRUE),
			);

            $this->Tbl_user_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Masuk
            </div>');              redirect(site_url('user'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_user_model->get_by_id($id);

        if ($row) {
			$this->data['button'] 			= 'Update';
			$this->data['action'] 			= site_url('user/update_action');
			$this->data['id_users'] 		= set_value('id_users', $row->id_users);
			$this->data['full_name'] 		= set_value('full_name', $row->full_name);
			$this->data['email'] 			= set_value('email', $row->email);
			$this->data['password'] 		= set_value('password', $row->password);
			$this->data['images'] 			= set_value('images', $row->images);
			$this->data['id_user_level'] 	= set_value('id_user_level', $row->id_user_level);
			$this->data['is_aktif'] 		= set_value('is_aktif', $row->is_aktif);
		
            // $this->template->load('template','user/tbl_user_form', $this->data);
			return view('pages/user/tbl_user_form', $this->data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();
        $foto = $this->upload_foto();
        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_users', TRUE));
        } else {
            if($foto['file_name']=='') {
                $data = array(
					'full_name'     => $this->input->post('full_name',TRUE),
					'email'         => $this->input->post('email',TRUE),
					'id_user_level' => $this->input->post('id_user_level',TRUE),
					'is_aktif'      => $this->input->post('is_aktif',TRUE)
				);
            } else {
                $data = array(
					'full_name'     => $this->input->post('full_name',TRUE),
					'email'         => $this->input->post('email',TRUE),
					'images'        => $foto['file_name'],
					'id_user_level' => $this->input->post('id_user_level',TRUE),
					'is_aktif'      => $this->input->post('is_aktif',TRUE)
				);
                
                // ubah foto profil yang aktif
                $this->session->set_userdata('images',$foto['file_name']);
            }

            $this->Tbl_user_model->update($this->input->post('id_users', TRUE), $data);
			$this->session->set_flashdata('message', '<div class="alert alert-info">Data Berhasil Diupdate</div>');  
            redirect(site_url('user'));
        }
    }
    
    
    function upload_foto(){
        $config['upload_path']          = './assets/foto_profil';
        $config['allowed_types']        = 'gif|jpg|png';
        //$config['max_size']             = 100;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;
        $this->load->library('upload', $config);
        $this->upload->do_upload('images');
        return $this->upload->data();
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_user_model->get_by_id($id);

        if ($row) {
            $this->Tbl_user_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus
            </div>');                redirect(site_url('user'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('user'));
        }
    }

    public function _rules() 
    {
    $this->form_validation->set_rules('full_name', 'nama lengkap', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required');
    //$this->form_validation->set_rules('password', 'password', 'trim|required');
    //$this->form_validation->set_rules('images', 'images', 'trim|required');
    $this->form_validation->set_rules('id_user_level', 'user level', 'trim|required');
    $this->form_validation->set_rules('is_aktif', 'is aktif', 'trim|required');
    $this->form_validation->set_message('required', '{field} wajib diisi');

    $this->form_validation->set_rules('id_users', 'id_users', 'trim');
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_user.xls";
        $judul = "tbl_user";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
    xlsWriteLabel($tablehead, $kolomhead++, "Full Name");
    xlsWriteLabel($tablehead, $kolomhead++, "Email");
    xlsWriteLabel($tablehead, $kolomhead++, "Password");
    xlsWriteLabel($tablehead, $kolomhead++, "Images");
    xlsWriteLabel($tablehead, $kolomhead++, "Id User Level");
    xlsWriteLabel($tablehead, $kolomhead++, "Is Aktif");

    foreach ($this->Tbl_user_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
        xlsWriteLabel($tablebody, $kolombody++, $data->full_name);
        xlsWriteLabel($tablebody, $kolombody++, $data->email);
        xlsWriteLabel($tablebody, $kolombody++, $data->password);
        xlsWriteLabel($tablebody, $kolombody++, $data->images);
        xlsWriteNumber($tablebody, $kolombody++, $data->id_user_level);
        xlsWriteLabel($tablebody, $kolombody++, $data->is_aktif);

        $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_user.doc");

        $data = array(
            'tbl_user_data' => $this->Tbl_user_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('user/tbl_user_doc',$data);
    }
    
    function profile(){
        
    }

}

