<?php
// add route to collection
// do auth checking in here
if(auth::guest()){
    //Routes::add("/","default","cv@home");
    //Routes::add("/registration","default","cv@home");
    Routes::add("/","default","krk@home");
    Routes::add("/registration","default","krk@registration");
    Routes::add("/registration-{coupon}","default","krk@registration");
}
?>
