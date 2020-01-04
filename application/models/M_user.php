<?php 
 
class M_user extends CI_Model{

	public function getALL()
	{
		$this->db->order_by('id','desc');
		return $this->db->get('user')->result();
	}
	
	public function user_add()
	{
		$data_user = array(
			'nama' =>$this->input->post('nama'),
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password')),
			'level'=>$this->input->post('level'),
			'email'=>$this->input->post('Email'),
		);
		$this->db->insert('user', $data_user);
	}
	// menampilkan data user sesuai id
	public function user_getEdit($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('user')->row();
	}
	// proses edit user
	public function user_edit()
	{
		$id = $this->input->post('id');
		$data_user = array(
			'nama' => $this->input->post('nama'), 
			'username' => $this->input->post('username'), 
			'password' => md5($this->input->post('password')), 
			'level' => $this->input->post('level'), 
			'email' => $this->input->post('Email'), 
		);
		$this->db->where('id', $id);
		$this->db->update('user', $data_user);
		redirect('admin/user');
	}
	public function user_delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user');
		
	}
	public function user_acc()
	{
		$id = $this->input->get('id');
		$data_user = array(
			'acc' => 1 
		);
		$this->db->where('id', $id);
		$this->db->update('user', $data_user);
		redirect('admin/user');
	}
	public function user_dec()
	{
		$id = $this->input->get('id');
		$data_user = array(
			'acc' => 2
		);
		$this->db->where('id', $id);
		$this->db->update('user', $data_user);
		redirect('admin/user');
	}


}