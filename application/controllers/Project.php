<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model('Product_model');
      $this->load->model('Project_model');
   }

   public function index()
   {
      $data['title'] = 'Project';
      $data['_page'] = 'PROJECT';
      $data['project'] = $this->Project_model->getDataProject();
      $this->load->view('templates/header.php', $data);
      $this->load->view('content/project/project.php');
      $this->load->view('templates/footer.php');
   }
}
