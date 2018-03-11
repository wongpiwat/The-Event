<?php
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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script>
    <script src="js/jq-csrousel-plugin.js"></script><!--JS image slice -->
    <style rel="stylesheet" type="text/css">
        html,body{
            width: 100%;
            height: 100%;
        }
        #box{
            position: relative;
            width: 100%;
            height: 70%;
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

    <div id="login" class="login">

    <form class="login-content animate" id="signInForm" method="POST">
      <div style="padding: 16px;">
        <label for="uname"><b>Username/Email</b></label>
        <input type="text" placeholder="Enter Username or Email" name="username" id="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>

        <button type="button" name="SignIn" onclick="signIn()" id="logBtn" >Login</button>
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

          <label for="psw"><b>Confirm Your Password</b></label>
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
          <input type="radio" name="gender" value="female"  > Female<br>
          
        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Enter Address" name="uaddress" id="address" required>

        <label for="phone"><b>Phone Number</b></label>
        <input type="text" onKeypress="return event.charCode >= 48 && event.charCode <= 57" placeholder="Enter Phone Number" name="uphone" id="phone" required>
          <!-- 20,40 -->
          <button style="width: 20%; height: 7%;" type="button" onclick="document.getElementById('signUp').style.display='none'" class="cancelbtn">Cancel</button>
          <button id="signupbtn"  type="button" style="width: 60%; height: 7%;float: right;" name="SignUp" onclick="signUp()" >SignUp</button>


      </div>
    </form>
  </div>

<!-- สร้าง event -->
<div id="create" class="create">
    <form class="create-content animate" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <center><h1>Create a Event</h1></center>
        <div class="container">
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

            <button style="width: 20%; height: 20%;" type="button" onclick="document.getElementById('create').style.display='none'" class="cancelbtnSignup">Cancel</button>
            <button id="creataevent" type="submit" style="width: 60%; height: 40%;float: right;" name="CreateEvent">Create a event</button>
            
           
        </div>
    </form>
    
</div>
  <!-- <script>


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

  } -->



  </script>


  <script type="text/javascript">

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
          if(document.getElementById('male').checked == false){
            gender = "female";
          }
          console.log(psw);
          console.log(cPsw);
          console.log(bday);
          if(psw == cPsw && bday != ""){
              console.log("Same");
              $.post('src/indexPHP.php',{signUp:"true",uname:username,psw:psw,umail:email,uFname:firstName,
              uLname:lastName,uid:idNo,bday:bday,gender:gender,uaddress:address,uphone:phone},
          function(data){
              console.log(data);

           if(data == 1){
                console.log("SignUp Successful.");
                alert("SignUp Successful.");
                location.reload();
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
          }

          // $.post('index.php',{SignUp:"true",psw:psw,cPsw:cPsw},
          // function(data){
          //     console.log(data);
          // });
      }






      // $.ajax({
      //     url: 'src/indexPHP.php',
      //     method : 'POST',
      //     data: { user: "check" },
      //     success : function(response) {
      //     console.log(response);


      //      }
      //     });

  </script>

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

