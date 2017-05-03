            <? include("face_mask.php");  ?>
            <div class="container_query">
            <h3>Query 9:To list the available modes of a payment for a specific commodity</h3>
            </div><br>
            <div class="row">
            <div class="col-md-9">   
            <div class="container_query_box">
                <br><br>
                <form action="s11.php" method="POST">
                <br><br>
                    <input type="radio" name="ratecard"
                       <?php if (isset($ratecard) && $ratecard=="COD") echo "checked";?>
                       value="COD">&nbsp;Cash on Delivery&nbsp;&nbsp;
                    <input type="radio" name="ratecard"
                       <?php if (isset($ratecard) && $ratecard=="CC") echo "checked";?>
                       value="CC">&nbsp;₹Credit Card&nbsp;&nbsp;
                    <input type="radio" name="ratecard"
                       <?php if (isset($ratecard) && $ratecard=="NB") echo "checked";?>
                       value="NB">&nbsp;Net Banking&nbsp;&nbsp;
                    <input type="radio" name="ratecard"
                       <?php if (isset($ratecard) && $ratecard=="DC") echo "checked";?>
                       value="DC">&nbsp;Demand Cheque&nbsp;&nbsp;
                    <br><br>
                    <input type="submit" name="submit" value="submit">
                </form>
            </div>
            </div>
            <? include("query_list.php"); ?>        
            </div>