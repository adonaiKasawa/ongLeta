<?php

/**
 * 
 */
class Revenue_Model extends Model
{

  public function __construct()
  {
    parent::__construct();
  }

  public function find()
  {
    # code...
    // exemple
    //return $this->db->select("SELECT * FROM name_table");
  }

  public function findProduit($type)
  {
    return $this->db->select("SELECT * FROM revenue WHERE categorie_article =:t ORDER BY id DESC", array("t" => $type));
  }

}
