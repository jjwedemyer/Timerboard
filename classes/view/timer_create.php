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
  <h1 class="content-header">Timer creation form</h1>
</div>
<div class="content">
  <div id="form_wrap">
  <form id="timer_form" class="forms" action="/timers" method="post">
    <div class="form-group">
        <label for="formdata_time">Time</label>
        <input type="text" name="formdata_time" value="">
    </div>
    <div class="form-group">
      <label for="formdata_importance">Importance</label>
      <input list="importance" name="formdata_importance" value="">
        <datalist id="importance">
          <option value="Highly Strategic, CTA target">
          <option value="Strategic Importance, StratOP">
          <option value="Minor Importance, StratOPs">
        </datalist>
    </div>
    <div class="form-group">
      <label for="formdata_target_type">Target's Type</label>
      <input name="formdata_target_type" list="target_type" value="">
        <datalist id="target_type">
          <option value="astrahus">
          <option value="fortizar">
          <option value="keepstar">
          <option value="pos_small">
          <option value="pos_medium">
          <option value="pos_large">
          <option value="ec_medium">
          <option value="ec_large">
          <option value="ec_xlarge">
        </datalist>
    </div>
    <div class="form-group">Cycle </div>
      <select class="" name="formdata_cycle">
        <option value="shield">Shield</option>
        <option value="armor">Armor</option>
        <option value="final">final</option>
      </select>
    </div>
    <div class="form-group">
        <label for="formdata_allied">Allied:</label>
        <input type="checkbox" name="formdata_allied" value="">
    </div>
    <div class="form-group">
      <label for="formdata_assignee">Assigned FC: </label>
      <input type="text" name="formdata_assignee" value="">
    </div>
    <div class="form-group">
      <label for="formdata_system" class="sr-only">System:</label>
      <label for="formdata_planet" class="sr-only">Planet:</label>
      <label for="formdata_moon" class="sr-only">Moon:</label>
      <input type="text" class="form-control" name="formdata_system" value="" placeholder="XVV-21">
      <input type="number" name="formdata_planet" value="" placeholder="1">
      <input type="number" name="formdata_moon" value="" placeholder="1">
    </div>
    <div class="form-group">
      <label for="formdata_comments"></label>
      <textarea name="formdata_comments" class="form-control" rows="10"></textarea></div>
      <button type="submit" value="Submit Timer!">
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit Timer</button>
      </div>
    </div>
  </form>
</div>
</div>
{% endblock %}

{% block js %}
<script type="text/javascript">
$('#timer_form').submit(function() {
  // submit the form
  $(this).ajaxSubmit();
  // return false to prevent normal browser submit and page navigation
  return false;
});
</script>
{% endblock %}
