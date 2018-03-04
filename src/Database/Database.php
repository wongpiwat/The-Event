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
    function readAccount ($username,$password){
        $statement = $this->connect->query('SELECT * FROM account WHERE username='."'".$username."'".' and password='."'".$password."'");
        $result = $statement->fetch(PDO::FETCH_BOTH);
        $account = new Account($result[0],$result[1],$result[2],$result[3],$result[4],$result[5],$result[6],$result[7],$result[8],$result[9],$result[10],$result[11],$result[12]);
        return $account;
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
    



    function getConnect(){
        return $this->connect;
    }

    function setConnect($port,$databaseName,$username,$password){
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