<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

/**
 * Base model for the application
 * 
 */
class MY_Model extends CI_Model
{

  private $_foundRows = 0;
  protected $_table = '';

  /**
   * Constructor.
   * @return 
   */
  public function __construct()
  {
    parent::__construct();
  }
}
