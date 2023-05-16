<?php

/**
 * 
 */
class agriculture_Model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function getAgriculture()
  {
    # code...
    // exemple
    return $this->db->select("SELECT * FROM agriculture ORDER BY id DESC");
  }
}
