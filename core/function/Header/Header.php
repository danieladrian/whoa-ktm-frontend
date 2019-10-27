<?php
namespace illusion;

class Header{
    
    public static function location($location){
      header("location:".$location);
    }

    public static function x_csrf_token($token){
      header("X-Csrf-Token:".$token);
    }

    public static function retry_after($time){
      header("Retry-After:".$time);
    }

    public static function refresh($time=0,$url=null){
      $data="";
      if($url!=null){
        $data="; url=".$url;
      }
      header("Refresh:".$time.$data);
    }

    public static function content_type($type="text/html",$charset="utf-8"){
      header("Content-Type:".$type."; charset=".$charset);
    }
    



}

?>
