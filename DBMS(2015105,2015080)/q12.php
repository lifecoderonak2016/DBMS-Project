            <? include("face_mask.php");  ?>
            <div class="container_query">
            <h3>Query 10:To list all the pending orders in a particular location</h3>
            </div><br>
            <div class="row">
            <div class="col-md-9">   
            <div class="container_query_box">
                <br><br>
                <form action="s12.php" method="POST">
                <strong>Enter Location:</strong> <input type="text" name="title">
                <input type="submit" name="submit" value="submit">
                </form>
            </div>
            </div>
            <? include("query_list.php"); ?>        
            </div>