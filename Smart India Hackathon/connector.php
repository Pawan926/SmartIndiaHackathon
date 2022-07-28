<?php
$mysqli = new mysqli("localHost", "root", "root", "mydb");
if($mysqli->connect_error) {
  echo "failed to connect";
  exit('Could not connect');
}

  
$sql = "SELECT theme, institute_name, state, city, month, date ,domain 
FROM events WHERE theme = ?"; 

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);  
$stmt->execute();
$stmt->store_result(); 
$stmt->bind_result($theme, $institute_name, $state, $city, $month, $date, $domain);
$stmt->fetch(); 
$stmt->close();          
       
echo "<table>"; 
echo "<tr>";
echo "<th>CustomerID</th>";  
echo "<td>" . $theme . "</td>";
echo "<th>CompanyName</th>";
echo "<td>" . $institute_name . "</td>";
echo "<th>ContactName</th>";
echo "<td>" . $state . "</td>";
echo "<th>Address</th>";
echo "<td>" . $city . "</td>"; 
echo "<th>City</th>";
echo "<td>" . $month . "</td>"; 
echo "<th>PostalCode</th>";  
echo "<td>" . $date . "</td>";   
echo "<th>Country</th>";    
echo "<td>" . $domain . "</td>";
echo "</tr>";
echo "</table>";

?> 