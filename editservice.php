<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit service</title>
  <style>

.add {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
    


}
  
  .edit {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px;
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
	<h1> Manage service</h1>
  <tr><a href="addservice.php" class="add">Add service</a></tr>
       <thead><tr>
       	 <th>Id</th>
         <th>Service</th>
         <th>Cost</th>
         <th>Edit</th>
         <th>Delete</th>
        
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

$sql = "SELECT id,servicename,cost FROM service";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
 
  while($row = mysqli_fetch_assoc($result)) {

                $id = $row['id'];
                $email = $row['servicename'];
                $comment = $row['cost'];


    
   echo '<tr>
      
      <td>'.$id.'</td>
      <td>'.$email.'</td>
      <td>'.$comment.'</td>
      <td><a href="editser.php?uid='.$id.'" class="edit">Edit</td>
      <td><a href="del.php.?did='.$id.'" class="del">Delete</td>
</tr>
</tbody>';

    
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>