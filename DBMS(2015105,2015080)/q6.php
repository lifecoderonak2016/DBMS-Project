            <? include("face_mask.php");  ?>
            <div class="container_query">
            <h3>Query 6: To list all the items from oldest to latest arrival</h3>
            </div><br>
            <div class="row">
            <div class="col-md-9">   
            <div class="container_query_box">
                <br><br>
                <form action="s1.php" method="POST">
                <strong>Price Range:</strong> <input type="text" name="title1"> - <input type="text" name="title2">
                <input type="submit" name="submit" value="submit">
                </form>
            </div>
            </div>
            <? include("query_list.php"); ?>        
            </div>