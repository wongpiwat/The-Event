<?php
namespace KittichaiGarden\Controllers;
use KittichaiGarden\Database\Database;
use PDO;
class Controller{

    private $database;
    private $user;
    //constructor
    function __construct(){
      $this->database = new Database("3306","kittichai_garden","guest","");
    }

    //SingIn ของผู้ใช้
    function signIn($username,$password){
      // echo "$username<br>$password";
      // echo "<br>";
      if($this->database->findUser($username,$password)){
        echo "SignIn Success.";
        $this->user = $this->database->readAccount($username,$password);
        // echo "<pre>";
        // var_dump($this->user);
        // echo "</pre>";
      }else{
        echo "SignIn Fail.";      
      }
    }

    //SignUp ของผู้ใช้ 
    function  SignUp($username,$password){
        if($this->database->checkAccount($username,$email)){
          echo "Username is Already Use!!!";
        }else{
          echo "SignUp";
        }
    }



    function getDatabase(){
        return $this->database;
    }

    function setDatabase($d){
        $this->database = $d;
    }




    // //test function นะครับ
    // public function test () {
    //     echo __METHOD__, PHP_EOL;
    // }


    


}

?>