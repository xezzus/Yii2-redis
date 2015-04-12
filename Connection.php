<?php
namespace xezzus\yii\redis;

class Connection {

  public function shard($name='main'){

    if(!isset($this->servers[$name]['connect'])){
      if(!isset($this->servers[$name])) return false;
      if(!isset($this->servers[$name]['host'])) $this->servers[$name]['host'] = '127.0.0.1';
      if(!isset($this->servers[$name]['port'])) $this->servers[$name]['port'] = '6379';
      $this->servers[$name]['connect'] = new \Redis();
      $this->servers[$name]['connect']->connect($this->servers[$name]['host'],$this->servers[$name]['port']);
      if(isset($this->servers[$name]['auth'])) $this->servers[$name]['connect']->auth($this->servers[$name]['auth']);
    }

    return $this->servers[$name]['connect'];

  }

}
?>
