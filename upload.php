<?php 
$configfile = getcwd()."/asset/image/product/".$_GET["kode"] . ".png"; //untuk server    
try {
   if (file_exists($configfile) == 1) { 
      $type = pathinfo($configfile, PATHINFO_EXTENSION); 
      $data = file_get_contents($configfile);
      $image = imagecreatefromstring($data);
      header('Content-Type: image/JPEG');
      imagejpeg($image, null, 9);
      imagedestroy($image);
      exit(0);
   } else {
      $path = getcwd()."/asset/image/product/" . 'not-found.png';
      $type = pathinfo($path, PATHINFO_EXTENSION);
      $data = file_get_contents($path);
      $image = imagecreatefromstring($data);
      header('Content-Type: image/' . $type);
      imagepng($image, null, 7);
      imagedestroy($image);
      exit(0);
   }
} catch (Exception $e) {
   $path = getcwd()."/asset/image/product/" . 'not-found.png';
   $type = pathinfo($path, PATHINFO_EXTENSION);
   $data = file_get_contents($path);
   $image = imagecreatefromstring($data);
   header('Content-Type: image/' . $type);
   imagepng($image, null, 7);
   imagedestroy($image);
   exit(0);
}