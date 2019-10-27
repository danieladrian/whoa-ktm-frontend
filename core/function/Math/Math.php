<?php
namespace illusion;

class Math{
  function ispointinsidearea($x=0,$y=0,$xarea=array(),$yarea=array()){
    array_push($xarea,$xarea[0]);
    array_push($yarea,$yarea[0]);
    $countx=count($xarea);
      $county=count($yarea);
    $state=false;
    if($countx>3 &&$county>3){
      $xmin="";
      $ymin="";
      $xmax="";
      $ymax="";
      $count=0;
      for($i=1;$i<$countx;$i++){
         $ip=$i-1;
       if($xarea[$i]>$xarea[$ip]){
      //echo "-1-";
      $xmin=$xarea[$ip];
      $ymin=$yarea[$ip];
      $xmax=$xarea[$i];
      $ymax=$yarea[$i];
       }else{
      //echo "-2-";
      $xmin=$xarea[$i];
      $ymin=$yarea[$i];
      $xmax=$xarea[$ip];
      $ymax=$yarea[$ip];
       }
      if($ymax>$ymin){
      if($y>=$ymin && $y<=$ymax){
         $xtes=(((($xmax-$xmin)*($y-$ymin))/($ymax-$ymin))+$xmin);

           if($xtes>=$x){
                $count++;
                }
      }
    }else{
      if($y<=$ymin && $y>=$ymax){
         $xtes=(((($xmax-$xmin)*($y-$ymin))/($ymax-$ymin))+$xmin);

           if($xtes>=$x){
                $count++;
                }
      }
    }
    }
    if($count%2!=0){
    $state=true;
    }
    }
    return $state;
  }

    function random_number($min=0,$max=0){
      return rand($min,$max);
    }

    function avarage($array=array()){
      $total=array_sum($array);
      $count=count($array);
      return $total/$count;
    }
}


?>
