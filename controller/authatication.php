<?php

/**
 * 
 */
class Authatication extends Controller
{

  function __construct()
  {
    parent::__construct();
    $this->view->js = array('auth/js/auth.js');
  }

  function index()
  {
    $this->view->title = 'App | Auth';
    $this->view->active = 'Authatication';
    $this->view->user = $this->user;
    $this->view->rende_one('auth/index');
  }

  function handleAuthUser()
  {
    if (isset($_POST['action']) === 'qwdfzx53sad4fgs6d5se4r65r3dcs4d85') {
      $pseudo = htmlspecialchars($_POST['pseudo']);
      $pass  = htmlspecialchars($_POST['pass']);
      if (!empty($pseudo) && !empty($pass)) {
        $findAllUser = $this->model->findAllUser();
        if (!empty($findAllUser)) {
          $createUser = $this->model->createUser(array(
            "pseudo" => $pseudo,
            "pass" => password_hash($pass, PASSWORD_BCRYPT)
          ));
          if ($createUser) {
            Session::set("userAppStage", array(
              "id" => 1,
              "pseudo" => $pseudo,
              "	fk_user_id" => null,
            ));
            echo 200;
          } else {
            echo 500;
          }
        } else {
          $auth = $this->model->findUserByPseudo($pseudo);
          if ($auth) {
            if($auth[0]['speudo'] === $pseudo && password_verify($pass, $auth[0]['pass'])){
              Session::set("userAppStage", array(
                "id" => 1,
                "pseudo" => $pseudo,
                "	fk_user_id" => null,
              ));
              echo 200;
            }else{
              echo 401;
            }
          } else {
            echo 401;
          }
        }
      } else {
        # code...
        echo 404;
      }
    } else {
      echo 401;
    }
  }
}
