<h1>Instances</h1>
<p><?php echo $this->Html->link('Add New Instance', array('action' => 'add')); ?></p>
<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Description</th>
                <th>Server</th>
                <th>World</th>
                <th>Memory</th>
                <th>Actions</th>
	</tr>
	<?php foreach ($instances as $instance): ?>
	<tr>
		<td>
<?php echo $instance['Instance']['id']; ?>
                </td>
		<td>
<?php echo $instance['Instance']['name']; ?>
		</td>
		<td>
<?php echo $instance['Instance']['description']; ?>
    </td>
    <td>
<?php echo $servers[$instance['Instance']['server_id']]; ?>
    </td>
    <td>
<?php echo $worlds[$instance['Instance']['world_id']]; ?>
    </td>
		<td>
<?php echo $instance['Instance']['memory']; ?>MB
    </td>
    <td>
<?php
  echo $this->Html->image('icons/control_play.png',
                          array("url" => array('action' => 'start',
                                             $instance['Instance']['id']),
                                "alt" => "Start Instance"));
  echo $this->Html->image('icons/control_stop.png',
                          array("url" => array('action' => 'stop',
                                               $instance['Instance']['id']),
                                "alt" => "Stop Instance"));
  echo $this->Html->image('icons/pencil.png',
                          array("url" => array('action' => 'edit',
                                               $instance['Instance']['id']),
                                "alt" => "Edit Instance"));
  echo $this->Html->image('icons/cross.png',
                          array("url" => array('action' => 'delete',
                                               $instance['Instance']['id']),
                                "alt" => "Edit Instance"));
?>
    </td>
	</tr>
	<?php endforeach; ?>

</table>
<?php echo $this->element("navigation"); ?>
