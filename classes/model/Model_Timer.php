<?php
/**
 * Timer Data model
 */
class Timer extends \Model
{

  function get_timers($timeframe)
  {
    if (isNull($timeframe)) {
      // select statement
      DB::query('SELECT * FROM timers;');
    }
    if (!isNull($timeframe)){
      // select statement
    }
  }

  function create_timer($data)
  {
    $this->creator = $data['creator'];
    $this->create_time = $data['create_time'];
    $this->eve_target_type = $data['eve_target_type'];
    $this->eve_system = $data['eve_system'];
    $this->eve_planet = $data['eve_planet'];
    $this->eve_moon = $data['eve_moon'];
    $this->eve_owner = $data['eve_owner'];
    $this->allied = $data['allied'];
    $this->assignee = $data['assignee'];
    $this->cycle = $data['cycle'];
    $this->importance = $data['importance'];
    $this->comments = $data['comments'];

    $this->push_timer();
  }

  function push_timer(){
    DB::query('INSERT INTO timers'.
    "(creator,create_time,eve_target_type,eve_system,eve_system,eve_planet,eve_moon,eve_owner,allied,assignee,cycle,importance,comments)".
    "VALUES('$this->creator','$this->create_time','$this->eve_target_type','$this->eve_system','$this->eve_planet','$this->eve_moon','$this->eve_owner,'$this->allied','$this->assignee','$this->cycle','$this->importance','$this->comments');")->excute();
  }

  // fields of the object
  public $creator;
  public $create_time;
  public $eve_target_type;
  public $eve_system;
  public $eve_planet;
  public $eve_moon;
  public $eve_owner;
  public $allied;
  public $assignee;
  public $cycle;
  public $comments;
}
