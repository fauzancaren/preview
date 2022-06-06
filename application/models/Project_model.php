<?php
    class Project_model extends CI_Model{

        public function getDataProject()
        {
            return $this->db->get('TblMsCustomerProject')->result_array();
        }
        public function getDataProjectLastUpdate()
        {
           
            return $this->db->order_by("CustomerProjectDate desc")->get('TblMsCustomerProject')->result_array();
        }
    }
?>