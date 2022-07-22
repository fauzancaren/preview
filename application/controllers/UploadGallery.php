<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UploadGallery extends CI_Controller
{
   function uploadGalleryProduct()
   {
      $config['upload_path'] = FCPATH . './asset/image/product/test';
      $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';

      if (!empty($_FILES)) {
         
         $this->load->library('upload', $config);
         if ($this->upload->do_upload('userfile')) {
            $file_name = $this->upload->data('file_name');
            $token = $this->input->post('token_foto');
            $this->db->insert('TblMsItemGallery', array('MsItemGalleryImage' => $file_name, 'MsItemGalleryRef' => $token));
         } else {
            echo "upload gagal";
         }
       
      }



      // $config['upload_path'] = FCPATH. './asset/image/product/test';
      // $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
      // $this->load->library('upload', $config);

      // if($this->upload->do_upload('userfile')){
      //    $file_name = $this->upload->data('file_name');
      //    $token = $this->input->post('token_foto');
      //    $this->db->insert('TblMsItemGallery', array('MsItemGalleryImage' => $file_name, 'MsItemGalleryRef' => $token));
      // }else{
      //    echo "upload gagal";
      // }
   }

   function removeGalleryProduct()
   {
      $token = $this->input->post('token');

      $foto = $this->db->get_where('TblMsItemGallery', array('TblMsItemGalleryRef' => $token));

      if ($foto->num_rows() > 0) {
         $hasil = $foto->row();
         $nama_foto = $hasil->nama_foto;
         if (file_exists($file = FCPATH . './asset/image/product/test' . $nama_foto)) {
            unlink($file);
         }
         $this->db->delete('TblMsItemGallery', array('TblMsItemGalleryref' => $token));
      }

      echo "{}";
   }
}
