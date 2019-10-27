<?php
use illusion\Checksum;
use illusion\Header;
use illusion\Csrf;

class krk extends Controller{
    public function home(){   
        return View::make("index");
    }
    
    public function registration(){
        
    }
}