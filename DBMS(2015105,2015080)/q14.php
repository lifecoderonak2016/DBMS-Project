            <? include("face_mask.php");  ?>
            <div class="container_query">
            <h3>Query 12:To sort all the products based on price for a particular brand in the searched category</h3>
            </div><br>
            <div class="row">
            <div class="col-md-9">   
            <div class="container_query_box">
                <br><br>
                <form action="s14.php" method="POST">
                <strong>Price Range:</strong> <input type="text" name="title1"> <br><br><br>
                    <strong>Company's Name:</strong><input type="text" name="title2"><br><br>
                <input type="submit" name="submit" value="submit">
                </form>
            </div>
            </div>
            <? include("query_list.php"); ?>        
            </div>