<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Class Payment
 */
class Space_Model extends CI_Model
{

  /**
   * initializes the class inheriting the
   * methods of the class My_Model
   */
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  /**
   * @param $data
   *
   * @return mixed
   */
  public function getSpaceList()
  {
    $query=$this->db->get('space');

		//print_r($query);exit;
		if($query->num_rows()>0)
		{
			return $query->result();
		}
  }
}