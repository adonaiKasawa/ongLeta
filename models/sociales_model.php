<?php

/**
 * 
 */
class Sociales_Model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function getSociale($type)
  {
    # code...
    // exemple
    return $this->db->select("SELECT * FROM sociales WHERE type_sociale =:t ORDER BY id DESC", array("t" => $type));
  }
}
