<h1>Add new server</h1>

<?php
    echo $this->Form->create("Instance", array("enctype" => "multipart/form-data"));
    echo $this->Form->input("name");
    echo $this->Form->input("description", array("rows" => "5"));
    array_push($servers, "Upload New...");
    echo $this->Form->input("server", array("type" => "select", "options" => $servers));
    echo $this->Form->input("memory");
    echo $this->Form->end("Save");
?>
