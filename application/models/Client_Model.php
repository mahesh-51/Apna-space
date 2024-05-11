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
    // $this->db->join('space', 'space.space_id = client.space_id', 'LEFT');
    $query = $this->db->get('client');
    // print_r($query->result());exit;
    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }

  public function insert_data($data)
  {
    $this->db->insert('client', $data);
    return $this->db->insert_id();
  }

  public function get_data($id = null)
  {
    if ($id) {
      return $this->db->get_where('client', array('id' => $id))->row_array();
    } else {
      return $this->db->get('client')->result_array();
    }
  }

  public function update_data($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->update('client', $data);
    return $this->db->affected_rows();
  }

  public function delete_data($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('client');
    return $this->db->affected_rows();
  }
}
