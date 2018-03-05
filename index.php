<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/upload-styles.css">
    <link rel="stylesheet" href="css/blueimp-gallery.min.css">
    <title>The Event</title>
</head>
<body>

    <div class="navbar">
        <ul>
            <li><a href="index.php"><span class="title-text">The Event</span></a></li>
            <li style="float:right"><a onclick="document.getElementById('signUp').style.display='block'"  href="#"> Sign up</a></li>
            <li style="float:right"><a onclick="document.getElementById('login').style.display='block'"  href="#">Sign in</a></li>
            <div class="dropdown">
                <a class="dropbtn" onclick="myFunction()">Dropdown</a>
                <div class="dropdown-content" id="myDropdown">
                    <a href="#">Settings</a>
                    <a href="#">Feedback</a>
                    <a href="#">Help</a>
                    <a href="#">Sign out</a>
                </div>
            </div> 
            <li style="float:right"><a href="profile.php">Profile</a></li>
            <li style="float:right"><a href="#" onclick="document.getElementById('create').style.display='block'">Create a Event</a></li>
        </ul>
  
    </div>

    <div class="body">
        <div class="row">
            <div class="col-4">
                <span class="body-text">Recommended Events</span>
            </div>
            <div class="col-4">
                <span class="body-text">Upcoming Events</span>
            </div>
            <div class="col-4">
            <span class="body-text">Nearby Events</span>
            </div>
        </div>
    </div>

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
        <p><b>&copy; Designed by Kittichai Garden</b></p>
        <br>
    </footer>

<div id="login" class="login">
  
  <form class="login-content animate" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div class="container">
      <label for="uname"><b>Username/Email</b></label>
      <input type="text" placeholder="Enter Username or Email" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        

      <button type="submit" name="SignIn">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<div id="signUp" class="signUp">
    <form class="signUp-content animate"  method="POST">
    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw"  id="psw" required>

        <label for="psw"><b>Confirm Your Password</b></label>
        <input type="password" placeholder="Enter Password Again" name="cPsw" id="cPsw" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="umail" required>

        <label for="Fname"><b>FirstName</b></label>
        <input type="text" placeholder="FirstName" name="uFname" required>
        <label for="Lname"><b>LastName</b></label>
        <input type="text" placeholder="LastName" name="uLname" required>

        <label for="id"><b>Id No.</b></label>
        <input type="text" placeholder="Enter Id No." name="uid" required>

        <label for="birth"><b>Birthday</b></label>
        <input type="date" name="bday" id="bday" require><br>
       

        <label for="gen"><b>Gender</b></label><br>
        <input type="radio" name="gender" value="male" checked> Male
        <input type="radio" name="gender" value="female"> Female<br>
      

        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Enter Address" name="uaddress" required>

        <label for="phone"><b>Phone Number</b></label>
        <input type="text" onKeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Enter Phone Number" name="uphone" required>


        <button style="width: 20%; height: 20%;" type="button" onclick="document.getElementById('signUp').style.display='none'" class="cancelbtnSignup">Cancel</button>
        <button id="signupbtn" type="button" style="width: 60%; height: 40%;float: right;" name="SignUp" onclick="signUp()" >SignUp</button>

    
    </div>
  </form>
</div>

<div id="create" class="create">
    <form class="create-content animate" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <center><h1>Create a Event</h1></center>
        <div class="container">
            <label for="eventName"><b>Event Name</b></label>
            <input type="text" name="eventName" required="">

            <label for="location"><b>Location</b></label>
            <input type="text" name="location" required="">

            <label for="birth"><b>Date of Event</b></label>
            <input type="date" name="dateOfEvent">
            <br>
            <label for="size"><b>Size of Event</b></label>
            <select>
                <option value="one">1 - 50 People</option>
                <option value="fifty">51 - 100 People</option>
                <option value="one-hundred-one">101 - 500 People</option>
                <option value="five-hundred-one">501 - 1000 People</option>
                <option value="one-thoudsand-one">1001 - 5000 People</option>
                <option value="over">More than 5000 people</option>
            </select>
            <br>
            <label for="eventCategory"><b>Event Category</b></label>
            <select>
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
            <input  type="text" placeholder="" name="message" required>
            
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
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/vendor/jquery.ui.widget.js"></script>
            <script src="js/tmpl.min.js"></script>
            <script src="js/load-image.all.min.js"></script>
            <script src="js/canvas-to-blob.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
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
            <input type="text" name="mail" required>

            <label for="phone" ><b>Phone</b></label>
            <input maxlength="10" onKeypress="return event.charCode >= 48 && event.charCode <= 57" type="text" name="phone" required>

            <button style="width: 20%; height: 20%;" type="button" onclick="document.getElementById('create').style.display='none'" class="cancelbtnSignup">Cancel</button>
            <button id="creataevent" type="submit" style="width: 60%; height: 40%;float: right;" name="CreateEvent">Create a event</button>
            
            


        </div>
    </form>
    
</div>

<script>


/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
var login = document.getElementById('login')
window.onclick = function(e){
    if (event.target == login){
        login.style.display = "none";    }

}


</script>
<!-- <script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
<script type="text/javascript">
    
    function signUp(){
        var psw = document.getElementById('psw').value;
        var cPsw = document.getElementById('cPsw').value;
        var bday = document.getElementById('bday').value;
        console.log(psw);
        console.log(cPsw);
        console.log(bday);
        if(psw == cPsw && bday != ""){
            console.log("Same");
            document.getElementById('signupbtn').type = "submit";
            document.getElementById('signupbtn').trigger('click');
        }else if(psw != cPsw){
            console.log("Not Same");
            document.getElementById('psw').value = "";
            document.getElementById('cPsw').value = "";
            alert("Password Not the same.");
            //ฝากทำให้ช่องพาสเวิสเป็นสีแดงด้วยครับ ^^
        }else if(bday == ""){
            alert("Input Birthday.");
        }

        // $.post('index.php',{SignUp:"true",psw:psw,cPsw:cPsw},
        // function(data){
        //     console.log(data);
        // });
    }

</script> -->
</body>

</html>


<?php   
    //-----------ส่วนของ PHP-----------
    require 'vendor/autoload.php';
    use KittichaiGarden\Controllers\Controller;
    $controller = new Controller();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "POST";
        //เมื่อมีการกดปุ่ม SignIn
        if(isset($_POST["SignIn"])){
            echo "<br>---Sign in---<br>";
            $controller->signIn($_POST["username"],$_POST["password"]);
        }
        if(isset($_POST["SignUp"])){ //เมื่อมีการกดปุ่ม SignUp
            echo "<br>---Sign up---<br>";
            $controller->SignUp($_POST["uname"],$_POST["psw"],$_POST["umail"],$_POST["uFname"],$_POST["uLname"],$_POST["uid"],$_POST["bday"],$_POST["gender"],$_POST["uaddress"],$_POST["uphone"]);
        }
        if (isset($_POST["CreateEvent"])) { //เมื่อมีการกดปุ่ม Create Event
            echo "CreateEvent";
            $controller->createEvent($_POST["orname"],$_POST["cname"],$_POST["mail"],$_POST[""],$_POST[""],$_POST[""],$_POST[""],$_POST[""],$_POST[""],$_POST[""]);
        }


    }
?>
