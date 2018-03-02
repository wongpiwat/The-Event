<?php
namespace KittichaiGarden\Database;
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
        $statement->setFetchMode(PDO::FETCH_CLASS, 'Account'); 
        $account  = $statement->fetch();
        return $account;
    }
    //ตรวจสอบว่ามี Username หรือ Email อยู่ในดาต้าเบสหรือยัง ?
    function checkAccount($username,$email){
        $statement = $this->connect->prepare('SELECT username,email FROM account WHERE username=:username or email=:email');
        $statement->execute([':username' => $username , ':email' => $email]);
        $result = $statement->fetch(PDO::FETCH_BOTH);
        if($result["username"] == "" && $result["email"] == ""){
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
        $statement = $this->connect->prepare('INSERT INTO `account`(`username`, `password`, `email`, `firstName`, `lastName`, `ID_No`, `birthday`, `gender`, `address`, `phone`, `type_Account`, `status`) VALUES (:username,:password , :email , :firstName ,
        :lastName , :id_No , :birthday , ;gender, :address , :phone , :type , :status)');

        $statement->execute([':username' => $username , ':password' => $password , ':email' => $email , ':firstName' => $firstName ,
        ':lastname' => $lastName , ':id_No' => $id_No , ':birthday' => $birthday , ':gender' => $gender ,
        ':address' => $address , ':phone' => $phone , ':type' => $type , ':status' => $status]);
        
        var_dump($statement);

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