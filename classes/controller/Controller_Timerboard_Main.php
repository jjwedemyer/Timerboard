<!-- Copyright:
  Intellectual property of Jakob Wedemeyer  github.com/jjwedemyer
  2016
 -->
<?php
/**
 * Main Timerboard controller class.
 */
use \Model\Timer;
class Controller_Timerboard_Main extends Controller
{
  public $userlevel = 0;
  public function before()
  {
    if (1==1) {
      $userlevel = 1;
    }
  }

  /**
  * Default Function, lists all timers sortable hopefully :D
  */
  public function action_index()
  {
    if($userlevel < 1) {return View::forge('opsec_view');}
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
    return Timer::create_timer($data);
  }

  /**
  * Shows timer details
  */
  public function show_timer($id){
    $timer = Timer::get_timer($id);
    return View::forge('timer_details',$timer);
  }
}
