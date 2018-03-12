<?php //ใส่ทุกอัน
    include 'header.php';
    // echo  date("Y-m-d");
    // echo date("h:i:s");
    $search = $_GET['search'];
    // echo $search;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/stylesShowSun.css">
    <!-- <link rel="stylesheet" href="css/upload-styles.css">
    <link rel="stylesheet" href="css/blueimp-gallery.min.css"> -->
    <title>The Event</title>
 
</head>
<body>

 

   
    <!-- <div class="nav navbar-inverse" style="height:3%;"><div> -->
    <center>
        <div style="width:70%;margin-top:100px;background-color:#ffffff">
        <div class="text1">We've found <span id="l"></span> events for you.</div>
       
        <?php echo $controller->getDatabase()->readbyCategory($search,-1,200,200);?>
        </div>
        </div>


  
        
   
    </center>  


<!--   End Block Recommended Events,Upcoming Events,Nearby Events -->

<!-- 
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

        // alert("l: "+l);
        document.getElementById('searchS').value = "Category: <?php echo $search;?>";
        $("#l").text(<?php echo $controller->getDatabase()->getLenE();?>);

    </script>





 
</body>

</html>





