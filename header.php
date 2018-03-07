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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>

<!--header first page-->

<div id="header"></div> <!--tag for call in javascript-->

<script type="text/javascript">
    


    var typeAccount = "<?php echo $type_Account; ?>";
    var status  = "<?php echo $status; ?>";
    var login = "<?php echo $login; ?>";
    var username = "<?php echo $username; ?>";
    var userImage = "<?php echo $userImage; ?>";
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
    <form class="navbar-form navbar-left" >
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="search" style="margin-top:3px;height:28px;">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit" style="height:28px;margin-top:3px;">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" onclick="document.getElementById('create').style.display='block'"><span class="glyphicon glyphicon-th-large"></span> Create Event</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Profile <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile.php">Profile</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Feedback</a></li>
            <li><a href="#">Help</a></li>
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
        <nav class="navbar navbar-default navbar-fixed-top">
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
    <form class="navbar-form navbar-left" >
          <div class="input-group" >
            <input type="text" class="form-control" placeholder="Search" name="search" style="margin-top:3px;height:28px;">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit" style="height:28px;margin-top:3px;">
                <i class="glyphicon glyphicon-search"></i>
              </button>
            </div>
          </div>
        </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"  onclick="document.getElementById('signUp').style.display='block'" ><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
        <li><a href="#"  onclick="document.getElementById('login').style.display='block'"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
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
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</div>

<div id="signUp" class="signUp">
  <form class="signUp-content animate"  id="signUpForm" method="POST" action="src/indexPHP.php">
  <div style="padding: 16px;">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" id="usrn" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw"  id="psw" required>

      <label for="psw" id="conP"><b>Confirm Your Password</b></label>
      <input type="password" placeholder="Enter Password Again" name="cPsw" id="cPsw" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="umail" id="umail" required>

      <label for="Fname"><b>FirstName</b></label>
      <input type="text" placeholder="FirstName" name="uFname" id="firstName" required>
      <label for="Lname"><b>LastName</b></label>
      <input type="text" placeholder="LastName" name="uLname" id="lastName" required>
      <label for="id"><b>Id No.</b></label>
      <input type="text" placeholder="Enter Id No." name="uid" id="idNo" required>
      <label for="birth"><b>Birthday</b></label>
      <input type="date" name="bday" id="bday" require><br>
      <label for="gen"><b>Gender</b></label><br>
      <input type="radio" name="gender" value="male" id="male" checked> Male
      <input type="radio" name="gender" value="female" id="female" > Female<br>
      
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="uaddress" id="address" required>

    <label for="phone"><b>Phone Number</b></label>
    <input type="text" onKeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Enter Phone Number" name="uphone" id="phone" required>
    <div id="type" style="display:none;">
        <label for="type"><b>Type Account</b></label><br>
        <input type="radio" name="type" value="male" id="typeA" checked> Admin
        <input type="radio" name="type" value="female" id="typeU" > User<br>
    </div>
    <div id="status" style="display:none;margin-bottom:15px;">
        <label for="type"><b>Status Account</b></label><br>
        <input type="radio" name="status" value="Activate" id="statusA" checked> Activate
        <input type="radio" name="status" value="unActivate" id="statusU" > unActivate
        <input type="radio" name="status" value="Block" id="statusB" > Block<br>
    </div>
      <!-- 20,40 -->
      <button id="signupCan" style="width: 20%; height: 7%;" type="button" onclick="document.getElementById('signUp').style.display='none';document.getElementById('signUpForm').reset(); setEdit();undisableInput()" class="cancelbtn">Cancel</button>
      <button id="signupbtn"  type="button" name="SignUp" onclick="signUp()" style="width: 60%; height: 7%;float: right;background-color: #4CAF50;
color: white;
padding: 10px 18px;
margin: 8px 0;
border: none;
cursor: pointer;
">SignUp</button>


  </div>
</form>
</div>

<!-- สร้าง event -->
<div id="create" class="create">
<form class="create-content animate" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <center><h1>Create a Event</h1></center>
    <div class="con">
        <label for="eventName"><b>Event Name</b></label>
        <input type="text" name="eventName" required="">

        <label for="location"><b>Location</b></label>
        <input type="text" name="location" required="">

        <label for="birth"><b>Date of Event</b></label>
        <input type="date" name="date">
        <br>
        <label for="size"><b>Size of Event</b></label>
        <select name="size">
            <option value="one">1 - 50 People</option>
            <option value="fifty">51 - 100 People</option>
            <option value="one-hundred-one">101 - 500 People</option>
            <option value="five-hundred-one">501 - 1000 People</option>
            <option value="one-thoudsand-one">1001 - 5000 People</option>
            <option value="over">More than 5000 people</option>
        </select>
        <br>
        <label for="eventCategory"><b>Event Category</b></label>
        <select name="category">
            <option value="business">Business</option>
            <option value="education">Education</option>
            <option value="family">Family</option>
            <option value="health">Health</option>
            <option value="hobbies">Hobbies</option>
            <option value="technology">Technology</option>
            <option value="travel">Travel</option>
            <option value="sport">Sport</option>
            <option value="food">Food</option>
        </select>
        <br>
        <form>
            <label for="eventType"><b>Event Type</b></label> 
            <input type="radio" name="type" value="paid" checked>Paid</input>
            <input type="radio" name="type" value="free">Free</input>
        </form>
        <br>
        <label for="price"><b>Ticket Price (Thai Baht)</b></label>
        <input type="text" name="price" required><br>

        <label for="details"><b>Details</b></label>
        <input  type="text" placeholder="" name="details" required>
        
        <!-- image upload -->
            <form id="fileupload" method="POST" enctype="multipart/form-data" data-url="upload-files/">
                <div>
                    <div>
                        <span>
                            <span>Add files...</span>
                            <input type="file" name="files[]" multiple>
                        </span>
                    </div>
                </div>
                <table class="table table-striped"><tbody class="files"></tbody></table>
            </form>
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
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
                        {% if (file.url) { %}
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
        <!-- <script src="js/bootstrap.min.js"></script> -->
        <script src="js/jquery.blueimp-gallery.min.js"></script>
        <script src="js/jquery.iframe-transport.js"></script>
        <script src="js/jquery.fileupload.js"></script>
        <script src="js/jquery.fileupload-process.js"></script>
        <script src="js/jquery.fileupload-image.js"></script>
        <script src="js/jquery.fileupload-validate.js"></script>
        <script src="js/jquery.fileupload-ui.js"></script>
        <script src="js/main.js"></script>
        <!-- image upload -->
        <label for="organizerName"><b>Organizer Name</b></label>
        <input type="text" name="organizerName" required="">

        <label for="contactName"><b>Contact Name</b></label>
        <input type="text" name="contactName" required><br>

        <label for="email"><b>Email</b></label>
        <input type="text" name="email" required>

        <label for="phone" ><b>Phone</b></label>
        <input maxlength="10" onKeypress="return event.charCode >= 48 && event.charCode <= 57" type="text" name="phone" required>

        <button style="width: 20%; height: 20%;" type="button" onclick="document.getElementById('create').style.display='none'" class="cancelbtn">Cancel</button>
        <button id="creataevent" type="submit" name="CreateEvent" style="width: 60%; height: 7%;float: right;background-color: #4CAF50;
color: white;
padding: 10px 18px;
margin: 8px 0;
border: none;
cursor: pointer;
">Create a event</button>
        
       
    </div>
</form>

<script type="text/javascript">

console.log(window.location.pathname);
// /ProjectWebtech_1/adminManage.php
var login = document.getElementById('login');
window.onclick = function(e){
    if (event.target == login){
        login.style.display = "none";    }

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
        location.reload();
        console.log("Sun");
     }else if(data == "-1"){
         alert("username or password wrong!!!");
     }
    });



}



function signOut(){
    $.post('src/indexPHP.php',{signOut:"true"},function(data){
        //console.log(data);
        location.reload();
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
        
        $.post('src/indexPHP.php',{signUp:"true",uname:username,psw:psw,umail:email,uFname:firstName,
        uLname:lastName,uid:idNo,bday:bday,gender:gender,uaddress:address,uphone:phone,type:type},
    function(data){
        console.log(data);

        if(data == 1){
            if(window.location.pathname == "/ProjectWebtech_1/adminManage.php"){
                successTell(" Add User => Username: "+username+" into Database.");
                readAccount();
                document.getElementById('signUp').style.display='none';
                document.getElementById('signUpForm').reset();
            }else{
            console.log("SignUp Successful.");
            alert("SignUp Successful.");
            location.reload();
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
    }else if(bday == ""){
        alert("Input Birthday.");
    }else if(psw == cPsw && bday != "" && document.getElementById('signupbtn').textContent == "Edit Account" ){
        $.post('src/indexPHP.php',{Edit:"true",uname:username,psw:psw,umail:email,uFname:firstName,
        uLname:lastName,uid:idNo,bday:bday,gender:gender,uaddress:address,uphone:phone,type:type,status:status},
    function(data){
        console.log(data);

     if(data == 1){
         if(window.location.pathname == "/ProjectWebtech_1/adminManage.php"){
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


</script>

o
</div>

 
</body>
</html>


<?php   
    //-----------ส่วนของ PHP-----------
    // require 'vendor/autoload.php';
    // use KittichaiGarden\Controllers\Controller;
    // $controller = new Controller();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // echo "POST";

        if (isset($_POST["CreateEvent"])) { //เมื่อมีการกดปุ่ม Create Event
            echo "CreateEvent";
            $controller->createNewEvent($_POST["eventName"],$_POST["location"],$_POST["date"],$_POST["size"],$_POST["category"],$_POST["type"],$_POST["price"],$_POST["details"],$_POST["organizerName"],$_POST["contactName"],$_POST["email"],$_POST["phone"]);
            echo $_POST["eventName"].$_POST["location"].$_POST["date"].$_POST["size"].$_POST["category"].$_POST["type"].$_POST["price"].$_POST["details"].$_POST["organizerName"].$_POST["contactName"].$_POST["email"].$_POST["phone"];
        }


    }
?>