<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	function __construct(){
	parent::__construct();
	//cek jika belum login
	if($this->session->userdata ('status') !='mhs') {
		$url=base_url();
		redirect($url);
	}
	}

	public function index()	{
		//Pemanggilan Tampil mahasiswa
		$data = array(  'isi' 	=> 'mahasiswa/tampil_mahasiswa',
						'nav'	=>	'mahasiswa/nav',
						'title' => 'Tampil Dashboard Mahasiswa');
		$this->load->view('layout/wrapper',$data); 
	}

}
