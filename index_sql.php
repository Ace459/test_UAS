<?php
    $addr = "localhost";
    $username = "root";
    $passwordd = "";
    $database = "Trucorp";
    
    $connection = new mysqli($addr,$username,$password,$database);
    if($connection->connect_error){
        die("Connection Failed!" . $connection->connect_error);
    else{
      echo("Success");
      $query="SELECT*FROM users";
      while($row=$query->fetch_assoc()){
        echo $row['id'], $row['name'], $row['office']
      }  
    }
      mysqli_close($connection)
?>
