<?php

class Instance extends AppModel
{
    var $name = "Instance";
    var $actsAs = array("Sluggable" => array("label" => "name", "overwrite" => true));
    var $validate = array(
        "name" => array(
            "rule" => "notEmpty"
        ),
        "description" => array(
            "rule" => "notEmpty"
        ),
        "memory" => array(
            "rule" => array("range", 255, 16385),
            "message" => "Please enter a memory value in MB (Between 256 and 16384)."
        ),
        "binary" => array(
            "rule" => array("range", 0, 1000),
            "MESSAge" => "No valid binary associated with this instance.")
        );
}

?>
