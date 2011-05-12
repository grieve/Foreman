<?php
class Server extends AppModel
{
    var $name = "Server";
    var $actsAs = array("Uploadable" => array("dir" => array("uploads/servers")));
    var $validate = array(
        "name" => array(
            "rule" => "notEmpty"
        ),
        "file" => array(
            "rule" => array("extension", array("jar")),
            "message" => "Server must have *.jar extension."
        )
    );
}
?>
