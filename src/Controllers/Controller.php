<?php
namespace KittichaiGarden\Controllers;
use KittichaiGarden\Database\Database;
use KittichaiGarden\Models\Account;
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
        //echo "SignIn Success.";
        $this->user = $this->database->readAccount($username,$password);
        $_SESSION['user'] = $this->user;
        // รีเทิน เลข 0 แสดงว่า admin รีเทินเลข 1 แสดงว่า user ปกติ รีเทินเลข 2 แสดงว่า user ยังไม่ activate


        if($this->user->getTypeAccount() == "admin"){
          echo "0";
        }else if( $this->user->getTypeAccount() == "user" ){
          if($this->user->getStatus() == "activate"){
            echo "1";
          }else if($this->user->getStatus() == "unActivate"){
            echo "2";
          }
        }

        echo $this->user;

      }else{
        //รีเทิน -1 คือล๊อคอินไม่ได้
        echo "-1";      
      }
    }

    //SignUp ของผู้ใช้ และ Admin
    function  signUp($username,$password,$email,$firstName,$lastName,$id_No,$birthday,$gender,$address,$phone,$check){
        if($this->database->checkAccount($username,$email,$id_No,$phone)){
          echo "Username is Available";
          if($check == 1){
            $this->database->createAccount($username,$password,$email,$firstName,$lastName,$id_No,$birthday,$gender,$address,$phone,"user","unActivate");
          }else if($check == 0){
            $this->database->createAccount($username,$password,$email,$firstName,$lastName,$id_No,$birthday,$gender,$address,$phone,"admin","activate");
          }

        }else{
          echo "Username is Already Use!!!";
        }
    }


    function logout(){
      $this->user = null;
      session_unset();
      session_destroy();
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