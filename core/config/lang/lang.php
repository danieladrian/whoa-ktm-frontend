<?php
$language=explode(",",APP_LANG);

if(!ISSET($_SESSION['language'])){
$_SESSION['language']=$language[0];
}

include __DIR__."/../../../app/lang/$_SESSION[language].php";
?>
