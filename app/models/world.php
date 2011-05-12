<?php
class World extends AppModel
{
    var $name = "World";
    var $actsAs = array("Uploadable" => array("dir" =>
    array("uploads/worlds")));
    var $validate = array(
        "name" => array(
            "rule" => "notEmpty"
        ),
        "file" => array(
            "rule" => array("extension", array("zip")),
            "message" => "Worlds must be zipped before being uploaded."
        )
    );
}
?>
