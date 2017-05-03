            <? include("face_mask.php");  ?>
            <div class="container_query">
            <h3>Query 1: To find all items manufactured by a particular “Manufacturer”</h3>
            </div><br>
            <div class="row">
            <div class="col-md-9">   
            <div class="container_query_box">
                <br><br>
                <form action="s1.php" method="POST">
                <strong>Manufacturer Name:</strong> <input type="text" name="title">
                <input type="submit" name="submit" value="submit">
                </form>
            </div>
            </div>
            <? include("query_list.php"); ?>        
            </div>