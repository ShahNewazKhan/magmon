<?php

	// The worker will execute every X seconds:
	$seconds = 2;

	// We work out the micro seconds ready to be used by the 'usleep' function.
	$micro = $seconds * 1000000;

while(true){
	
	// This is the code you want to loop during the service...
	$logFile = "/home/sparqy/daemontest.txt";
	$fh = fopen($logFile, 'a') or die("Can't open file");
	$stringData = "File updated at: " . time(). "\n";
	fwrite($fh, $stringData);
	fclose($fh);

	/* check if the host is up
        $host can also be an ip address */
	$host = 'www.example.com';
	$up = ping($host);

	// Now before we 'cycle' again, we'll sleep for a bit...
	usleep($micro);
}

function ping($host)
{
        exec(sprintf('ping -c 1 -W 5 %s', escapeshellarg($host)), $res, $rval);
        return $rval === 0;
}







