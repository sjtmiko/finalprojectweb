<?php defined ('BASEPATH') OR exit ('No direct script access allowed');

class M_pendadaran extends CI_Model {

   public function __construct(){
       $this->load->database();
   }

   public function get_all_data(){
       $this->db->order_by('id_pendadaran', 'desc');
       return $this->db->get('pendadaran')->result();
   }

   public function pendadaran_add()
   {
       $data_pendadaran = array(
                    'id_pendadaran' => $this->input->post('id_pendadaran'),
                    'hari_tanggal' => $this->input->post('hari_tanggal'),
                    'jam' => $this->input->post('jam'),
                    'ruang' => $this->input->post('ruang'),
                    'nim' => $this->input->post('nim'),
                    'nilai' => $this->input->post('nilai'),
                    'status' => $this->input->post('status'),
                    'dosen_pendamping' => $this->input->post('dosen_pendamping')
       );
       $this->db->insert('pendadaran', $data_pendadaran);
   }

   public function pendadaran_getEdit($id){
       $this->db->where('id_pendadaran', $id);
       return $this->db->get('pendadaran')->row();
   }

   public function pendadaran_edit(){
        $id = $this->input->post('id_pendadaran');

        $data_pendadaran = array(
            'id_pendadaran' => $this->input->post('id_pendadaran'),
            'hari_tanggal' => $this->input->post('hari_tanggal'),
            'jam' => $this->input->post('jam'),
            'ruang' => $this->input->post('ruang'),
            'nim' => $this->input->post('nim'),
            'nilai' => $this->input->post('nilai'),
            'status' => $this->input->post('status'),
            'dosen_pendamping' => $this->input->post('dosen_pendamping')
        );

        $this->db->where('id_pendadaran', $id);
        $this->db->update('pendadaran', $data_pendadaran);    
        redirect('pendadaran/view_pendadaran');
   }

   public function hapus_pendadaran($id){
        $this->db->delete('pendadaran', [id_pendadaran => $id]) ;
   }
       
   

}

