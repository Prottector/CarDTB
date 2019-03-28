<?php
$GLOBALS['config'] = [
	'servername' => 'localhost',
	'username' => 'root',
	'password' => '',
	'dbname' => 'samochody'
	];
	
function connect() {
$conn = new mysqli($GLOBALS['config']['servername'], $GLOBALS['config']['username'], $GLOBALS['config']['password'], $GLOBALS['config']['dbname']);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

return $conn;
}
	
?>