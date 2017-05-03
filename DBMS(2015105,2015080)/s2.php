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
 $sql = "SELECT a.iName,a.price from Item_attribute a where a.price  BETWEEN $dre1 AND $dre2";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
?> <div class="container_query_box_result"><br><h2><strong>Items between ₹<? echo $dre1 ?> and ₹<? echo $dre2 ?> </strong></h2>
<?     
       while($row = $result->fetch_assoc()) {
       ?> 
       <h3><? echo $i.". ".$row["iName"]."    ₹".$row["price"]; $i++; ?></h3>
       <?
           if(!$sql)
           {
               echo mysql_error($sql);
           }
    }}
       $conn->close();?> 
</div><br><br>