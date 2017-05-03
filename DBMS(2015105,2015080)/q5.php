            <? include("face_mask.php");  ?>
            <div class="container_query">
            <h3>Query 5: To list all the manufacturers with rating more than X (X=1,2,3,4,5)</h3>
            </div><br>
            <div class="row">
            <div class="col-md-9">   
            <div class="container_query_box">
                <br><br>
                <form action="s5.php" method="POST">
                <strong>Rating:</strong> <input type="text" name="title">
                <input type="submit" name="submit" value="submit">
                </form>
            </div>
            </div>
            <? include("query_list.php"); ?>        
            </div>