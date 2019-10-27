<?php

class Model{
  protected static $activity;

  public static function set($activity){
    self::$activity=$activity;
  }

  public static function make($model,$data=[]){
    if(is_array($data)){
      extract($data, EXTR_OVERWRITE);
    }

    $activity=self::$activity;
    $model_url=__DIR__."/../../../app/activity/".$activity."/model/$model.php";
    if(!file_exists($model_url)){
        $model_url=__DIR__."/../../../app/activity/".$activity."/Model/$model.php";
    }
    $ret=require_once $model_url;
    $model=str_replace(array("\\","/"),"#",$model);
    $class=explode("#",$model);
    $last=count($class)-1;
    if(class_exists($class[$last])){
    $f=new $model();
    return $f;
    }else{
    return $ret;
    }
  }
}
?>
