<?php

       include("conn.php");
       include("face_mask.php");

        $i=1;
 $sql = "select IID,iName, date_of_publish from Item_attribute order by date_of_publish desc";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
?> <div class="container_query_box_result"><br><h2><strong>Items by Latest Arrival</strong></h2>
<?     
       while($row = $result->fetch_assoc()) {
       ?> 
       <h3><? echo $i.". ".$row['IID']." => ".$row["iName"]." - ".$row["date_of_publish"]; $i++; ?></h3>
       <?
           if(!$sql)
           {
               echo mysql_error($sql);
           }
    }}
       $conn->close();?> 
</div>