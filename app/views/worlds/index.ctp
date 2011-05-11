<h1>Worlds</h1>
<p><?php echo $this->Html->link('Add New World', array('action' => 'add')); ?></p>
<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Actions</th>
  </tr>
<?php
  foreach ($worlds as $world):
?>
  <tr>
    <td>
<?php
  echo $world['World']['id'];
?>
    </td>
    <td>
<?php
    echo $this->Html->link(
                            $world['World']['name'],
                            array(
                                    'controller' => 'worlds',
                                    'action' => 'view',
                                    $world['World']['id']));
?>
    </td>
    <td>
<?php
  echo $this->Html->link(
                          'Delete',
                          array (
                                  'action' => 'delete',
                                  $world['World']['id']
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
