<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FunctionAdmin extends CI_Controller
{
    function product_edit($id)
    {
        //upload file
        // $data = substr($this->input->post("data"), strpos($this->input->post("data"), ",") + 1);
        // $decodedData = base64_decode($data);
        // $location = 'asset/image/qrcode/' . $this->input->post("fname"); //untuk lokal
        // file_put_contents(FCPATH . $location, $decodedData);
        $data = $this->input->post();

        $this->db->where('MsItemDeskripsiRef', $id);
        $this->db->update('TblMsItemDeskripsi', $data);

        //delete sosial media
        // $this->db->where('QrSosialMediaRef', $id);
        // $this->db->delete('TblQrSosialMedia');

        // insert sosial media
        // $sosialMediaData = $this->input->post("sosialMedia");
        // $sosialMediaData = json_decode($sosialMediaData);
        // if ($sosialMediaData) {
        //     foreach ($sosialMediaData as $row) {
        //         $data = array(
        //             'QrSosialMediaType' => $row->QrSosialMediaType,
        //             'QrSosialMediaUrl' => $row->QrSosialMediaUrl,
        //             'QrSosialMediaText' => $row->QrSosialMediaText,
        //             'QrSosialMediaRef' => $row->QrSosialMediaRef,
        //             'QrSosialMediaPosition' => $row->QrSosialMediaPosition
        //         );
        //         $this->db->insert('TblQrSosialMedia', $data);
        //     }
        //     return true;
        // }
        // return false;
    }

    function project_edit($id)
    {
        $data = $this->input->post();

        $this->db->where('CustomerProjectId', $id);
        $this->db->update('TblMsCustomerProject', $data);
    }
}
