<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function getAllMahasiswa()
  {
    return $this->db->get('mahasiswa')->result_array();
  }

}
