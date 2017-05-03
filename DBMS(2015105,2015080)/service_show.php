<?php
include 'connection.php';
if(empty($_SESSION)) // if the session not yet started 
   session_start();?>
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
    
    
            <div class="navbar navbar-default">
            <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                </button>
            <div class="collapse navbar-collapse" id="example">
            <div class="fonty">
                <ul class="nav navbar-nav">
                    
                    
                    <li><a href="writing.php"><h6>Writing &#9662;</h6></a>  
                            <ul class="dropdown">
                            <li><a href="index.html">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Accessories</a></li>
                           </ul>               
                    </li>
                    
                    <li><a href="coding.php"><h6>Coding &#9662;</h6></a>  
                            <ul class="dropdown">
                            <li><a href="index.html">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Accessories</a></li>
                           </ul>               
                    </li>
                    
                    <li><a href="health.php"><h6>Health & Lifestyle &#9662;</h6></a>  
                            <ul class="dropdown">
                            <li><a href="index.html">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Accessories</a></li>
                            </ul>               
                    </li>
                    
                    <li><a href="#"><h6>Audio & Visuals &#9662;</h6></a>  
                            <ul class="dropdown">
                            <li><a href="index.html">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Accessories</a></li>
                           </ul>               
                    </li>
                    
                    <li><a href="#"><h6>Catologue &#9662;</h6></a>
                           <ul class="dropdown">
                            <li><a href="index.html">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Accessories</a></li>
                           </ul>                                                
                    </li>
                    
                    <li><a href="#"><h6>What's New &#9662;</h6></a>  
                            <ul class="dropdown">
                            <li><a href="index.html">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Accessories</a></li>
                            </ul>               
                    </li>
                    
                    <li><a href="#"><h6>Projects &#9662;</h6></a>  
                            <ul class="dropdown">
                            <li><a href="index.html">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Accessories</a></li>
                            </ul>               
                    </li>   
                    
                    <li><a href="#"><h6>Creator's Design &#9662;</h6></a>  
                            <ul class="dropdown">
                            <li><a href="index.html">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Accessories</a></li>
                            </ul>               
                    </li>
                    
                    <li><a href="#"><h6>Feedback &#9662;</h6></a>  
                            <ul class="dropdown">
                            <li><a href="index.html">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Accessories</a></li>
                           </ul>               
                    </li> 
                    
                    <li><a href="#"><h6>Others &#9662;</h6></a>  
                            <ul class="dropdown">
                            <li><a href="index.html">Men</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Accessories</a></li>
                            </ul>               
                    </li>

                    
                </ul>
            </div>
            </div>
            </div>
            </div>
            </div>
            
    
    
                                             <!-- Image-1.1 -->
               
                          <?php   
            $picid=$_GET["link"];
            $servername = "localhost";
            $username = "root";
            $password = "beatsbydre";
            $dbname = "simple_login";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            } 
            $drdre=$_SESSION['username'];  
            $sql = "SELECT * from `memberprojects` where time='$picid'";
            $result = $conn->query($sql);        
            if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $temp=$row['path'];
            $title=$row['title'];
            $descript=$row['description'];
            }
            ?>
  
            <?
            if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $temp=$row['path'];
            }
            ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="whitecolor1"><font size="7px" color=dimgrey face='Raleway'><? echo "$temp";echo "$temp";?></font></div>
                <div class="whitecolor1" >
                 
                    <hr>
<img src=<? echo "$temp" ;?> width=750px>
                    <br><br><? echo "$temp"; ?>
               
                                        <!-- Left and right controls -->
                

                    <p> <? echo "$descript"?><br>[Narrator]
Let's describe a certain female
A female with a disease of character and attitude
If you will a snob
However in the view of NWA...

[Ice Cube]
A bitch is a bitch
So if I'm poor or rich
I talk in the exact same pitch
Now the title bitch don't apply to all women
But all women have a little bitch in 'em
It's like a disease that plagues their character
Taking the women of America
And it starts with the letter B
It makes a girl like that think she better than me
See, some get mad and some just bear it
But, yo, if the shoe fits wear it
It makes 'em go deaf in the ear that's why
When you say 'hi' she won't say 'hi'
Are you the kind that think you're too damn fly?
Bitch eat shit and die
Ice Cube coming at you at a crazy pitch
(Why?) I think a bitch is a bitch

[Girl]
Who the fuck you think you calling a bitch you little sorry motherfucker
I don't know who the fuck you think you talking to
Let me tell you one motherfucking thing, I'm not no-
"Bitch, shut the fuck up"

[Ice Cube]
Yo, you can tell a girl that's out for the money
She look good and the bitch walk funny
She ain't no dummy, she's rather conniving
Yo bitch, fuck what I'm driving
See a young nigga that's striving
You're through without a BMW
That's why a bitch is a bitch I guess
Or either P-M-S
Here, test the girl that's kinda snobby
And I bet you dissing niggas is her hobby
And after she finished the test
Grade today of B-I-T-C-H
And watch her get mad cause she know it's true(She know it)
But a nigga like me'll say "fuck you"
Do like Ice Cube, slam her ass in a ditch(word)
Cause a bitch is a bitch

[Girl/Ice Cube]
"Why I gotta be a bitch?"
I ain't call you no bitch, if you listen to the goddamn song it'd tell you what a bitch is...
"Fuck the song cause I'm not no motherfucking bitch"
I didn't say you was a bitch, if you stop acting like a goddamn bitch
"Fuck you, little punk-ass little nigga"
Fuck you, bitch! You sloppy-ass, scandalous-ass ho!
"Fuck you! Who the fuck you think you are?"
Fuck you! Suck my dick, bitch! You scandalous-ass, doo-doo dog breath, stinking, ugly...

[Ice Cube]
I once knew a bitch who got slapped
Cause she played me like she was all that
A bitch can be your best friend talking behind your back
About who's fucking who and who's getting fat
Look at yourself for me (Look, bitch)
Now do you fall in this category?
Or you the kind that won't blink
Cause you don't think your shit stink
Lucky I haven't had a drink
Cause I'd down your ass
Then I'd clown your ass
Cause the niggas I hang with ain't rich
We'll all say "Fuck you bitch!"
Now what can I do with a ho like you
Bend your ass over and then I'm through
Cause you see Ice Cube ain't taking no shit
(Why?) Cause I think a bitch is a bitch

[Narrator]
There you have it, the description of a bitch
Now ask yourself are they talking about you?
Are you that funky, dirty, money-hungry, scandalous, stuck-up, hair piece contact wearing bitch?
Yep, you probably are

Bitch!</p>
                    </div>
                </div>
            <div class="col-md-4">
                
                <div class="whitecolor4">
                
                    <br><br><div class="wrapper"><button type="button" class="btn btn-success"><h3>Buy Now<? echo" $50";?></h3></button></div>
                </div><br>
                
                <div class="whitecolor4">
                    </div>
                </div>
            
            </div>
                <br>
                           
            <!-- Horizontal Scrolling Bar -->
            
            <div class="whitecolor">
            <div class="row">
       
                
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/otherwork.png" width=1270px; margin-left=60px>
            </div>  
   
           
                    <div class="row">
                <div class="col-sm-3">
                    <div class="container12"><a href="<?php $yolo="show.php/link="; echo $yolo.$row['time'];?>"> <img width="250" height="130" src="<?php echo $temp;?>">              <div class="fontforimg"> 
            <h4><font color=black>I will Add 10k Snaps for you and make your snapchat more appealing.<br><br><br><br></font></h4>                 <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
            <div class="label-hd"></div>
            <div class="label-eight-k1"></div><hr>
            </h6>
            </div>  </a>              
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
                <div class="container12"> <img width="250" height="130" src="img/a2.png">               <div class="fontforimg"> 
            <h4><font color=black>I will Add 10k Snaps for you and make your snapchat more appealing.<br><br><br><br></font></h4>                 <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
            <div class="label-hd"></div>
            <div class="label-eight-k1"></div><hr>
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
                <div class="container12"> <img width="250" height="130" src="img/fresh3.jpg">                <div class="fontforimg"> 
            <h4><font color=black>I will Add 10k Snaps for you and make your snapchat more appealing.<br><br><br><br></font></h4>                 <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
            <div class="label-hd"></div>
            <div class="label-eight-k1"></div><hr>
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
            <img width="250" height="130" src="img/blur.png"><br>
            <div class="fontforimg"> 
            <h4><font color=black>I will Add 10k Snaps for you and make your snapchat more appealing.<br><br><br><br></font></h4>                 <h6><font align="center" >By Tanishqandmac</font><font color=gold> ✮✮✮✮✮</font>
            <div class="label-hd"></div>
            <div class="label-eight-k1"></div><hr>
            </h6>
            </div> 
            </div>
            </div> 
                </div></div><br><br>
          
            
 
    
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