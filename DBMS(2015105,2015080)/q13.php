            <? include("face_mask.php");  ?>
            <div class="container_query">
            <h3>Query 11:To list all the best deals within a specific budget of Rs. XXXX (Using Rating, Price of the item as a criteria)</h3>
            </div><br>
            <div class="row">
            <div class="col-md-9">   
            <div class="container_query_box">
                <br><br>
                <form action="s13.php" method="POST">
                <strong>Price Range:</strong> <input type="text" name="title">
                <input type="submit" name="submit" value="submit">
                </form>
            </div>
            </div>
            <? include("query_list.php"); ?>        
            </div>