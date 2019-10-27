<?php
$config=array("environment","timezone","url","lang","database");

for($i=0;$i<count($config);$i++){
  include_once "$config[$i]/$config[$i].php";
}

 ?>
