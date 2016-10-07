<!-- Copyright:
  Intellectual property of Jakob Wedemeyer  github.com/jjwedemyer
  2016
 -->
<?php
/**
 * Timer Data model
 */
namespace Timerboard;
class Timer extends \Model
{

  function get_timers($timeframe=null)
  {
    if (isNull($timeframe)) {
      // select statement
      $timers = DB::query('SELECT * FROM timers;');
    }
    if (!isNull($timeframe)){
      // select statement
      $sql = "SELECT * FROM timers WHERE time BETWEEN $timeframe[first] AND $timeframe[last];";
      $timers = DB::query($sql);
    }
    return $timers;
  }

  function create_timer($data)
  {
    $columns = implode(", ",array_keys($data));
    $escapedData = array_map('mysqli_real_escape_string',array_values($data));
    $insert = implode("' , '",$escapedData);
    $sql_query = "INSERT INTO timers ($columns) VALUES($insert);";
    DB::query($sql_query);
  }

  function get_timer($id=null){
    if(isNull(id)) return "something";
    $sql = "SELECT * FROM timers WHERE id IS $id";
    return DB::query($sql);
  }

  function get_region($system){
    $system = mysqli_real_escape_string($system);
    $sql = "SELECT regionName FROM mapRegions INNER JOIN mapSolarSystems ON mapRegions.regionID = mapSolarSystems.regionID WHERE mapSolarSystems.solarSystemName LIKE '$system';";
    return DB::query($sql);
  }

}
