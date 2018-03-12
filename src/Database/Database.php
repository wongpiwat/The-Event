<?php 
namespace KittichaiGarden\Database;
use KittichaiGarden\Models\Account;
use PDO;
date_default_timezone_set("Asia/Bangkok");

class Database {

    //ตัวแปรเอาไว้ติดต่อกับ Database
    private $connect = null;
    public $lengthE = 0;

    function __construct($port, $databaseName, $username, $password){

        $this->connect = new PDO("mysql:host=localhost:".$port.";dbname=".$databaseName.";charset=utf8mb4",$username,$password);
    }

    //อ่าน User จากดาต้าเบส

    function signIn($username,$password){
        $statement = $this->connect->query('SELECT * FROM account WHERE username='."'".$username."'".' and password='."'".$password."'");
        $result = $statement->fetch(PDO::FETCH_BOTH);
        return $result;

    }
    //ตรวจสอบว่ามี Username Email บัตรปชช.โทรศัพท์ อยู่ในดาต้าเบสหรือยัง ?
    function checkAccount($username,$email,$idNo,$phone){
        $statement = $this->connect->prepare('SELECT username FROM account WHERE username=:username');
        $statement->execute([':username' => $username  ]);
        $result = $statement->fetch(PDO::FETCH_BOTH);
        if($result["username"] == ""){
            $s = $this->connect->prepare('SELECT email FROM account WHERE email=:email');
            $s->execute([':email' => $email  ]);
            $r = $statement->fetch(PDO::FETCH_BOTH);
            if($r["email"] == ""){
                return true;
            }
        }
            
        return false;
        
    }
    //ตรวจสอบว่ามี User อยู่ในดาต้าเบสหรือเปล่า
    function findUser($username,$password){
        $statement = $this->connect->prepare('SELECT username,password,email FROM account WHERE (username=:username and password=:password) or (email=:username and password=:password)');
        $statement->execute([':username' => $username , ':password' => $password]);
        $result = $statement->fetch(PDO::FETCH_BOTH);
        if(($result["username"] == $username && $result["password"] == $password) || ($result["email"] == $username && $result["password"] == $password )) {
            return true;
        }else{
            return false;
        }
    }
    //สร้าง User ลงในดาต้าเบส

    function createAccount($username,$password,$email,$firstName,$lastName,$idNo,$birthday,$gender,$address,$phone,$type,$status,$imagePath){
        $statement = $this->connect->exec('INSERT INTO account (`username`, `password`, `email`, `firstName`, `lastName`, `idNo`, `birthday`, `gender`, `address`, `phone`, `typeAccount`, `status`,`image`) 
        VALUES ('."'".$username."'".','."'".$password."'".','."'".$email."'".','."'".$firstName."'".','."'".$lastName."'".','."'".$idNo."'".','."'".$birthday."'".','."'".$gender."'".','."'".$address."'".','."'".
         $phone."'".','."'".$type."'".','."'".$status."'".','."'".$imagePath."'".')');
         echo "1";
    }

    //เมื่อผู้ใช้อยู่ในระบบอยู่แล้ว
    function autoSignIn($username){
        $statement = $this->connect->prepare('SELECT * FROM account WHERE username=:username');
        $statement->execute([ ':username' => $username]);
        $result = $statement->fetch(PDO::FETCH_BOTH);
        if($result["username"] != "" ){
            return $result;
        }
        return null;
    }

    //อ่านผู้ใช้งานจากระบบ
    function readAccount($cod){
        $output ="";
        $count = 1;
        $statement = $this->connect->query('SELECT * FROM account');
        while($row = $statement->fetch(PDO::FETCH_BOTH)){
        $username = $row["username"];
        $edit  = sprintf('onclick="editAccount(\'%s\',\'edit\')"',$username);
        $read  = sprintf('onclick="editAccount(\'%s\',\'read\')"',$username);
        $delete = sprintf('onclick="editAccount(\'%s\',\'del\');deleteAccount(\'%s\')"',$username,$username);
            if($cod == 0){
                $output .= '<tr '.$read.'>';
            }else{
                $output .= '<tr>';
            }
        $output .= '<td>'.$count.'</td>
                <td>'.$row["username"].'</td>
                <td>'.$row["email"].'</td>
                <td>'.$row["firstName"].'</td>
                <td>'.$row["lastName"].'</td>
                <td>'.$row["typeAccount"].'</td>
                <td>'.$row["status"].'</td>';

                if($cod == 0){
                    $output .=  '<td> <button type="button" class="btn btn-success"'.$edit.'><span class="glyphicon glyphicon-cog" ></span> Edit</button> </td>
                <td> <button type="button" class="btn btn-danger"'.$delete.'><span class="glyphicon glyphicon-trash" ></span> Delete</button> </td>';
                }
                $output .= '</tr>';
        
        $count+=1;
        }
    return $output;
    
    }

    function updateAccount($username,$password,$email,$firstName,$lastName,$idNo,$birthday,$gender,$address,$phone,$type,$status){
        $t = "";
        if($type == 0){
            $t = "admin";
        }else{
            $t = "user";
        }
 
        
     
        $statement = $this->connect->exec('UPDATE account SET `password`='.'"'.$password.'"'.', `email`='.'"'.$email.'"'.', `firstName`='.'"'.$firstName.'"'.'
    , `lastName`='.'"'.$lastName.'"'.', `idNo`="'.$idNo.'", `birthday`="'.$birthday.'", `gender`="'.$gender.'", 
    `address`="'.$address.'", `phone`="'.$phone.'", `typeAccount`="'.$t.'", `status`="'.$status.'" WHERE `username`="'.$username.'"');
         echo $statement;
    }

    
    function confirmAttend($idEvent,$username,$status){
        $s = $this->connect->prepare('UPDATE `attendents` SET status=:status Where username=:username AND idEvent=:idEvent');
        $s->execute([':status' => $status , ':username' => $username , ':idEvent' => $idEvent]);
    }

    function deleteAccounts($username){
        // 'DELETE FROM account WHERE `username=`'.'"'.$username.'"'
            $statement = $this->connect->prepare('DELETE FROM account WHERE username=:username');
            $statement->bindValue('username',$username);
            $statement->execute();
            echo "1";

    }

    

    function readEventRec(){
        $date = date("Y-m-d");
        $time = date("H:i:s");
        $statement = $this->connect->prepare('SELECT * FROM event WHERE (date>=:date and startTime>=:time) or date>:date ORDER BY attendView DESC');
        $statement->execute([ ':date' => $date , ':time' => $time]);
        
        return $this->returnEvent($statement,3,140,140);

    }

    function rEventTop($id){
        $statement = $this->connect->prepare('SELECT * FROM event WHERE idEvent=:id');
        $statement->execute([ ':id' => $id]);
        $result = $statement->fetch(PDO::FETCH_BOTH);
    
        return $result;
    }

    function returnEvent($statement,$break,$width,$height){
        $result = '';
        $count = 0;
        // echo "Hellooooo";
        while($row = $statement->fetch(PDO::FETCH_BOTH)){
            // echo "Hellooooo";
            if($count == $break){
                break;
            }

            if($row["type"] == "free"){
             $b = "Get Tickets";
            }else{
             $b = "Buy Tickets";
            }
            $onClick  = sprintf('onclick="showEventContent(\'%s\')"',$row["idEvent"]);
           $url = sprintf('event-new.php?idEvent=%s"',$row["idEvent"]);
            

                $result .= '
                <a href="'.$url.'" >
                <form action="event-new.php">
                <div class="borderE">
                <div class="eventContent" '.$onClick.'>
                    <div class="eventLeft">
                        <div class="eventPic" ><img src="'.$row["imageCover"].'" style="width:'.$width.'px;height:'.$height.'px;">
                        </div>
                    </div>
                    <div class="eventBody">
                        <div class="eventTitle"><b>'.$row["eventName"].'</b></div><br>
                        <button name="idEvent" type="submit" class="btn btn-defualt buttonTickets" value="'.$row["idEvent"].'" >'.$b.'</button><br>
                        <div class="eventDetail">
                        <i class="fa fa-clock-o fa-fw"></i>'.$row["date"].' | '.$row["startTime"].'<br>
                        <i class="fa fa-map-marker fa-fw"></i>'.$row["location"].'
                        </div>
                    </div>
                </div>
                </div>
                </form>
                </a>

                ';
            
            $count += 1;
        }
        $this->lengthE = $count;
        return $result;
    }


    function readEventUpTime(){
        $date = date("Y-m-d");
        $time = date("H:i:s");
        $statement = $this->connect->prepare('SELECT * FROM event WHERE (date=:date and startTime>=:time)');
        $statement->execute([':date' => $date , 'time' => $time]);
        return $statement;
    }


    function readEventUp(){
        // or date>=:date ORDER
        // SELECT * FROM event WHERE date>="2018-03-09" and time>="08:52:03" ORDER BY date,time
        $date = date("Y-m-d");
        $time = date("H:i:s");
        $statement = $this->connect->prepare('SELECT * FROM event WHERE ( (date>=:date and startTime>=:time) or date>:date)  ORDER BY date,startTime');
        $statement->execute([ ':date' => $date , ':time' => $time]);
        // echo "SELECT * FROM event WHERE ( (date>=$date and startTime>=$time) or date>$date)  ORDER BY date,time";
        
        return $this->returnEvent($statement,3,140,140);

    }

    function readbyCategory($category,$l,$w,$h){
        $date = date("Y-m-d");
        $time = date("H:i:s");
        $statement = $this->connect->prepare('SELECT * FROM event WHERE category=:category and ( (date>=:date and startTime>=:time) or date>:date)    ORDER BY date,startTime');

        $statement->execute([ ':date' => $date , ":time" => $time , ":category" => $category]);
        return $this->returnEvent($statement,$l,$w,$h);
    }


        //ตรวจสอบว่ามี event อยู่ในดาต้าเบสหรือเปล่า
        function checkEvent($eventName) {
            $statement = $this->connect->prepare('SELECT eventName FROM event WHERE eventName=:eventName');
            $statement->execute([':eventName' => $eventName]);
            $result = $statement->fetch(PDO::FETCH_BOTH);
            if($result['eventName'] == ""){
                return true;
            }else{
                return false;
            }
        }

        function getMaxIDEvent() {
            $query = $this->connect->prepare('SELECT max(idEvent) FROM event');
            $query->execute();
            $result = $query->fetch(PDO::FETCH_BOTH);
            $this->maxID = $result['max(idEvent)']+1;
            return $this->maxID;
        }
    
         //สร้างevent
         function createEvent($username,$eventName,$locationEvent,$date,$startTime,$endTime,$size,$category,$type,$price,$details,$teaserVDO,$preCondition,$postCondition,$organizerName,$contactName,$email,$phone,$latitude,$longitude,$imageCover,$attendView,$imageSlide) {
            $statement = $this->connect->exec('INSERT INTO event (`idEvent`,`username`,`eventName`, `location`, `date`,`startTime`,`endTime`, `size`, `category`, `type`, `price`, `details`,`teaserVDO`, `preCondition`, `postCondition`, `organizerName`, `contactName`, `email`, `phone`,`latitude`,`longitude`,`imageCover`,`attendView`,`imageSlide`) VALUES
             ('."'".$this->maxID."'".','."'".$username."'".','."'".$eventName."'".','."'".$locationEvent."'".','."'".$date."'".','."'".$startTime."'".','."'".$endTime."'".','."'".$size."'".','."'".$category."'".','."'".$type."'".','."'".$price."'".','."'".$details."'".','."'".$teaserVDO."'".','."'".$preCondition."'".','."'".$postCondition."'".','."'".$organizerName."'".','."'".$contactName."'".','."'".$email."'".','."'".$phone."'".','."'".$latitude."'".','."'".$longitude."'".','."'".'upload-files/files/upload/'.$this->maxID.$imageCover."'".','."'".$attendView."'".','."'".'upload-files/files/upload/'.$this->maxID.$imageSlide."'".')');
        }

    function getEvent($idEvent) {
        $statement = $this->connect->prepare('SELECT * FROM event WHERE idEvent=:eventID');
        $statement->execute([ ':eventID' => $idEvent]);
        $result = $statement->fetch(PDO::FETCH_BOTH);
        if($result["eventName"] != "" ){
            return $result;
        }
        return null;
    }

    function getLinkYoutube($idEvent){
        $statement = $this->connect->prepare('SELECT teaserVDO FROM event WHERE idEvent=:idEvent');
        $statement->execute([':idEvent' => $idEvent]);
        $result = $statement->fetch(PDO::FETCH_BOTH);
        return $result["teaserVDO"];
    }

    function addPath($imagePath) {
        $statement = $this->connect->exec('INSERT INTO imageevent (`idEvent`, `imagePath`) VALUES ('."'".$this->maxID."'".','."'".$imagePath."'".')');
    }


    function getConnect(){
        return $this->connect;
    }

    function setConnect($port,$databaseName,$username,$password){
        $this->connect = null;
        $this->connect = new PDO(
            "mysql:host=localhost:".$port.";dbname=".$databaseName.";charset=utf8mb4",
            $username,$password
        );
    }

    function attendant($idEvent,$username,$amount){
        // echo "Idevent: ".$idEvent.".";
        $sun = $this->connect->query('SELECT  *  FROM `attendents` WHERE idEvent="'.$idEvent.'" And username="'.$username.'"');
        $row = $sun->fetch(PDO::FETCH_BOTH);
    //    echo 'SELECT  *  FROM `attendents` WHERE idEvent="'.$idEvent.'" And username="'.$username.'"';
        $date = date("Y-m-d");
        $time = date("h:i:s");
        if($row['username'] == ""  && $row["0"] == ""){
            // echo "SSSSSSSSSSSS";
            $statement = $this->connect->exec('INSERT INTO attendents VALUES ('.$idEvent.', "'.$username.'","'.$amount.'","'.$date.'" , "'.$time.'" , "Uncomfirm" )' );
            //echo 'INSERT INTO users VALUES ('.$idEvent.', "'.$username.'","'.$amount.'","'.$date.'" , "'.$time.'")';
        }else{
            // echo "NNNNNNNNNNNNN";
            $amount = $row["2"]+$amount;
            $s = $this->connect->prepare('UPDATE `attendents` SET amount=:amount Where username=:username and idEvent=:idEvent');
            $s->execute([ ':amount' => $amount , ':username' => $username, ':idEvent' => $idEvent]);
        }
    }

    // function readLogs(){
    //     $output ="";
    //     $count = 1;
    //     $statement = $this->connect->query('SELECT * FROM account');
    //     while($row = $statement->fetch(PDO::FETCH_BOTH)){
    //     $username = $row["username"];
    //     $edit  = sprintf('onclick="editAccount(\'%s\',\'edit\')"',$username);
    //     $read  = sprintf('onclick="editAccount(\'%s\',\'read\')"',$username);
    //     $delete = sprintf('onclick="editAccount(\'%s\',\'del\');deleteAccount(\'%s\')"',$username,$username);
    //     $output .= '
    //         <tr '.$read.'>
    //             <td>'.$count.'</td>
    //             <td>'.$row["username"].'</td>
    //             <td>'.$row["email"].'</td>
    //             <td>'.$row["firstName"].'</td>
    //             <td>'.$row["lastName"].'</td>
    //             <td>'.$row["typeAccount"].'</td>
    //             <td>'.$row["status"].'</td>
    //             <td> <button type="button" class="btn btn-success"'.$edit.'><span class="glyphicon glyphicon-cog" ></span> Edit</button> </td>
    //             <td> <button type="button" class="btn btn-danger"'.$delete.'><span class="glyphicon glyphicon-trash" ></span> Delete</button> </td>
    //         </tr>
    //     ';
    //     $count+=1;
    //     }
    // return $output;
    // }

    function readWebboard($idEvent,$username,$typeAccount){
        $output ="";
        $count = 1;
        $statement = $this->connect->query('SELECT * FROM webboard WHERE idEvent='.$idEvent.' ORDER  BY date,time DESC');
        while($row = $statement->fetch(PDO::FETCH_BOTH)){
            $idWebboard = $row["idWebboard"];
            $delete = sprintf('onclick="deleteWebboard(\'%s\')"',$idWebboard);
          

            $output .= '
            <tr>
            <td>'.$count.'</td>
            <td width="40%" ><a href="#" onclick="comment('.$row[0].')"><span class="glyphicon glyphicon-envelope"></span> '.$row["question"].'</a></td>
            <td>'.$row["username"].'</td>
            <td>'.$row["date"].'</td>
            <td>'.$row["time"].'</td>
            <td>'.$row["view"].'</td>
            <td>'.$row["reply"].'</td>';
            if($username != $row[2] && $typeAccount != "admin"){
                $output .= '<td><button type="button" class="btn btn-danger" '.$delete.' disabled><span class="glyphicon glyphicon-trash"></span> Delete</button> </td>';
            }else{
                $output .= '<td><button type="button" class="btn btn-danger" '.$delete.' ><span class="glyphicon glyphicon-trash"></span> Delete</button> </td>';
            }
            
          $output .= '</tr>';
        $count+=1;
        }
        return $output;
    }

    function createWebboard($idEvent,$username,$question,$detail){
        $date = date("Y-m-d");
        $time = date("h:i:s");
        $query = $this->connect->query('SELECT max(idWebboard) FROM webboard');
        $result = $query->fetch(PDO::FETCH_BOTH);
        $idWebboard = $result['0']+1;
        $statement = $this->connect->exec('INSERT INTO webboard VALUES ('.$idWebboard.' , '.$idEvent.', "'.$username.'","'.$question.'","'.$detail.'" , "'.$date.'" ,"'.$time.'" , 0 , 0 )' );
        // echo 'INSERT INTO webboard VALUES ('.$result['0'].' , '.$idEvent.', "'.$username.'","'.$question.'","'.$detail.'" , "'.$date.'" ,"'.$time.'" , 0 , 0 )';

    }

    function updateView($idWebboard){
        $statement = $this->connect->query('SELECT max(view) FROM webboard where idWebboard='.$idWebboard);
        $result = $statement->fetch(PDO::FETCH_BOTH);
        $view = $result["0"]+1;
        $s = $this->connect->prepare('UPDATE webboard SET `view`=:view Where idWebboard=:idWebboard');
        $s->execute([ ':view' => $view , ':idWebboard' => $idWebboard]);
  
    }

    function updateAttend($idEvent){
        $statement = $this->connect->query('SELECT max(attendView) FROM event where idEvent='.$idEvent);
        $result = $statement->fetch(PDO::FETCH_BOTH);
        $view = $result["0"]+1;
        $s = $this->connect->prepare('UPDATE event SET `attendView`=:attendView Where idEvent=:idEvent');
        $s->execute([ ':attendView' => $view , ':idEvent' => $idEvent]);
  
    }

    function updateReply($idWebboard){
        $statement = $this->connect->query('SELECT reply FROM webboard where idWebboard='.$idWebboard);
        $result = $statement->fetch(PDO::FETCH_BOTH);
            $reply = $result["reply"]+1;
            $s = $this->connect->prepare('UPDATE webboard SET `reply`=:reply Where idWebboard=:idWebboard');
            $s->execute([ ':reply' => $reply , ':idWebboard' => $idWebboard]);
    }

    function readCommentW($idWebboard){
        $output="";
        $count = 1;
        $statement = $this->connect->query('SELECT * FROM comwebboard WHERE idWebboard='.$idWebboard.' ORDER  BY date,time ');
        while($row = $statement->fetch(PDO::FETCH_BOTH)){
            $s = $this->connect->query('SELECT username FROM webboard WHERE idWebboard='.$idWebboard.' ');
            $r = $s->fetch(PDO::FETCH_BOTH);
            $output .='
            <div class="comment" style="padding-left: 5%;padding-right:5%;">
            <p><span style="font-size:14px;color:#d3c92a;">comment '.$count.'</span></p>
            <p class="comment-story" style="font-size:16px;">'
                .$row[2].
            '</p>
            <hr style="    display: block;
            height: 1px;
            border: 0;
            border-top: 0.5px solid #d3c92a;
            margin-top:40px;
            /* background-color: black;
            color: black; */">
            <div style="bottom: 0;width: 100%;margin-top:-40px;color:#ffc955;">
            <br>
            User: '.$row["username"].' &nbsp;&nbsp;&nbsp;&nbsp;Date: '.$row['date'].' &nbsp;&nbsp;&nbsp;&nbsp;Time: '.$row['time'].'
            </div>
        </div>';
        $count += 1;
        }
        return $output;
    }

    function writeComment($idWebboard,$username,$comment){
        $date = date("Y-m-d");
        $time = date("H:i:s");
        $statement = $this->connect->exec('INSERT INTO `comwebboard` VALUES ('.$idWebboard.' , "'.$username.'","'.$comment.'" , "'.$date.'" ,"'.$time.'")' );
    }

    function readWebCom($idWebboard){
        $statement = $this->connect->query('SELECT * FROM webboard WHERE idWebboard='.$idWebboard);
        $result = $statement->fetch(PDO::FETCH_BOTH);
        return $result;
    }


    function searchEvent($nameEvent){
        $statement = null;
        if($nameEvent == "AllEvent")
        {   $date = date("Y-m-d");
            $time = date("H:i:s");
            $statement = $this->connect->prepare('SELECT * FROM event WHERE (date>=:date and startTime>=:time) or date>:date ORDER BY date,startTime');
            $statement->execute([ ':date' => $date , ':time' => $time]);
           
        }else{
            $statement = $this->connect->prepare('SELECT * FROM event WHERE locate(:nameEvent,eventName)>0 or locate(:nameEvent,location)>0 or locate(:nameEvent,organizerName)>0');
            $statement->execute([ ':nameEvent' => $nameEvent]);
        }
        
        return $this->returnEvent($statement,-1,200,200);
    }
    



    function activateAccount($username){
        $s = $this->connect->prepare('UPDATE account SET status="Activate" Where username=:username');
        $s->execute(['username'=> $username]);

        // echo "UPDATE account SET status=activate Where username=$username";
    }

    function countAttendant($idEvent,$si){
        // echo "maxxsit".$si;
        // echo "sun";
        $sit = 0;
        $statement = $this->connect->query('SELECT SUM(`amount`) FROM `attendents` WHERE idEvent='.$idEvent);
        // $statement->execute();
        $result = $statement->fetch(PDO::FETCH_BOTH);
        $sit += $result[0];
        // echo "Sit: $sit";
        // echo "SELECT SUM(amount) FROM attendents  WHERE idEvent=$idEvent";
        if($si > $sit){
            echo "$sit";
        }else{
            echo "-1";
        }
  
    }

    function linkGoogleForms($link,$idEvent){
        // echo "Hello";
         $statement = $this->connect->prepare('UPDATE event SET googleForm=:link WHERE idEvent=:idEvent');
        $statement->execute(['link' => $link , 'idEvent' => $idEvent]);
            // echo 'UPDATE event SET googleForm='.$link.' Where idEvent='.$idEvent;
        }


    function filterAttendant($sit,$w,$check){
        $output ="";
        $count = 1;
        
        $statement = $this->connect->query('SELECT idEvent,SUM(`amount`) FROM `attendents` GROUP BY idEvent');
        while($row = $statement->fetch(PDO::FETCH_BOTH)){
            // $output.= "ID Event: ".$row[0]." sum: ".$row[1]."<br>";
            if($sit == $row[1]){
                if($w == ""){
                    $s = $this->connect->query('SELECT * FROM event WHERE idEvent='.$row[0]);
                }else{
                    $s = $this->connect->query('SELECT * FROM event WHERE idEvent='.$row[0].' '.$w);
                }
                
                $r = $s->fetch(PDO::FETCH_BOTH);
                $username = $r["username"];
                $idEvent = $r["idEvent"];
                $eventName = $r["eventName"];
                // echo $idEvent;
                $sunny  = sprintf('onclick="showP(\'%s\',\'read\',\'%s\',\'%s\')"',$idEvent,$eventName,$row[25]);
                $edit  = sprintf('onclick="showP(\'-1\',\'edit\',\'%s\',\'%s\'),editEvent(\'%s\',\'edit\')"',$idEvent,$row[25],$eventName);
                $get  = sprintf('onclick="showP(\'-1\',\'edit\',\'%s\',\'%s\'),editEvent(\'%s\',\'get\')"',$idEvent,$row[25],$eventName);
                $delete = sprintf('onclick="showP(\'-1\',\'delete\',\'%s\',\'%s\'),setDeleteEvent(\'%s\',\'%s\')"',$idEvent,$row[25],$idEvent,$eventName);

                if($r[0] != ""){
                $output .= '
                    <tr '.$sunny.'>
                        <td>'.$count.'</td>
                        <td>'.$r["eventName"].'</td>
                        <td>'.$r["date"].'</td>
                        <td>'.$r["startTime"].'</td>
                        <td>'.$r["endTime"].'</td>
                        <td>'.$r["location"].'</td>
                        <td>'.$r["category"].'</td>';

                        if($check == "0"){
                            $output .= '<td> <button type="button" class="btn btn-success"'.$edit.'><span class="glyphicon glyphicon-cog" ></span> Edit</button> </td>
                            <td> <button type="button" class="btn btn-danger"'.$delete.'><span class="glyphicon glyphicon-trash" ></span> Delete</button> </td>';
                        }
                        $output .='</tr>';
                    }
                $count+=1;
            }
        }
        return $output;

    }

    function filterEvent($query,$check){
        // echo "$query";
        $output ="";
        $count = 1;

        $statement = $this->connect->query($query);
        while($row = $statement->fetch(PDO::FETCH_BOTH)){
            $username = $row["username"];
            $idEvent = $row["idEvent"];
            $eventName = $row["eventName"];
            // echo $idEvent;
            $sunny  = sprintf('onclick="showP(\'%s\',\'read\',\'%s\',\'%s\')"',$idEvent,$eventName,$row[25]);
            $edit  = sprintf('onclick="showP(\'-1\',\'edit\',\'%s\',\'%s\'),editEvent(\'%s\',\'edit\')"',$idEvent,$row[25],$eventName);
            $get  = sprintf('onclick="showP(\'-1\',\'edit\',\'%s\',\'%s\'),editEvent(\'%s\',\'get\')"',$idEvent,$row[25],$eventName);
            $delete = sprintf('onclick="showP(\'-1\',\'delete\',\'%s\',\'%s\'),setDeleteEvent(\'%s\',\'%s\')"',$idEvent,$row[25],$idEvent,$eventName);
            if($row[0] != ""){
            $output .= '
                <tr '.$sunny.'>
                    <td>'.$count.'</td>
                    <td>'.$row["eventName"].'</td>
                    <td>'.$row["date"].'</td>
                    <td>'.$row["startTime"].'</td>
                    <td>'.$row["endTime"].'</td>
                    <td>'.$row["location"].'</td>
                    <td>'.$row["category"].'</td>';

                    if($check == "0"){
                        $output .= '<td> <button type="button" class="btn btn-success"'.$edit.'><span class="glyphicon glyphicon-cog" ></span> Edit</button> </td>
                        <td> <button type="button" class="btn btn-danger"'.$delete.'><span class="glyphicon glyphicon-trash" ></span> Delete</button> </td>';
                    }
                    
                    $output .='</tr>';
                }
            $count+=1;
        }
    return $output;
       
    }

    function getAttenEvent($idEvent,$nameEvent,$check){
        $output = "";
        $count = 1;
        $statement = $this->connect->query('SELECT * FROM attendents WHERE idEvent='.$idEvent);
        // echo 'SELECT * FROM attendents WHERE idEvent="'.$idEvent.'"';
        while($row = $statement->fetch(PDO::FETCH_BOTH)){
            $mail  = sprintf('onclick="mailCon(\'%s\',\'%s\',\'%s\')"',$row["username"],$idEvent,$nameEvent);
            $certi  = sprintf('onclick="certi(\'%s\',\'%s\',\'%s\')"',$row["username"],$idEvent,$nameEvent);
            $eval = sprintf('onclick="eval(\'%s\',\'%s\',\'%s\')"',$row["username"],$idEvent,$nameEvent);
            $output .='
            <center>
            <tr >
            <td>'.$count.'</td>';
            if($row['status'] == "Uncomfirm"){
                $output .= '<td style="background-color:#f44336;color:white;" >'.$row['status'].'</td>';
            }else{
                $output .= '<td style="background-color:#4CAF50;color:white;" >'.$row['status'].'</td>';
            }
            $output .='<td>'.$row["username"].'</td>
            <td>'.$row["amount"].'</td>
            <td>'.$row["date"].'</td>
            <td>'.$row["time"].'</td>';
          

            if($check == "0"){
                $output .= '<td> <button type="button" class="btn btn-info"'.$mail.'><span class="glyphicon glyphicon-envelope" ></span> Send Mail</button> </td>
                <td> <button type="button" class="btn btn-success"'.$certi.'><span class="glyphicon glyphicon-paperclip" ></span> Certificate</button> </td>
                <td> <button type="button" class="btn btn-warning"'.$eval.'><span class="glyphicon glyphicon-share-alt" ></span> Send Form</button> </td>';
            }
            
            $output .='</tr></center>';
            $count+=1;
        }
            
        return $output;
        
        
    }
    
    //test function นะครับ
    public function test () {
        echo __METHOD__, PHP_EOL;
    }

    function imageEventCover($idEvent){
        $result = '';
        $dot = '';
        $count = 0;



        $statement = $this->connect->prepare('SELECT imagePath FROM imageevent WHERE idEvent=:idEvent');
        $statement->execute([ ':idEvent' => $idEvent]);
        while($row = $statement->fetch(PDO::FETCH_BOTH)){
                if($count == 5){
                    break;
                }
                if($count == 0){
                    $dot .= '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
                    $result .='<div class="item active">';
                }else{
                    $dot .= '<li data-target="#myCarousel" data-slide-to="'.$count.'"></li>';
                    $result .='<div class="item ">';
                }
                        
            $result .='<img src="'.$row['imagePath'].'" ></div>';

            $count += 1;
        }
        $image = $dot.'</ol> <div class="carousel-inner">'.$result;
        return $image;

    }

    function imageCoverMain(){
        $dot = '';
        $result = '';
        $count = 0;
        // echo "Hellooooo";
        $date = date("Y-m-d");
        $time = date("H:i:s");
        $statement = $this->connect->prepare('SELECT idEvent,imageSlide FROM event WHERE (date>=:date and startTime>=:time) or date>=:date ORDER BY attendView DESC');
        $statement->execute([ ':date' => $date , ':time' => $time]);
        while($row = $statement->fetch(PDO::FETCH_BOTH)){
            // echo "Hellooooo";
            $url = sprintf('event-new.php?idEvent=%s"',$row["idEvent"]);
            if($count == 5){
                break;
            }
            if($count == 0){
                $dot .= '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
                $result .='<div class="item active">';
            }else{
                $dot .= '<li data-target="#myCarousel" data-slide-to="'.$count.'"></li>';
                $result .='<div class="item ">';
            }
            
            $result .='
                  <a href="'.$url.'">
                <img src="'.$row['imageSlide'].'" >
                 </a>
              </div>';
      
            $count += 1;
        }
        
        $image = $dot.'</ol> <div class="carousel-inner">'.$result;
        return $image;

    }





    function getEvents() {
        $output ="";
        $count = 1;
        $statement = $this->connect->query('SELECT * FROM event');
        while($row = $statement->fetch(PDO::FETCH_BOTH)){
            $username = $row["username"];
            $idEvent = $row["idEvent"];
            $eventName = $row["eventName"];
            // echo $idEvent;
            $s  = sprintf('onclick="showP(\'%s\',\'read\',\'%s\',\'%s\')"',$idEvent,$eventName,$row[25]);
            $edit  = sprintf('onclick="showP(\'-1\',\'edit\',\'%s\',\'%s\'),editEvent(\'%s\',\'edit\')"',$idEvent,$row[25],$eventName);
            $get  = sprintf('onclick="showP(\'-1\',\'edit\',\'%s\',\'%s\'),editEvent(\'%s\',\'get\')"',$idEvent,$row[25],$eventName);
            $delete = sprintf('onclick="showP(\'-1\',\'delete\',\'%s\',\'%s\'),setDeleteEvent(\'%s\',\'%s\')"',$idEvent,$row[25],$idEvent,$eventName);
            $output .= '
                <tr '.$s.'>
                    <td>'.$count.'</td>
                    <td>'.$row["eventName"].'</td>
                    <td>'.$row["date"].'</td>
                    <td>'.$row["startTime"].'</td>
                    <td>'.$row["endTime"].'</td>
                    <td>'.$row["location"].'</td>
                    <td>'.$row["category"].'</td>
                    <td> <button type="button" class="btn btn-success"'.$edit.'><span class="glyphicon glyphicon-cog" ></span> Edit</button> </td>
                    <td> <button type="button" class="btn btn-danger"'.$delete.'><span class="glyphicon glyphicon-trash" ></span> Delete</button> </td>
                </tr>
            ';
            $count+=1;
        }
    return $output;
    }

    function editEvent($idEvent,$eventName,$location,$date,$size,$startTime,$endTime,$category,$type,$price,$details,$organizerName,$contactName,$email,$phone,$latitude,$longitude,$teaser,$preCondition,$postCondition) {
        // echo $idEvent;
        $this->saveActivityLog();
        $idEvent = trim(preg_replace('/\s\s+/', ' ', $idEvent));
        echo "d:".$idEvent;
        $statement = $this->connect->exec('UPDATE event SET `eventName`='.'"'.$eventName.'"'.', `location`='.'"'.$location.'"'.', `date`='.'"'.$date.'"'.', `size`='.'"'.$size.'"'.', `category`="'.$category.'", `type`="'.$type.'", `price`="'.$price.'", `details`="'.$details.'", `organizerName`="'.$organizerName.'", `contactName`="'.$contactName.'", `email`="'.$email.'", `phone`="'.$phone.'", `precondition`="'.$preCondition.'", `postcondition`="'.$postCondition.'", `teaserVDO`="'.$teaser.'" WHERE `idEvent`="'.$idEvent.'"');
        // echo 'UPDATE event SET `eventName`='.'"'.$eventName.'"'.', `location`='.'"'.$location.'"'.', `date`='.'"'.$date.'"'.', `size`='.'"'.$size.'"'.', `category`="'.$category.'", `type`="'.$type.'", `price`="'.$price.'", `details`="'.$details.'", `organizerName`="'.$organizerName.'", `contactName`="'.$contactName.'", `email`="'.$email.'", `phone`="'.$phone.'" WHERE `idEvent`="'.$idEvent.'"';
    }


    function getActivityLogs() {
        $output ="";
        $count = 1;
        $statement = $this->connect->query('SELECT * FROM activityLogs');
        while($row = $statement->fetch(PDO::FETCH_BOTH)){
            $output .= '
                <tr>
                    <td>'.$count.'</td>
                    <td>'.$row["username"].'</td>
                    <td>'.$row["date"].'</td>
                    <td>'.$row["time"].'</td>
                    <td>'.$row["event"].'</td>
                </tr>
            ';
            $count+=1;
        }
    return $output;
    }

    function saveActivityLog($username,$date,$time,$event) {
        $statement = $this->connect->exec('INSERT INTO activitylogs (`username`,`date`,`time`,`event`) VALUES ('."'".$username."'".','."'".$date."'".','."'".$time."'".','."'".$event."'".')');
    }

    function getSystemLogs() {
        $output ="";
        $count = 1;
        $statement = $this->connect->query('SELECT * FROM systemLogs');
        while($row = $statement->fetch(PDO::FETCH_BOTH)){
            $output .= '
                <tr>
                    <td>'.$count.'</td>
                    <td>'.$row["username"].'</td>
                    <td>'.$row["date"].'</td>
                    <td>'.$row["time"].'</td>
                    <td>'.$row["event"].'</td>
                    <td>'.$row["file"].'</td>
                </tr>
            ';
            $count+=1;
        }
    return $output;
    }

    function saveSystemLog($username,$date,$time,$event,$file) {
        $statement = $this->connect->exec('INSERT INTO systemlogs (`username`,`date`,`time`,`event`,`file`) VALUES ('."'".$username."'".','."'".$date."'".','."'".$time."'".','."'".$event."'".','."'".$file."'".')');
    }

    function deleteEvent($eventID) {
  
        $query = $this->connect->prepare('DELETE FROM `event` WHERE `idEvent`=:id');
        $query->execute(['id' => $eventID]);    
    
    }
    function deleteWebboard($idWebboard) {
        $statement = $this->connect->prepare('DELETE FROM `webboard` WHERE idWebboard=:idWebboard');
        $statement->execute(['idWebboard' => $idWebboard]);
        echo "DELETE FROM `webboard` WHERE idWebboard=$idWebboard";
    }

    function getAttenEventProfile($username){
        $output = "";
        $statement = $this->connect->prepare('SELECT event.eventName,event.date,event.idEvent FROM attendents,event WHERE attendents.idEvent=event.idEvent and attendents.username=:username');
        $statement->execute([ ':username' => $username]);
        while($row = $statement->fetch(PDO::FETCH_BOTH)){
            $output .= '
                <tr>
                    <td><a href="event-new.php?idEvent= '.$row["idEvent"].' "> '.$row["eventName"]. '</td>
                    <td align="right">'.$row["date"].'</td>
                </tr></a>
            ';
        }
        return $output;
    }

    public function getLenE(){
        return $this->lengthE;
    }

}
?>