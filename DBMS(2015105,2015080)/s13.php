<?php

       include("conn.php");
       $title = $_POST['title'];
       $_SESSION['title'] = $title;
       include("face_mask.php");
       $dre=$_SESSION['title'];
        $i=1;
 $sql = "select a.iName,a.price from Item_attribute a, user_rating b where a.IID=b.IID and a.price < '$dre' order by b.stars desc";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
?> <div class="container_query_box_result"><br><h2><strong>Best Items under <? echo $dre ?></strong></h2>
<?     
       while($row = $result->fetch_assoc()) {
       ?> 
       <h3><? echo $i.". ".$row["iName"]." => ".$row["price"]; $i++; ?></h3>
       <?
           if(!$sql)
           {
               echo mysql_error($sql);
           }
    }}
       $conn->close();?> 
</div>