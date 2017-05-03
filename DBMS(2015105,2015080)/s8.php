<?php

       include("conn.php");
   
       include("face_mask.php");
     
        $i=1;
 $sql = "select a.MID,count(a.IID) as ciid 
from Item_attribute as a 
group by a.MID 
having count(a.IID)>1 
order by count(a.IID) desc
LIMIT 1; ";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
?> <div class="container_query_box_result"><br><h2><strong>To list the manufacturer ID who supply the most items than any other
supplier</strong></h2>
<?     
       while($row = $result->fetch_assoc()) {
       ?> 
       <h3><? echo $i.". ".$row["MID"]."  - ".$row["ciid"]; $i++; ?></h3>
       <?
           if(!$sql)
           {
               echo mysql_error($sql);
           }
    }}
       $conn->close();?> 
</div><br><br>