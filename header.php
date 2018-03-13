<?php
require 'vendor/autoload.php';
use KittichaiGarden\Controllers\Controller;
//echo "header<br>";

session_start();
$type_Account = "guest";
$status = null;
$login = false;
$username = null;
$userImage = null;
$user = null;
$controller = new Controller();
$cer = $_SERVER['DOCUMENT_ROOT'];


if(isset($_SESSION["username"])){ // User login อยู่ในระบบ
    $username = $_SESSION["username"];
    $userImage = $_SESSION["userImage"];
    // echo "$username<br>$userImage<br>";
  

    $user = $controller->checkType($username);

    // echo "<pre>";
    // var_dump($detialUser);
    // echo "</pre>";
    // echo "online";
    // //เขียน HTML ตรงนี้  User
    // echo "<br>".$detialUser["type_Account"];
    // echo "<br>".$detialUser["status"];

    if($user != null){
        $type_Account = $user->getTypeAccount();
        $status = $user->getStatus();
        $login = true;
    }

}

?>

<!DOCTYPE html>
<html>
<body>
<head>
<link rel="stylesheet" href="css/styles.css">
<!-- <link rel="stylesheet" href="css/styleProfile.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/jquery-clockpicker.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="css/jquery-clockpicker.min.css">
<link rel="stylesheet" href="css/styleMap.css">
<link href="css/uploadfile.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script> -->
<script src="js/jquery.uploadfile.min.js"></script>
</head>

<!--header first page-->

<div id="header"></div> <!--tag for call in javascript-->

<script type="text/javascript">
    


    var typeAccount = "<?php echo $type_Account; ?>";
    var status  = "<?php echo $status; ?>";
    var login = "<?php echo $login; ?>";
    var username = "<?php echo $username; ?>";
    var userImage = "<?php echo $userImage; ?>";
    var cer = "<?php echo $cer; ?>";
    var imageProfile = null;
    console.log(typeAccount);
    console.log(status);

    if(login == true){ // อยู่ในระบบ Create Event Profile
        
        $("#header").html(`
        <nav class="navbar navbar-inverse navbar-fixed-top" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">The Event</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <div class="navbar-form navbar-left" >
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search"  id="searchS" name="search" style="margin-top:3px;height:28px;">
            <div class="input-group-btn">
              <button class="btn btn-default" type="button"  onclick="sunny()" style="height:28px;margin-top:3px;">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </div>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="#" onclick="document.getElementById('create').style.display='block'"><span class="glyphicon glyphicon-th-large"></span> Create Event</a></li>
      <li><a href="index.php" onclick="document.getElementById('create').style.display='block'"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> `+username+` <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile.php">Profile</a></li>
            <li><a href="setting.php">Settings</a></li>
            <li><a href="#" onclick="signOut()"><span class="glyphicon glyphicon-log-out" ></span> Sign out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div style="margin-bottom:50px;"></div>`);
        //อย่าลืม พวก TypeAccount ด้วยนะครับ

    }else{ // signIn
        $("#header").html(`
        <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php" >The Event</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <div class="navbar-form navbar-left" >
          <div class="input-group" >
            <input type="text" class="form-control" placeholder="Search" name="search" id="searchS" style="margin-top:3px;height:28px;">
            <div class="input-group-btn">
              <button class="btn btn-default" type="button" onclick="sunny()" style="height:28px;margin-top:3px;">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"  onclick="document.getElementById('signUp').style.display='block'" ><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
        <li><a href="#"  onclick="document.getElementById('login').style.display='block'"><span class="glyphicon glyphicon-log-in" ></span> Sign In</a></li>
      </ul>
    </div>
  </div>
</nav>
<div style="margin-bottom:50px;"></div>
      
            `);

    }
    

    //         /* When the user clicks on the button, 
    // toggle between hiding and showing the dropdown content */
    // function myFunction() {
    //     // console.log("hello");
    //     document.getElementById("myDropdown").classList.toggle("show");
    // }
    // // Close the dropdown if the user clicks outside of it
    // window.onclick = function(e) {
    // if (!e.target.matches('.dropbtn')) {
    //     var myDropdown = document.getElementById("myDropdown");
    //     if (myDropdown.classList.contains('show')) {
    //         myDropdown.classList.remove('show');
    //     }
    // }
    // }

</script>

<div id="login" class="login">

<form class="login-content animate" id="signInForm" method="POST">
  <div style="padding: 16px;">
    <label for="uname"><b>Username/Email</b></label>
    <input type="text" placeholder="Enter Username or Email" name="username" id="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>

    <button type="button" name="SignIn" onclick="signIn()" id="logBtn" style="    background-color: #4CAF50;
color: white;
padding: 10px 18px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="con" style="background-color:#f1f1f1">
    <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="forgotPassword.php">Password ?</a></span>
  </div>
</form>
</div>

<div id="signUp" class="signUp">
  <form class="signUp-content animate"  id="signUpForm" method="POST" action="src/indexPHP.php">
  <div style="padding: 16px;" id="b">
      <label for="uname" id="nameu"><span style="color: red;">*</span><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" id="usrn" required>
      <label for="psw"><span style="color: red;">*</span><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw"  id="psw" required>

      <label for="psw" id="conP"><span style="color: red;">*</span><b>Confirm Your Password</b></label>
      <input type="password" placeholder="Enter Password Again" name="cPsw" id="cPsw" required>

      <label for="email"><span style="color: red;">*</span><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="umail" id="umail" required>

      <label for="Fname"><span style="color: red;">*</span><b>FirstName</b></label>
      <input type="text" placeholder="FirstName" name="uFname" id="firstName" required>
      <label for="Lname"><b>LastName</b></label>
      <input type="text" placeholder="LastName" name="uLname" id="lastName" required>
      <label for="id"><b>Id No.</b></label>
      <input type="text" placeholder="Enter Id No." name="uid" id="idNo" required>
      <label for="birth"><span style="color: red;">*</span><b>Birthday</b></label>
      <input type="date" name="bday" id="bday" require><br>
      <label for="gen"><b>Gender</b></label><br>
      <input type="radio" name="gender" value="male" id="male" checked> Male
      <input type="radio" name="gender" value="female" id="female" > Female<br>
      
    <label for="address"><span style="color: red;">*</span><b>Address</b> <i>(บัตรเข้าร่วมกิจกรรมจะถูกส่งตามที่อยู่ที่คุณลงทะเบียน)</i></label>
    <input type="text" placeholder="Enter Address" name="uaddress" id="address" required>

    <label for="phone"><b>Phone Number</b></label>
    <input type="text" onKeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Enter Phone Number" name="uphone" id="phone" required>
    <div id="type" style="display:none;">
        <label for="type"><b>Type Account: </b></label>
        <input type="radio" name="type" value="male" id="typeA" checked> Admin
        <input type="radio" name="type" value="female" id="typeU" > User<br>
    </div>
    <div id="status" style="display:none;margin-bottom:15px;">
        <label for="type"><b>Status Account: </b></label>
        <input type="radio" name="status" value="Activate" id="statusA" checked> Activate
        <input type="radio" name="status" value="unActivate" id="statusU" > unActivate
        <input type="radio" name="status" value="Block" id="statusB" > Block<br>
    </div>
    <div id="fileuploader">Upload</div>
      <!-- 20,40 -->
      <button id="signupCan" style="width: 20%; height: 7%;" type="button" onclick="document.getElementById('signUp').style.display='none';document.getElementById('signUpForm').reset(); setEdit();undisableInput()" class="cancelbtn">Cancel</button>
      <button id="signupbtn"  type="button" name="SignUp" onclick="signUp()" style="width: 60%; height: 7%;float: right;background-color: #4CAF50;color: white;padding: 10px 18px;margin: 8px 0;border: none;cursor: pointer;">SignUp</button>
  </div>
</form>
</div>

<!-- สร้าง event -->
<div id="create" class="create">
<form class="create-content animate"  method="POST">
    <center><h1>Create Event</h1></center>
    <div style="padding: 16px;">
        <label for="eventName"><span style="color: red;">*</span><b>Event Name</b></label><br>
        <input id="eventName" type="text" ><br><br>

        <label for="locationEvent"><span style="color: red;">*</span><b>Location</b></label><br>
        <input id="locationEvent" type="text" ><br><br>

        <label for="date"><span style="color: red;">*</span><b>Date</b></label>
        <input id="date" type="date" style="margin-right:10%;margin-left:1%;"><br><br>

        <label for="startTime"><span style="color: red;">*</span><b>Start Time</b></label><br>
        <input id="inputStartTime" value="" data-default="00:00">
        <button type="button" class="btn btn-default btn-sm" id="buttonStartTime" style="margin-right:10%;margin-left:1%;">
        <span class="glyphicon glyphicon-time"></span> Time</button>

        <label for="endTime"><span style="color: red;">*</span><b>End Time</b></label>
        <input id="inputEndTime" value="" data-default="00:00">
        <button type="button" class="btn btn-default btn-sm" id="buttonEndTime">
        <span class="glyphicon glyphicon-time"></span> Time</button><br><br>

        <form>
            <label for="eventType"><span style="color: red;">*</span><b>Type</b></label>
            <input id="typeFree" type="radio" value="free" checked style="margin-right:.5%;margin-left:3%;">Free</input>
            <input id="typePaid" type="radio" value="paid" style="margin-right:.5%;margin-left:.5%;">Paid</input>
        </form><br>

        <div class="input_fields_wrap">
            <!-- <button class="add_field_button">Add Ticket Price</button> -->
            <label for="price"><span style="color: red;">*</span><b>Ticket Price</b></label>
            <!-- <div><input id="ticketPrice" type="text" name="ticketPrice[]"></div> -->
            <div><input id="ticketPrice" type="text"></div>
        </div>

        <label for="eventCategory"><b>Category</b></label>
        <select id="category" style="margin-right:5%;margin-left:1%;">
            <option value="Business">Business</option>
            <option value="Education">Education</option>
            <option value="Family">Family</option>
            <option value="Health">Health</option>
            <option value="Hobbies">Hobbies</option>
            <option value="Technology">Technology</option>
            <option value="Travel">Travel</option>
            <option value="Sports">Sports</option>
            <option value="Food">Food</option>
        </select><br><br>

        <label for="size"><span style="color: red;">*</span><b>Size</b></label><br>
        <input id="size" type="text"><br><br>

        <label for="details"><b>Details</b></label>
        <input id="details" type="text" placeholder=""><br><br>
        
        <label for="preCondition"><b>Pre Condition</b></label>
        <input id="preCondition" type="text" placeholder="" ><br><br>

        <label for="postCondition"><b>Post Condition</b></label>
        <input id="postCondition" type="text" placeholder="" ><br><br>

        <label for="organizerName"><b>Organizer Name</b></label>
        <input id="organizerName" type="text" ><br><br>

        <label for="contactName"><b>Contact Name</b></label>
        <input id="contactName" type="text" ><br><br>

        <label for="email"><b>Email</b></label>
        <input id="email" type="text" ><br><br>

        <label for="ePhone"><b>Phone</b></label>
        <input id="ePhone" maxlength="10" onKeypress="return event.charCode >= 48 && event.charCode <= 57" type="text" ><br><br>
        
        <label for="teaserVDO"><span style="color: red;">*</span><b>Youtube Video Link (Optional)</b></label>
        <input id="teaser" type="text"><br><br>

        <!-- start image upload -->
        <form id="fileupload" method="POST" enctype="multipart/form-data" data-url="upload-files/">
            <label for="Add files"><span style="color: red;">*</span><b>Add Images</b></label>
            <input type="file" name="files[]" multiple>
            <table class="table table-striped"><tbody class="files"></tbody></table>
        </form>
        
            
        <!-- google map api key: AIzaSyC18bWr7foVxKW45n29XTfqOSryrlVBKfM -->
        <label for="marker" ><b>Place Marker On Map</b></label>
        <div id="map"></div>
        <script>
            var map;
            var lat;
            var lng;
            var markers = [];
            function initMap() {
                var location = {lat: 13.75398, lng: 100.50144};
                map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: location,
                });
                map.addListener('click', function(event) {
                var myLatLng = event.latLng;
                lat = myLatLng.lat();
                lng = myLatLng.lng();
                deleteMarkers();
                addMarker(event.latLng);
                });
            }

            function addMarker(location) {
                var marker = new google.maps.Marker({
                position: location,
                map: map
                });
                sendLatLng(lat,lng);
                // console.log(lat+" "+lng);
                markers.push(marker);
            }

            function setMapOnAll(map) {
                for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(map);
                }
            }

            function clearMarkers() {
                setMapOnAll(null);
            }

            function deleteMarkers() {
                clearMarkers();
                markers = [];
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC18bWr7foVxKW45n29XTfqOSryrlVBKfM&callback=initMap"></script>
        <button type="button" onclick="document.getElementById('create').style.display='none';reloadJs()" style="width: 20%; height: 2%; background-color: #f44336; color: white;padding: 10px 18px; margin-top: -1%; border: none;cursor: pointer;">Cancel</button>
        <button id="createNew" type="button" style="width: 50%; height: 2%;float: right;background-color: #4CAF50;color: white;padding: 10px 18px; margin-top: -1%; border: none;cursor: pointer;" name="CreateEvent" onClick="createNewEvent()">Create event</button>
    </div>
</form>



<script type="text/javascript">
$(".input_fields_wrap").hide();
var imagesPath = [];
var latitude = null;
var longitude = null;
console.log(window.location.pathname);
// /ProjectWebtech_1/adminManage.php
var login = document.getElementById('login');
window.onclick = function(e){
    if (event.target == login){
        login.style.display = "none";    
    }
}

document.getElementById('login').addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode === 13) {
        document.getElementById("logBtn").click();
    }
});

function signIn(){
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    console.log(username);
    console.log(password);
    document.getElementById('login').style.display='none';
    document.getElementById('signInForm').reset();
    $.post('src/indexPHP.php',{signIn:"true",username:username,password:password},
    function(data){
        console.log(data);

     if(data == 1){// login ได้
    //    location.reload()
        window.location.href = "index.php";
        console.log("Sun");
     }else {
         alert("username or password wrong!!!");
     }
    });



}



function signOut(){
    $.post('src/indexPHP.php',{signOut:"true"},function(data){
        //console.log(data);
        window.location.href = "index.php";
        // location.reload();
    });
}


function signUp(){
    var username = document.getElementById('usrn').value;
    var psw = document.getElementById('psw').value;
    var cPsw = document.getElementById('cPsw').value;
    var email = document.getElementById('umail').value;
    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var idNo = document.getElementById('idNo').value;
    var gender = "male";
    var address = document.getElementById('address').value;
    var phone = document.getElementById('phone').value;
    var bday = document.getElementById('bday').value;
    var type = 1;
    var status = null;
    if(document.getElementById('male').checked == false){
      gender = "female";
    }
    console.log(document.getElementById('typeA').style.display);
    //console.log(document.getElementById('type').checked);
    if(document.getElementById('signupbtn').textContent == "Edit Account"){
        console.log("Edit!!!");
        cPsw = psw;
        status = $('input[name=status]:checked').val();
        console.log(status);
    }
    if(document.getElementById('type').style.display == "block" && document.getElementById('typeA').checked == true){
        type = 0;
    }
    // console.log(psw);
    // console.log(cPsw);
    // console.log(bday);

    if(psw == cPsw && bday != "" && document.getElementById('signupbtn').textContent != "Edit Account" ){
        console.log("Same");
        // console.log("Same:"+imageProfile);
        
        $.post('src/indexPHP.php',{signUp:"true",uname:username,psw:psw,umail:email,uFname:firstName,
        uLname:lastName,uid:idNo,bday:bday,gender:gender,uaddress:address,uphone:phone,type:type,imageProfile:imageProfile},
    function(data){
        console.log(data);

        if(data == 1){
            sendEmailQR(username,email,"http://localhost:120/ProjectWebtech_1/activateEmail.php?xTaScDwdlsdafqAdatwqcsIar="+username,firstName,"The Event Account","Activate your account Username: "+username+" please click= http://localhost:120/ProjectWebtech_1/activateEmail.php?xTaScDwdlsdafqAdatwqcsIar="+username+" Thankyou.");
            
            if(window.location.pathname == "/ProjectWebtech_1/setting.php"){
                successTell(" Add User => Username: "+username+" into Database.");
                readAccount();
                document.getElementById('signUp').style.display='none';
                document.getElementById('signUpForm').reset();
            }else{
            console.log("SignUp Successful.");
            alert("SignUp Successful.");
            // location.reload();
            }
            
        }else if(data == -1){
            alert("Username is already use!!!.")
            document.getElementById('usrn').value = "";
            document.getElementById('psw').value = "";
            document.getElementById('cPsw').value = "";
        }
    });

    }else if(psw != cPsw){
        console.log("Not Same");
        document.getElementById('username').value = "";
        document.getElementById('psw').value = "";
        document.getElementById('cPsw').value = "";
        alert("Password Not the same.");
        //ฝากทำให้ช่องพาสเวิสเป็นสีแดงด้วยครับ ^^
        $('#conP').html('Not Matching').css('color', 'red');
    }else if(bday == ""){
        alert("Input Birthday.");
    }else if(psw == cPsw && bday != "" && document.getElementById('signupbtn').textContent == "Edit Account" ){
        $.post('src/indexPHP.php',{Edit:"true",uname:username,psw:psw,umail:email,uFname:firstName,
        uLname:lastName,uid:idNo,bday:bday,gender:gender,uaddress:address,uphone:phone,type:type,status:status},
    function(data){
        console.log(data);

     if(data == 1){
         if(window.location.pathname == "/ProjectWebtech_1/setting.php"){
            successTell(" Edit User => Username: "+username+" into Database.");
            readAccount();
            setEdit();
            document.getElementById('signUp').style.display='none';
            document.getElementById('signUpForm').reset();
         }
     }
     }
     );
    }
}

    function setEdit(){
        edit = false;
    }

    function setDel(){
        del = false;
    }
    var inputStartTime = $('#inputStartTime');
    inputStartTime.clockpicker({autoclose: true});

    var inputEndTime = $('#inputEndTime');
    inputEndTime.clockpicker({autoclose: true});

    $('#buttonStartTime').click(function(e){
        e.stopPropagation();
        inputStartTime.clockpicker('show').clockpicker('toggleView', 'hours');
    });

    $('#buttonEndTime').click(function(e){
        e.stopPropagation();
        inputEndTime.clockpicker('show').clockpicker('toggleView', 'hours');
    });

    $(document).ready(function() {
        $("#typePaid").click(function () {
            $("#typePaid").prop("checked", true);
            $("#typeFree").prop("checked", false);
            $(".input_fields_wrap").show();
        });

        $("#typeFree").click(function () {
            $("#typeFree").prop("checked", true);
            $("#typePaid").prop("checked", false);
            $(".input_fields_wrap").hide();
        });

    var max_fields = 5;
    var wrapper = $(".input_fields_wrap");
    var add_button = $(".add_field_button");
    var textBoxItem = 0;
    $(add_button).click(function(e){
        e.preventDefault();
        if(textBoxItem < max_fields){
            textBoxItem++;
            $(wrapper).append('<div><input type="text" name="ticketPrice[]"/><a href="#" class="remove_field">Remove</a></div>');
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){
        e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });

    function sendLatLng(lat,lng) {
        latitude = lat;
        longitude = lng; 
    }

    function sendImagePath(path) {
            imagesPath.push(path);
        };

      function reloadJs(){
          location.reload();
          console.log(imagesPath);
      }
      function createNewEvent(){
        var type = null;
        var eventName = document.getElementById('eventName').value;
        var locationEvent = document.getElementById('locationEvent').value;
        var date = document.getElementById('date').value;
        var startTime = document.getElementById('inputStartTime').value;
        var endTime = document.getElementById('inputEndTime').value;
        var category = document.getElementById('category').value;
        if (document.getElementById('typePaid').checked) {
            type = document.getElementById('typePaid').value;
        } else if (document.getElementById('typeFree').checked) {
            type = document.getElementById('typeFree').value;
        }
        var ticketPrice = document.getElementById('ticketPrice').value;
        var size = document.getElementById('size').value;        
        var EventDetails = document.getElementById('details').value;
        var preCondition = document.getElementById('preCondition').value;
        var postCondition = document.getElementById('postCondition').value;
        var organizerName = document.getElementById('organizerName').value;
        var contactName = document.getElementById('contactName').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('ePhone').value;
        var teaser = document.getElementById('teaser').value;
        document.getElementById('createNew').type = "submit";
        if (status == "Activate") {

            if (eventName != ""  && locationEvent != "" && teaser != "" && size != "" ) /*Gu edit*/
            {
            /*Edit*/
            if(document.getElementById('createNew').textContent == "editEvent"){
                $.post('src/indexPHP.php',{editEvent:"true",
                eventName:eventName,locationEvent:locationEvent,
                date:date,size:size,
                startTime:startTime,endTime:endTime,
                category:category,type:type,
                price:ticketPrice,details:EventDetails,
                organizerName:organizerName,contactName:contactName,
                email:email,phone:phone,
                imagesPath:imagesPath,latitude:latitude,
                longitude:longitude,teaser:teaser,preCondition,postCondition},
                function(){
                    alert("Edit Complete");
                });
                /*New*/
            } else {
            $.post('src/indexPHP.php',{createEvent:"true",
                eventName:eventName,locationEvent:locationEvent,
                date:date,size:size,
                startTime:startTime,endTime:endTime,
                category:category,type:type,
                price:ticketPrice,details:EventDetails,
                organizerName:organizerName,contactName:contactName,
                email:email,phone:phone,
                imagesPath:imagesPath,latitude:latitude,
                longitude:longitude,teaser:teaser,preCondition,postCondition},
                function(){
                    alert("Create Complete");
                });
            }
              
            }else{
              alert("Please input")
    
            }
            }else{
              alert("Please activate your email!");
            }
         
          }

      function sendEmail(username,email,fname,title,body){
         console.log("SendEmailllllll");
       
        document.getElementById('signUp').style.display = "none";
        $.post("email/phpSendMailGmail.php",{title:title,body:body,email:email,fname:fname},
        function(data){
            // alert(data);
            // location.reload();
        })

     }

     function sendEmailQR(username,email,qr,fname,title,body){
         console.log("SendEmailllllll");
       var ul = setChartImage(qr);
       console.log(ul);
        document.getElementById('signUp').style.display = "none";
        $.post("email/phpSendMailGmail.php",{title:title,body:body,email:email,fname:fname,qr:ul},
        function(data){
            // alert(data);
            // location.reload();
        })

     }

     function setChartImage(uls) {
    var query = { cht: "qr", choe: "UTF-8", 
              chs: '300', chld: '50x50' ,
              chl: uls };

    var url = "http://chart.apis.google.com/chart?" + $.param(query);
    return url;
    }
    //  function Hello(){
    //      console.log("Sunnnnnnnnnnn");
    //  }

     function sunny(){
        if(document.getElementById('searchS').value != ""){
        window.location = "searchEventS.php?search="+document.getElementById('searchS').value;
        }else{
            alert("Please Fill in Word.");
        }
     }
 //POOM
     $("#fileuploader").uploadFile({
    url: "../php-uploader/upload.php",multiple:false,dragDrop: false,fileName: "myfile",
    returnType: "json",showDelete: true,showDownload:false,maxFileSize:500*1024,showPreview:true,
    previewHeight: "100px",previewWidth: "100px",onSuccess:function(files,data,xhr,pd){
        imageProfile = data[0];
        console.log(imageProfile);
    },
    deleteCallback: function (data, pd) {
    for (var i = 0; i < data.length; i++) {
        $.post("../php-uploader/delete.php", {op: "delete",name: data[i]},
            function (resp,textStatus, jqXHR) {
                // alert("File deleted");
            });
    }
    pd.statusbar.hide();
},
downloadCallback:function(filename,pd) {
        location.href="../php-uploader/download.php?filename="+filename;
	}
});

</script>

<script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-upload fade">
                <td>
                    <span class="preview"></span>
                </td>
                <td>
                    <p class="name">{%=file.name%}</p>
                    <strong class="error text-danger"></strong>
                </td>
                <td>
                    <p class="size">Processing...</p>
                    <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
                </td>
                <td>
                    {% if (!i && !o.options.autoUpload) { %}
                        <button class="btn btn-primary start" disabled>
                            <i class="glyphicon glyphicon-upload"></i>
                            <span>Start</span>
                        </button>
                    {% } %}
                    {% if (!i) { %}
                        <button class="btn btn-warning cancel">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>Cancel</span>
                        </button>
                    {% } %}
                </td>
            </tr>
        {% } %}
        </script>
        <script id="template-download" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-download fade">
                <td>
                    <span class="preview">
                        {% if (file.thumbnailUrl) { %}
                            <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                        {% } %}
                    </span>
                </td>
                <td>
                    <p class="name">
                        {% if (file.url) {sendImagePath(file.name); %}
                            <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                        {% } else { %}
                            <span>{%=file.name%}</span>
                        {% } %}
                    </p>
                    {% if (file.error) { %}
                        <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                    {% } %}
                </td>
                <td>
                    <span class="size">{%=o.formatFileSize(file.size)%}</span>
                </td>
                <td>
                    {% if (file.deleteUrl) { %}
                        <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                            <i class="glyphicon glyphicon-trash"></i>
                            <span>Delete</span>
                        </button>
                    {% } else { %}
                        <button class="btn btn-warning cancel">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>Cancel</span>
                        </button>
                    {% } %}
                </td>
            </tr>
        {% } %}
        </script>

        <script src="js/vendor/jquery.ui.widget.js"></script>
        <script src="js/tmpl.min.js"></script>
        <script src="js/load-image.all.min.js"></script>
        <script src="js/canvas-to-blob.min.js"></script>
        <script src="js/jquery.iframe-transport.js"></script>
        <script src="js/jquery.fileupload.js"></script>
        <script src="js/jquery.fileupload-process.js"></script>
        <script src="js/jquery.fileupload-image.js"></script>
        <script src="js/jquery.fileupload-validate.js"></script>
        <script src="js/jquery.fileupload-ui.js"></script>
        <script src="js/main.js"></script>
        <!-- end image upload -->
</div>
</body>
</html>