<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Functionimage extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
   }

   function product($id)
   {
      $configfile = "asset/image/product/"; //untuk server
      //$configfile = "/omahbata/asset/image/"; //untuk lokal 
      try {
         if (file_exists($configfile .   $id . ".png")) {
            $path = FCPATH . $configfile .  $id . ".png";
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $image = imagecreatefromstring($data);
            header('Content-Type: image/' . $type);
            imagepng($image);
            imagedestroy($image);
            exit(0);
         } else {
            $path = FCPATH .  $configfile . 'img-not-available.png';
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $image = imagecreatefromstring($data);
            header('Content-Type: image/' . $type);
            imagepng($image);
            imagedestroy($image);
            exit(0);
         }
      } catch (Exception $e) {
         $path = FCPATH .  $configfile . '/img-not-available.png';
         $type = pathinfo($path, PATHINFO_EXTENSION);
         $data = file_get_contents($path);
         $image = imagecreatefromstring($data);
         header('Content-Type: image/' . $type);
         imagepng($image);
         imagedestroy($image);
         exit(0);
      }
   }
}
