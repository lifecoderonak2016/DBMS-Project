<?php
       session_start();
       include("conn.php");
         $rate = $_POST['ratecard'];
        $_SESSION['ratecard'] = $rate;
       include("face_mask.php");
       $dre=$_SESSION['ratecard'];
           $dre2="%";
           $dre1=$dre.$dre2;
 $sql = "select a.cName,a.cAddress from shipment a where SID like '$dre1'";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
?> <div class="container_query_box_result"><br><h2><strong>All the Names enrolled for <? echo $dre; ?></strong></h2><br><?
       while($row = $result->fetch_assoc()) {
       ?> 
       <h3><? echo $row["cName"]; ?></h3>
       <?
    }}
       $conn->close();?> 
      </div>
