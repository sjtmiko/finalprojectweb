<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisuda extends CI_Controller {

	function __construct(){
    parent::__construct();

    $this->load->library('session');
    $this->load->model('m_wisuda');
	}

	public function view_wisuda()
	{
		$data = array(  'isi' 	=> 'wisuda/view_wisuda',
						'data_wisuda'	=>	$this->m_wisuda->get_all_data(),
						'nav'	=>	'admin/v_nav_admin',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data); 
	}

	// menampilkan form edit user
	public function wisuda_edit($id)
	{
		$data = array(  'isi' 	=> 'wisuda/wisuda_edit',
						'data_wisuda'	=>	$this->m_wisuda->wisuda_getEdit($id),
						'nav'	=>	'admin/v_nav_admin',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data);
	}
	// proses edit user
	public function wisuda_edit_act()
	{
		$this->m_wisuda->wisuda_edit();
		redirect('wisuda/wisuda_edit');
	}



	// menampilkan form tambah user
	public function wisuda_add()
	{
		$data = array(  'isi' 	=> 'wisuda/wisuda_add',
						'nav'	=>	'admin/v_nav_admin',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data);
	}

	// proses tambah user
	public function wisuda_add_act()
	{
		// $this->db->insert('wisuda', $data);
		$this->m_wisuda->wisuda_add();
		redirect('wisuda/view_wisuda');
	}


	//prose hapus user
	public function wisuda_delete($id)
	{
		$this->db->where('id_wisuda', $id);
		$this->db->delete('wisuda');
		redirect('wisuda/view_wisuda');
	}



}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
