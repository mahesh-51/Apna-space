<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Class Payment
 */
class Client_Model extends CI_Model
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
  public function getClientList()
  {
    $this->db->join('space', 'space.space_id = client.space_id', 'LEFT');
    $query=$this->db->get('client');

    

		// print_r($query->result());exit;
		if($query->num_rows()>0)
		{
			return $query->result();
		}
  }
}