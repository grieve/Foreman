<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of server
 *
 * @author grieve
 */
class server extends AppModel
{
    var $name = "Server";
    var $validate = array(
        "name" => array(
            "rule" => "notEmpty"
        ),
        "path" => array(
            "rule" => "notEmpty"
        ),
        "memory" => array(
            "rule" => array("range", 255, 16385),
            "message" => "Please enter a memory value in MB (Between 256 and 16384)."
        )
    );
}
?>
