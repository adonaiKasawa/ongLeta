<?php

/**
 * 
 */
class Contact extends Controller
{

	function __construct()
	{
		parent::__construct();
		$this->view->js = array('home/js/home.js');
	}

	function index()
	{
		$this->view->title = 'ONG | contact';
		$this->view->active = 'contact';
		$this->view->user = $this->user;
		$this->view->rende('contact/index');
	}
	
	


}
