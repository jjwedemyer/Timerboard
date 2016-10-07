<!-- Copyright:
  Intellectual property of Jakob Wedemeyer  github.com/jjwedemyer
  2016
 -->
{% extends 'base.twig' %}

{% block stylesheets %}
{{ asset_css('selene.css') }}
{% endblock %}

{% block content %}
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
    {% for t in timers %}
    <tr class="clickable-row" data-href="/timers/timer/{{t.id}}">
      <!-- TODO: time countingdown js -->
      <td><span class="time-select" data-time="{{t.time}}"></span></td>
      <td>{{t.importance}}</td>
      <td>{{t.target_type}}</td>
      <td id="cycle_field">{{t.cycle}}</td>
      <td id="allied_field">
        {% if t.allied %}
          <i class="fa fa-check text-green"></i><span> Allied!</span>
        {% else %}
          <i class="fa fa-times text-red"></i><span> Hostile!</span>
        {% endif %}
      </td>
      <td><a href="http://evemaps.dotlan.net/map/{{t.region}}/{{t.system}}#sov">{{t.system}}</a></td>
      <td>{{t.assignee}}</td>
    </tr>
    {% endforeach %}
    </tbody>
  </table>

</div>
{% endblock %}

{% block js %}
<script type="text/javascript">
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
</script>
{% endblock %}
