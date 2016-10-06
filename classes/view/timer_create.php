<!-- Copyright:
  Intellectual property of Jakob Wedemeyer  github.com/jjwedemyer
  2016
 -->
<div id="content-header">
  <h1 class="content-header">Timer creation form</h1>
</div>
<div class="content">
  <div id="form_wrap">
  <form class="forms" action="/timers" method="post">
    <ul>
    <li>
      <div class="left">Time</div>
      <div class="right"><input type="text" name="time" value=""></div>
    </li>
    <li>
      <div class="left">Importance</div>
      <div class="right"><input list="importance" name="importance" value="">
        <datalist id="importance">
          <option value="Highly Strategic, CTA target">
          <option value="Strategic Importance, StratOP">
          <option value="Minor Importance, StratOPs">
        </datalist>
      </div>
    </li>
    <li>
      <div class="left">Target's Type </div>
      <div class="right"><input list="target_type">
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
    </li>
    <li>
      <div class="left">Cycle </div>
      <div class="right"><select class="" name="cycle">
        <option value="shield">Shield</option>
        <option value="armor">Armor</option>
        <option value="final">final</option>
      </select></div>
    </li>
    <li>
      <div class="left">Allied: </div>
      <div class="right"><input type="checkbox" name="allied" value=""></div>
    </li>
    <li>
      <div class="left">Assigned FC: </div>
      <div class="right"><input type="text" name="assignee" value=""></div>
    </li>
    <li>
      <div class="left">System:
                    <br>Planet:
                    <br>Moon:
      </div>
      <div class="right">
        <input type="text" name="system" value="">
        <input type="text" name="planet" value="">
        <input type="text" name="moon" value="">
      </div>
    </li>
    <li>
      <div class="left">Comments:</div>
      <div class="right"><textarea name="comments" class="form-control" rows="10"></textarea></div>
    </li>
    <li><input type="submit" value="Submit Timer!"></li>
    </ul>
  </form>
</div>
</div>
