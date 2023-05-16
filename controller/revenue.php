<?php

/**
 * 
 */
class Revenue extends Controller
{

  function __construct()
  {
    parent::__construct();
    $this->view->js = array('home/js/home.js');
  }

  function index()
  {
    $this->view->title = 'Revenue | Page D\'accueil';
    $this->view->active = 'revenue';
    $this->view->user = $this->user;
    // $this->view->revenue = $this->model->getSociale("");
    $this->view->rende('revenue/index');
  }

  function habillement()
  {
    $this->view->title = 'Revenue | Habillement';
    $this->view->active = 'sociales';
    $this->view->user = $this->user;
    $this->view->revenue = $this->model->findProduit("habillement");
    $this->view->rende('revenue/habillement');
  }
  
  function voiture()
  {
    $this->view->title = 'ONG | Produit cosmetiques';
    $this->view->active = 'revenue';
    $this->view->user = $this->user;
    $this->view->revenue = $this->model->findProduit("voiture");
    $this->view->rende('revenue/voiture');
  }

  function prod_cosmetique()
  {
    $this->view->title = 'ONG | Produit cosmetiques';
    $this->view->active = 'revenue';
    $this->view->user = $this->user;
    $this->view->revenue = $this->model->findProduit("prod_cosmetique");
    $this->view->rende('revenue/prod_cosmetique');
  }

  public function commandProduit()
  {
    if (isset($_POST['submit'])) {
      $email = htmlspecialchars($_POST['email']);
      $password = htmlspecialchars($_POST['password']);
      if ($email === "adoaimbula3@gmail.com" && $password === "hack") {
        echo "success";
      } else {
        echo "eror";
      }
    } else {
      echo json_encode(array("error" => "Vous devez soumettre un formilaire!"));
    }
  }
  
}
