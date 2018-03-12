
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
            $controller->SignUp($_POST["uname"],$_POST["psw"],$_POST["umail"],$_POST["uFname"],$_POST["uLname"],$_POST["uid"],$_POST["bday"],$_POST["gender"],$_POST["uaddress"],$_POST["uphone"],$_POST["type"],$_POST["imageProfile"]);
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
            echo "_POST[] in indexPHP";
            if(!isset($_POST["imagesPath"])){
                $imagesPath = "";
            } else {
                $imagesPath = $_POST["imagesPath"];
            }
            $controller->createNewEvent($_POST["eventName"],$_POST["locationEvent"],$_POST["date"],$_POST["size"],$_POST["startTime"],$_POST["endTime"],$_POST["category"],$_POST["type"],$_POST["price"],$_POST["details"],$_POST["organizerName"],$_POST["contactName"],$_POST["email"],$_POST["phone"],$imagesPath,$_POST["latitude"],$_POST["longitude"],$_POST["teaser"],$_POST["preCondition"],$_POST["postCondition"]);
        } else if(isset($_POST["getSystemLogs"])){
            echo $controller->getDatabase()->getSystemLogs();
        } else if (isset($_POST["setSystemLog"])) {
            echo $controller->getDatabase()->setSystemLog();
        } else if(isset($_POST["getActivityLogs"])){
            echo $controller->getDatabase()->getActivityLogs();
        } else if (isset($_POST["setActivityLog"])) {
            echo $controller->getDatabase()->setActivityLog();
        } else if (isset($_POST["getEvents"])) {
            echo $controller->getDatabase()->getEvents();
        } else if (isset($_POST["deleteEvent"])) {
            echo $controller->getDatabase()->deleteEvent($_POST["idEvent"]);
        } else if (isset($_POST["getEvent"])) {
            $getEvent =  $controller->getDatabase()->getEvent($_POST["idEvent"]);
            echo "$getEvent[0]๏$getEvent[1]๏$getEvent[2]๏$getEvent[3]๏$getEvent[4]๏$getEvent[5]๏$getEvent[6]๏$getEvent[7]๏$getEvent[8]๏$getEvent[9]๏$getEvent[10]๏$getEvent[11]๏$getEvent[12]๏$getEvent[13]๏$getEvent[14]๏$getEvent[15]๏$getEvent[16]๏$getEvent[17]๏$getEvent[18]๏$getEvent[19]๏$getEvent[20]๏$getEvent[21]๏$getEvent[22]๏$getEvent[23]";
        } else if (isset($_POST["editEvent"])) {
            echo $controller->getDatabase()->editEvent($_POST["idEvent"],$_POST["eventName"],$_POST["locationEvent"],$_POST["date"],$_POST["size"],$_POST["startTime"],$_POST["endTime"],$_POST["category"],$_POST["type"],$_POST["price"],$_POST["details"],$_POST["organizerName"],$_POST["contactName"],$_POST["email"],$_POST["phone"],$_POST["latitude"],$_POST["longitude"],$_POST["teaser"],$_POST["preCondition"],$_POST["postCondition"]);
        }
        else if(isset($_POST['attendant'])){
            echo "attendant";
            $controller->getDatabase()->attendant($_POST['idEvent'],$_POST['username'],$_POST['amount']);
        }else if(isset($_POST['createWebboard'])){
            $controller->getDatabase()->createWebboard($_POST['idEvent'],$_POST['username'],$_POST['ques'],$_POST['detail']);
        }else if(isset($_POST['readWebboard'])){
            echo $controller->getDatabase()->readWebboard($_POST['idEvent']);
        }else if(isset($_POST['comment'])){
            $controller->getDatabase()->updateReply($_POST['idWebboard']);
            echo $controller->getDatabase()->writeComment($_POST['idWebboard'],$_POST['username'],$_POST['comment']);
        }else if(isset($_POST['readComment'])){
            // echo "readComment";
            echo $controller->getDatabase()->readCommentW($_POST['idWebboard']);
        }else if(isset($_POST['readWebCom'])){
            // echo "readComment";
            $cc =  $controller->getDatabase()->readWebCom($_POST['idWebboard']);
            echo "$cc[0]๏$cc[1]๏$cc[2]๏$cc[3]๏$cc[4]๏$cc[5]๏$cc[6]";
        }else if(isset($_POST['updateView'])){
            // echo "readComment";
            echo $controller->getDatabase()->updateView($_POST['idWebboard']);
        } else if (isset($_POST['getEventsProfile'])) {
            echo $controller->getDatabase()->getAttenEventProfile($_POST['username']);
        }
    }
    if(isset($_GET["idEvent"])){
        $e = $controller->getDatabase()->rEventTop($_GET["idEvent"]);
        $result="";
        for($i = 0;$i <23 ;$i++){
            $result .= "$e[$i]๏";
        }
        $result .= "$e[19]";
        echo $result;
    }

    if (isset($_GET["username"])) {
        $account = $controller->getDatabase()->autoSignIn($_GET["username"]);
        $result="";
        for($i = 0;$i <13 ;$i++){
            $result .= "$account[$i]๏";
        }
        $result .= "$account[14]";
        echo $result;
    }
?>