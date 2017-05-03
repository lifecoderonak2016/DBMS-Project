<?php

       include("conn.php");
   
       include("face_mask.php");
     
        $i=1;
 $sql = "SELECT mName,rating FROM manufacturer order by rating desc;";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
?> <div class="container_query_box_result"><br><h2><strong>Manufacturer by rating</strong></h2>
<?     
       while($row = $result->fetch_assoc()) {
       ?> 
       <h3><? echo $i.". ".$row["mName"]."  - ".$row["rating"]; $i++; ?></h3>
       <?
           if(!$sql)
           {
               echo mysql_error($sql);
           }
    }}
       $conn->close();?> 
</div><br><br>