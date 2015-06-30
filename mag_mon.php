<?php

// The worker will execute every X seconds:
$seconds = 2;

// We work out the micro seconds ready to be used by the 'usleep' function.
$micro = $seconds * 1000000;

while(true){
 // This is the code you want to loop during the service...
 $myFile = "/home/sparqy/daemontest.txt";
 $fh = fopen($myFile, 'a') or die("Can't open file");
 $stringData = "File updated at: " . time(). "\n";
 fwrite($fh, $stringData);
 fclose($fh);

 // Now before we 'cycle' again, we'll sleep for a bit...
 usleep($micro);
}