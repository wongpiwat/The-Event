
<?php //ใส่ทุกอัน
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    
    <div class="container-fluid" style="background-color:#2196F3;color:#fff;">
    <h1  style="margin-top:50px;margin-left:7%;"><span class="glyphicon glyphicon-cog" ></span> Settings</h1><br />
    <!-- <h3>Fixed (sticky) vertical sidenav on scroll</h3>
    <p>Scroll this page to see how the left navigation menu behaves with data-spy="affix".</p>
    <p><strong>The left menu sticks to the page when you have scrolled a specified amount of pixels.</strong></p> -->
    </div>
    <br>

    <div class="container" >
        <div class="row">
            <nav class="col-sm-3">
            <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
                <li id="mGeneral" class="active"><a href="#section1" onclick="general();
                document.getElementById('mGeneral').className='active';
                document.getElementById('mUser').className='';
                document.getElementById('mEvents').className='';
                document.getElementById('mSystemLogs').className='';
                document.getElementById('mActivityLogs').className='';
                "><span class="glyphicon glyphicon-globe" ></span> &nbsp;General</a></li>

                <li id="mUser" ><a href="#section2"  onclick="manageUser();
                document.getElementById('mGeneral').className='';
                document.getElementById('mUser').className='active';
                document.getElementById('mEvents').className='';
                document.getElementById('mSystemLogs').className='';
                document.getElementById('mActivityLogs').className='';
                "><span class="glyphicon glyphicon-user" ></span> Manage User</a></li>

                <li id="mEvents" ><a href="#section3"  onclick="manageEvents();
                document.getElementById('mGeneral').className='';
                document.getElementById('mUser').className='';
                document.getElementById('mEvents').className='active';
                document.getElementById('mSystemLogs').className='';
                document.getElementById('mActivityLogs').className='';
                "><span class="glyphicon glyphicon-th-large" ></span> Manage Event</a></li>
                
                
                <li id="mSystemLogs" ><a href="#section4"  onclick="manageSystemLogs();
                document.getElementById('mGeneral').className='';
                document.getElementById('mUser').className='';
                document.getElementById('mEvents').className='';
                document.getElementById('mSystemLogs').className='active';
                document.getElementById('mActivityLogs').className='';
                "><span class="glyphicon glyphicon-tasks" ></span> Manage System Logs</a></li>

                <li id="mActivityLogs" ><a href="#section5"  onclick="manageActivityLogs();
                document.getElementById('mGeneral').className='';
                document.getElementById('mUser').className='';
                document.getElementById('mEvents').className='';
                document.getElementById('mSystemLogs').className='';
                document.getElementById('mActivityLogs').className='active';
                "><span class="glyphicon glyphicon-tasks" ></span> Manage Activity Logs</a></li>
            </ul>
            </nav>
            <div class="col-sm-9" id="sett">
            
            </div>
        </div>
    </div>



    <script>
        if(typeAccount == "user"){
            document.getElementById('mUser').style.display = "none";
        }
        general();
        function general(){
            $("#sett").html(`
            <div class="col-sm-9" id="mGeneral">
            <?php echo file_get_contents("general.php");?>
            `);
        }

        function manageUser(){
            console.log("MINSUnN");
            $("#sett").html(`
            <div class="col-sm-9" id="mUser">
            <?php echo file_get_contents("manageUser.php");?>
            `);
        }

        function manageEvents(){
            $("#sett").html(`
            <div class="col-sm-9" id="mEvents">
            <?php echo file_get_contents("manageEvents.php");?>`);
        }
        


        function manageSystemLogs(){
            $("#sett").html(`
            <div class="col-sm-9" id="mSystemLogs">
            <?php echo file_get_contents("manageSystemLogs.php");?>
            `);
        }

        function manageActivityLogs(){
            $("#sett").html(`
            <div class="col-sm-9" id="mActivityLogs">
            <?php echo file_get_contents("manageActivityLogs.php");?>
            `); 
        }
    </script>

    
</body>
</html>
