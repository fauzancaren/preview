<?php
class Product_model extends CI_Model
{

    public function getDataProduct()
    {
        return $this->db->get('TblMsItem')->result_array();
        $this->db->from('TblMsItem');
        $this->db->join('TblMsItemCategoryDetail', 'TblMsItemCategoryDetail.CategoryDetailId = TblMsItem.MsItemCatId', 'left');
        $this->db->where('CategoryDetailVisible', '1');
        $query = $this->db->get();
    }
    public function getDataProductById($id)
    {
        $this->db->where('MsItemCatId', $id);
        return $this->db->get('TblMsItem')->result_array();
    }

    public function getDataProductKategori()
    {
        return $this->db->get('TblMsItemCategoryDetail')->result_array();
    }

    public function getDataProductKategoriById($id)
    {
        $this->db->from('TblMsItemCategoryDetail');
        $this->db->where('CategoryRef', $id);
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

    public function getDataItemSubImgById($id)
    {
        $this->db->from('TblMsItemSubImage');
        $this->db->where('ItemSubImageRef', $id);
        return $this->db->get()->result_array();
    }

    public function getDataProductNext($category, $index)
    {
        if ($category != "0") $this->db->where('MsItemCatId', $category);
        return $this->db->join('TblMsItemDeskripsi', 'TblMsItemDeskripsi.MsItemDeskripsiRef = TblMsItem.MsItemId', 'left')->where('MsItemDeskripsiVisible', '1')->order_by("MsItemName asc")->get("TblMsItem", 20, $index)->result();
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
