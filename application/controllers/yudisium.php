<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yudisium extends CI_Controller {

	function __construct(){
    parent::__construct();

    $this->load->library('session');
    $this->load->model('m_yudisium');
	}

	public function view_yudisium()
	{
		$data = array(  'isi' 	=> 'yudisium/view_yudisium',
						'data_yudisium'	=>	$this->m_yudisium->get_all_data(),
						'nav'	=>	'admin/v_nav_admin',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data); 
	}



	// menampilkan form edit user
	public function yudisium_edit($id)
	{
		$data = array(  'isi' 	=> 'yudisium/yudisium_edit',
						'data_yudisium'	=>	$this->m_yudisium->yudisium_getEdit($id),
						'nav'	=>	'admin/v_nav_admin',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data);
	}
	// proses edit user
	public function yudisium_edit_act()
	{
		$this->m_yudisium->yudisium_edit();
		redirect('yudisium/yudisium_edit');
	}



	// menampilkan form tambah user
	public function yudisium_add()
	{
		$data = array(  'isi' 	=> 'yudisium/yudisium_add',
						'nav'	=>	'admin/v_nav_admin',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data);
	}

	// proses tambah user
	public function yudisium_add_act()
	{
		// $this->db->insert('yudisium', $data);
		$this->m_yudisium->yudisium_add();
		redirect('yudisium/view_yudisium');
	}


	//prose hapus user
	public function yudisium_delete($id)
	{
		$this->db->where('id_yudisium', $id);
		$this->db->delete('yudisium');
		redirect('yudisium/view_yudisium');
	}



}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
