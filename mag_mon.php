<?php

	// The worker will execute every X seconds:
	$seconds = 1;

	// We work out the micro seconds ready to be used by the 'usleep' function.
	$micro = $seconds * 100000;

while(true){
	
	// This is the code you want to loop during the service...
	$logFile = "/home/sparqy/daemontest2.txt";
	

	$fh = fopen($logFile, 'a') or die("Can't open file");

	if( ping() ){
		//$stringData = "File updated at: " . time(). "\n";
		$stringData = "Server is UP \n";
		echo "HELLO";
	}else{
		$stringData = "Server is DOWN \n";
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







