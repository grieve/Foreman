<?php
class AppController extends Controller
{
  public $helpers = array('AutoJavascript', 'Html', 'Form', 'Session');
  public $components = array('Auth');
  function beforeFilter() {
    $this->Auth->userModel = 'User';
    $this->Auth->fields = array('username' => 'email', 'password' => 'password');
    $this->Auth->loginAction = array('admin' => false, 'controller' => 'users', 'action' => 'login');
    $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'index');
  }
}
?>
