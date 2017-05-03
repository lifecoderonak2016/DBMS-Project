<?php

       include("conn.php");
       $title = $_POST['title'];
       $_SESSION['title'] = $title;
       include("face_mask.php");
       $dre=$_SESSION['title'];
        $i=1;
 $sql = "select distinct a.MID as amid,count(a.IID) as ciid from Item_attribute as a group by a.MID having count(a.IID)>$dre";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
?> <div class="container_query_box_result"><br><h2><strong>Manufacturers having more than <? echo $dre ?> items</strong></h2>
<?     
       while($row = $result->fetch_assoc()) {
       ?> 
       <h3><? echo $i.". ".$row["amid"]." - ".$row["ciid"]; $i++; ?></h3>
       <?
           if(!$sql)
           {
               echo mysql_error($sql);
           }
    }}
       $conn->close();?> 
</div>