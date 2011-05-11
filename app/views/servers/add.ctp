<h1>Add New Server</h1>

<?php
    echo $this->Form->create("Server", array("enctype" => "multipart/form-data"));
    echo $this->Form->input("name");
    echo $this->Form->input("file", array("type" => "file"));
    echo $this->Form->end("Save");
?>
