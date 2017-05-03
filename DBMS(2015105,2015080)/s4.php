<?php

       include("conn.php");
   
       include("face_mask.php");
     
        $i=1;
 $sql = "SELECT DISTINCT a.MID as amid,a.price as aprice,b.MID bmid ,b.price as bprice from Item_attribute as a, Item_attribute as b
where a.iName=b.iName and a.price >b.price ";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
?> <div class="container_query_box_result"><br><h2><strong>Comparison Among Manufacturer's Product</strong></h2>
<?     
       while($row = $result->fetch_assoc()) {
       ?> 
       <h3><? echo $i.". ".$row["amid"]."  - Rs.".$row["aprice"]."  and ".$row["bmid"]."  - Rs.".$row["bprice"]; $i++; ?></h3>
       <?
           if(!$sql)
           {
               echo mysql_error($sql);
           }
    }}
       $conn->close();?> 
</div><br><br>