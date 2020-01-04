<?php defined ('BASEPATH') OR exit ('No direct script access allowed');

class M_yudisium extends CI_Model {

   public function __construct(){
       $this->load->database();
   }

   public function get_all_data(){
       $this->db->order_by('id_yudisium', 'desc');
       return $this->db->get('yudisium')->result();
    //    $query = $this->db->get('yudisium');
    //    return $query->result();
   }

   public function yudisium_add()
   {
       $data_yudisium = array(
                    'id_yudisium' => $this->input->post('id_yudisium'),
                    'nim' => $this->input->post('nim'),
                    'nama' => $this->input->post('nama'),
                    'ipk' => $this->input->post('ipk'),
                    'jumlah_sks' => $this->input->post('jumlah_sks'),
					'nilai_d' => $this->input->post('nilai_d'),
					'nilai_e' => $this->input->post('nilai_e'),
					'status' => $this->input->post('status'),
					'ket' => $this->input->post('ket')
       );
       $this->db->insert('yudisium', $data_yudisium);
   }

   public function yudisium_getEdit($id){
       $this->db->where('id_yudisium', $id);
       return $this->db->get('yudisium')->row();
   }

   public function yudisium_edit(){
        $id = $this->input->post('id_yudisium');

        $data_yudisium = array(
                    'id_yudisium' => $this->input->post('id_yudisium'),
                    'nim' => $this->input->post('nim'),
                    'nama' => $this->input->post('nama'),
                    'ipk' => $this->input->post('ipk'),
                    'jumlah_sks' => $this->input->post('jumlah_sks'),
					'nilai_d' => $this->input->post('nilai_d'),
					'nilai_e' => $this->input->post('nilai_e'),
					'status' => $this->input->post('status'),
					'ket' => $this->input->post('ket')
        );

        $this->db->where('id_yudisium', $id);
        $this->db->update('yudisium', $data_yudisium);    
        redirect('yudisium/view_yudisium');
   }

   public function hapus_yudisium($id){
        $this->db->delete('yudisium', [id_yudisium => $id]) ;
   }
       
   

}

