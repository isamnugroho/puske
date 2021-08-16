<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tindakan extends CI_Controller
{
	var $data = array();
    function __construct()
    {
        parent::__construct();
		$this->data['that'] = $this;
        is_login();
        $this->load->model('Tbl_tindakan_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
		return view('pages/tindakan/tbl_tindakan_list', $this->data);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_tindakan_model->json();
    }

    public function read($id) 
    {
        $row = $this->Tbl_tindakan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'kode_tindakan' => $row->kode_tindakan,
		'nama_tindakan' => $row->nama_tindakan,
		'tindakan_oleh' => $row->tindakan_oleh,
		'id_poliklinik' => $row->id_poliklinik,
	    );
		
            $this->template->load('template','tindakan/tbl_tindakan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tindakan'));
        }
    }

    public function create() 
    {
		$this->data['button'] 				= 'Tambah';
		$this->data['action'] 				= site_url('tindakan/create_action');
		$this->data['kode_tindakan'] 		= set_value('kode_tindakan');
		$this->data['nama_tindakan'] 		= set_value('nama_tindakan');
		$this->data['tindakan_oleh'] 		= set_value('tindakan_oleh');
		$this->data['id_poliklinik'] 		= set_value('id_poliklinik');
	
		return view('pages/tindakan/tbl_tindakan_form', $this->data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        'kode_tindakan' => $this->input->post('kode_tindakan', TRUE),
		'nama_tindakan' => $this->input->post('nama_tindakan',TRUE),
		'tindakan_oleh' => $this->input->post('tindakan_oleh',TRUE),
		'id_poliklinik' => $this->input->post('id_poliklinik',TRUE),
	    );

            $this->Tbl_tindakan_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Masuk
            </div>');              redirect(site_url('tindakan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_tindakan_model->get_by_id($id);

        if ($row) {
            $this->data['button'] 				= 'Update';
			$this->data['action'] 				= site_url('tindakan/update_action');
			$this->data['kode_tindakan'] 		= set_value('kode_tindakan', $row->kode_tindakan);
			$this->data['nama_tindakan'] 		= set_value('nama_tindakan', $row->nama_tindakan);
			$this->data['tindakan_oleh'] 		= set_value('tindakan_oleh', $row->tindakan_oleh);
			$this->data['id_poliklinik'] 		= set_value('id_poliklinik', $row->id_poliklinik);
		
			return view('pages/tindakan/tbl_tindakan_form', $this->data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tindakan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('kode_tindakan', TRUE));
        } else {
			$old_kode_tindakan = $this->input->post('old_kode_tindakan',TRUE);
            $data = array(
				'kode_tindakan' => $this->input->post('kode_tindakan',TRUE),
				'nama_tindakan' => $this->input->post('nama_tindakan',TRUE),
				'tindakan_oleh' => $this->input->post('tindakan_oleh',TRUE),
				'id_poliklinik' => $this->input->post('id_poliklinik',TRUE),
			);

            $this->Tbl_tindakan_model->update($old_kode_tindakan, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-info">Data Berhasil Diupdate
            </div>');                 redirect(site_url('tindakan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_tindakan_model->get_by_id($id);

        if ($row) {
            $this->Tbl_tindakan_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus
            </div>');                redirect(site_url('tindakan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tindakan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_tindakan', 'nama tindakan', 'trim|required');
	$this->form_validation->set_rules('tindakan_oleh', 'tindakan oleh', 'trim|required');
	$this->form_validation->set_rules('id_poliklinik', 'nama poli', 'trim|required');
    $this->form_validation->set_message('required', '{field} wajib diisi');


	$this->form_validation->set_rules('kode_tindakan', 'kode_tindakan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_tindakan.xls";
        $judul = "tbl_tindakan";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Jenis Tindakan");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Tindakan");
	xlsWriteLabel($tablehead, $kolomhead++, "Tindakan Oleh");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Poliklinik");

	foreach ($this->Tbl_tindakan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jenis_tindakan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_tindakan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tindakan_oleh);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_poliklinik);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_tindakan.doc");

        $data = array(
            'tbl_tindakan_data' => $this->Tbl_tindakan_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('tindakan/tbl_tindakan_doc',$data);
    }

}

