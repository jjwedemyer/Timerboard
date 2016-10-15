<?php
namespace Timerboard\Tasks;

/**
 * Sov timer import task class
 */
use Timerboard\Model\Timer;
class sov_timer
{
  public function run($regions=null)
  {
    sov_timer_import($regions);
  }

  public function sov_timer_import($regions=null)
  {
    if (isNull($regions)) {
      $regions=array(10000005,10000006,10000008,10000009,10000014,10000025,10000031,10000039,10000047,10000050,10000056,10000059,10000061,10000062);
    }
    $const_ids = DB::query("SELECT constellationID FROM mapConstellations WHERE regionID IN ($regions)");
    $json = json_decode(file_get_contents('https://crest-tq.eveonline.com/sovereignty/campaigns/'))->items;
    $filtered_json = array_filter($json,function($t) use($const_ids){return (in_array($t->constellation->id, $const_ids));});
    $filterd_timers = array_map('json2timer',$filtered_json);
    Timer::create_timer($filterd_timers);
  }

  public function json2timer($json)
  {
    $structure_types = array('1'=>"Territorial Claim Unit" , '2'=>"Infrastructure Hub",'3'=>"Station");
    $allied_alliances = DB::query();
    $allied = in_array($json->defender->defender->id, $allied_alliances);
    $timer = array('creator' => "SkyNet" , 'time' => strtotime($json->startTime) , 'assignee' => null , 'importance' => 0 ,'target_type'=> $structure_types[$json->eventType] , 'cycle'=>"Final" , 'allied'=>$allied , 'system'=> $json->sourceSolarsystem->name);
    return $timer;
  }
}

 ?>
