<?php
namespace illusion;
use illusion\Header;

class Csrf{
    static function make(){
      $token=Security::hash(date('U').ENCRYPT_KEY);
      $_SESSION['token']=$token;
      $_SESSION['tokentimer']=date("U");
      Header::x_csrf_token($_SESSION['token']);
    }

    static function get(){
      return $_SESSION['token'];
    }

    static function verify($token="",$timer=null){
        if($timer==null){
              $timer=1;
              $time=0;
        }else{
              $u=date("U");
              $tokentimer=$_SESSION['tokentimer'];
              $time=$u-$tokentimer;
        }
      if($_SESSION['token']==$token && $time<$timer){
        return true;
      }else{
        return false;
      }

    }

}

?>
