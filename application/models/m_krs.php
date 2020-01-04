<?php defined ('BASEPATH') OR exit ('No direct script access allowed');

class M_krs extends CI_Model {

   public function __construct(){
       $this->load->database();
   }

   public function get_all_data(){
       $this->db->order_by('id_krs', 'desc');
       return $this->db->get('krs')->result();
   }

   public function krs_add()
   {
       $data_krs = array(
                    'id_krs' => $this->input->post('id_krs'),
                    'kode_matkul' => $this->input->post('kode_matkul'),
                    'nama_matkul' => $this->input->post('nama_matkul'),
                    'jumlah_sks' => $this->input->post('jumlah_sks'),
                    'konsentrasi' => $this->input->post('konsentrasi'),
                    'semester' => $this->input->post('semester')
       );
       $this->db->insert('krs', $data_krs);
   }

   public function krs_getEdit($id){
       $this->db->where('id_krs', $id);
       return $this->db->get('krs')->row();
   }

   public function krs_edit(){
        
        $id = $this->input->post('id_krs');
        $data_krs = array(
            'id_krs' => $this->input->post('id_krs'),
            'kode_matkul' => $this->input->post('kode_matkul'),
            'nama_matkul' => $this->input->post('nama_matkul'),
            'jumlah_sks' => $this->input->post('jumlah_sks'),
            'konsentrasi' => $this->input->post('konsentrasi'),
            'semester' => $this->input->post('semester')
        );
        $this->db->where('id_krs', $id);
        $this->db->update('krs', $data_krs);    
        redirect('krs/view_ks');

        $id = $this->input->post('id', true);
        $menu = $this->input->post('menu', true);
        $this->db->set('menu', $menu);
        $this->db->where('id', $id);
        $this->db->update('user_menu');
   }

   public function hapus_krs($id){
        $this->db->delete('krs', [id_krs => $id]) ;
   }
       
   

}

