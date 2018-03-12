
<?php   

    //-----------ส่วนของ PHP-----------
    require '../vendor/autoload.php';
    require '../tcpdf/tcpdf.php';
    use KittichaiGarden\Controllers\Controller;
    // echo "sun";
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
            $controller->saveLog("Sign in");
        }
        else if(isset($_POST["signUp"])){ //เมื่อมีการกดปุ่ม SignUp
            
           // echo "<br>---Sign up---<br>";
           $controller->SignUp($_POST["uname"],$_POST["psw"],$_POST["umail"],$_POST["uFname"],$_POST["uLname"],$_POST["uid"],$_POST["bday"],$_POST["gender"],$_POST["uaddress"],$_POST["uphone"],$_POST["type"],$_POST["imageProfile"]);
            $controller->saveLog("Sign up");
        }else if(isset($_POST["signOut"])){
            $controller->saveLog("Sign out");
            $controller->signOut();


        }else if(isset($_POST["deleteAccount"])){
            $controller->getDatabase()->deleteAccounts($_POST["username"]);
            $controller->saveLog("Delete account ".$_POST["username"]);
        }else if(isset($_POST["readAccount"])){
            echo $controller->getDatabase()->readAccount(0);
        }else if(isset($_POST["editAccount"])){
            $editUser =  $controller->getDatabase()->autoSignIn($_POST["username"]);
            echo "$editUser[0]๏$editUser[1]๏$editUser[2]๏$editUser[3]๏$editUser[4]๏$editUser[5]๏$editUser[6]๏$editUser[7]๏$editUser[8]๏$editUser[9]๏$editUser[10]๏$editUser[11]๏$editUser[12]";
        }else if(isset($_POST["Edit"])){
            $controller->getDatabase()->updateAccount($_POST["uname"],$_POST["psw"],$_POST["umail"],$_POST["uFname"],$_POST["uLname"],$_POST["uid"],$_POST["bday"],$_POST["gender"],$_POST["uaddress"],$_POST["uphone"],$_POST["type"],$_POST["status"]);
            $controller->saveLog("Edit account ".$_POST["uname"]);
        }else if (isset($_POST["createEvent"])) { //เมื่อมีการกดปุ่ม Create Event
            echo "_POST[] in indexPHP";
            if(!isset($_POST["imagesPath"])){
                $imagesPath = "";
            } else {
                $imagesPath = $_POST["imagesPath"];
            }
            $controller->createNewEvent($_POST["eventName"],$_POST["locationEvent"],$_POST["date"],$_POST["size"],$_POST["startTime"],$_POST["endTime"],$_POST["category"],$_POST["type"],$_POST["price"],$_POST["details"],$_POST["organizerName"],$_POST["contactName"],$_POST["email"],$_POST["phone"],$imagesPath,$_POST["latitude"],$_POST["longitude"],$_POST["teaser"],$_POST["preCondition"],$_POST["postCondition"]);
            $controller->saveLog("Create event ".$_POST["eventName"]);
        } else if(isset($_POST["getSystemLogs"])){
            echo $controller->getDatabase()->getSystemLogs();
        } else if (isset($_POST["setSystemLog"])) {
            echo $controller->getDatabase()->setSystemLog();
        } else if(isset($_POST["getActivityLogs"])){
            echo $controller->getDatabase()->getActivityLogs();
        } else if (isset($_POST["setActivityLog"])) {
            echo $controller->getDatabase()->setActivityLog();
        } else if (isset($_POST["getEvents"])) {
            if($_POST['type'] == "user"){
                echo $controller->getDatabase()->filterEvent('SELECT * FROM event WHERE username="'.$_POST['username'].'"',"0");
            }else if($_POST['type'] == "admin"){
            echo $controller->getDatabase()->getEvents();
            }
        } else if (isset($_POST["deleteEvent"])) {
            echo $controller->getDatabase()->deleteEvent($_POST["idEvent"]);
            $controller->saveLog("Delete event".$username);
        } else if (isset($_POST["getEvent"])) {
            $getEvent =  $controller->getDatabase()->getEvent($_POST["idEvent"]);
            echo "$getEvent[0]๏$getEvent[1]๏$getEvent[2]๏$getEvent[3]๏$getEvent[4]๏$getEvent[5]๏$getEvent[6]๏$getEvent[7]๏$getEvent[8]๏$getEvent[9]๏$getEvent[10]๏$getEvent[11]๏$getEvent[12]๏$getEvent[13]๏$getEvent[14]๏$getEvent[15]๏$getEvent[16]๏$getEvent[17]๏$getEvent[18]๏$getEvent[19]๏$getEvent[20]๏$getEvent[21]๏$getEvent[22]๏$getEvent[23]";
        } else if (isset($_POST["editEvent"])) {
            echo $controller->getDatabase()->editEvent($_POST["eventName"],$_POST["locationEvent"],$_POST["date"],$_POST["size"],$_POST["startTime"],$_POST["endTime"],$_POST["category"],$_POST["type"],$_POST["price"],$_POST["details"],$_POST["organizerName"],$_POST["contactName"],$_POST["email"],$_POST["phone"],$imagesPath,$_POST["latitude"],$_POST["longitude"],$_POST["teaser"],$_POST["preCondition"],$_POST["postCondition"]);
            $controller->saveLog("Edit event ".$_POST["eventName"]);
        }
        else if(isset($_POST['attendant'])){
            echo "attendant";
            $controller->getDatabase()->attendant($_POST['idEvent'],$_POST['username'],$_POST['amount']);
        }else if(isset($_POST['createWebboard'])){
            $controller->getDatabase()->createWebboard($_POST['idEvent'],$_POST['username'],$_POST['ques'],$_POST['detail']);
            $controller->saveLog("Create webboard ".$_POST["ques"]);
        }else if(isset($_POST['readWebboard'])){
            echo $controller->getDatabase()->readWebboard($_POST['idEvent'],$_POST['username'],$_POST['typeA']);
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
        }else if(isset($_POST["activeAccount"])){
            $controller->getDatabase()->activateAccount($_POST["username"]);
        }else if(isset($_POST["checkSit"])){
             $controller->getDatabase()->countAttendant($_POST["idEvent"],$_POST["sits"]);
        }else if(isset($_POST["filter"])){
            $filter =  $_POST['filter'];
            $w = "";
            if($_POST['type'] == 'user' ){
                $w = " and username='".$_POST['username']."'";
            }
  
            if($filter == "Username "){
                if($w == ""){
                    echo $controller->getDatabase()->filterEvent('SELECT * FROM event WHERE username="'.$_POST['word'].'"',"0");
                }else{
                    echo $controller->getDatabase()->filterEvent('SELECT * FROM event WHERE username="'.$_POST['username'].'"',"0");
                }
                
            }else if($filter == "Day "){
                echo $controller->getDatabase()->filterEvent('SELECT * FROM event WHERE date="'.$_POST['word'].'" '.$w,"0");
            }else if($filter == "Month "){
                $m = explode("-",$_POST['word']);
                // echo $m['0'];
                echo $controller->getDatabase()->filterEvent('SELECT * FROM event WHERE MONTH(date) = '.$m['1'].' AND YEAR(date) = '.$m['0'].' '.$w,"0");

            }
            else if($filter == "Year "){
             
                // echo $m['0'];
                echo $controller->getDatabase()->filterEvent('SELECT * FROM event WHERE YEAR(date) = '.$_POST['word'].' '.$w,"0");

            }
            else if($filter == "Location "){
             
                // echo $m['0'];
                echo $controller->getDatabase()->filterEvent('SELECT * FROM event WHERE locate("'.$_POST['word'].'",location)>0 '.$w,"0");

            } else if($filter == "Attendent "){
             
                // echo $m['0'];
                echo $controller->getDatabase()->filterAttendant($_POST['word'],$w,"0");
                

            }
            
           
            // echo $controller->getDatabase()->filterEvent($_POST["filter"],$_POST['word']);
        }else if(isset($_POST['AttenEvent'])){
            // echo "2222";
            echo $controller->getDatabase()->getAttenEvent($_POST['idEvent'],$_POST['nameEvent'],"0");
        }else if(isset($_POST['linkGoogleForm'])){
            echo "2222";
            echo $_POST['linkGoogleForm'];
            echo $_POST['idEvent'];
            echo $controller->getDatabase()->linkGoogleForms($_POST['linkGoogleForm'],$_POST['idEvent']);
        }else if(isset($_POST['deleteWebboard'])){
            echo "Helllo";
            $controller->getDatabase()->deleteWebboard($_POST['idWebboard']);
        
        }else if(isset($_POST['checkIn'])){
            $controller->getDatabase()->confirmAttend($_POST['idEvent'],$_POST['username'],"CheckIn");
        }else if(isset($_POST['certis'])){
            // echo "Sunnny";
            $d = date("Y-m-d");
            $output ="";
            $output .= '<div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
            <div style="width:700px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
            <br><br><br>
                   <span style="font-size:40px; font-weight:bold;margin-top:20px;">Certificate of Completion</span>
                   <br><br>
                   <span style="font-size:30px"><i>This is to certify that</i></span>
                   <br><br>
                   <span style="font-size:30px"><b>'.$_POST['fNames'].'</b></span><br/><br/>
                   <span style="font-size:25px"><i>has completed the Event</i></span> <br/><br/>
                   <span style="font-size:30px">'.$_POST['nameEvent'].'</span> <br/><br/>
                   
                   <span style="font-size:25px"><i>dated</i></span><br>
                   <span style="font-size:20px">'.$d.'</span>
                   <br><br><br>
                  
            </div>
            </div>';
            createDir($_POST['username'],$_POST['idEvent']);
            pdfCertificate($_POST['username'],$_POST['idEvent'],"The Event Certificate",$output);
        }else if(isset($_POST['confirmEvent'])){
            $controller->getDatabase()->confirmAttend($_POST['idEvent'],$_POST['username'],"Comfirm");
        }else if (isset($_POST['getEventsProfile'])) {
            echo $controller->getDatabase()->getAttenEventProfile($_POST['username']);
        }
    }
    if(isset($_GET["idEvent"])){
        
        $e = $controller->getDatabase()->rEventTop($_GET["idEvent"]);
        $result="";
        for($i = 0;$i <23 ;$i++){
            $result .= "$e[$i]๏";
        }
        $result .= "$e[23]";
        echo $result;
    }

    if(isset($_GET["create_pdf_user"])){
        $s = "";
     $s .='<h2 align="center">All User in System</h2><br /><br />
     <table border="1" cellspacing="0" cellpadding="5">
     <thead>
            <tr>
            <th>No.</th>
            <th>Username</th>
            <th>E-Mail</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Type Account</th>
            <th>Status</th>
            </tr></thead>';
        $sun = $controller->getDatabase()->readAccount(1);
        // echo $sun;
         $s .= $sun;
        $s .= '</table>';
        echo $s;

        pdf("All User in System",$s);
    }

    if(isset($_GET["create_pdf_Attend"])){
        $s = "";
     $s .='<h2 align="center">Attendants Event: '.$_GET['nameEvent'].'</h2><br /><br />
     <table border="1" cellspacing="0" cellpadding="5">
     <thead>
            <tr>
            <th>No.</th>
            <th>status</th>
            <th>Username</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Time</th>
            </tr></thead>';
        $sun = $controller->getDatabase()->getAttenEvent($_GET['idEvent'],$_GET['nameEvent'],"1");
        // echo $sun;
         $s .= $sun;
        $s .= '</table>';
        echo $s;

        pdf('Attendants Event: '.$_GET['nameEvent'],$s);
    }


    if(isset($_GET["create_pdf_Event"])){
            $w = "";
            if($_GET['type'] == 'user' ){
                $w = " and username='".$_GET['username']."'";
            }
            $s = '<h2 align="center">All Events Filter: '.$_GET['filter'].'</h2><br /><br />
            <table border="1" cellspacing="0" cellpadding="5">
            <thead>
                <tr>
                <th>No.</th>
                <th>Event Name</th>
                <th>Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Location</th>
                <th>Category</th>
                </tr>
            </thead>';

            if($_GET['filter'] == "None"){
                if($_GET['type'] == "user"){
                    $s .= $controller->getDatabase()->filterEvent('SELECT * FROM event WHERE username="'.$_GET['username'].'"',"1");
                }else{
                    $s .= $controller->getDatabase()->filterEvent('SELECT * FROM event',1);
                }
                
            }else if($_GET['filter'] == "Day"){
                $s .= $controller->getDatabase()->filterEvent('SELECT * FROM event WHERE date="'.$_GET['word'].'" '.$w,"1");
            }else if($_GET['filter'] == "Month"){
                $m = explode("-",$_GET['word']);
                $s .= $controller->getDatabase()->filterEvent('SELECT * FROM event WHERE MONTH(date) = '.$m['1'].' AND YEAR(date) = '.$m['0'].' '.$w,"1");
                
            }else if($_GET['filter'] == "Year" ){
                $s .= $controller->getDatabase()->filterEvent('SELECT * FROM event WHERE YEAR(date) = '.$_GET['word'].' '.$w,"1");
            }else if($_GET['filter'] == "Username"){
                if($w == ""){
                    $s .= $controller->getDatabase()->filterEvent('SELECT * FROM event WHERE username="'.$_GET['word'].'"',"0");
                }else{
                    $s .= $controller->getDatabase()->filterEvent('SELECT * FROM event WHERE username="'.$_GET['username'].'"',"0");
                }
                
            }else if($_GET['filter'] == "Location" ){
                $s .= $controller->getDatabase()->filterEvent('SELECT * FROM event WHERE locate("'.$_GET['word'].'",location)>0 '.$w,"1");
            }else if($_GET['filter'] == "Attendent"){
                $s .= $controller->getDatabase()->filterAttendant($_GET['word'],$w,"0");
            }
            
            $s .='</table>';
    
            pdf('All Events Filter: '.$_GET['filter'],$s);
    }


    function pdfCertificate($username,$idEvent,$title,$content)
    {  

         $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
         $obj_pdf->SetCreator(PDF_CREATOR);
         $obj_pdf->SetTitle($title);
         $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
         $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
         $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
         $obj_pdf->SetDefaultMonospacedFont('helvetica');
         $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
       //   $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
       $obj_pdf->SetMargins(10, 20, 10, true);
         $obj_pdf->setPrintHeader(false);
         $obj_pdf->setPrintFooter(false);
         $obj_pdf->SetAutoPageBreak(TRUE, 10);
         $obj_pdf->SetFont('helvetica', '', 12);
         $obj_pdf->AddPage();
         $obj_pdf->writeHTML($content);
         ob_end_clean();
         if (file_exists($_SERVER['DOCUMENT_ROOT'].'/ProjectWebtech_1/certificates/'.$idEvent.'/'.$username.'.pdf')) unlink($_SERVER['DOCUMENT_ROOT'].'/ProjectWebtech_1/certificates/'.$idEvent.'/'.$username.'.pdf');
         $obj_pdf->Output($_SERVER['DOCUMENT_ROOT'].'/ProjectWebtech_1/certificates/'.$idEvent.'/'.$username.'.pdf', 'FD');
        // echo "hello";
       //   echo "PDF";
    }


    function createDir($username,$idEvent){
        echo substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']));
        if (file_exists('..\certificates\\'.$idEvent)) {
            echo "bbooom";
        }else{
               mkdir('..\certificates\\'.$idEvent, 0777, true);
               echo "create File";
           }
    }
  
    if (isset($_GET["p"])) {
        $account = $controller->getDatabase()->autoSignIn($_GET["username"]);
        $result="";
        for($i = 0;$i <12 ;$i++){
            $result .= "$account[$i]๏";
        }
        $result .= "$account[12]";
        echo $result;
    }










    function pdf($title,$content)
 {  echo "PDF";
    
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
      $obj_pdf->SetCreator(PDF_CREATOR);
      $obj_pdf->SetTitle($title);
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
      $obj_pdf->SetDefaultMonospacedFont('helvetica');
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    //   $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
    $obj_pdf->SetMargins(10, 20, 10, true);
      $obj_pdf->setPrintHeader(false);
      $obj_pdf->setPrintFooter(false);
      $obj_pdf->SetAutoPageBreak(TRUE, 10);
      $obj_pdf->SetFont('helvetica', '', 12);
      $obj_pdf->AddPage();
      $obj_pdf->writeHTML($content);
      ob_end_clean();
      $obj_pdf->Output($title.'.pdf', 'I');
     
    //   echo "PDF";
 }
?>