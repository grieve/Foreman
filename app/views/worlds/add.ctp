<h1>Add New World</h1>

<?php
    echo $this->Form->create("World", array("enctype" => "multipart/form-data"));
    echo $this->Form->input("name");
    echo $this->Form->input("file", array("type" => "file"));
    echo $this->Form->end("Save");
?>
<?php echo $this->element("navigation"); ?>
