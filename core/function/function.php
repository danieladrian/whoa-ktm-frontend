<?php

$func=array("Controller","Csrf","Cookies","Checksum","Database","Date","ErrorHandler","ExceptionHandler","File","Header","Lang","Security","Math","Seo","Stack","Text","Model","Routes","View","Captcha","Queque");

for($i=0;$i<count($func);$i++){
  include_once "$func[$i]/$func[$i].php";
}

?>
