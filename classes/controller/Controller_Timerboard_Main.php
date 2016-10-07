<!-- Copyright:
  Intellectual property of Jakob Wedemeyer  github.com/jjwedemyer
  2016
 -->
<?php
/**
 * Main Timerboard controller class.
 */
use \Model\Timer;
use \Auth;
class Controller_Timerboard_Main extends Controller
{
  public $userlevel = 0;
  public function before()
  {
    
    if(!Auth::has_access(timer.fc)) {return View::forge('opsec_view');}
  }

  /**
  * Default Function, lists all timers sortable hopefully :D
  */
  public function action_index()
  {
    $data["timers"] = Timer::get_timers();
    $timers = array_map('region_map',array_values($data['timers'])); // no clue if this works
    // TODO: possible transformations of data
    return View::forge('timers_list',$data);
  }

  /**
  * helper to create map
  */
  function region_map($timer){
    $timer['region'] = Timer::get_region($timer['system']);
    return $timer;
  }

  /**
  * Designed to create new Timers;
  */
  public function post_timer()
  {
    $data = array();
    $post = Input::post();
    foreach ($post as $key => $value) {
      if(strpos($value,"formdata_") !== false){
        $data[$key] = $value;
      }
    }
    return Timer::create_timer($data);
  }

  /**
  *
  */
  public function action_post_timer(){
    return View::forge('timer_create');
  }

  /**
  * Shows timer details
  */
  public function show_timer($id){
    $timer = Timer::get_timer($id);
    return View::forge('timer_details',$timer);
  }
}
