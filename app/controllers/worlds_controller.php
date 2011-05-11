<?php

class WorldsController extends AppController
{
    var $name = "Worlds";
    var $helpers = array("Html", "Form", "Session");
    var $components = array('Session');

    function index()
    {
        $this->set("worlds", $this->World->find('all'));
    }

    function view($id = null)
    {
        $this->World->id = $id;
        $this->set('world', $this->World->read());
    }

    function add()
    {
      if(!empty($this->data))
      {
        if($this->World->save($this->data))
        {
          $this->Session->setFlash("'".$this->data['World']['name']."' added
          successfully.");
          $this->redirect(array("action" => "index"));
        }
      }
    }

    function delete($id = null)
    {
      $this->World->id = $id;
      $postDetails = $this->World->read();
      if($this->World->delete($id))
      {
          $this->Session->setFlash("'".$postDetails['World']['name']."' deleted.");
          $this->redirect(array("action" => "index"));
      }
    }

}
