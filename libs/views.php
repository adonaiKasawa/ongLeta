<?php 

/**
 * 
 */
class Views 
{
	public $js;
	public $title;
	public $active;
	public $user;
	public $msg;
	public $sociales;
	public $getEcoles;
	public $revenue;
	public $agriculture;
	function __construct()
	{
		// echo "ceci est les views <br>";
	}
	public function rende($name, $noIclude = false)
	{
		if ($noIclude == true) {
		require 'views/header.php';
		require 'views/'. $name .'.php';	
		require 'views/footer.php';
		}else{
			require 'views/header.php';
			require 'views/'. $name .'.php';
			require 'views/footer.php';
		}
		

	}
    public function rende_one($name)
    {
        require 'views/'. $name .'.php';
	}
	public function renderBubget($name)
	{
		# code...
			require 'views/headerBudget.php';
			require 'views/'. $name .'.php';
			require 'views/footerBudget.php';
	}
}

