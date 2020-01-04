<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {
	public function index()	{
		//Pemanggilan Tampil Admin
		$data = array(  'isi' 	=> 'admin/tampil_admin',
						'nav'	=>	'admin/nav',
						'title' => 'Tampil Dashboard Admin');
		$this->load->view('informasi/wrapper',$data); 	}
	// public function profile(){
	// 	$this->load->view('header_1');
	// 	$this->load->view('profile');
	// 	$this->load->view('footer');
	// }
	public function infokrs(){
				$this->load->view('informasi/infokrs'); 	
			}
	
}
