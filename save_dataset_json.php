<?php

//header('Content-Type: application/json');

date_default_timezone_set("Europe/Vienna");

// read the requested dataset
$dataset = $_REQUEST['dataset'];
$jsonData = $_POST['json'];

// check for allowed characters only
if(preg_match('/^[a-z0-9\-\_]+$/i', $dataset)) {
	// try to write json file for given dataset
	$filename = "data/" . $dataset . ".json";

	// make backup of file if already exists
	if(file_exists($filename)) {
		$filenameBackup = "data/" . $dataset . "." . date("YmdHis") . ".json";
		copy($filename, $filenameBackup);
	}
	
	// write submitted data to .json file
	file_put_contents($filename, $jsonData);
}


// mysql_real_escape_string()

?>