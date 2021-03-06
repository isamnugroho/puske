<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jabatan extends CI_Controller
{
	var $data = array();
    function __construct()
    {
        parent::__construct();
		$this->data['that'] = $this;
        is_login();
        $this->load->model('Tbl_jabatan_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        // $this->template->load('template','jabatan/tbl_jabatan_list');
		return view('pages/jabatan/tbl_jabatan_list', $this->data);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_jabatan_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_jabatan_model->get_by_id($id);
        if ($row) {
            $data = array(
				'id_jabatan' => $row->id_jabatan,
				'nama_jabatan' => $row->nama_jabatan,
			);
            // $this->template->load('template','jabatan/tbl_jabatan_read', $data);
			return view('pages/jabatan/tbl_jabatan_read', $this->data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan'));
        }
    }

    public function create() 
    {
	
		$this->data['button'] 				= 'Tambah';
		$this->data['action'] 				= site_url('jabatan/create_action');
		$this->data['id_jabatan'] 			= set_value('id_jabatan');
		$this->data['nama_jabatan'] 		= set_value('nama_jabatan');
	
        // $this->template->load('template','jabatan/tbl_jabatan_form', $data);
		return view('pages/jabatan/tbl_jabatan_form', $this->data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_jabatan' => $this->input->post('nama_jabatan',TRUE),
	    );

            $this->Tbl_jabatan_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Masuk
            </div>');  

            redirect(site_url('jabatan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_jabatan_model->get_by_id($id);

        if ($row) {
			$this->data['button'] 				= 'Update';
			$this->data['action'] 				= site_url('jabatan/update_action');
			$this->data['id_jabatan'] 			= set_value('id_jabatan', $row->id_jabatan);
			$this->data['nama_jabatan'] 		= set_value('nama_jabatan', $row->nama_jabatan);
			
            // $this->template->load('template','jabatan/tbl_jabatan_form', $data);
			return view('pages/jabatan/tbl_jabatan_form', $this->data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_jabatan', TRUE));
        } else {
            $data = array(
		'nama_jabatan' => $this->input->post('nama_jabatan',TRUE),
	    );

            $this->Tbl_jabatan_model->update($this->input->post('id_jabatan', TRUE), $data);
             $this->session->set_flashdata('message', '<div class="alert alert-info">Data Berhasil Diupdate
            </div>');  
            redirect(site_url('jabatan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_jabatan_model->get_by_id($id);

        if ($row) {
            $this->Tbl_jabatan_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus
            </div>');  
            redirect(site_url('jabatan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jabatan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_jabatan', 'nama jabatan', 'trim|required');
    $this->form_validation->set_message('required', '{field} wajib diisi');

	$this->form_validation->set_rules('id_jabatan', 'id_jabatan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_jabatan.xls";
        $judul = "tbl_jabatan";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Jabatan");

	foreach ($this->Tbl_jabatan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_jabatan);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_jabatan.doc");

        $data = array(
            'tbl_jabatan_data' => $this->Tbl_jabatan_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('jabatan/tbl_jabatan_doc',$data);
    }

}

