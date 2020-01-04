<?php defined ('BASEPATH') OR exit ('No direct script access allowed');

class M_wisuda extends CI_Model {

   public function __construct(){
       $this->load->database();
   }

   public function get_all_data(){
       $this->db->order_by('id_wisuda', 'desc');
       return $this->db->get('wisuda')->result();
    //    $query = $this->db->get('wisuda');
    //    return $query->result();
   }

   public function wisuda_add()
   {
       $data_wisuda = array(
                    'id_wisuda' => $this->input->post('id_wisuda'),
                    'nim' => $this->input->post('nim'),
                    'nama' => $this->input->post('nama'),
                    'jurusan' => $this->input->post('jurusan'),
                    'jadwal' => $this->input->post('jadwal')
       );
       $this->db->insert('wisuda', $data_wisuda);
   }

   public function wisuda_getEdit($id){
       $this->db->where('id_wisuda', $id);
       return $this->db->get('wisuda')->row();
   }

   public function wisuda_edit(){
        $id = $this->input->post('id_wisuda');

        $data_wisuda = array(
                    'nim' => $this->input->post('nim'),
                    'nama' => $this->input->post('nama'),
                    'jurusan' => $this->input->post('jurusan'),
                    'jadwal' => $this->input->post('jadwal'),
        );

        $this->db->where('id_wisuda', $id);
        $this->db->update('wisuda', $data_wisuda);    
        redirect('wisuda/view_wisuda');
   }

   public function hapus_wisuda($id){
        $this->db->delete('wisuda', [id_wisuda => $id]) ;
   }
       
   

}

