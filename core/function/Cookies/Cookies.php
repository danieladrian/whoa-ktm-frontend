<?php
namespace illusion;

class Cookies{
    public function make($cookie_name,$cookie_value,$cookie_time,$cookie_path){
        setcookie($cookie_name, $cookie_value, time() + ($cookie_time), $cookie_path);
    }
    
    public function get($cookie_name){
        return $_COOKIE[$cookie_name];
    }
    
    public function isEnabled(){
        setcookie("test", "test", time() + 10, '/');
        if(count($_COOKIE) > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    public function delete($cookie_name){
        setcookie($cookie_name, "", time() - 3600);
    }
}

?>