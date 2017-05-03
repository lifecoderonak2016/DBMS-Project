<?php
       session_start();
       include("conn.php");
       $title = $_POST['title'];
       $_SESSION['title'] = $title;
       include("face_mask.php");
       $drdre=$_SESSION['title'];
       $sql = "SELECT I.Item ID, I.Item Name, I.Price, I.Description, R.Stars FROM Items I, Rating R, Manufacturer M WHERE I.Item ID = R.Item ID AND (R.Comments LIKE '%Excellent%' OR R.Comments LIKE '%Good%') AND I.Category = CATEGORY AND EXISTS(IF R.Customer ID <> M.Manufacturer ID THEN M.Item ID <> R.Item ID) ORDER BY R.Stars ";
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
