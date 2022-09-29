<?php
echo 'Home Work <br> 10 Sep 2022 <br> খোরশেদ আলম আকন্দ <br> কোর্স রোল: 47 <br>';

$v1 = 3;
$v2 = 10000;
$v3 = 30;
$v4 = 12;
$day=$v2/$v1;
$month=$day/$v3;
$year=$month/$v4;
$dayint=(int)$day;
$monthint=(int)$month;
$yearint=(int)$year;
$math1=$monthint-$yearint*$v4;
$math2=$dayint-$monthint*$v3;
$math3=$v2-$dayint*$v1;
$math4=$yearint*$v4*$v3*$v1+$math1*$v3*$v1+$math2*$v1+$math3;

echo "<br><br><br> প্রতিদিন ৩ ঘণ্টা করে প্র্যাক্টিস করলে ১০০০০ ঘণ্টায় লাগবে: $yearint বছর, $math1 মাস, $math2 দিন, $math3 ঘণ্টা।";
echo "<br><br><br> হিসাব: <br><br>";
printf ("দিন: $v2/$v1 = $day অথবা, $dayint দিন, $math3 ঘণ্টা। <br>");
printf ("<br> মাস: $day/$v3 = $month অথবা, $monthint মাস, $math2 দিন, $math3 ঘণ্টা। <br>");
printf ("<br> বছর: $month/$v4 = $year অথবা, $yearint বছর, $math1 মাস, $math2 দিন, $math3 ঘণ্টা। <br>");

echo "<br><br> ক্রস চেকিং: $yearint*$v4*$v3*$v1+$math1*$v3*$v1+$math2*$v1+$math3 = $math4";
