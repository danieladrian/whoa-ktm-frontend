<?php
use illusion\Csrf;

class Controller{
  protected $activity;
  protected $controller;
  protected $method;
  protected $parameter=[];

  public function __construct($activity,$controller,$method,array $parameter=[]){
  $this->activity=$activity;
  $this->controller=$controller;
  $this->method=$method;
  $this->parameter=$parameter;
  }

  public function post($name,$antiinjection=false){
  if(ISSET($_POST[$name])){
    return $antiinjection==true?\illusion\security::antiinjection($_POST[$name]):$_POST[$name];
  }else{
    return null;
  }
  }

  public function get($name,$antiinjection=false){
    if($this->parameter[$name]!=null){
      return $antiinjection==true?\illusion\security::antiinjection($this->parameter[$name]):$this->parameter[$name];
    }else{
      return null;
    }
  }
  
  public function file($name,$checksum=false){
    if(ISSET($_FILES[$name])){
        return [
        "name"=>$_FILES[$name]["name"],
        "type"=>$_FILES[$name]["type"],
        "size"=>$_FILES[$name]["size"],
        "location"=>$_FILES[$name]["tmp_name"],
        "error"=>$_FILES[$name]["error"],
        "extension"=>null
        ];
    }else{
        return null;
    }
  }

}

?>
