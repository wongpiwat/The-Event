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


    function changeRole(){
      if($this->user->getTypeAccount() == "admin"){
        $this->database->setConnect("3306","kittichai_garden","admin","password");
        //echo "admin";
      }else if( $this->user->getTypeAccount() == "user"){
        if( $this->user->getStatus() == "activate"){ //สร้าง user ใน database ด้วย
          $this->database->setConnect("3306","kittichai_garden","user","user");
          //echo "user";
        }
      }
    }


    function checkType($username){
      $result = $this->database->autoSignIn($username);
      if($result != null){
        $this->user = new Account($result[0],$result[1],$result[2],$result[3],$result[4],$result[5],$result[6],$result[7],$result[8],$result[9],$result[10],$result[11],$result[12]);
        $this->changeRole();
        return $this->user;
      }
      return null;
    }


    //SingIn ของผู้ใช้
    function signIn($username,$password){
      // echo "$username<br>$password";
      // echo "<br>";
      if($this->database->findUser($username,$password)){
        //echo "SignIn Success.";

        $result = $this->database->signIn($username,$password);
       
        $this->user = new Account($result[0],$result[1],$result[2],$result[3],$result[4],$result[5],$result[6],$result[7],$result[8],$result[9],$result[10],$result[11],$result[12]);
      
        $_SESSION['username'] = $this->user->getUsername();
        $_SESSION['userImage'] = $this->user->getImage();
        echo "1";

      }
      else{
        echo "-1";
      }
    }

    //SignUp ของผู้ใช้ และ Admin
    function  signUp($username,$password,$email,$firstName,$lastName,$id_No,$birthday,$gender,$address,$phone,$check){
        if($this->database->checkAccount($username,$email,$id_No,$phone)){
          if($check == 1){
            $this->database->createAccount($username,$password,$email,$firstName,$lastName,$id_No,$birthday,$gender,$address,$phone,"user","unActivate");
          }else if($check == 0){
            $this->database->createAccount($username,$password,$email,$firstName,$lastName,$id_No,$birthday,$gender,$address,$phone,"admin","activate");
          }
          
        }else{
          echo "-1";
        }
    }


    function signOut(){

      $this->user = null;
      session_unset();
      session_destroy();
    }

    function createNewEvent($eventName,$location,$date,$size,$Category,$type,$price,$detail,$organizerName,$contactName,$email,$phone,$imagePath) {
      if ($this->database->checkEvent($eventName)) {
        echo "Event is Available";
        $this->database->createEvent($eventName,$location,$date,$size,$Category,$type,$price,$detail,$organizerName,$contactName,$email,$phone);
        foreach ($imagePath as $value) {
          $this->database->addPath($value);
          echo "$value <br>";
        }
      } else {
        echo "Event is Already Use!!!";
      }
    }



    function getDatabase(){
        return $this->database;
    }

    function setDatabase($d){
        $this->database = $d;
    }

    




    //test function นะครับ
    public function test () {
        echo __METHOD__, PHP_EOL;
    }


    


}

?>
