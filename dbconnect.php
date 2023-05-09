<?php 
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "register";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
       echo' failed to connect to database';

      }

    

    
?>
  