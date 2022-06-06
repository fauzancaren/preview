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
        public function getDataProjectById($id)
        {
            $this->db->from('TblMsCustomerProject');
            $this->db->where('CustomerProjectId', $id);
            return $this->db->get()->result_array();

        }
        public function getDataProjectGallery($id)
        {
            $this->db->from('TblMsCustomerProjectGallery');
            $this->db->where('CustomerProjectGalleryRef', $id);
            return $this->db->get()->result_array();

        }
        public function getDataProjectItem($id)
        {
            return $this->db->join("TblMsItem", "TblMsItem.MsItemId=TblMsCustomerProjectItem.CustomerProjectItemType", "left")
            ->where("CustomerProjectItemRef", $id)->get("TblMsCustomerProjectItem")
            ->result_array();

        }
    }
?>