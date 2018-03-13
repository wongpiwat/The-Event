<?php //ใส่ทุกอัน
    include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Event</title>
	<link rel="stylesheet" href="css/styleWebboard.css">
</head>
<body>

<div class="container" style="width:85%;">
    <div style="padding: 16px;">
       <h1><b>Change Password</b></h1>
       <hr style="display: block;height: 1px;border: 0;border-top: 3px solid #f44336;margin-top: -5px;padding: 0;">
       <!-- <p id="tellUser"></p> -->
       <br><br>
    </div>
</div>

<div class="container" style="width:70%;margin-top: -35px;">
<form method="post" action="src/indexPHP.php">
  <div style="padding-left: 20%;padding-right: 20%;">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" id="rUsername" required>
    <label for="e-mail"><b>E-Mail</b></label>
    <input type="text" placeholder="Enter E-Mail" name="password" id="rEmail" required>
    <label for="password"><b>New Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="rNewPassword" required>
    <label for="cpassword"><b>Confirm Your New Password</b></label>
    <input type="password" placeholder="Enter Your Password Again" name="password" id="rChangeNewPassword" required>
  </div>
  <div>
    <center>
    <button type="button" name="Change" onClick="changePassword()" id="changePasswordButton" style="background-color: #f44336;color: white;padding: 10px 18px;margin: 8px 0;border: none;width:20%">Change</button>
    </center>  
</div>
</form>

</div>

<!-- Script -->
<script type="text/javascript">
 
    function changePassword() {
        var rUsername = document.getElementById("rUsername").value;
        var rEmail = document.getElementById("rEmail").value;
        var rNewPassword = document.getElementById("rNewPassword").value;
        var rChangeNewPassword = document.getElementById("rChangeNewPassword").value;
        if (rUsername != "" && rEmail != "" && rNewPassword != "" && rChangeNewPassword != "" && rNewPassword == rChangeNewPassword) {
            console.log("ds");
            $.ajax({  
                type: "POST",url: "src/indexPHP.php", 
                data: { changePassword:"true", rUsername:rUsername, rEmail:rEmail, rNewPassword:rNewPassword, rChangeNewPassword:rChangeNewPassword},
                    success: function(response) {
                        alert("Change Password Complete");
                        window.location.href = "index.php";
                }
            });
        }else{
            alert("Please Fill in Form");
        }
    }
</script>
    <footer class="footer nav navbar-inverse">
        <center>
        <br>
        <p style="color:white;"><b>&copy; Designed by Kitichai Garden</b></p>
        <br>
        </center>
    </footer>
</body>
</html>