<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jadwalpraktek extends CI_Controller
{
	var $data = array();
    function __construct()
    {
        parent::__construct();
		$this->data['that'] = $this;
        is_login();
        $this->load->model('Tbl_jadwal_praktek_dokter_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
		return view('pages/jadwalpraktek/tbl_jadwal_praktek_dokter_list', $this->data);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_jadwal_praktek_dokter_model->json();
    }

     function autocomplete() {
        $this->db->like('nama_dokter', $_GET['term']);
        $this->db->select('nama_dokter');
        $datadokter = $this->db->get('tbl_dokter')->result();
        foreach ($datadokter as $dokter) {
            $return_arr[] = $dokter->nama_dokter;
        }

        echo json_encode($return_arr);
    }


    public function read($id) 
    {
        $row = $this->Tbl_jadwal_praktek_dokter_model->get_by_id($id);
        if ($row) {
			$data = array(
				'id_jadwal' => $row->id_jadwal,
				'kode_dokter' => $row->kode_dokter,
				'hari' => $row->hari,
				'jam_mulai' => $row->jam_mulai,
				'jam_selesai' => $row->jam_selesai,
				'id_poli' => $row->id_poli,
			);
			return view('pages/jadwalpraktek/tbl_jadwal_praktek_dokter_read', $this->data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwalpraktek'));
        }
    }

    public function create() 
    {
		$this->data['button'] 				= 'Tambah';
		$this->data['action'] 				= site_url('jadwalpraktek/create_action');
		$this->data['id_jadwal'] 			= set_value('id_jadwal');
		$this->data['kode_dokter_list'] 	= $this->getDataDokter();
		$this->data['kode_dokter'] 			= set_value('kode_dokter');
		$this->data['hari'] 				= set_value('hari');
		$this->data['jam_mulai'] 			= set_value('jam_mulai');
		$this->data['jam_selesai'] 			= set_value('jam_selesai');
		$this->data['id_poli'] 				= set_value('id_poli');
        
		return view('pages/jadwalpraktek/tbl_jadwal_praktek_dokter_form', $this->data);
    }
    
    function getDataDokter() {
        $dokter = $this->db->get('tbl_dokter')->result();
		
		$data = array(''=>'PILIH DOKTER');
		foreach($dokter as $r) {
			$data[$r->kode_dokter] = $r->nama_dokter;
		}
		
        return $data;
    }
    
    function getKodeDokter($namaDokter){

        $this->db->where('nama_dokter', $namaDokter);
        $dokter = $this->db->get('tbl_dokter')->row_array();
        return $dokter['kode_dokter'];
    }

    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
				'kode_dokter' => $this->input->post('kode_dokter',TRUE),
				'hari' => $this->input->post('hari',TRUE),
				'jam_mulai' => $this->input->post('jam_mulai',TRUE),
				'jam_selesai' => $this->input->post('jam_selesai',TRUE),
				'id_poli' => $this->input->post('id_poli',TRUE),
			);

            $this->Tbl_jadwal_praktek_dokter_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Masuk
            </div>');  
            redirect(site_url('jadwalpraktek'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_jadwal_praktek_dokter_model->get_by_id($id);

        if ($row) {
			$dokter = $this->db->get_where('tbl_dokter', array('kode_dokter' => $row->kode_dokter))->row_array();
            $this->data['button'] 				= 'Update';
			$this->data['action'] 				= site_url('jadwalpraktek/update_action');
			$this->data['id_jadwal'] 			= set_value('id_jadwal', $row->id_jadwal);
			$this->data['kode_dokter_list'] 	= $this->getDataDokter();
			$this->data['kode_dokter'] 			= set_value('kode_dokter', $row->kode_dokter);
			$this->data['hari'] 				= set_value('hari', $row->hari);
			$this->data['jam_mulai'] 			= set_value('jam_mulai', $row->jam_mulai);
			$this->data['jam_selesai'] 			= set_value('jam_selesai', $row->jam_selesai);
			$this->data['id_poli'] 				= set_value('id_poli', $row->id_poli);
           
			return view('pages/jadwalpraktek/tbl_jadwal_praktek_dokter_form', $this->data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwalpraktek'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_jadwal', TRUE));
        } else {
            $data = array(
				'kode_dokter' => $this->input->post('kode_dokter',TRUE),
				'hari' => $this->input->post('hari',TRUE),
				'jam_mulai' => $this->input->post('jam_mulai',TRUE),
				'jam_selesai' => $this->input->post('jam_selesai',TRUE),
				'id_poli' => $this->input->post('id_poli',TRUE),
			);

            $this->Tbl_jadwal_praktek_dokter_model->update($this->input->post('id_jadwal', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert alert-info">Data Berhasil Diupdate
            </div>');              
            redirect(site_url('jadwalpraktek'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_jadwal_praktek_dokter_model->get_by_id($id);

        if ($row) {
            $this->Tbl_jadwal_praktek_dokter_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Berhasil Dihapus
            </div>');             
             redirect(site_url('jadwalpraktek'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwalpraktek'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_dokter', 'kode dokter', 'trim|required');
	$this->form_validation->set_rules('hari', 'hari', 'trim|required');
	$this->form_validation->set_rules('jam_mulai', 'jam mulai', 'trim|required');
	$this->form_validation->set_rules('jam_selesai', 'jam selesai', 'trim|required');
	$this->form_validation->set_rules('id_poli', 'id poli', 'trim|required');
    $this->form_validation->set_message('required', '{field} wajib diisi');

	$this->form_validation->set_rules('id_jadwal', 'id_jadwal', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_jadwal_praktek_dokter.xls";
        $judul = "tbl_jadwal_praktek_dokter";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Kode Dokter");
	xlsWriteLabel($tablehead, $kolomhead++, "Hari");
	xlsWriteLabel($tablehead, $kolomhead++, "Jam Mulai");
	xlsWriteLabel($tablehead, $kolomhead++, "Jam Selesai");
	xlsWriteLabel($tablehead, $kolomhead++, "Id Poli");

	foreach ($this->Tbl_jadwal_praktek_dokter_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kode_dokter);
	    xlsWriteLabel($tablebody, $kolombody++, $data->hari);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jam_mulai);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jam_selesai);
	    xlsWriteNumber($tablebody, $kolombody++, $data->id_poli);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=tbl_jadwal_praktek_dokter.doc");

        $data = array(
            'tbl_jadwal_praktek_dokter_data' => $this->Tbl_jadwal_praktek_dokter_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('jadwalpraktek/tbl_jadwal_praktek_dokter_doc',$data);
    }

}

