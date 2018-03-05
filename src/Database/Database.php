<?php 
namespace KittichaiGarden\Database;
use KittichaiGarden\Models\Account;
use PDO;



class Database {

    //ตัวแปรเอาไว้ติดต่อกับ Database
    private $connect;

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
    function checkAccount($username,$email,$id_No,$phone){
        $statement = $this->connect->prepare('SELECT username,email,phone,ID_No FROM account WHERE username=:username or email=:email or phone=:phone or ID_No=:id_No');
        $statement->execute([':username' => $username , ':email' => $email , ':phone' => $phone , 'id_No' => $id_No ]);
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
    function createAccount($username,$password,$email,$firstName,$lastName,$id_No,$birthday,$gender,$address,$phone,$type,$status){
        $statement = $this->connect->exec('INSERT INTO account (`username`, `password`, `email`, `firstName`, `lastName`, `ID_No`, `birthday`, `gender`, `address`, `phone`, `type_Account`, `status`) 
        VALUES ('."'".$username."'".','."'".$password."'".','."'".$email."'".','."'".$firstName."'".','."'".$lastName."'".','."'".$id_No."'".','."'".$birthday."'".','."'".$gender."'".','."'".$address."'".','."'".
         $phone."'".','."'".$type."'".','."'".$status."'".')');
        // echo "<br>";
        // var_dump($statement);
        // echo 'INSERT INTO account (`username`, `password`, `email`, `firstName`, `lastName`, `ID_No`, `birthday`, `gender`, `address`, `phone`, `type_Account`, `status`) 
        // VALUES ('."'".$username."'".','."'".$password."'".','."'".$email."'".','."'".$firstName."'".','."'".$lastName."'".','."'".$id_No."'".','."'".$birthday."'".','."'".$gender."'".','."'".$address."'".','."'".
        //  $phone."'".','."'".$type."'".','."'".$status."'".')';
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

    function readAccount(){
        $statement = $connect->query('SELECT * FROM account');
        while($row = $statement->fetch(PDO::FETCH_BOTH)){
        $output .= '
            <tr>
                <td>'.$row["0"].'</td>
                <td>'.$row["1"].'</td>
                <td>'.$row["2"].'</td>
                <td>'.$row["4"].'</td>
                <td>'.$row["5"].'</td>
                <td>'.$row["6"].'</td>
                <td>'.$row["7"].'</td>
                <td>'.$row["8"].'</td>
                <td>'.$row["9"].'</td>
                <td>'.$row["10"].'</td>
                <td>'.$row["11"].'</td>
                <td>'.$row["12"].'</td>
            </tr>
        ';
        }
    return $output;

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