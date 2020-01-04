<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login extends CI_Controller{
 
	public function __construct(){
		parent::__construct();	
		$this->load->library(array('form_validation','email'));
        $this->load->helper(array('url','form'));		
		$this->load->model('m_login');
 
	}
 
	public function index(){
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
 
	public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("user",$where);
		$chk=$cek->row_array();
		
		
		if($cek->num_rows() > 0) {
			if ($chk['acc'] == 0){
			echo '<script>alert("Akun sedang Diverifikasi")</script>';
			header("refresh:0; /finalproject/login");
			exit;
		} elseif ($chk['acc'] == 2){
			echo '<script>alert("Akun Ditolak")</script>';
			header("refresh:0; /finalproject/login");
			exit;
		}
			$data=$cek->row_array();
			if ($data['level']=='admin'){
			$data_session = array(
				'nama' => $username,
				'status' => "admin"
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("Admin"));

			}else if($data['level']=='mhs'){
				$data_session = array(
				'nama' => $username,
				'status' => "mhs"
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("Mahasiswa"));
			}else if($data['level']=='dsn'){
				$data_session = array(
				'nama' => $username,
				'status' => "dsn"
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("Dosen"));
			}else{
				echo "gagal";
			}
		
 
		}else{
			echo '<script>alert("Username atau Password Salah")</script>';
			header("refresh:0; /katon/ganteng/pol/materi_CI/login");
		}
	}
	public function register(){
         $this->form_validation->set_rules('name', 'NAME','required');
		//'nama field form','label kesalahan','informasi'
         $this->form_validation->set_rules('username', 'USERNAME','required');
         $this->form_validation->set_rules('email','EMAIL','required|valid_email');
          $this->form_validation->set_rules('level','LEVEL','required');
         $this->form_validation->set_rules('password','PASSWORD','required');
         $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
         if($this->form_validation->run() == FALSE) {
			$this->load->view('header');
            $this->load->view('register');
			$this->load->view('footer');
         }else{
             $data['nama']= $this->input->post('name');
             $data['username']=$this->input->post('username');
             $data['email']=$this->input->post('email');
             $data['level']=$this->input->post('level');
             $data['password']=md5($this->input->post('password'));
			
             $this->m_login->register($data);
             /*$pesan['message'] = "Pendaftaran berhasil";*/
             $this->load->view('login');
         }
     }
		// Check if username exists
        public function check_username_exists($username){
            $this->form_validation->set_message('check_username_exists', 'Usrname Sudah diambil. Silahkan gunakan username lain');
            if($this->m_login->check_username_exists($username)){
                return true;
            } else {
                return false;
            }
        }

        // Check if email exists
        public function check_email_exists($email){
            $this->form_validation->set_message('check_email_exists', 'Email Sudah diambil. Silahkan gunakan email lain');
            if($this->m_login->check_email_exists($email)){
                return true;
            } else {
                return false;
            }
        }
 
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}