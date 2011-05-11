<h1>Servers</h1>
<p><?php echo $this->Html->link('Add New Server', array('action' => 'add')); ?></p>
<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Path</th>
    <th>Actions</th>
  </tr>
<?php
  foreach ($servers as $server):
?>
  <tr>
    <td>
<?php
  echo $server['Server']['id'];
?>
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
    <td>
<?php
  echo $server['Server']['filepath'];
?>
    </td>
    <td>
<?php
  echo $this->Html->link(
                          'Delete',
                          array (
                                  'action' => 'delete',
                                  $server['Server']['id']
                                ),
                          null,
                          'Are you sure?'
                        )
?>
    </td>
  </tr>
<?php
  endforeach;
?>
</table>
