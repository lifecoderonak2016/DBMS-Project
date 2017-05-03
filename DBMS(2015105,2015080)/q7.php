            <? include("face_mask.php");  ?>
            <div class="container_query">
            <h3>Query 7: To list all the manufacturers who have more than X number of items X = (1,2,3.....)</h3>
            </div><br>
            <div class="row">
            <div class="col-md-9">   
            <div class="container_query_box">
                <br><br>
                <form action="s7.php" method="POST">
                <strong>Enter Items:</strong> <input type="text" name="title">
                <input type="submit" name="submit" value="submit">
                </form>
            </div>
            </div>
            <? include("query_list.php"); ?>        
            </div>