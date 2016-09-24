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

  public function action_index()
  {
    if($userlevel < 1) {return View::forge('opsec_view');}
    return View::forge('timers_list',$data);
  }

  public function post_timer()
  {
    $timer = new Timer()
  }
}
