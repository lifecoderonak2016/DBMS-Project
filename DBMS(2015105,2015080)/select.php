<?php
include 'connection.php'; //connect the connection page

if(empty($_SESSION)) // if the session not yet started 
   session_start();

if(!isset($_SESSION['username'])) { //if not yet logged in
   header("Location: index.php");// send to login page
   exit;
} 

       $servername = "localhost";
       $username = "root";
       $password = "beatsbydre";
       $dbname = "simple_login";
 
       // Create connection
 
       $conn = new mysqli($servername, $username, $password, $dbname);
 
       // Check connection
 
       if ($conn->connect_error) {
 
           die("Connection failed: " . $conn->connect_error);
 
       } 
    $drdre=$_SESSION['username'];
       $sql = "SELECT mem_id from member where fname = '$drdre' and mem_id>0";
       $result = $conn->query($sql);
      if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $count=$row["mem_id"];
    }}
       echo $count;
       $conn->close();
?>