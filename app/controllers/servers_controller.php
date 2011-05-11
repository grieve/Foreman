<?php

class ServersController extends AppController
{
    var $name = "Servers";
    var $helpers = array("Html", "Form", "Session");
    var $components = array('Session');

    function index()
    {
        $this->set("servers", $this->Server->find('all'));
    }

    function view($id = null)
    {
        $this->Server->id = $id;
        $this->set('server', $this->Server->read());
    }

    function add()
    {
      if(!empty($this->data))
      {
        if($this->Server->save($this->data))
        {
          $this->Session->setFlash("'".$this->data['Server']['name']."' added
          successfully.");
          $this->redirect(array("action" => "index"));
        }
      }
    }

    function delete($id = null)
    {
      $this->Server->id = $id;
      $postDetails = $this->Server->read();
      if($this->Server->delete($id))
      {
          $this->Session->setFlash("'".$postDetails['Server']['name']."' deleted.");
          $this->redirect(array("action" => "index"));
      }
    }

}

?>
