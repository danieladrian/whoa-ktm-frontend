<?php

class view{
  protected static $activity;
  protected $content;
  public static function set($activity){
    self::$activity=$activity;
  }

  public static function make($view,array $data=[]){

  if(is_array($data)){
    extract($data, EXTR_OVERWRITE);
  }

  $activity=self::$activity;

  $view_url=__DIR__."/../../../app/activity/".$activity."/view/$view.php";
  if(!file_exists($view_url)){
    $view_url=__DIR__."/../../../app/activity/".$activity."/View/$view.php";
  }
  $view_content="";
  ob_start();
    require_once $view_url;
    $view_content=ob_get_contents();
  ob_end_clean();
  $f=new self;
  $f->content=$view_content;
  return $f;

  }

  public function purify(){
  //do purifier here

      return $this;
  }

  public function flush(){
    echo $this->content;
  }

  public function __toString(){
    return $this->content;
  }
}

?>
