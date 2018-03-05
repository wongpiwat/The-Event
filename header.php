<?php
require 'vendor/autoload.php';
use KittichaiGarden\Controllers\Controller;
//echo "header<br>";

session_start();
$sun = "helloWorld";
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
</head>

<!--header first page-->

<div id="header"></div> <!--tag for call in javascript-->
<script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
<script type="text/javascript">
    

    var typeAccount = "<?php echo $type_Account; ?>";
    var status  = "<?php echo $status; ?>";
    var login = "<?php echo $login; ?>";
    var username = "<?php echo $username; ?>";
    var userImage = "<?php echo $userImage; ?>";
    console.log(typeAccount);
    console.log(status);

    if(login == true){ // อยู่ในระบบ Create Event Profile
        $("#home").hide();
        $("#header").html(`<div class="navbar">
        <ul>
            <li><a href="index.php"><span class="title-text">The Event</span></a></li>
            <li style="float:right"><a href="#" onclick="document.getElementById('create').style.display='block'">Create a Event</a></li>
            <div class="dropdown">
                <a class="dropbtn" onclick="myFunction()">Profile⌄</a>
                <div class="dropdown-content" id="myDropdown">
                    <a href="profile.php">Profile</a>
                    <a href="#">Settings</a>
                    <a href="#">Feedback</a>
                    <a href="#">Help</a>
                    <a href="#" onclick="signOut()">Sign out</a>
                </div>
            </div> 
        </ul>
  
    </div>`);
        //อย่าลืม พวก TypeAccount ด้วยนะครับ

    }else{ // signIn
        $("#header").html(`<div class="navbar">
        <ul>
            <li><a href="index.php"><span class="title-text">The Event</span></a></li>
            <li style="float:right"><a onclick="document.getElementById('signUp').style.display='block'"  href="#"> Sign up</a></li>
            <li style="float:right"><a onclick="document.getElementById('login').style.display='block'"  href="#">Sign in</a></li>
        </ul>
  
    </div>`);

    }

</script>
</body>
</html>

