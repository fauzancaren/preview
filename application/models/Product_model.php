<?php
    class Product_model extends CI_Model{

        public function getDataProduct()
        {
            return $this->db->get('TblMsItem')->result_array();
        }
        public function getDataProductById($id)
        {
            $this->db->from('TblMsItem');
            $this->db->where('MsItemCatId', $id);
            return $this->db->get()->result_array();
        }
        
        public function getDataProductKategori()
        {
            return $this->db->get('TblMsItemCategory')->result_array();

        }

        public function getDataProductKategoriById($id)
        {
            $this->db->from('TblMsItemCategory');
            $this->db->where('MsItemCatId', $id);
            return $this->db->get()->result_array();

        }
    }
?>