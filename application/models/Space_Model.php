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
    $query = $this->db->get('space');

    //print_r($query);exit;
    if ($query->num_rows() > 0) {
      return $query->result();
    }
  }

  public function insert_data($data)
  {
    $this->db->insert('space', $data);
    return $this->db->insert_id();
  }

  public function get_data($id = null)
  {
    if ($id) {
      return $this->db->get_where('space', array('id' => $id))->row_array();
    } else {
      return $this->db->get('space')->result_array();
    }
  }

  public function update_data($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->update('space', $data);
    return $this->db->affected_rows();
  }

  public function delete_data($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('space');
    return $this->db->affected_rows();
  }
}
