<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_pasien_model extends CI_Model
{

    public $table = 'tbl_pasien';
    public $id = 'no_rekamedis';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }
	
	 // datatables
    function json() {
        $this->datatables->select('no_rekamedis,no_ktp,no_bpjs,nama_pasien,jenis_kelamin,tempat_lahir,tanggal_lahir,alamat,status_pasien');
        $this->datatables->from('tbl_pasien');
        //add this line for join
        $this->datatables->add_column('action', 
				anchor(site_url('pasien/update/$1'),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('class' => 'btn btn-danger btn-sm'))." 
                ".anchor(site_url('pasien/cetakkartu/$1'),'<i class="fa fa fa-print" aria-hidden="true"></i>', array('class' => 'btn btn-danger btn-sm'))." 
                ".anchor(site_url('pasien/delete/$1'),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'no_rekamedis');
        return $this->datatables->generate();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('no_rekamedis', $q);
	$this->db->or_like('no_ktp', $q);
	$this->db->or_like('no_bpjs', $q);
	$this->db->or_like('nama_pasien', $q);
	$this->db->or_like('jenis_kelamin', $q);
	$this->db->or_like('tempat_lahir', $q);
	$this->db->or_like('tanggal_lahir', $q);
	$this->db->or_like('alamat', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('no_rekamedis', 'ASC');
	$this->db->or_like('no_ktp', $q);
	$this->db->or_like('no_bpjs', $q);
	$this->db->or_like('nama_pasien', $q);
	$this->db->or_like('jenis_kelamin', $q);
	$this->db->or_like('tempat_lahir', $q);
	$this->db->or_like('tanggal_lahir', $q);
	$this->db->or_like('alamat', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

