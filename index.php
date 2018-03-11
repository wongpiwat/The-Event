<?php //ใส่ทุกอัน
    include 'header.php';
    // echo  date("Y-m-d");
    // echo date("h:i:s");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="css/upload-styles.css">
    <link rel="stylesheet" href="css/blueimp-gallery.min.css"> -->
    <title>The Event</title>
    <link rel="stylesheet" href="css/jq-carousel-plugin.css">
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script> -->
    <script src="js/jq-csrousel-plugin.js"></script><!--JS image slice -->
    
    <style rel="stylesheet" type="text/css">
        html,body{
            width: 100%;
            height: 100%;
        }
        #myCarousel{
            position: relative;
            width: 100%;
            height: 69%;
            overflow: hidden;
            /* display: flex;
            justify-content: center;         */
        }img{
            display:block;
            width:100%; 
            height:100%;
            object-fit: cover;
        }
    </style>

    <style>

        #slider { width: 500px; }
        #slider li { width: 250px; }
    </style>



<div class="bt_1" onmouseout="this.className='bt_1'" onmouseover="this.className='bt_2'"></div>
</head>
<body>

 
  

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>


  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">

  <?php echo $controller->getDatabase()->imageCoverMain();?>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>














    <div class="nav navbar-inverse" style="height:3%;"><div>
    <center>
    <div class="Recommended" style="margin-bottom:50px;" >
        <div class="text1">Recommended Events</div>
        <?php echo $controller->getDatabase()->readEventRec();?>
    </div>


    <div class="upcoming" >
        <div class="text1">Upcoming Events</div>
        <?php echo $controller->getDatabase()->readEventUp();?>
    </div>
  
    
   
    </center>  
<!--   End Block Recommended Events,Upcoming Events,Nearby Events -->


    <div sytle="width:100%;background-color:black;margin-top:20px;">
    <h1 ><b><span sytle="margin-left:10%;"> &nbsp;&nbsp;&nbsp;&nbsp;Categories</span></b></h1>
    </div>
    
    <center>
    
    <!-- business -->
    <div class="nearby" >
        <div class="text"><span align="left" style="text-align:left;margin-left:-50%;">Business</span><span style="float:right;font-size:16px;padding:12.5px;"><a href="searchEvent.php?search=Business">View All</a></span></div>
        <?php echo $controller->getDatabase()->readbyCategory("Business",3,140,140);?>
    </div>

    <!-- Education -->
    <div class="nearby" >
        <div class="text"><span align="left" style="text-align:left;margin-left:-50%;">Education</span><span style="float:right;font-size:16px;padding:12.5px;"><a href="searchEvent.php?search=Education">View All</a></span></div>
        <?php echo $controller->getDatabase()->readbyCategory("Education",3,140,140);?>
    </div>

       <!-- Family -->
       <div class="nearby" >
        <div class="text"><span align="left" style="text-align:left;margin-left:-50%;">Family</span><span style="float:right;font-size:16px;padding:12.5px;"><a href="searchEvent.php?search=Family">View All</a></span></div>
        <?php echo $controller->getDatabase()->readbyCategory("Family",3,140,140);?>
    </div>

    <!-- Health -->
    <div class="nearby" >
        <div class="text"><span align="left" style="text-align:left;margin-left:-50%;">Health</span><span style="float:right;font-size:16px;padding:12.5px;"><a href="searchEvent.php?search=Health">View All</a></span></div>
        <?php echo $controller->getDatabase()->readbyCategory("Health",3,140,140);?>
    </div>

       <!-- Hobbies -->
       <div class="nearby" >
        <div class="text"><span align="left" style="text-align:left;margin-left:-50%;">Hobbies</span><span style="float:right;font-size:16px;padding:12.5px;"><a href="searchEvent.php?search=Hobbies">View All</a></span></div>
        <?php echo $controller->getDatabase()->readbyCategory("Hobbies",3,140,140);?>
    </div>

    <!-- Technology -->
    <div class="nearby" >
        <div class="text"><span align="left" style="text-align:left;margin-left:-40%;">Technology</span><span style="float:right;font-size:16px;padding:12.5px;"><a href="searchEvent.php?search=Technology">View All</a></span></div>
        <?php echo $controller->getDatabase()->readbyCategory("Technology",3,140,140);?>
    </div>

       <!-- Travel -->
       <div class="nearby" >
        <div class="text"><span align="left" style="text-align:left;margin-left:-50%;">Travel</span><span style="float:right;font-size:16px;padding:12.5px;"><a href="searchEvent.php?search=Travel">View All</a></span></div>
        <?php echo $controller->getDatabase()->readbyCategory("Travel",3,140,140);?>
    </div>

    <!-- Sports -->
    <div class="nearby" >
        <div class="text"><span align="left" style="text-align:left;margin-left:-50%;">Sports</span><span style="float:right;font-size:16px;padding:12.5px;"><a href="searchEvent.php?search=Sports">View All</a></span></div>
        <?php echo $controller->getDatabase()->readbyCategory("Sports",3,140,140);?>
    </div>

        <!-- Food -->
        <div class="nearby" >
        <div class="text"><span align="left" style="text-align:left;margin-left:-50%;">Food</span><span style="float:right;font-size:16px;padding:12.5px;"><a href="searchEvent.php?search=Food">View All</a></span></div>
        <?php echo $controller->getDatabase()->readbyCategory("Food",3,140,140);?>
    </div>



    </center>

        <!-- <div class="categories">
            <p class="body-text"><h2><b>Categories</b></h2></p>
        <div class="row">
            <div class="col-4">
                <a href="#">Business</a><br>
                <a href="#">Education</a><br>
                <a href="#">Family</a><br>
            </div>
            <div class="col-4">
                <a href="#">Health</a><br>
                <a href="#">Hobbies</a><br>
                <a href="#">Technology</a><br>
            </div>
            <div class="col-4">
                <a href="#">Travel</a><br>
                <a href="#">Sports</a><br>
                <a href="#">Food</a><br>
            </div>
        </div>
    </div> -->

    <footer class="footer navbar-inverse" style="color:white;margin-top:70px;">
        <br>
        <p><b>&copy; Designed by Kiticha Garden</b></p>
        <br>
    </footer>

    <script>
        function showEventContent(idEvent){
            console.log(idEvent);
            
        }

    </script>





 
</body>

</html>





