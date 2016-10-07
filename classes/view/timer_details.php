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
  <h1 class="content-header">Timer Details #{{id}}</h1>
</div>
<div class="content">
  <div class="col-md-6">
    <ul>
      <li>Time: <span id="countdown" data-time="{{time}}"></span></li>
      <li>Assigned FC: {{assignee}}</li>
      <li>Importance Rating: {{importance}}</li>
      <li>Type of the Target: {{target_type}}</li>
      <li>Cycle: {{cycle}}</li>
      <li>
        {% if allied %}
          <i class="fa fa-check text-green" data-toggle="tooltip" data-original-title="Character owns this hull."></i><span> Allied!</span>
        {% else %}
          <i class="fa fa-times text-red" data-toggle="tooltip" data-original-title="Character doesn't own this hull."></i><span> Hostile!</span>
        {% endif %}
      </li>
    </ul>
  </div>
  <div class="col-md-6">
    <ul>
      <li>System: {{system}}</li>
      {% if $target_type == "POS" %}
          <li>Planet: {{planet}}</li>
          <li>Moon: {{moon}}</li>
      {% endif %}
      <li>Creator: {{creator}}</li>
      <li id="create_time" data-create="{{create_time}}"></li>
      <li>Comments:<br> {{comments}}</li>
    </ul>
  </div>
</div>
{% endblock %}

{% block js %}
<script type="text/javascript">
var time = new Date($("#countdown").data("time"));
$("#countdown").innerHTML = countdown(time).toString();
setInterval(function(){
  $("#countdown").innerHTML = countdown(time).toString();
},1000);

$("#create_time").innerHTML = "Creation time: "+timeFormatter($("#create_time").data("create"));

function timeFormatter(dateTime){
var date = new Date(dateTime);
var time = date.getHours() + ":" + date.getMinutes() + " " + date.toISOString().substring(0,10);
//console.log(time);
return time;
}

</script>
{% endblock %}
