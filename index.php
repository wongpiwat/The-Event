<?php //ใส่ทุกอัน
    include 'header.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <title>The Event</title>
</head>
<body>
    <!--ต้องลบทิ้ง navbar-->
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
                    <a href="#" onclick="signOut()">Sign out</a>
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
  
  <form class="login-content animate" id="loginForm" method="POST">
    <div class="container">
      <label for="uname"><b>Username/Email</b></label>
      <input type="text" placeholder="Enter Username or Email" name="username" id="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="password" required>
        

      <button type="button" name="SignIn" onclick="signIn()" id="logBtn" >Login</button>
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

        <!-- 20,40 -->
        <button style="width: 20%; height: 7%;" type="button" onclick="document.getElementById('signUp').style.display='none'" class="cancelbtnSignup">Cancel</button>
        <button id="signupbtn" type="button" style="width: 60%; height: 7%;float: right;" name="SignUp" onclick="signUp()" >SignUp</button>

    
    </div>
  </form>
</div>

<div id="create" class="create">
    <form class="create-content animate" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <center><h1>Create a Event</h1></center>
        <div class="container">
            <label for="orgaName"><b>Organizer name</b></label>
            <input type="text" name="orname" placeholder="Company Name" required="">

            <label for="conName"><b>Contact name</b></label>
            <input type="text" placeholder="Kitti Tera" name="cname" required><br>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="John@hotmail.com" name="mail" required>

            <label for="Numphone" ><b>Phone</b></label>
            <input maxlength="10" onKeypress="return event.charCode >= 48 && event.charCode <= 57" type="text" placeholder="0xx-xxx-xxxx" name="phone" required><br>

            <form action="/action_page.php">
                <label for="birth"><b>Date of event</b></label>
                <input type="date" name="bday">
            </form>

            <label for="size"><b>Size of event</b></label>
            <select>
            <option value="one">1 - 50 People</option>
            <option value="fifty">51 - 100 People</option>
            <option value="one-hundred-one">101 - 500 People</option>
            <option value="five-hundred-one">501 - 1000 People</option>
            <option value="one-thoudsand-one">1001 - 5000 People</option>
            <option value="over">More than 5000 people</option>
            </select>

            <label for="event"><b>Event category</b></label>
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
            </select><br>

            <form>
                <label for="Etype"><b>Event type</b></label> 
                <input type="radio" name="type" value="paid" checked > Paid
                <input type="radio" name="type" value="free"> Free
            </form>

            <label for="cost"><b>Ticket price (Thai Baht)</b></label>
            <input type="text" placeholder="xx.xx Baht" name="costticket" required><br>

            <label for="cTime"><b>Contact Time</b></label>
            <input type="text" placeholder="08.00-18.00 everyday" name="time" required>

            <label for="adMes"><b>Additional message</b></label>
            <input  type="text" placeholder="text......" name="message" required>

            <button style="width: 20%; height: 20%;" type="button" onclick="document.getElementById('create').style.display='none'" class="cancelbtnSignup">Cancel</button>
            <button id="creataevent" type="submit" style="width: 60%; height: 40%;float: right;">Create a event</button>
            
            


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

<script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
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
        document.getElementById('loginForm').reset();
        $.post('src/indexPHP.php',{signIn:"true",username:username,password:password},
        function(data){
         if(data == 0){// login ได้
            location.reload();
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




    $.ajax({
        url: 'src/indexPHP.php',
        method : 'POST',
        data: { user: "check" },
        success : function(response) {
        console.log(response);
        
                    
         }
        });

</script>







</body>

</html>


<?php   
    // //-----------ส่วนของ PHP-----------

    // require 'vendor/autoload.php';
    // use KittichaiGarden\Controllers\Controller;
    
    // $controller = new Controller();

    // // $_SESSION['control'] = $controller;
    // if($_SERVER["REQUEST_METHOD"] == "POST"){
    //     echo "POST";
    //     //เมื่อมีการกดปุ่ม SignIn
    //     if(isset($_POST["SignIn"])){
    //         echo "<br>---Sign in---<br>";
    //         $controller->signIn($_POST["username"],$_POST["password"]);
    //     }
    //     else if(isset($_POST["SignUp"])){ //เมื่อมีการกดปุ่ม SignUp
    //         echo "<br>---Sign up---<br>";
    //         $controller->SignUp($_POST["uname"],$_POST["psw"],$_POST["umail"],$_POST["uFname"],$_POST["uLname"],$_POST["uid"],$_POST["bday"],$_POST["gender"],$_POST["uaddress"],$_POST["uphone"],"1");
    //     }
    // }
?>
