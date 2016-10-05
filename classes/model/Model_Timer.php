<?php
/**
 * Timer Data model
 */
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
      $timers = DB::query('SELECT * FROM timers WHERE time < $timeframe["last"] AND time > $timeframe["first"];');
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
    if(isNull(id)) return something;
    $sql = "SELECT * FROM timers WHERE id IS $id";
    return DB::query($sql);
  }

}
