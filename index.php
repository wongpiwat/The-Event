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
            <li style="float:right"><a href="#">Create a Event</a></li>
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
        <p><b>&copy; Designed by Kiticha Garden</b></p>
        <br>
    </footer>

<div id="login" class="login">
  
  <form class="login-content animate" action="index.php" method="POST">
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="Login">Login</button>
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
    <form class="signUp-content animate" action="index.php">
    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw"><b>Confirm Your Password</b></label>
        <input type="password" placeholder="Enter Password again" name="psw" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="umail" required>

        <label for="FLname"><b>Name</b></label>
        <input type="text" placeholder="FirstName" name="uFname" required><input type="text" placeholder="LastName" name="uLname" required>

        <label for="id"><b>Id Card</b></label>
        <input type="text" placeholder="Enter Id Card" name="uid" required>

        <form action="/action_page.php">
            <label for="birth"><b>Birthday</b></label>
            <input type="date" name="bday">
        </form>

        <form>
            <label for="gen"><b>Gender</b></label><br>
            <input type="radio" name="gender" value="male" checked> Male
            <input type="radio" name="gender" value="female"> Female<br>
        </form> 

        <label for="address"><b>Address</b></label>
        <input type="text" placeholder="Enter Address" name="uaddress" required>

        <label for="phone"><b>Phone Number</b></label>
        <input type="text" placeholder="Enter Phone Number" name="uphone" required>


            <button style="width: 20%; height: 20%;" type="button" onclick="document.getElementById('signUp').style.display='none'" class="cancelbtnSignup">Cancel</button>
            <button id="signupbtn" type="submit" style="width: 60%; height: 40%;float: right;">SignUp</button>


    </from>
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



</script>







</body>

</html>

<?php   
    require 'vendor/autoload.php';
    use KittichaiGarden\Controllers\Controller;
    $controller = new Controller();

    // $controller = new PDO("mysql:host=localhost:3306;dbname=kittichai_garden;charset=utf8mb4","root","");
    // $statement = $controller->query('SELECT * FROM account');
    // while($row = $statement->fetch(PDO::FETCH_BOTH)){
    //     echo $row["username"];
    // }
   // $d = new Database();
    echo "Hello";
    

    if(isset($_POST["Login"])){
        echo "<br>Login<br>";
        $controller->login($_POST["username"],$_POST["password"]);
    }
?>
