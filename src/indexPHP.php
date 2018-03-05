<?php   
    //-----------ส่วนของ PHP-----------
    require '../vendor/autoload.php';
    use KittichaiGarden\Controllers\Controller;

    session_start();
    $controller = new Controller();

    // $_SESSION['control'] = $controller;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //echo "POST";
        //เมื่อมีการกดปุ่ม SignIn
        if(isset($_POST["signIn"])){
           //echo "<br>---Sign in---<br>";
            $controller->signIn($_POST["username"],$_POST["password"]);
        }
        else if(isset($_POST["signUp"])){ //เมื่อมีการกดปุ่ม SignUp
            
           // echo "<br>---Sign up---<br>";
            $controller->SignUp($_POST["uname"],$_POST["psw"],$_POST["umail"],$_POST["uFname"],$_POST["uLname"],$_POST["uid"],$_POST["bday"],$_POST["gender"],$_POST["uaddress"],$_POST["uphone"],"1");
        
        }else if(isset($_POST["signOut"])){
            $controller->signOut();

        }
    }
?>