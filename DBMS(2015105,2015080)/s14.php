<?php

       include("conn.php");
       $title = $_POST['title1'];
       $_SESSION['title1'] = $title;
       include("face_mask.php");
       $dre1=$_SESSION['title1'];
        $title = $_POST['title2'];
       $_SESSION['title2'] = $title;
       $dre2=$_SESSION['title2'];
       $i=1;

 $sql = "select b.mName,a.iName,a.price from Item_attribute a ,manufacturer b where b.mName='$dre2' and a.MID=b.MID and a.price < $dre1 order by a.price";
       $result = $conn->query($sql);

       if ($result->num_rows > 0) {
?> <div class="container_query_box_result"><br><h2><strong>Items by <? echo $dre2; ?> under Rs<? echo $dre1; ?> </strong></h2>
<?     
       while($row = $result->fetch_assoc()) { 
       ?> 
       <h3><? echo $i.". ".$row['mName']." => ".$row["iName"]." - ".$row["price"]; $i++; ?></h3>
       <?
           if(!$sql)
           {
               echo mysql_error($sql);
           }
    }}
       $conn->close();?> 
</div><br><br>