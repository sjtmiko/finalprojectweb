<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Krs extends CI_Controller {

	function __construct(){
    parent::__construct();

    $this->load->library('session');
    $this->load->model('m_krs');
	}

	public function view_krs()
	{
		$data = array(  'isi' 	=> 'krs/view_krs',
						'data_krs'	=>	$this->m_krs->get_all_data(),
						'nav'	=>	'admin/v_nav_admin',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data); 
	}



	// menampilkan form edit user
	public function krs_edit($id)
	{
		$data = array(  'isi' 	=> 'krs/krs_edit',
						'data_krs'	=>	$this->m_krs->krs_getEdit($id),
						'nav'	=>	'admin/v_nav_admin',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data);
	}
	// proses edit user
	public function krs_edit_act()
	{
		$this->m_krs->krs_edit();
		redirect('krs/krs_edit');
	}



	// menampilkan form tambah user
	public function krs_add()
	{
		$data = array(  'isi' 	=> 'krs/krs_add',
						'nav'	=>	'admin/v_nav_admin',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data);
	}

	// proses tambah user
	public function krs_add_act()
	{
		// $this->db->insert('wisuda', $data);
		$this->m_krs->krs_add();
		redirect('krs/view_krs');
	}


	//prose hapus user
	public function krs_delete($id)
	{
		$this->db->where('id_krs', $id);
		$this->db->delete('krs');
		redirect('krs/view_krs');
	}



}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
