<div id="content-header">
  <h1 class="content-header">Timer List</h1>
</div>
<div class="content">
  <table id='#timers_table' class='tablesorter'>
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
      <td><?php echo $timer["time"]; ?></td>
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
jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });
});

sorting plug
http://tablesorter.com/docs/
-->
