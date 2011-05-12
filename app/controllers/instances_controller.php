<?php
class InstancesController extends AppController
{
    var $name = "Instances";
    var $uses = array("Instance", "Server", "World");
    var $components = array('Session');

    function index()
    {
        $this->set("instances", $this->Instance->find('all'));
        $servers = $this->Server->find("all");
        $serverOptions = array();
        foreach ($servers as $server)
        {
          $serverOptions[$server['Server']['id']] =
          $server['Server']['name']." (".$server['Server']['filename'].")";
        }
        $this->set('servers', $serverOptions);

        $worlds = $this->World->find("all");
        $worldOptions = array();
        foreach ($worlds as $world)
        {
          $worldOptions[$world['World']['id']] =
          $world['World']['name'];
        }
        $this->set('worlds', $worldOptions);
    }

    function view($id = null)
    {
        $this->Instance->id = $id;
        $this->set('instance', $this->Instance->read());
    }

    function add()
    {
        $servers = $this->Server->find("all");
        $serverOptions = array();
        foreach ($servers as $server)
        {
          $serverOptions[$server['Server']['id']] =
          $server['Server']['name']." (".$server['Server']['filename'].")";
        }
        $this->set('servers', $serverOptions);

        $worlds = $this->World->find("all");
        $worldOptions = array();
        foreach ($worlds as $world)
        {
          $worldOptions[$world['World']['id']] =
          $world['World']['name']." (".$world['World']['filename'].")";
        }
        $this->set('worlds', $worldOptions);

        if(!empty($this->data))
        {
            if($this->Instance->save($this->data))
            {
                $this->Session->setFlash("'".$this->data['Instance']['name']."' saved successfully.");
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    function edit($id = null)
    {

    }

    function delete($id = null)
    {
        $this->Instance->id = $id;
        $postDetails = $this->Instance->read();
        if($this->Instance->delete($id))
        {
            $this->Session->setFlash("'".$postDetails['Instance']['name']."' deleted.");
            $this->redirect(array("action" => "index"));
        }
    }

    function start($id = null)
    {
      $this->redirect(array("action" => "view", $id));
    }

    function stop($id = null)
    {
      $this->redirect(array("action" => "view", $id));
    }
}
?>
