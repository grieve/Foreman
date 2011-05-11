<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InstancesController
 *
 * @author grieve
 */
class InstancesController extends AppController
{
    var $helpers = array("Html", "Form", "Session");
    var $name = "Instances";
    var $uses = array("Instance", "Server");
    var $components = array('Session');

    function index()
    {
        $this->set("instances", $this->Instance->find('all'));
    }

    function view($id = null)
    {
        $this->Instance->id = $id;
        $this->set('instance', $this->Instance->read());
    }

    function add()
    {
        $servers = $this->Server->find("all");
        $serverOption = array();
        foreach ($servers as $server)
        {
          $serverOptions[$server['Server']]
        }


        if(!empty($this->data))
        {
            if ($this->data['Instance']['binary'] == 0)
            {

            }
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
}
?>
