<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_desa extends CI_Model {
      
	public function list()
	{
        $this->db->select("*");
        $this->db->from('tb_desa');
        $this->db->order_by('id_desa', 'desc');
        return $this->db->get()->result();
        }
        
        public function simpan($data)
        {
        $this->db->insert('tb_desa', $data);
        }
}