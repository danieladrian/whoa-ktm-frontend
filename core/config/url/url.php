<?php
$url = '';
if(ISSET($_SERVER['REQUEST_URI'])){
if (isset($_SERVER['HTTPS']) && filter_var($_SERVER['HTTPS'], FILTER_VALIDATE_BOOLEAN))
  $url .= 'https';
else
  $url .= 'http';

$url .= '://';

if (isset($_SERVER['HTTP_HOST']))
  $url .= $_SERVER['HTTP_HOST'];
elseif (isset($_SERVER['SERVER_NAME']))
  $url .= $_SERVER['SERVER_NAME'];
else
  trigger_error ('Could not get URL from $_SERVER vars');

if ($_SERVER['SERVER_PORT'] != 80 AND  $_SERVER['SERVER_PORT'] != 443){
$url .= ':'.$_SERVER["SERVER_PORT"];
}
//end
define("APP_PATH",str_replace("/index.php","",htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_QUOTES, 'UTF-8')));
define("APP_HOST",$url);
define("APP_URI",$url.$_SERVER['REQUEST_URI']);
define("APP_URL_PATH",$url."/".APP_PATH);

if(ISSET($_SESSION['PREVIOUS_PAGE'])){
define("PREV_URL",$_SESSION['PREVIOUS_PAGE']);
}else{
define("PREV_URL","");
}
}

?>
