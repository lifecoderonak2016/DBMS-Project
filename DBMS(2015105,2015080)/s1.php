<?php

       include("conn.php");
       $title = $_POST['title'];
       $_SESSION['title'] = $title;
       include("face_mask.php");
       $drdre=$_SESSION['title'];
        $i=1;
 $sql = "SELECT a.iName from Item_attribute a ,manufacturer b where b.mName= '$drdre' && b.MID=a.MID";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
?> <div class="container_query_box_result"><br><h2><strong>Items by <? echo $drdre ?></strong></h2>
<?     
       while($row = $result->fetch_assoc()) {
       ?> 
       <h3><? echo $i.". ".$row["iName"]; $i++; ?></h3>
       <?
           if(!$sql)
           {
               echo mysql_error($sql);
           }
    }}
       $conn->close();?> 
</div>