<!-- Copyright:
  Intellectual property of Jakob Wedemeyer  github.com/jjwedemyer
  2016
 -->
<div id="content-header">
  <h1 class="content-header">Timer List</h1>
</div>
<div class="content">
  <table id='#timers_table' class='tablesorter table table-hover'>
    <thead>
    <tr>
      <th>Time</th>
      <th>Importance</th>
      <th>Type</th>
      <th>Cycle</th>
      <th>Allied</th>
      <th>System</th>
      <th>Assignee</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($timers as $timer): ?>
    <tr class="clickable-row" data-href="/timers/timer/<?php echo $timer["id"]; ?>">
      <!-- TODO: time countingdown js -->
      <td><span class="time-select" data-time="<?= $timer["time"]; ?>"></span></td>
      <td><?php echo $timer["importance"]; ?></td>
      <td><?php echo $timer["target_type"]; ?></td>
      <td id="cycle_field"><?php echo $timer["cycle"]; ?></td>
      <td id="allied_field"><?php echo $timer["allied"]; ?></td>
      <td><a href="http://evemaps.dotlan.net/system/<?php echo $timer["system"]; ?>"><?php echo $timer["system"]; ?></a></td>
      <td><?php echo $timer["assignee"]; ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
  </table>

</div>

<!-- timer handler
jQuery(document).ready(function() {
    $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });
});
$(".time-select").each(function(){
  $(".time-select").innerHTML = countdown(new Date($(".time-select").data("time"))).toString();
  setInterval(function(){$(".time-select").innerHTML = countdown(new Date($(".time-select").data("time"))).toString();},1000);
}
)

sorting plug
http://tablesorter.com/docs/
-->
