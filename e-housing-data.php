<!DOCTYPE html>
<html><body>
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
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT datetime, voltage, current, power, energy, frequency, power_factor, current_ch1, current_ch2, current_ch3 FROM EHousingData ORDER BY datetime ASC";
echo '<table cellspacing="5" cellpadding="5">
      <tr> 
        <td>Datetime</td> 
        <td>Voltage (V)</td> 
        <td>Current (A)</td> 
        <td>Power (W)</td> 
        <td>Energy (kWh)</td>
        <td>Frequency (Hz)</td> 
        <td>Power Factor</td>
        <td>Current CH 1</td> 
        <td>Current CH 2</td> 
        <td>Current CH 3</td> 
      </tr>';
 
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $row_datetime = $row["datetime"];
        $row_voltage = $row["voltage"];
        $row_current = $row["current"];
        $row_power = $row["power"];
        $row_energy = $row["energy"]; 
        $row_frequency = $row["frequency"]; 
        $row_power_factor = $row["power_factor"];
        $row_current_ch1 = $row["current_ch1"];
        $row_current_ch2 = $row["current_ch2"];
        $row_current_ch3 = $row["current_ch3"];
        // Uncomment to set timezone to - 1 hour (you can change 1 to any number)
        //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time - 1 hours"));
      
        // Uncomment to set timezone to + 4 hours (you can change 4 to any number)
        //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time + 4 hours"));
      
        echo '<tr> 
                <td>' . $row_datetime . '</td> 
                <td>' . $row_voltage . '</td> 
                <td>' . $row_current . '</td> 
                <td>' . $row_power . '</td> 
                <td>' . $row_energy . '</td>
                <td>' . $row_frequency . '</td> 
                <td>' . $row_power_factor . '</td> 
                <td>' . $row_current_ch1 . '</td>
                <td>' . $row_current_ch2 . '</td> 
                <td>' . $row_current_ch3 . '</td> 
              </tr>';
    }
    $result->free();
}
$conn->close();
?> 
</table>
</body>
</html>