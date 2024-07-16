
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>view service</title>
  <style> 
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
 

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
h1{
	color: #04AA6D;
	text-align: center;
}

</style>
</head>
<body>
   
<table id ="customers">
	<h1> view service</h1>
       <thead><tr>
         <th>service</th>
         <th>cost</th>
        
    </thead>
    <tbody>
    	<?php



    	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parlour";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT servicename,cost FROM service";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {


?>
    
    <tr>
      
     
      <td><?php echo $row['servicename']??''; ?></td>
      <td><?php echo $row['cost']??''; ?></td>
</tr>
</tbody>
<?php
    // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["address"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>