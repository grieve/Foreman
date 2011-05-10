<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ServersController
 *
 * @author grieve
 */
class ServersController extends AppController
{
    var $helpers = array("Html", "Form");
    var $name = "Servers";

    function index()
    {
        $this->set("servers", $this->Server->find('all'));
    }
}
?>
