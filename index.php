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

            <li style="float:right"><a onclick="document.getElementById('create').style.display='block'" href="#">Create a Event</a></li>

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
        <input maxlength="10" onKeypress="return event.charCode >= 48 && event.charCode <= 57" type="text" placeholder="Enter Phone Number" name="uphone" required>


            <button style="width: 20%; height: 20%;" type="button" onclick="document.getElementById('signUp').style.display='none'" class="cancelbtnSignup">Cancel</button>
            <button id="signupbtn" type="submit" style="width: 60%; height: 40%;float: right;">SignUp</button>


    </from>
    </div>
  </form>
</div>



<div id="create" class="create">
  
    <form class="create-content animate" action="index.php">
        <center><h1>Create a Event</h1></center>
        <div class="container">
        <label for="orgaName"><b>Organizer name</b></label>
        <input type="text" placeholder="Company Name" name="orname" required>

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
            <input type="radio" name="paid" value="paid" > Paid
            <input type="radio" name="free" value="free"> Free
        </form>


        <label for="cost"><b>Ticket price (Thai Baht)</b></label>
        <input type="text" placeholder="xx.xx Baht" name="costticket" required><br>

        <label for="cTime"><b>Contact Time</b></label>
        <input type="text" placeholder="08.00-18.00 everyday" name="time" required>

        <label for="adMes"><b>Additional message</b></label>
        <input  type="text" placeholder="text......" name="message" required>

        <button style="width: 20%; height: 20%;" type="button" onclick="document.getElementById('create').style.display='none'" class="cancelbtnSignup">Cancel</button>
        <button id="signupbtn" type="submit" style="width: 60%; height: 40%;float: right;">Create a event</button>

 

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
        echo "<br>Login";
        $controller->login($_POST["username"],$_POST["password"]);
    }
?>







</body>

</html>