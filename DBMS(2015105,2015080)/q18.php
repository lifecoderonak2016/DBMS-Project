
            <? include("face_mask.php");  ?>
            <div class="container_query">
            <h3>Query 14:To list all the ordered items by a particular customer and sort them
based on review given by users</h3>
            </div><br>
            <div class="row">
            <div class="col-md-9">   
            <div class="container_query_box">
                <br><br>
                <form action="s18.php" method="POST">
                <strong>Customer Name:</strong> <input type="text" name="title"> <br><br><br>
                <input type="submit" name="submit" value="submit">
                </form>
            </div>
            </div>
            <? include("query_list.php"); ?>        
            </div>