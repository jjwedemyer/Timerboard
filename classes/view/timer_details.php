<div id="content-header">
  <h1 class="content-header">Timer Details #<?php echo $id;?></h1>
</div>
<div class="content">
  <div class="left_half">
    <ul>
      <li>Time: <span id="countdown" data-time="<?= $time?>"></span></li>
      <li>Assigned FC: <?php echo $assignee; ?></li>
      <li>Importance Rating: <?php echo $importance; ?></li>
      <li>Type of the Target: <?php echo $target_type; ?></li>
      <li>Cycle: <?php echo $cycle; ?></li>
      <li>Allied or Not? <?php echo $allied; ?></li>
    </ul>
  </div>
  <div class="right_half">
    <ul>
      <li>System: <?php echo $system; ?></li>
      <?php if($target_type == "POS") echo<<<EOT
        <li>Planet: $planet</li>
        <li>Moon: $moon</li>
      EOT;
      ?>
      <li>Creator: <?php echo $creator; ?></li>
      <li>Creation time: <?php echo $create_time; ?></li>
      <li>Comments:<br><?php echo $comments; ?></li>
    </ul>
  </div>
</div>

<!-- js script herefor
var time = new Date($(#countdown).data("time"));
$("#countdown").innerHTML = countdown(time).toString();
setInterval(function(){
  $("#countdown").innerHTML = countdown(time).toString();
},1000);
-->
