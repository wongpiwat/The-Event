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
    <div class="title">
        <span class="title-text">The Event</span>
        
        <a onclick="document.getElementById('signUp').style.display='block'"  href="#" style="float:right;font-size: 20px;padding-top:1%"> Sign up</a>
        <a onclick="document.getElementById('login').style.display='block'"  href="#" style="float:right;font-size: 20px;padding-top:1%">Sign in</a>
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
  
  <form class="login-content animate" action="index.php">
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
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


        
        <button type="submit">SignUp</button>

    </from>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>



var login = document.getElementById('login');
window.onclick = function(event) {
    if (event.target == login) {
        login.style.display = "none";
    }
}


var signUp = document.getElementById('signUp');
window.onclick = function(event) {
    if (event.target == signUp){
        signUp.style.display = "none";
    }
}
</script>







</body>

</html>