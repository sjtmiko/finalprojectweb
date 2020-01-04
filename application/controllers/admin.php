<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
	parent::__construct();

	$this->load->model('M_user');

	//cek jika belum login
	if($this->session->userdata('status') !='admin'){
		$url=base_url();
		redirect($url);
	}
	}
	public function index()	{
		//Pemanggilan Tampil Admin
		$data = array(  'isi' 	=> 'admin/tampil_admin',
						'nav'	=>	'admin/nav',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data); 
	}
	public function user()
	{
		$data = array(  'isi' 	=> 'admin/user/v_user',
						'data_user'	=>	$this->M_user->getAll(),
						'nav'	=>	'admin/nav',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data); 
	}

	// menampilkan form tambah user
	public function user_add()
	{
		$data = array(  'isi' 	=> 'admin/user/v_user_add',
						'nav'	=>	'admin/nav',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data);
	}

	// proses tambah user
	public function user_add_act()
	{
		$this->M_user->user_add();
		redirect('admin/user');
	}

	// menampilkan form edit user
	public function user_edit($id)
	{
		$data = array(  'isi' 	=> 'admin/user/v_user_edit',
						'user'	=>	$this->M_user->user_getEdit($id),
						'nav'	=>	'admin/nav',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('layout/wrapper',$data);
	}

// proses edit user
	public function user_edit_act()
	{
		$this->M_user->user_edit();
		redirect('admin/user');
	}
//proses hapus user
	public function user_delete($id)
	{
		$this->M_user->user_delete($id);
		redirect('admin/user');
	}
	
//proses acc
	public function user_acc()
	{
		$this->M_user->user_acc();
		redirect('admin/user');
	}
//proses dec
	public function user_dec()
	{
		$this->M_user->user_dec();
		redirect('admin/user');
	}

}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */

			

