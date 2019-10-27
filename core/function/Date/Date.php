<?php
namespace illusion;

class Date{
    public static function now(){
      return date("Y-m-d");
    }

    public static function day_now(){
      return date("d");
    }

    public static function day_name_now(){
      $week = array(sunday,monday,tuesday,wednesday,thursday,friday,saturday);
      $day = date("w");
      $day_name_now = $week[$day];
    }

    public static function month_now(){
      return date("m");
    }

    public static function month_name_now(){
      $month=array(1,january,february,march,april,may,june,july,august,september,october,november,december);
      return $month[$this->month_now()];
    }

    public static function year_now(){
      return date("Y");
    }

    public static function clock_now(){
      return date("H:i:s A");
    }

}
 ?>
