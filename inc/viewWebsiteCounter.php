<?php

/* counter */

//opens countlog.txt to read the number of hits
$datei = fopen("./inc/countlog.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;

// opens countlog.txt to change new hit number
$datei = fopen("./inc/countlog.txt","w");
fwrite($datei, $count);
fclose($datei);

?>