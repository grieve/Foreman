<h1>Servers</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Description</th>
                <th>Memory</th>
	</tr>
	<?php foreach ($servers as $server): ?>
	<tr>
		<td>
<?php echo $server['Server']['id']; ?>
                </td>
		<td>
<?php 
    echo $this->Html->link(
                            $server['Server']['name'],
                            array(
                                    'controller' => 'servers',
                                    'action' => 'view',
                                    $server['Server']['id']));
?>
		</td>
		<td><?php echo $post['Server']['description']; ?></td>
		<td><?php echo $post['Server']['memlow']; ?> - <?php echo $post['Server']['memhigh']; ?></td>
	</tr>
	<?php endforeach; ?>

</table>