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

    //ตรวจสอบว่ามี event อยู่ในดาต้าเบสหรือเปล่า
    function checkEvent($eventName) {
        $statement = $this->connect->prepare('SELECT eventName FROM event WHERE eventName=:eventName');
        $statement->execute([':eventName' => $eventName]);
        $result = $statement->fetch(PDO::FETCH_BOTH);
        if($result["eventName"] == ""){
            return true;
        }else{
            return false;
        }
    }
    //สร้างevent
    function createEvent($eventName,$location,$date,$size,$Category,$type,$price,$detail,$organizerName,$contactName,$email,$phone) {
        $statement = $this->connect->exec('INSERT INTO event (`nameEvent`, `password`, `email`, `firstName`, `lastName`, `ID_No`, `birthday`, `gender`, `address`, `phone`, `type_Account`, `status`) 
        VALUES ('."'".$username."'".','."'".$password."'".','."'".$email."'".','."'".$firstName."'".','."'".$lastName."'".','."'".$id_No."'".','."'".$birthday."'".','."'".$gender."'".','."'".$address."'".','."'".
         $phone."'".','."'".$type."'".','."'".$status."'".')');
    }

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
        $edit  = sprintf('onclick="createAccount(\'%s\')"',$username);
        $delete = sprintf('onclick="deleteAccount(\'%s\')"',$username);
        $output .= '
            <tr >
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
    
    function deleteAccount($username){
        // $statement = $this->connect->exec('DELETE FROM account WHERE username="1"');
        if($this->connect->exec('DELETE FROM account WHERE username='.'"'.$username.'"'.' ') == true){
            echo "1";
        }else{
            echo "-1";
        }
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
            if($count == 4){
                break;
            }
            $s =  $this->connect->prepare('SELECT image FROM image_event WHERE idEvent=:e');
            $s->execute([':e' => $row["idEvent"] ]);
            $img = $s->fetch(PDO::FETCH_BOTH);
            if($row["type"] == "free"){
                $result .= '
                <div class="media">
                    <div class="media-left">
                        <div class="poster-container" ><img class="media-object" src="'.$img[0].'" style="width:140px;height:140px;">
                        </div>
                    </div>
                    <div class="media-body">
                        <div class="event-title"><b>'.$row["eventName"].'</b></div>
                        <button name="button" type="submit" class="btn btn-sm btn-secondary pull-right event-btn">Get Tickets</button>
                        <div class="event-detail">
                            <i class="fa fa-clock-o fa-fw"></i>'.$row["date"].'|'.$row["time"].'<br>
                            <i class="fa fa-map-marker fa-fw">
                            </i>'.$row["location"].'
                        </div>
                    </div>
                </div>

                ';
            }
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