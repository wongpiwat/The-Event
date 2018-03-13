echo '<center>
    <div style="margin-top:300px;">
    <h1><span >Send E-mail Alert Already.</span></h1>
    </div>
    </center>
    <h1><span ></span></h1>';
<?php //ใส่ทุกอัน
    include 'header.php';
    require_once('email/class.phpmailer.php');
    $date =  date("Y-m-d");
    $time =  date("H:i:s");

	
 
    
    $result = $controller->getDatabase()->readEventUpTime();
    while($row = $result->fetch(PDO::FETCH_BOTH)){
        
        $statement = $controller->getDatabase()->getConnect()->prepare('SELECT * FROM `attendents` WHERE idEvent=:idEvent');
        $statement->execute(['idEvent' => $row[0]]);
        // echo 'SELECT * FROM `attendents` WHERE idEvent='.$row[0];
        while($r = $statement->fetch(PDO::FETCH_BOTH)){
            // var_dump($r);
            $sun = $controller->getDatabase()->getConnect()->query('SELECT * FROM account WHERE username="'.$r[1].'"');
            // $sun->execute([':username' => $row[1]]);
            // echo 'SELECT * FROM account WHERE username='.$r[1];

            while($p = $sun->fetch(PDO::FETCH_BOTH)){
                // var_dump($p);
                $mail = new PHPMailer();
                $mail->IsHTML(true);
                $mail->IsSMTP();
                $mail->SMTPAuth = true; // enable SMTP authentication
                $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
                $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
                $mail->Port = 465; // set the SMTP port for the GMAIL server
                $mail->Username = "kittichai.garden@gmail.com"; // GMAIL username
                $mail->Password = "@kittichai"; // GMAIL password
                $mail->From = "kittichai.garden@gmail.com"; // "name@yourdomain.com";
                //$mail->AddReplyTo = "support@thaicreate.com"; // Reply
            //    $p[0],$p[2],$p[3],"The Event CheckIn","CheckIn Event: "+$row[2]+" click= http://localhost:120/ProjectWebtech_1/checkIn.php?ifwn23Evewge="+$row[0]+"&xTaScDwdasfw="+$p[0]+" Thankyou.");
                $text = sprintf('CheckIn Event: %s click= http://localhost:120/ProjectWebtech_1/checkIn.php?ifwn23Evewge=%s&xTaScDwdasfw=%s Thankyou.',$row['2'],$row['0'],$p['0']);
                $email = 'vasupol.ch@ku.th';
               $mail->FromName = "The Event CheckIn"  ;// set from Name
               $mail->Subject = "The Event CheckIn" ; 
               $mail->Body = $text;
               if($p[2] != "" && $p[2] != "-"){
                    $mail->AddAddress($p[2], $p[3]); // to Address
                //Priority 1 = High, 3 = Normal, 5 = low
                            $mail->Send();
                        }
            // echo $p['email'];
            }
        }
    }
    
	



	//$mail->AddCC("member@thaicreate.com", "Mr.Member ShotDev"); //CC
	//$mail->AddBCC("member@thaicreate.com", "Mr.Member ShotDev"); //CC

	


?>


