<?php
  echo $this->Html->css("navigation", null, array("inline" => false));
?>
<div class="top_background"></div>
<div class="top_navigation">
  <ul>
    <li>
      <?php echo $this->Html->link("Instances", array("controller" =>
      "instances", "action" => "index")); ?>
    </li>
    <li>
      <?php echo $this->Html->link("Servers", array("controller" =>
      "servers", "action" => "index")); ?>
    </li>
    <li>
      <?php echo $this->Html->link("Worlds", array("controller" =>
      "worlds", "action" => "index")); ?>
    </li>
  </ul>
</div>
<div class="top_masthead">
  <ul>
    <li>
      <?php echo $html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>
    </li>
    <li>
      <?php echo $this->Html->link($session->read('Auth.User.first_name')."
      ".$session->read('Auth.User.last_name'), array("controller" =>
      "instances", "action" => "index")); ?>
    </li>
  </ul>
</div>
