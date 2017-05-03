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
               <meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1"> 
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
      
            <div class="col-md-2">   
            <div class="font-effect-shadow-multiple">      
         
            </div>    
            </div>
            </div>
            </div>
            </div>
    
    
                                                    <!-- Menu Bar-->
    
            <div class="navbar navbar-default">
        
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
            
    
    
                                             <!-- Image-1.1 -->
               
              
            <div class="row">
                <div class="col-md-3">
               <img src="img/featy.png" width =300px; >
                </div>
                <div class="col-md-9">
            <div class="jumbotron123">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                
                                            <!-- Indicators -->
                
                
                <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                                            
                                            <!-- Wrapper for slides -->
                
            <div class="carousel-inner" role="listbox">
           <div class="item active">
                <img src="img/fresh3.jpg" alt="Flower">
            </div>
            <div class="item">
                <img src="img/fresh2.jpg" alt="Chania">
            </div>
            <div class="item">
                <img src="img/fresh4.jpg" alt="Flower">
            </div>
            
            </div>
               
                                        <!-- Left and right controls -->
                
                
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
            </div> 
           

    
                    <div class="whitecolor2"><br>
                        <div class="row">
                       <div class="col-md-6">
                        <div class="firstimp"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="6px" color=black> Learn How It Works  <span class="glyphicon glyphicon-chevron-right"></span></font></h4></div></div>
                        <div class="col-md-6">
                            <div class="firstimp1"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="6px" color=black><a href="form.html"><span class="glyphicon glyphicon-gbp"></span> &nbsp;&nbsp;Learn How to Earn</a></font></h4></div></div></div></div>
                </div>
            </div>
                <br>
                           
            <!-- Horizontal Scrolling Bar -->
            
            
            <div class="row">    
            <img src="img/feature7.png" width=1290px; margin-left=60px>
            </div>  
    <div class="row">
        <div class="col-md-9">
            <div class="row">  
          
            <div class="whitecolor6">
            <?php 
            $db=mysql_connect  ("localhost", "root",  "beatsbydre") or die ('I cannot connect to the database because: ' . mysql_error()); 
            $mydb=mysql_select_db("simple_login"); 
            $result = mysql_query("SELECT * FROM memberprojects "); 
                ?> 
        <?
                while($row=mysql_fetch_array($result))
                { 
	          $FirstName  =$row['category']; 
	          $title=$row['title']; 
	          $ID=$row['path']; 
              $rate=$row['rate'];
                ?>
                <div class="col-md-4">
                <div class="container12">
                 <a href="<?php $yolo="service_show.php?link="; echo $yolo.$row['time'];?>">
                <img width="250" height="130" src="img/blur.png">                
                 <div class="fontforimg"> 
                <h4><? echo $title ?>
                <br><br>  
                <br><br></font></h4>                    
                <h6><font align="center" >By Loreal Paris</font>
                <font color=gold> ✮✮✮✮✮</font>
                <div class="label-hd"></div>
                <div class="label-<? echo $rate?>-k1"></div><hr>
                </h6>
                </div>
                </a>
                <div class="label-hd"></div>
                <div class="label-eight-k2"></div><hr>                    
                </div>  
                </div>
                <? if(empty($row)){?>
                <div class="col-md-12">
                <h2>No Result Found ;D</h2>
                </div>
                 <?
            if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $temp=$row['path'];
            }
            ?>
           <br><br><br><br>
         
          <? 
    
        }?>
          
	    <?
    } 
            ?>
            
            
            <br><br><hr>
            </div>
    
            </div>
            </div> 
    <div class="col-sm-3">
    
        <? include('query_list.php'); ?>
    </div>
    
    </div>
            <div class="row">
       
            <img src="img/trendin7.png" width="1290px">
            </div>  
            <div class="whitecolor">
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
                <div class="col-sm-3">
                <div class="container12">
                <a href="<?php $yolo="show.php/link="; echo $yolo.$row['time'];?>"> 
                <img width="250" height="150" src="img/blur.png">          
                <div class="fontforimg"> 
                <h4><font color=black>XYZ product by Blah blah blah blah blah blah blah<br><br><br>
                </font></h4> 
                <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
                <div class="label-hd"></div>
                <div class="label-499-k1"></div><hr>
                </h6>
                </div> </a>              
                <div class="label-hd"></div>
                <div class="label-<? echo "eight"?>-k"></div><hr>
                </div>
                </div> 
            <?
            if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $temp=$row['path'];
            }
            ?>
                <div class="col-sm-3">
                <div class="container12"> <img width="250" height="150" src="img/a2.png">                 <div class="fontforimg"> 
            <h4><font color=black>XYZ product by Blah blah blah blah blah blah blah<br><br><br></font></h4>                 <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
            <div class="label-hd"></div>
                <div class="label-249-k1"><hr>
            </h6>
            </div> 
                <div class="label-hd"></div>
                <div class="label-eight-k2"></div><hr>
                                
                </div>
                </div> 
             
      
            <?
            if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $temp=$row['path'];
            }
            ?>
          
         
                <div class="col-sm-3">
                <div class="container12"> <img width="250" height="150" src="img/fresh2.jpg">               <div class="fontforimg"> 
            <h4><font color=black>XYZ product by Blah blah blah blah blah blah blah<br><br><br></font></h4>                 <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
            <div class="label-hd"></div>
                <div class="label-999-k1"><hr>
            </h6>
            </div> 
                <div class="label-hd"></div>
                <div class="label-eight-k"></div><hr>

                </div>
                </div> 
  
          
            <?
            if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        	 $temp=$row['path'];
             }
		    ?>    
            <div class="col-sm-3">
            <div class="container12"> 
            <img width="250" height="150" src="img/blur.png"><br>
            <div class="fontforimg"> 
            <h4><font color=black>XYZ product by Blah blah blah blah blah blah blah<br><br><br></font></h4>                 <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
            <div class="label-hd"></div>
                <div class="label-349-k1">
            </h6>
            </div> 
            </div>
            </div> 
                        
            <div class="col-sm-3">
            <div class="container12"> 
            <img width="250" height="150" src="img/dre1.png"><br>
            <div class="fontforimg"> 
            <h4><font color=black>XYZ product by Blah blah blah blah blah blah blah<br><br><br></font></h4>                 <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
            <div class="label-hd"></div>
                <div class="label-499-k1">
            </h6>
            </div> 
            </div>
            </div> 
                 
            <div class="col-sm-3">
            <div class="container12"> 
            <img width="250" height="150" src="img/dre2.png"><br>
            <div class="fontforimg"> 
            <h4><font color=black>XYZ product by Blah blah blah blah blah blah blah<br><br><br></font></h4>                 <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
           <div class="label-hd"></div>
                <div class="label-249-k1">
            </h6>
            </div> 
            </div>
            </div> 
                        
            <div class="col-sm-3">
            <div class="container12"> 
            <img width="250" height="150" src="img/blur.png"><br>
            <div class="fontforimg"> 
            <h4><font color=black>XYZ product by Blah blah blah blah blah blah blah<br><br><br></font></h4>                 <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
            <div class="label-hd"></div>
                <div class="label-349-k1">
            </h6>
            </div> 
            </div>
            </div> 
                 
            <div class="col-sm-3">
            <div class="container12"> 
            <img width="250" height="150" src="img/fresh4.jpg"><br>
            <div class="fontforimg"> 
            <h4><font color=black>XYZ product by Blah blah blah blah blah blah blah<br><br><br></font></h4>                 <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
            <div class="label-hd"></div>
                <div class="label-999-k1">
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