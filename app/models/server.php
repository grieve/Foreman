<?php
class Server extends AppModel
{
    var $name = "Server";
    var $actsAs = array("Uploadable");
    var $validate = array(
        "name" => array(
            "rule" => "notEmpty"
        ),
        "filepath" => array(
            "rule" => "notEmpty"
        )
    );
}
?>
