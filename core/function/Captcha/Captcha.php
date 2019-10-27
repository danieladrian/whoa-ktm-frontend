<?php
namespace illusion;
use Gregwar\Captcha\CaptchaBuilder;
use illusion\Security;

class Captcha{
   
   public static function make(){
    $captcha = new CaptchaBuilder;
    $captcha->build();
    $_SESSION['captcha']=Security::encrypt($captcha->getPhrase());
    return $captcha->inline();
   } 
   
   public static function is_match($captcha){
    if($captcha==Security::decrypt($_SESSION['captcha'])){
        return true;
    }else{
        return false;
    }
   }
    
}

?>