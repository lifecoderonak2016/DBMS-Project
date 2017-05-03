<?php
include 'connection.php';
if(empty($_SESSION)) // if the session not yet started 
   session_start();
$_SESSION['url'] = $_SERVER['REQUEST_URI']; ?>
<!DOCTYPE html>

        <html lang="en">
            
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>StarkPay.com: India's Leading Online Pay-for-service Site</title>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/bootstrap-theme.min.css">
            <link rel="stylesheet" href="css/styling.css">
            <link href='https://fonts.googleapis.com/css?family=Rubik:300' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="ihover.css">
        </head>
    
        <body>
            
                                        <!-- Impression Bar -->
           
           <div class="well-tanishq">
            <div class="row">
            <div class="col-md-2">   
            <div class="paddingforimg">
               <a href="index.php">&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/Main1.jpg"></a> 
            </div>
            </div>              
            <div class="paddy123">
             <div class="col-md-6"> 
            <div class="allignment2">    
            <form  method="post" action="search_execution.php?go"  id="searchform"> 
            <div class="form-group1">
	        <input  type="text" name="name" class="form-control" placeholder="Search for writing, coding, Health and more... " color=grey> 
	        <input  type="submit" name="submit" id="button-control" id="buttonsearch" value="Search"> 
            </div>
	        </form> 
            </div>
            </div>
            <div class=" col-md-2">   
                
            <div class="font-effect-shadow-multiple">      
            <div class="custom-text">
                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-th"></span>&nbsp;&nbsp;List All</h4>
            </div>
            </div>    
            </div>
            <div class="col-md-2">   
            <div class="font-effect-shadow-multiple">      
            <div class="custom-text">
                <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-shopping-cart"></span> Cart</h4>
                
            </div>
            </div>    
            </div>
            </div>
            </div>
            </div>
        
    
                                                    <!-- Menu Bar-->

            <div class="whiteboard2" id="menubar">
            <div class="navbar navbar-default1">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                </button>
            <div class="collapse navbar-collapse" id="example">
            <div class="fonty">
                <ul class="nav navbar-nav"> 
                       
                    <li><a href="writing.php"><h6>Writing </h6></a>  
                                          
                    </li>
                    
                    <li><a href="coding.php"><h6>Coding </h6></a>  
                                     
                    </li>
                    
                    <li><a href="health.php"><h6>Health & Lifestyle</h6></a>  
                                  
                    </li>
                    
                    <li><a href="audio.php"><h6>Audio & Visuals </h6></a>  
                                   
                    </li>
                    
                    <li><a href="graphic.php"><h6>Digital Art</h6></a>
                                                                     
                    </li>
                  
                     <li><a href="q1.php"><h6>Queries</h6></a>  
                                         
                    </li>
                    </li>
                     <li><a href="add_item.php"><h6>Add Data</h6></a>  
                              
                    </li>
     
                </ul>
            </div>
            </div>
            </div>
            </div>
            </div>
           
      
    
    
                                             <!-- Image-1.1 -->
               
            <div class="row">
            <div class="col-md-12">
            <div class="titlecolor">
                <img src="img/coding12.png" width=1230px>
            </div>              
            </div>
            </div>

      <div class="row">
            <div class="col-md-3">
 		    <div class="whiteboard" id="navigation">
 			<h2><a href="#">HELLO</a></h2>
 			</div>
            </div>
            <div class="col-md-9">        
            <div class="whitecolor3"><br>
            <div class="row">
            </div>
            </div>
            <div class="row">         
            <div class="whitecolor6">
            <div class="row">
            </div>  
            <?php     
            $servername = "localhost";
            $username = "root";
            $password = "beatsbydre";
            $dbname = "simple_login";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            } 
            $drdre=$_SESSION['username'];  
            $sql = "SELECT path,title,time from `memberprojects`";
            $result = $conn->query($sql);        
            if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $temp=$row['path'];
            }
            ?>
  
            <?
            if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $temp=$row['path'];
            }
            ?>
           
                    <div class="row">
                         
            <div class="col-md-4">
            <div class="container12"> 
            <img width="250" height="130" src="img/blur.png"><br>
            <div class="fontforimg"> 
            <h4><font color=black>Product of XYZ by  Blah Blah Blah Blah Blah Blah Blah<br><br><br><br></font></h4>                 <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
            <div class="label-hd"></div>
            <div class="label-sixteen-k1"></div>
            </h6>
            </div> 
            </div>
            </div> 
            
           
            <?
            if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $temp=$row['path'];
            }
            ?>
           
                
                          
            <div class="col-md-4">
            <div class="container12"> 
            <img width="250" height="130" src="img/blur.png"><br>
            <div class="fontforimg"> 
            <h4><font color=black>Product of XYZ by  Blah Blah Blah Blah Blah Blah Blah<br><br><br><br></font></h4>                 <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
            <div class="label-hd"></div>
            <div class="label-sixteen-k1"></div>
            </h6>
            </div> 
            </div>
            </div> 
             
      
            <?
            if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $temp=$row['path'];
            }
            ?>
          
         
                          
            <div class="col-md-4">
            <div class="container12"> 
            <img width="250" height="130" src="img/blur.png"><br>
            <div class="fontforimg"> 
            <h4><font color=black>Product of XYZ by  Blah Blah Blah Blah Blah Blah Blah<br><br><br><br></font></h4>                 <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
            <div class="label-hd"></div>
            <div class="label-sixteen-k1"></div>
            </h6>
            </div> 
            </div>
            </div>  
  
          
            <?
            if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        	 $temp=$row['path'];
             }
		    ?>    
                     
            <div class="col-md-4">
            <div class="container12"> 
            <img width="250" height="130" src="img/blur.png"><br>
            <div class="fontforimg"> 
            <h4><font color=black>Product of XYZ by  Blah Blah Blah Blah Blah Blah Blah<br><br><br><br></font></h4>                 <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
            <div class="label-hd"></div>
            <div class="label-sixteen-k1"></div>
            </h6>
            </div> 
            </div>
            </div> 
                        
                       
            <div class="col-md-4">
            <div class="container12"> 
            <img width="250" height="130" src="img/blur.png"><br>
            <div class="fontforimg"> 
            <h4><font color=black>Product of XYZ by  Blah Blah Blah Blah Blah Blah Blah<br><br><br><br></font></h4>                 <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
            <div class="label-hd"></div>
            <div class="label-sixteen-k1"></div>
            </h6>
            </div> 
            </div>
            </div> 
                 
                       
            <div class="col-md-4">
            <div class="container12"> 
            <img width="250" height="130" src="img/blur.png"><br>
            <div class="fontforimg"> 
            <h4><font color=black>Product of XYZ by  Blah Blah Blah Blah Blah Blah Blah<br><br><br><br></font></h4>                 <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
            <div class="label-hd"></div>
            <div class="label-sixteen-k1"></div>
            </h6>
            </div> 
            </div>
            </div> 
                        
            <div class="col-md-4">
            <div class="container12"> 
            <img width="250" height="130" src="img/blur.png"><br>
            <div class="fontforimg"> 
            <h4><font color=black>Product of XYZ by  Blah Blah Blah Blah Blah Blah Blah<br><br><br><br></font></h4>                 <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
            <div class="label-hd"></div>
            <div class="label-sixteen-k1"></div>
            </h6>
            </div> 
            </div>
            </div> 
                 
                         
            <div class="col-md-4">
            <div class="container12"> 
            <img width="250" height="130" src="img/blur.png"><br>
            <div class="fontforimg"> 
            <h4><font color=black>Product of XYZ by  Blah Blah Blah Blah Blah Blah Blah<br><br><br><br></font></h4>                 <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
            <div class="label-hd"></div>
            <div class="label-sixteen-k1"></div>
            </h6>
            </div> 
            </div>
            </div> 
                 
                 
               
                        <?
            if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        	 $temp=$row['path'];
             }
		    
  
            
		  
           $conn->close();           
            ?>
           </div>
                <br><br><hr>
                </div>
             
                    
                    
                    </div>
                </div>
                
            </div>
                  
                                             <!-- footer -->
    
            <div class="navbar navbar-default navbar-static-bottom" role="navigation">
            <div class="container">
            <div class="col-md-3">
            <div class="navbar-text text-center">
                Copyright © 2016 StarkPay Inc. All rights reserved.
            </div>
            </div>
            <div class="col-sm-offset-5 col-sm-1">
            <div class="navbar-text text-center">
                <a href="#"><h5>FAQ</h5></a>
            </div>
            </div>
            <div class="col-md-3">
            <div class="navbar-text text-center">
                <a href="#"><h5>Terms and Conditions</h5></a>
            </div> 
            </div> 
            </div>
            </div>
	

            
            
                                             <!--JAVASCRIPT-->
    
    
       
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script language="JavaScript" type="text/javascript">
                var elementPosition = $('#navigation').offset();
                $(window).scroll(function(){
                    if($(window).scrollTop() > elementPosition.top){
                        $('#navigation').css('position','fixed').css('top','70px');
                    } else {
                        $('#navigation').css('position','static');
                    }}); 
            </script>
            <script language="JavaScript" type="text/javascript">
                var elementPosition2 = $('#menubar').offset();
                $(window).scroll(function(){
                    if($(window).scrollTop() > elementPosition2.top){
                        $('#menubar').css('position','fixed').css('top','0');
                    } else {
                        $('#menubar').css('position','static');
                    }}); 
            </script>
            <script language="JavaScript" type="text/javascript">
                //$(document).ready(function(){
                // $('.carousel').carousel({
                //   interval: 3000
                // })
                // });  
                $(document).ready(function(){
                //Handles menu drop down
                    $('.dropdown-menu').find('form').click(function (e) {
                        e.stopPropagation();
                    });
                });
            </script> 
            
            
    </body>
</html>