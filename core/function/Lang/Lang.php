<?php
namespace illusion;

class Lang{
    static function change($lang){
      if(in_array($lang, $GLOBALS['language'])){
        $_SESSION['language']=$lang;
      }else{
        $_SESSION['language']=$GLOBALS['language'][0];
      }

    }
    static function getLang(){
        return $_SESSION['language'];
    }
}


?>
