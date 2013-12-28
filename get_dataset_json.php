<?php

header('Content-Type: application/json');

// read the requested dataset
$dataset = $_REQUEST['dataset'];

// check for allowed characters only
if(preg_match('/^[a-z0-9\-\_]+$/i', $dataset)) {
	// try to read existing json file for requested dataset
	$filename = "data/" . $dataset . ".json";

	// Data in File stored as JSON Format
	if(file_exists($filename)) {
		$jsonString = file_get_contents($filename);
	} else {
		$jsonString = "[]";
	}
} else {
	$jsonString = "[]";
}
echo stripslashes($jsonString);



// Data in Array and Object Notation
$data = array( modelData => array(
	array(lastName => 'Dente', name => 'Max', 'checked' => true, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com/', 'rating' => 4),
	array('lastName' => 'Friese', 'name' => 'Andy', 'checked' => true, 'linkText' => 'https://experience.sap.com/fiori', 'href' => 'https://experience.sap.com/fiori', 'rating' => 2),
	array('lastName' => 'Mann', 'name' => 'Anita', 'checked' => false, 'linkText' => 'www.sap.com', 'href' => 'http://www.sap.com/', 'rating' => 3)
	)
);
//echo json_encode($data);



?>