<?php

/**
 * 
 */
class Sociales extends Controller
{

	function __construct()
	{
		parent::__construct();
		$this->view->js = array('home/js/home.js');
	}

	function index()
	{
		$this->view->title = 'App | Page D\'accueil';
		$this->view->active = 'home';
		$this->view->user = $this->user;
		$this->view->rende('sociales/index');
	}

	function orphelinat()
	{
		$this->view->title = 'ONG | Orphelinat';
		$this->view->active = 'sociales';
		$this->view->user = $this->user;
		$this->view->rende('sociales/orphelinat');
	}

	function handicapes()
	{
		$this->view->title = 'ONG | Handicapes';
		$this->view->active = 'sociales';
		$this->view->user = $this->user;
		$this->view->rende('sociales/handicapes');
	}

	function filles_mere()
	{
		$this->view->title = 'ONG | filles mére';
		$this->view->active = 'sociales';
		$this->view->user = $this->user;
		$this->view->rende('sociales/filles_mere');
	}

	function veuf()
	{
		$this->view->title = 'ONG | veuf (ves)';
		$this->view->active = 'sociales';
		$this->view->user = $this->user;
		$this->view->rende('sociales/veuf');
	}

	function viellards()
	{
		$this->view->title = 'ONG | Les hommes de viéllards';
		$this->view->active = 'sociales';
		$this->view->user = $this->user;
		$this->view->rende('sociales/viellards');
	}
}
