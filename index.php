<?php
session_start();
$time_start = microtime(true); 
require_once __DIR__."/core/init.php";
require_once __DIR__."/core/core.php";
require_once __DIR__."/app/boot.php";

$time_end = microtime(true);

//dividing with 60 will give the execution time in minutes other wise seconds
$execution_time = ($time_end - $time_start)/60;
?>
