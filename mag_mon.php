<?php

	// worker will execute every X seconds:
	$seconds = 1;

	// micro seconds ready to be used by the 'usleep' function.
	$micro = $seconds * 1000000;

while(true){
	
	$logFile = "/home/sparqy/magmon_log.txt";

	$fh = fopen($logFile, 'a') or die("Can't open file");

	if( ping() ){
		$stringData = "Server is UP @ " . date("h:i:sa") . "\n";
	}else{
		$stringData = "Server is DOWN @ " . date("h:i:sa") . "\n";
	}
	
	fwrite($fh, $stringData);
	fclose($fh);

	// Now before we 'cycle' again, we'll sleep for a bit...
	usleep($micro);
}

function ping()
{
    $file = 'http://localhost:12345/';
	
	$file_headers = @get_headers($file);
	
	if($file_headers[0] == 'HTTP/1.0 500 Internal Server Error') {
    	$exists = false;
	}
	else {
    	$exists = true;
	}

	return $exists;
}







