
<?php   
    //-----------ส่วนของ PHP-----------
    require '../vendor/autoload.php';
    use KittichaiGarden\Controllers\Controller;

    session_start();
    $type_Account = "guest";
    $status = null;
    $login = false;
    $username = null;
    $userImage = null;
    $user = null;
    $controller = new Controller();
    $eventName = null;
    $location = null;
    $date = null;
    $size = null;
    $category = null;
    $type = null;
    $price = null;
    $details = null;
    $organizerName = null;
    $contactName = null;
    $email = null;
    $phone = null;
    
    
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
            $controller->SignUp($_POST["uname"],$_POST["psw"],$_POST["umail"],$_POST["uFname"],$_POST["uLname"],$_POST["uid"],$_POST["bday"],$_POST["gender"],$_POST["uaddress"],$_POST["uphone"],$_POST["type"]);
        
        }else if(isset($_POST["signOut"])){
            $controller->signOut();

        }else if(isset($_POST["deleteAccount"])){
            $controller->getDatabase()->deleteAccounts($_POST["username"]);
        }else if(isset($_POST["readAccount"])){
            echo $controller->getDatabase()->readAccount();
        }else if(isset($_POST["editAccount"])){
            $editUser =  $controller->getDatabase()->autoSignIn($_POST["username"]);
            echo "$editUser[0]๏$editUser[1]๏$editUser[2]๏$editUser[3]๏$editUser[4]๏$editUser[5]๏$editUser[6]๏$editUser[7]๏$editUser[8]๏$editUser[9]๏$editUser[10]๏$editUser[11]๏$editUser[12]";
        }else if(isset($_POST["Edit"])){
            $controller->getDatabase()->updateAccount($_POST["uname"],$_POST["psw"],$_POST["umail"],$_POST["uFname"],$_POST["uLname"],$_POST["uid"],$_POST["bday"],$_POST["gender"],$_POST["uaddress"],$_POST["uphone"],$_POST["type"],$_POST["status"]);
        }else if (isset($_POST["createEvent"])) { //เมื่อมีการกดปุ่ม Create Event
            echo "CreateEvent";
            // print_r($imagesPath);
            $controller->createNewEvent($_POST["eventName"],$_POST["location"],$_POST["date"],$_POST["size"],$_POST["category"],$_POST["type"],$_POST["price"],$_POST["details"],$_POST["organizerName"],$_POST["contactName"],$_POST["email"],$_POST["phone"],$_POST["imagesPath"]);
            // $controller->addImagesPath($imagesPath);
        }else if(isset($_POST['attendant'])){
            echo "attendant";
            $controller->getDatabase()->attendant($_POST['idEvent'],$_POST['username'],$_POST['amount']);
        }else if(isset($_POST['createWebboard'])){
            $controller->getDatabase()->createWebboard($_POST['idEvent'],$_POST['username'],$_POST['ques'],$_POST['detail']);
        }else if(isset($_POST['readWebboard'])){
            echo $controller->getDatabase()->readWebboard($_POST['idEvent']);
        }else if(isset($_POST['comment'])){
            echo $controller->getDatabase()->writeComment($_POST['idWebboard'],$_POST['username'],$_POST['comment']);
        }else if(isset($_POST['readComment'])){
            // echo "readComment";
            echo $controller->getDatabase()->readCommentW($_POST['idWebboard']);
        }else if(isset($_POST['readWebCom'])){
            // echo "readComment";
            $cc =  $controller->getDatabase()->readWebCom($_POST['idWebboard']);
            echo "$cc[3]๏$cc[4]";
        }
    }
    if(isset($_GET["idEvent"])){
        
        $e = $controller->getDatabase()->rEventTop($_GET["idEvent"]);
        $result="";
        for($i = 0;$i <18 ;$i++){
            $result .= "$e[$i]๏";
        }
        $result .= "$e[19]";
        echo $result;
    }
?>