<?php
namespace illusion;

class Session{
   public function make($session_name,$session_value){
        $_SESSION[$session_name]=$session_value;
   }

   public function get($key){
    return $_SESSION[$key];
   }

   public function is_exist($key){
    if(ISSET($_SESSION[$key])){
        return true;
    }else{
        return false;
    }
   }
}

?>
