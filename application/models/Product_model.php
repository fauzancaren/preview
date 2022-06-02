<?php
    class Product_model extends CI_Model{

        public function getDataProduct()
        {
            return $this->db->get('obi_product')->result_array();
        }
        public function getDataProductById($text)
        {
            $this->db->from('obi_product');
            $this->db->where('obiProductKategori', $text);
            return $this->db->get()->result_array();
        }
        
        public function getDataProductKategori()
        {
            return $this->db->get('obi_kategori')->result_array();

        }
    }
?>