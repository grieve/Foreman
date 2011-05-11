<?php
class World extends AppModel
{
    var $name = "World";
    var $validate = array(
        "name" => array(
            "rule" => "notEmpty"
        )
    );
}
?>
