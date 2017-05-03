<?php
$hostname = "localhost";
$username = "root";
$password = "beatsbydre";
$database = "project";
$conn = mysql_connect($hostname,$username,$password) or die(mysql_error());
mysql_select_db($database, $conn) or die(mysql_error());

if(isset($_POST["submit"]))
{
$file = $_FILES['file']['tmp_name'];
$handle = fopen($file, "r");
$c = 0;
    $k=0;
while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
{
$cid = $filesop[0];
$user = $filesop[1];
$pass = $filesop[2];
    
if($cid!="" && $user!="" && $pass!="" && $c>=1)
{

$sql = mysql_query("INSERT INTO customer  (CID,username,password) VALUES ('$cid','$user','$pass')");
    $k=$k+1;
}
$c = $c + 1;
}

if($sql){
   #header("Location: http://localhost/~Tanishq/manage_items.php"); --.
echo "You database has imported successfully. You have inserted ". $k ." recoreds";
    
}else{
    echo("Error description: " . mysql_error($conn));
echo "\nSorry! There is some problem.";
}

}
?>
<? include("face_mask.php"); ?>
     <link rel="stylesheet" href="css/styling3.css">
    <div class="row">
            <div class="col-md-9">   
    <div class="container_query">
      <h2><font color=dimgrey face='Bangers' >Add User Data</font></h2>
    </div> 
                <div class="container_query_box" >
       <h2><font color=black face='Bangers' ><br><strong>Step 1 : </strong></font><font color=grey face='Bangers' >Upload .csv file</font></h2>
       <div style="text-align:left;  width:300px; margin:0 auto; padding:10px;">
        <form name="import" method="post" enctype="multipart/form-data">
            <input class="custom_upload" type="file" name="file" id="image"> <br>
            <input class="custombtn" type="submit" name="submit" value="Submit" />
        </form> 
       </div>
    </div>
        </div>
         <? include("database_list.php"); ?>        
            </div>
   
            
        
       
      
    <script type="text/javascript" >
            
         <!--   $('#setQuickVar1').on('click', function() {
            var checkStatus = this.checked ? 'ON' : 'OFF';
            $.post("quickRightSidebarDBUpdate.php", {"quickVar1a": checkStatus}, 
            function(data) {
            $('#resultQuickVar1').html(data);
            });
            });
                -->
    </script>
    </body>
</html>