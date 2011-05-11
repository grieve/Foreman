<h1>Add new server</h1>

<?php
    echo $this->Form->create("Instance", array("enctype" => "multipart/form-data"));
    echo $this->Form->input("name");
    echo $this->Form->input("description", array("rows" => "5"));
    echo $this->Form->input("server_id", array("type" => "select", "options" => $servers));
    echo $this->Form->input("world_id", array("type" => "select", "options" =>
    $worlds));
    echo $this->Form->input("memory");
    echo $this->Form->end("Save");
    echo $this->element("navigation");
?>
<?php echo $this->element("navigation"); ?>
