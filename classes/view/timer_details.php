<div id="content-header">
  <h1 class="content-header">Timer Details #<?php echo $timer[id];?></h1>
</div>
<div class="content">
  <div class="left_half">
    <ul>
      <li>Time: <?php echo $timer["time"]; ?></li>
      <li>Assigned FC: <?php echo $timer["assignee"] ?></li>
      <li>Importance Rating: <?php echo $timer["importance"]; ?></li>
      <li>Type of the Target: <?php echo $timer["target_type"]; ?></li>
      <li>Cycle: <?php echo $timer["cycle"]; ?></li>
      <li>Allied or Not? <?php echo $timer["allied"]; ?></li>
    </ul>
  </div>
  <div class="right_half">
    <ul>
      <li>System: <?php echo $timer["system"]; ?></li>
      <?php if($timer["target_type"] == "POS") echo<<<EOT
        <li>Planet: $timer["planet"]</li>
        <li>Moon: $timer["moon"]</li>
      EOT;
      ?>
      <li>Creator: <?php echo $timer["creator"] ?></li>
      <li>Creation time: <?php echo $timer["create_time"] ?></li>
      <li>Comments:<br><?php echo $timer["comments"] ?></li>
    </ul>
  </div>
</div>
