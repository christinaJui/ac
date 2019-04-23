<?php

// Database configuration
$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName     = 'ittat_studio';

// Connect with the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Get search term
$searchTerm = $_REQUEST['term'];

// Get matched data from skills table edit
$query = $db->query("SELECT * FROM category WHERE category_name LIKE '%".$searchTerm."%' ORDER BY category_name ASC");

// Generate skills data array
$skillData = array();
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $data['value'] = $row['category_name'];
        array_push($skillData, $data);
    }
}

// Return results as json encoded array
echo json_encode($skillData);

?>
