<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
	function __construct(){
	parent::__construct();
	//cek jika belum login
	if($this->session->userdata('status') !='dsn'){
		$url=base_url();
		redirect($url);
	}
	}

	public function index()	{
		//Pemanggilan Tampil dosen
		$data = array(  'isi' 	=> 'dosen/tampil_dosen',
						'nav'	=>	'dosen/nav',
						'title' => 'Tampil Dashboard Dosen');
		$this->load->view('layout/wrapper',$data); 
	}

}
