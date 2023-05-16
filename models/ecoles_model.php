<?php

/**
 * 
 */
class ecoles_Model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function getEcoles()
  {
    # code...
    // exemple
    return $this->db->select("SELECT * FROM ecoles");
  }
}
