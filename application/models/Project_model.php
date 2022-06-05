<?php
    class Project_model extends CI_Model{

        public function getDataProject()
        {
            return $this->db->get('TblMsCustomerProject')->result_array();
        }
    }
?>