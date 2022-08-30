<?php
$ip = $_SERVER['REMOTE_ADDR'];
    //echo $ip;
$proxy = $_SERVER['HTTP_X_FORWARDED_FOR'];
    //echo $proxy;
if($ip === 'ENTER SPAM IP ADDRESS HERE' OR $proxy === 'ENTER SPAM IP ADDRESS HERE') {
    header("Location: https://www.fbi.gov/");
} else {

REST OF PAGE CODE GOES HERE.

}
?>
