<?php //ใส่ทุกอัน
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/upload-styles.css">
    <link rel="stylesheet" href="css/blueimp-gallery.min.css">
    <title>The Event</title>
    <link rel="stylesheet" href="css/jq-carousel-plugin.css">
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script> -->
    <script src="js/jq-csrousel-plugin.js"></script><!--JS image slice -->
    
    <style rel="stylesheet" type="text/css">
        html,body{
            width: 100%;
            height: 100%;
        }
        #box{
            position: relative;
            width: 100%;
            height: 65%;
            overflow: hidden;
            /* display: flex;
            justify-content: center;         */
        }
    </style>

    <style>

        #slider { width: 500px; }
        #slider li { width: 250px; }
    </style>



<div class="bt_1" onmouseout="this.className='bt_1'" onmouseover="this.className='bt_2'"></div>
</head>
<body>

 

    <!--image slice -->
    <script>

        $(function(){
            $("#box").jqCarouselImg({
                imgLen:5,
                imgUrl:['https://p-u.popcdn.net/hero_images/desktop_images/000/000/122/medium/e1228a197abf1b71d33afdf758f606380a1a25b8.jpg?1520001031','https://picsum.photos/1800/888/?random','https://picsum.photos/1900/850/?random','https://picsum.photos/1800/960/?random','https://picsum.photos/1800/850/?random',],
                speed:5000,
                direction:false,
            })
        });
    </script>
    <div id="box">

    </div>
    <div class="content"></div>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script><!--End image slice -->

    
    <div class="Recommended" >
        <div class="text">Recommended Events</div>
        <?php echo $controller->getDatabase()->readEventRec();?>
    </div>


    <div class="upcoming" >
        <div class="text">Upcoming Events</div>
        <?php echo $controller->getDatabase()->readEventUp();?>
    </div>

    <div class="nearby" >
        <div class="text">NearBy Events</div>
        <?php echo $controller->getDatabase()->readEventRec();?>
    </div>
<!--   End Block Recommended Events,Upcoming Events,Nearby Events -->


        <div class="categories">
            <p class="body-text">Categories</p>
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
    </div>

    <footer class="footer">
        <br>
        <p><b>&copy; Designed by Kiticha Garden</b></p>
        <br>
    </footer>





 
</body>

</html>



<?php   
    //-----------ส่วนของ PHP-----------
    require 'vendor/autoload.php';
    use KittichaiGarden\Controllers\Controller;
    $controller = new Controller();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "POST";

        if (isset($_POST["CreateEvent"])) { //เมื่อมีการกดปุ่ม Create Event
            echo "CreateEvent";
            $controller->createNewEvent($_POST["eventName"],$_POST["location"],$_POST["date"],$_POST["size"],$_POST["category"],$_POST["type"],$_POST["price"],$_POST["details"],$_POST["organizerName"],$_POST["contactName"],$_POST["email"],$_POST["phone"]);
            echo $_POST["eventName"].$_POST["location"].$_POST["date"].$_POST["size"].$_POST["category"].$_POST["type"].$_POST["price"].$_POST["details"].$_POST["organizerName"].$_POST["contactName"].$_POST["email"].$_POST["phone"];
        }


    }
?>

