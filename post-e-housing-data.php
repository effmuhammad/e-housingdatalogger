<?php
/*
  Rui Santos
  Complete project details at https://RandomNerdTutorials.com/esp32-esp8266-mysql-database-php/
  
  Permission is hereby granted, free of charge, to any person obtaining a copy
  of this software and associated documentation files.
  
  The above copyright notice and this permission notice shall be included in all
  copies or substantial portions of the Software.
*/
$cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
$servername = $cleardb_url["host"];
// REPLACE with your Database name
$dbname = substr($cleardb_url["path"],1);
// REPLACE with Database user
$username = $cleardb_url["user"];
// REPLACE with Database user password
$password = $cleardb_url["pass"];
// Keep this API Key value to be compatible with the ESP32 code provided in the project page. 
// If you change this value, the ESP32 sketch needs to match
$api_key_value = "ZGxmSxvDKs8ij";
$api_key= $datetime = $voltage = $current = $power = $energy = $frequency = $power_factor = $current_ch1 = $current_ch2 = $current_ch3 = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $api_key = test_input($_POST["api_key"]);
    if($api_key == $api_key_value) {
        $datetime = test_input($_POST["datetime"]);
        $voltage = test_input($_POST["voltage"]);
        $current = test_input($_POST["current"]);
        $power = test_input($_POST["power"]);
        $energy = test_input($_POST["energy"]);
        $frequency = test_input($_POST["frequency"]);
        $power_factor = test_input($_POST["power_factor"]);
        $current_ch1 = test_input($_POST["current_ch1"]);
        $current_ch2 = test_input($_POST["current_ch2"]);
        $current_ch3 = test_input($_POST["current_ch3"]);
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql = "INSERT INTO EHousingData (datetime, voltage, current, power, energy, frequency, power_factor, current_ch1, current_ch2, current_ch3)
        VALUES ('" . $datetime . "', '" . $voltage . "', '" . $current . "', '" . $power . "', '" . $energy . "', '" . $frequency . "', '" . $power_factor . "', '" . $current_ch1 . "', '" . $current_ch2 . "', '" . $current_ch3 . "')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }
    else {
        echo "Wrong API Key provided.";
    }
}
else {
    echo "No data posted with HTTP POST.";
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}