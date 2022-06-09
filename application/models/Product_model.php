<?php
class Product_model extends CI_Model
{

    public function getDataProduct()
    {
        return $this->db->get('TblMsItem', 20)->result_array();
    }
    public function getDataProductById($id)
    {
        $this->db->where('MsItemCatId', $id);
        return $this->db->get('TblMsItem', 20)->result_array();
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
    public function getDataItemById($id)
    {
        $this->db->from('TblMsItem');
        $this->db->where('MsItemId', $id);
        return $this->db->get()->result_array();
    }
    public function getDataItemDeskripsiById($id)
    {
        $this->db->from('TblMsItemDeskripsi');
        $this->db->where('MsItemDeskripsiRef', $id);
        return $this->db->get()->result_array();
    }
    
    public function getDataProductNext($category, $index)
    {
        if ($category != "0") $this->db->where('MsItemCatId', $category);
        return $this->db->order_by("MsItemName asc")->get("TblMsItem", 20, $index)->result();
    }
    function get_base_64_by_item($id)
    {
        $configfile = "asset/image/product/"; //untuk server
        //$configfile = "/omahbata/asset/image/"; //untuk lokal
        try {
            if (file_exists($configfile .   $id)) {
                $path = FCPATH . $configfile .  $id;
                $type = pathinfo($path, PATHINFO_EXTENSION);
                $data = file_get_contents($path);
                $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                return $base64;
            } else {
                $path = FCPATH .  $configfile . 'img-not-available.png';
                $type = pathinfo($path, PATHINFO_EXTENSION);
                $data = file_get_contents($path);
                $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
                return $base64;
            }
        } catch (Exception $e) {
            $path = FCPATH .  $configfile . '/img-not-available.png';
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            return $base64;
        }
    }
}
