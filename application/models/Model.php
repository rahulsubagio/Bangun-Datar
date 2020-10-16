<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function insertData($name)
  {
    return $this->db->insert('bdatar', $name);
  }

  public function getAll()
  {
    return $this->db->get('bdatar')->num_rows();
  }

  public function getSegitiga()
  {
    return $this->db->get_where('bdatar', array('name' => 'segitiga'))->num_rows();
  }

  public function getPersegi()
  {
    return $this->db->get_where('bdatar', array('name' => 'persegi'))->num_rows();
  }

  public function getLingkaran()
  {
    return $this->db->get_where('bdatar', array('name' => 'lingkaran'))->num_rows();
  }
}
