<h1>Instances</h1>
<p><?php echo $this->Html->link('Add New Instance', array('action' => 'add')); ?></p>
<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Description</th>
                <th>Binary</th>
                <th>Memory</th>
                <th>Actions</th>
	</tr>
	<?php foreach ($instances as $instance): ?>
	<tr>
		<td>
<?php echo $instance['Instance']['id']; ?>
                </td>
		<td>
<?php
    echo $this->Html->link(
                            $instance['Instance']['name'],
                            array(
                                    'controller' => 'instances',
                                    'action' => 'view',
                                    $instance['Instance']['id']));
?>
		</td>
		<td><?php echo $instance['Instance']['description']; ?></td>
                <td><?php echo $instance['Instance']['server_id']; ?></td>
		<td><?php echo $instance['Instance']['memory']; ?>MB</td>
                <td>
                    <?php echo $this->Html->link('Delete', array('action' => 'delete', $instance['Instance']['id']), null, 'Are you sure?')?>
                </td>
	</tr>
	<?php endforeach; ?>

</table>