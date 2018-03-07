<?php 
namespace KittichaiGarden\Database;
use KittichaiGarden\Models\Account;
use PDO;

class Database {

    //ตัวแปรเอาไว้ติดต่อกับ Database
    private $connect = null;

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
        $statement = $this->connect->prepare('SELECT username,email,phone,ID_No FROM account WHERE username=:username or email=:email or phone=:phone or idNo=:idNo');
        $statement->execute([':username' => $username , ':email' => $email , ':phone' => $phone , 'idNo' => $idNo ]);
        $result = $statement->fetch(PDO::FETCH_BOTH);
        if($result["username"] == "" && $result["email"] == "" && $result["phone"] == "" && $result["ID_No"] == "" ){
            return true;
        }else{
            return false;
        }
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

    function createAccount($username,$password,$email,$firstName,$lastName,$idNo,$birthday,$gender,$address,$phone,$type,$status){
        $statement = $this->connect->exec('INSERT INTO account (`username`, `password`, `email`, `firstName`, `lastName`, `idNo`, `birthday`, `gender`, `address`, `phone`, `typeAccount`, `status`) 
        VALUES ('."'".$username."'".','."'".$password."'".','."'".$email."'".','."'".$firstName."'".','."'".$lastName."'".','."'".$idNo."'".','."'".$birthday."'".','."'".$gender."'".','."'".$address."'".','."'".
         $phone."'".','."'".$type."'".','."'".$status."'".')');
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
    function readAccount(){
        $output ="";
        $count = 1;
        $statement = $this->connect->query('SELECT * FROM account');
        while($row = $statement->fetch(PDO::FETCH_BOTH)){
        $username = $row["username"];
        $edit  = sprintf('onclick="editAccount(\'%s\',\'edit\')"',$username);
        $read  = sprintf('onclick="editAccount(\'%s\',\'read\')"',$username);
        $delete = sprintf('onclick="editAccount(\'%s\',\'del\');deleteAccount(\'%s\')"',$username,$username);
        $output .= '
            <tr '.$read.'>
                <td>'.$count.'</td>
                <td>'.$row["username"].'</td>
                <td>'.$row["email"].'</td>
                <td>'.$row["firstName"].'</td>
                <td>'.$row["lastName"].'</td>
                <td>'.$row["typeAccount"].'</td>
                <td>'.$row["status"].'</td>
                <td> <button type="button" class="btn btn-success"'.$edit.'><span class="glyphicon glyphicon-cog" ></span> Edit</button> </td>
                <td> <button type="button" class="btn btn-danger"'.$delete.'><span class="glyphicon glyphicon-trash" ></span> Delete</button> </td>
            </tr>
        ';
        $count+=1;
        }
    return $output;
    
    }

    function updateAccount($username,$password,$email,$firstName,$lastName,$idNo,$birthday,$gender,$address,$phone,$type,$status){
        $statement = $this->connect->exec('UPDATE account SET `password`='.'"'.$password.'"'.', `email`='.'"'.$email.'"'.', `firstName`='.'"'.$firstName.'"'.'
    , `lastName`='.'"'.$lastName.'"'.', `idNo`="'.$idNo.'", `birthday`="'.$birthday.'", `gender`="'.$gender.'", 
    `address`="'.$address.'", `phone`="'.$phone.'", `typeAccount`="'.$type.'", `status`="'.$status.'" WHERE `username`="'.$username.'"');
         echo $statement;
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
        $time = date("h:i:s");
        $statement = $this->connect->prepare('SELECT * FROM event WHERE (date>=:date and time>=:time) or date>=:date');
        $statement->execute([ ':date' => $date , ':time' => $time]);
        return $this->returnEvent($statement);

    }

    function returnEvent($statement){
        $result = '';
        $count = 0;
        while($row = $statement->fetch(PDO::FETCH_BOTH)){
            if($count == 3){
                break;
            }
            $s =  $this->connect->prepare('SELECT imagePath FROM imageEvent WHERE idEvent=:e');
            $s->execute([':e' => $row["idEvent"] ]);
            $img = $s->fetch(PDO::FETCH_BOTH);
            if($row["type"] == "free"){
             $b = "Get Tickets";
            }else{
             $b = "Buy Tickets";
            }
            $onClick  = sprintf('onclick="showEventContent(\'%s\')"',$row["idEvent"]);
           $url = sprintf('index-event.php?idEvent=%s"',$row["idEvent"]);
            

                $result .= '
                <a href="'.$url.'">
                <form action="index-event.php">
                <div class="eventContent" '.$onClick.'>
                    <div class="eventLeft">
                        <div class="eventPic" ><img  src="'.$img[0].'" style="width:140px;height:140px;">
                        </div>
                    </div>
                    <div class="eventBody">
                        <div class="eventTitle"><b>&nbsp;'.$row["eventName"].'</b></div><br>
                        <button name="idEvent" type="submit" class="btn btn-defualt buttonTickets" value="'.$row["idEvent"].'" >'.$b.'</button><br>
                        <div class="eventDetail">
                        <i class="fa fa-clock-o fa-fw"></i>'.$row["date"].' | '.$row["time"].'<br>
                        <i class="fa fa-map-marker fa-fw"></i>'.$row["location"].'
                        </div>
                    </div>
                </div>
                </form>
                </a>

                ';
            
            $count += 1;
        }
        return $result;
    }

    function readEventUp(){
       
        $date = date("Y-m-d");
        $time = date("h:i:s");
        $statement = $this->connect->prepare('SELECT * FROM event WHERE (date>=:date and time>=:time) or date>=:date ORDER BY date,time');
        $statement->execute([ ':date' => $date , ':time' => $time]);
        return $this->returnEvent($statement);

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

     //สร้างevent
     function createEvent($eventName,$location,$date,$size,$Category,$type,$price,$details,$organizerName,$contactName,$email,$phone) {
        $query = $this->connect->prepare('SELECT max(idEvent) FROM event');
        $query->execute();
        $result = $query->fetch(PDO::FETCH_BOTH);
        $this->maxID = $result['max(idEvent)']+1;
        $statement = $this->connect->exec('INSERT INTO event (`idEvent`,`eventName`, `location`, `date`, `size`, `Category`, `type`, `price`, `details`, `organizerName`, `contactName`, `email`, `phone`) VALUES
         ('."'".$this->maxID."'".','."'".$eventName."'".','."'".$location."'".','."'".$date."'".','."'".$size."'".','."'".$Category."'".','."'".$type."'".','."'".$price."'".','."'".$details."'".','."'".$organizerName."'".','."'".$contactName."'".','."'".$email."'".','."'".$phone."'".')');
        //  echo "INSERT INTO event (`eventName`, `location`, `date`, `size`, `Category`, `type`, `price`, `details`, `organizerName`, `contactName`, `email`, `phone`) VALUES ('$eventName,$location,$date,$size,$Category,$type,$price,$details,$organizerName,$contactName,$email,$phone)";
    }

    function addPath($imagePath) {
        echo "addPath";
        // $query = $this->connect->prepare('SELECT max(idEvent) FROM event');
        // $query->execute();
        // $result = $query->fetch(PDO::FETCH_BOTH);
        // $maxID = $result['max(idEvent)']-1;
        $statement = $this->connect->exec('INSERT INTO imageEvent (`idEvent`, `imagePath`) VALUES ('."'".$this->maxID."'".','."'".$imagePath."'".')');

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

    
    //test function นะครับ
    public function test () {
        echo __METHOD__, PHP_EOL;
    }


}
?>