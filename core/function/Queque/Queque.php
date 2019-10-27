<?php
namespace illusion;

class Queque{
  protected $array=[];
  public function __construct($data){
    if(is_array($data)){
        $this->array=$data;
    }else{
        $this->push($data);
    }
  }
  
  public function push($data){
    array_push($this->array,$data);
  }

  public function pop(){
    return array_shift($this->array);
  }

  public function count(){
    return count($this->array);
  }

  public function clear(){
    $this->array=[];
  }

  public function is_empty(){
    return $this->count()==0?true:false;
  }

  public function to_array(){
    return $this->array;
  }


}
?>
