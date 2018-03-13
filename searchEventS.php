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
       
        
        <?php echo $controller->getDatabase()->searchEvent($search);?>
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

    <footer class="nav navbar-inverse">
    <center>
    <br>
    <p style="color:white;"><b>&copy; Designed by Kitichai Garden</b></p>
    <br>
    </center>
</footer>
    <script>

        // alert("l: "+l);

        $("#l").text(<?php echo $controller->getDatabase()->getLenE();?>);
        document.getElementById('searchS').value = "<?php echo $search;?>";

    </script>





 
</body>

</html>





