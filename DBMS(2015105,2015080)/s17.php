<?php

       include("conn.php");
       $title = $_POST['title'];
       $_SESSION['title'] = $title;
       include("face_mask.php");
       $dre=$_SESSION['title'];
        $i=1;
 $sql = "select a.comment as com from user_rating a,shipment b where a.CID=b.CID and b.cName='$dre' ";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
?> <div class="container_query_box_result"><br><h2><strong>Comments by <? echo $dre ?></strong></h2>
<?     
       while($row = $result->fetch_assoc()) {
       ?> 
       <h3><? echo $i.". ".$row["com"]; $i++; ?></h3>
       <?
           if(!$sql)
           {
               echo mysql_error($sql);
           }
    }}
       $conn->close();?> 
</div>