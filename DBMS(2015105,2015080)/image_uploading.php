<?php

session_start();
$value = $_SESSION['mem_id'];
        echo $value;
      $mem_id =$_SESSION['varname'];
        $category = $_POST['priority'];
        echo  $_POST['priority'];
        $_SESSION['priority'] = $category;

        $rate = $_POST['ratecard'];
        $_SESSION['ratecard'] = $rate;
        echo  $_POST['ratecard'];

        $time = $_POST['days'];
        $_SESSION['days'] = $time;
        echo  $_POST['days'];

        $title = $_POST['title'];
        $_SESSION['title'] = $title;
        echo $_POST['title'];

        $description = $_POST['message'];
        $_SESSION['message'] = $description;
        echo $_POST['message'];

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
       $sql = "SELECT mem_id from member where fname = '$drdre'";
       $result = $conn->query($sql);
      if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $count=$row["mem_id"];
    }}
       echo $count;
       $conn->close();
    $_SESSION['mem_id'] = $count;
?>


<form action="mu.php" method="post" enctype="multipart/form-data">
<input type="file" name="image" id="image" size="40">
<input name="" type="submit" value="upload" />
 <?php echo $_SESSION['username'] ?>
</form>
