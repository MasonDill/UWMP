<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "masonsql";
$dbName = "mentor_program_db";

global $conn;
try{
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
}catch (Exception $e){
	echo "The database is offline. Please contact the admin"; 
  	die("Connection failed: " . $e);
}



function drawContacts(){
	echo "<table border='1'>"; 
	global $conn;
	$colName = $conn->query("SELECT 'COLUMN_NAME'
  FROM 'contacts'.'COLUMNS'
  WHERE 'TABLE_SCHEMA' = 'mentor_program_db' AND 'TABLE_NAME' = 'contacts'");
	echo "$colName";

	

	$result = $conn->query("SELECT * FROM contacts");
	$row = $result->fetch_row();

	while ($row != NULL ){
		$i = 0;

		echo"<tr>";
		while($i < count($row)){
    	echo "<td align='center'>".$row[$i]."</td>";
    		$i++;
    	}
    	echo "</tr>";
    	$row = $result->fetch_row();
  	}

echo "</table>";
}

?>