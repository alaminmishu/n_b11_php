<?php
$db =   new mysqli('localhost','root','','test');
if ($db->connect_errno) {
  echo "Failed to connect to MySQL: " . $db->connect_error;
  exit();
}
 
if(($handle     =   fopen("countries.csv", "r")) !== FALSE){
    while(($row =   fgetcsv($handle)) !== FALSE){
        if ($row > 0) {
            $db->query('INSERT INTO `countries`(`countryCode`, `countryName`, `currencyCode`, `population`, `fipsCode`, `isoNumeric`, `north`, `south`, `east`, `west`, `capital`, `continentName`, `continent`, `areaInSqKm`, `isoAlpha3`, `geonameId`) VALUES ("'.$row[1].'","'.$row[2].'","'.$row[3].'","'.$row[4].'","'.$row[5].'","'.$row[6].'","'.$row[7].'","'.$row[8].'","'.$row[9].'","'.$row[10].'","'.$row[11].'","'.$row[12].'","'.$row[13].'","'.$row[14].'","'.$row[15].'","'.$row[16].'")');
        } else {
            echo "SQL Error: " . mysqli_connect_errno();
        }
        
    }
    fclose($handle);
}
?>