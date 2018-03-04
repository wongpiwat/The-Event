<?php
require 'vendor/autoload.php';
use KittichaiGarden\Controllers\Controller;
echo "header<br>";

session_start();

$type_Account = "guest";
$status = null;
$login = false;
$username = null;
$userImage = null;

if(isset($_SESSION["username"])){ // User login อยู่ในระบบ
    $username = $_SESSION["username"];
    $userImage = $_SESSION["userImage"];
    // echo "$username<br>$userImage<br>";
    $controller = new Controller();
    $detialUser = $controller->checkType($username);
    // echo "<pre>";
    // var_dump($detialUser);
    // echo "</pre>";
    // echo "online";
    // //เขียน HTML ตรงนี้  User
    // echo "<br>".$detialUser["type_Account"];
    // echo "<br>".$detialUser["status"];
    $type_Account = $detialUser["type_Account"];
    $status = $detialUser["status"];
    $login = true;
}

?>

<!DOCTYPE html>
<html>
<body>
<div id="header"></div> 
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
        
        //อย่าลืม พวก TypeAccount ด้วยนะครับ

    }else{ // signIn
        // console.log("Sunnnnnnnnnnnn");
        // $("#header").html(`<div class="navbar">
        // <ul>
        //     <li><a href="index.php"><span class="title-text">The Event</span></a></li>
        //     <li style="float:right"><a onclick="document.getElementById('signUp').style.display='block'"  href="#"> Sign up</a></li>
        //     <li style="float:right"><a onclick="document.getElementById('login').style.display='block'"  href="#">Sign in</a></li>
        //     <div class="dropdown">
        //         <a class="dropbtn" onclick="myFunction()">Dropdown</a>
        //         <div class="dropdown-content" id="myDropdown">
        //             <a href="#">Settings</a>
        //             <a href="#">Feedback</a>
        //             <a href="#">Help</a>
        //             <a href="#" onclick="signOut()">Sign out</a>
        //         </div>
        //     </div> 
         
        // </ul>
  
    </div>`);
    }

</script>
</body>
</html>



