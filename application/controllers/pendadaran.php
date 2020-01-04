<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendadaran extends CI_Controller {

	function __construct(){
    parent::__construct();

    $this->load->library('session');
    $this->load->model('m_pendadaran');
	}

	public function view_pendadaran()
	{
		$data = array(  'isi' 	=> 'pendadaran/view_pendadaran',
						'data_pendadaran'	=>	$this->m_pendadaran->get_all_data(),
						'nav'	=>	'admin/v_nav_admin',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data); 
	}



	// menampilkan form edit user
	public function pendadaran_edit($id)
	{
		$data = array(  'isi' 	=> 'pendadaran/pendadaran_edit',
						'data_pendadaran'	=>	$this->m_pendadaran->pendadaran_getEdit($id),
						'nav'	=>	'admin/v_nav_admin',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data);
	}
	// proses edit user
	public function pendadaran_edit_act()
	{
		$this->m_pendadaran->pendadaran_edit();
		redirect('pendadaran/pendadaran_edit');
	}



	// menampilkan form tambah user
	public function pendadaran_add()
	{
		$data = array(  'isi' 	=> 'pendadaran/pendadaran_add',
						'nav'	=>	'admin/v_nav_admin',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data);
	}

	// proses tambah user
	public function pendadaran_add_act()
	{
		// $this->db->insert('wisuda', $data);
		$this->m_pendadaran->pendadaran_add();
		redirect('pendadaran/view_pendadaran');
	}


	//prose hapus user
	public function pendadaran_delete($id)
	{
		$this->db->where('id_pendadaran', $id);
		$this->db->delete('pendadaran');
		redirect('pendadaran/view_pendadaran');
	}



}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
