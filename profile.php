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
        <a onclick="profile.php"  href="#">Profile</a>
        <a onclick="document.getElementById('login').style.display='block'"  href="#">Sign in / Sign up</a>
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

<script>
var login = document.getElementById('login');
window.onclick = function(event) {
    if (event.target == login) {
        login.style.display = "none";
    }
}
</script>







</body>

</html>
