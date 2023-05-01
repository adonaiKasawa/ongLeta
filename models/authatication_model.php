<?php 

/**
  * 
  */
class Authatication_Model extends Model {
 	
 	public function __construct()
 	{		
 		parent::__construct();
 	}
  
  public function findAllUser()
  {
    # code...
    return $this->db->select("SELECT * FROM users");
  }

	public function findUserByPseudo(string $pseudo)
	{
		# code...
    return $this->db->select("SELECT * FROM users WHERE pseudo =:pseudo", array('pseudo' => $pseudo));
	}


} 
 