<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bidang extends CI_Controller
{
	var $data = array();
    function __construct()
    {
        parent::__construct();
		$this->data['that'] = $this;
        is_login();
        $this->load->model('Tbl_bidang_model');
        $this->load->library('form_validation');        
		$this->load->library('datatables');
    }

    public function index()
    {
        // $this->template->load('template','bidang/tbl_bidang_list');
		return view('pages/bidang/tbl_bidang_list', $this->data);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_bidang_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_bidang_model->get_by_id($id);
        if ($row) {
            $data = array(
				'id_bidang' => $row->id_bidang,
				'nama_bidang' => $row->nama_bidang,
			);
            // $this->template->load('template','bidang/tbl_bidang_read', $data);
			return view('pages/bidang/tbl_bidang_read', $this->data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('bidang'));
        }
    }

    public function create() 
    {
        $this->data['button'] 				= 'Tambah';
		$this->data['action'] 				= site_url('bidang/create_action');
		$this->data['id_bidang'] 			= set_value('id_bidang');
		$this->data['nama_bidang'] 			= set_value('nama_bidang');
	
        // $this->template->load('template','bidang/tbl_bidang_form', $data);
		return view('pages/bidang/tbl_bidang_form', $this->data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
				'nama_bidang' => $this->input->post('nama_bidang',TRUE),
			);

            $this->Tbl_bidang_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Masuk
            </div>');
            redirect(site_url('bidang'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_bidang_model->get_by_id($id);

        if ($row) {
			$this->data['button'] 				= 'Update';
			$this->data['action'] 				= site_url('bidang/update_action');
			$this->data['id_bidang'] 			= set_value('id_bidang', $row->id_bidang);
			$this->data['nama_bidang'] 			= set_value('nama_bidang', $row->nama_bidang);
		
            // $this->template->load('template','bidang/tbl_bidang_form', $data);
			return view('pages/bidang/tbl_bidang_form', $this->data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('bidang'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_bidang', TRUE));
        } else {
            $data = array(
				'nama_bidang' => $this->input->post('nama_bidang',TRUE),
			);

            $this->Tbl_bidang_model->update($this->input->post('id_bidang', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert alert-info">Data Berhasil Diupdate
            </div>');            
            redirect(site_url('bidang'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_bidang_model->get_by_id($id);

        if ($row) {
            $this->Tbl_bidang_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus
            </div>');            
            redirect(site_url('bidang'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('bidang'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_bidang', 'nama bidang', 'trim|required');

    $this->form_validation->set_message('required', '{field} wajib diisi');

	$this->form_validation->set_rules('id_bidang', 'id_bidang', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_bidang.xls";
        $judul = "tbl_bidang";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Bidang");

	foreach ($this->Tbl_bidang_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_bidang);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_bidang.doc");

        $data = array(
            'tbl_bidang_data' => $this->Tbl_bidang_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('bidang/tbl_bidang_doc',$data);
    }

}

