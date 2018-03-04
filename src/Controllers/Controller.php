<?php
namespace KittichaiGarden\Controllers;
use KittichaiGarden\Database\Database;
use KittichaiGarden\Models\Account;
use PDO;




class Controller{

    private $database = null;
    private $user = null;
    //constructor
    function __construct(){
      $this->database = new Database("3306","kittichai_garden","guest","");
    }

    function checkType($username){
      $result = $this->database->checkType($username);
      if($result != null){
        return $result;
      }
      return null;
    }

    //SingIn ของผู้ใช้
    function signIn($username,$password){
      // echo "$username<br>$password";
      // echo "<br>";
      if($this->database->findUser($username,$password)){
        //echo "SignIn Success.";
        $result = $this->database->readAccount($username,$password);
       
        $this->user = new Account($result[0],$result[1],$result[2],$result[3],$result[4],$result[5],$result[6],$result[7],$result[8],$result[9],$result[10],$result[11],$result[12]);
      
        $_SESSION['username'] = $this->user->getUsername();
        $_SESSION['userImage'] = $this->user->getImage();
        // รีเทิน เลข 0 แสดงว่า admin รีเทินเลข 1 แสดงว่า user ปกติ รีเทินเลข 2 แสดงว่า user ยังไม่ activate
        echo "0";

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


    function signOut(){
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