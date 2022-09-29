<?php 
date_default_timezone_set("UTC");
$today_time = date("d-m-Y H:i:sa"); 
echo $today_time;
$today = date("D"); 
echo $today . "<br>";


switch($today) {
    case "Mon":
        echo "Today is Monday";
        break;
    case "Sun":
        echo "Today is Sunday";
        break;
    default:
        echo "Today is not Monday";    
}