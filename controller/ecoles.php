<?php

/**
 * 
 */
class Ecoles extends Controller
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
    $this->view->getEcoles = $this->model->getEcoles();
    $this->view->rende('ecole/index');
  }
}
