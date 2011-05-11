<?php

class UsersController extends AppController
{
  function index()
  {
    $this->redirect(array("controller" => "instances", "action" => "index"));
  }
  function login()
  {
  }

  function logout()
  {
    $this->redirect($this->Auth->logout());
  }
}

?>
