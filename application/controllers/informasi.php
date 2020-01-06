<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {
	public function index()	{
		$this->load->view('informasi/wrapper'); }

	public function informasikrs()	{
		$this->load->view('informasi/in_krs'); }
		

	public function informasiwisuda()	{
		$this->load->view('informasi/in_wisuda'); }

	public function informasiyudisium()	{
		$this->load->view('informasi/in_yudisium'); }

	public function informasipendadaran()	{
		$this->load->view('informasi/in_pendadaran'); }
	
}
