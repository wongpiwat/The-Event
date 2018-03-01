<?php
namespace KittichaiGarden\Database;
use PDO;

class Database {


    private $connect;

    function __construct($port, $databaseName, $username, $password){

        $this->connect = new PDO("mysql:host=localhost:".$port.";dbname=".$databaseName.";charset=utf8mb4",$username,$password);
    }


    function readAccount ($username,$password){
        $statement = $this->connect->query('SELECT * FROM account WHERE username='."'".$username."'".' and password='."'".$password."'");
        $statement->setFetchMode(PDO::FETCH_CLASS, 'Account'); 
        $account  = $statement->fetch();
        return $account;
    }

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

    function createAccount($username){

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