<?php
       session_start();
       include("conn.php");
       $title = $_POST['title'];
       $_SESSION['title'] = $title;
       include("face_mask.php");
       $drdre=$_SESSION['title'];
       $sql = "SELECT * from member where fname = '$drdre'";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
         ?> <div class="container_query_box_result"><br><?
       while($row = $result->fetch_assoc()) {
       ?> 
       <h3><? echo $row["username"]; ?></h3>
       <?
    }}
       $conn->close();?> 
      </div>
