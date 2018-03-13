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
        if( $this->user->getStatus() == "Activate"){ //สร้าง user ใน database ด้วย
          // echo "user";
          $this->database->setConnect("3306","kittichai_garden","user1","user1");
        }
      }
    }

    function saveLog($event){
      if(isset($_SESSION['username'])){      
        $this->database->saveActivityLog($_SESSION['username'],$this->getDateFormatter(),$this->getTimeFormatter(),$event);
      }else{
        $this->database->saveActivityLog("guest",$this->getDateFormatter(),$this->getTimeFormatter(),$event);
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
      
      
        //login
        // echo 'login';
    
        //echo "SignIn Success.";

        $result = $this->database->signIn($username,$password);
        // var_dump($result);
        // echo $password;
        // echo "<br>";
        // echo $result["password"];
        // echo "<br>";
        if (password_verify($password,$result[1])) {
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
   function  signUp($username,$password,$email,$firstName,$lastName,$id_No,$birthday,$gender,$address,$phone,$check,$imageProfile){
        $pass = password_hash($password, PASSWORD_BCRYPT);
    if($this->database->checkAccount($username,$email,$id_No,$phone)){

          if($check == 1){
            if ($imageProfile!=null) {
              rename("../upload-files/files/".$imageProfile, "../upload-files/files/profile/".$username.$imageProfile);
              $this->database->createAccount($username,$pass,$email,$firstName,$lastName,$id_No,$birthday,$gender,$address,$phone,"user","unActivate",'upload-files/files/profile/'.$username.$imageProfile);
            } else {
              $this->database->createAccount($username,$pass,$email,$firstName,$lastName,$id_No,$birthday,$gender,$address,$phone,"user","unActivate",'upload-files/files/profile/default-avatar.png');
            }
          }else if($check == 0){
            if ($imageProfile!=null) {
              rename("../upload-files/files/".$imageProfile, "../upload-files/files/profile/".$username.$imageProfile);
              $this->database->createAccount($username,$pass,$email,$firstName,$lastName,$id_No,$birthday,$gender,$address,$phone,"admin","Activate",'upload-files/files/profile/'.$username.$imageProfile);
            } else {
              $this->database->createAccount($username,$pass,$email,$firstName,$lastName,$id_No,$birthday,$gender,$address,$phone,"admin","Activate",'upload-files/files/profile/default-avatar.png');
            }
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

    function createNewEvent($eventName,$locationEvent,$date,$size,$startTime,$endTime,$category,$type,$price,$details,$organizerName,$contactName,$email,$phone,$imagesPath,$latitude,$longitude,$teaserVDO,$preCondition,$postCondition) {
      echo "createNewEvent in controller";
      $maxIDEvent = $this->database->getMaxIDEvent();
      if ($this->database->checkEvent($eventName)) {
        if (sizeof($imagesPath) > 0) {
          echo "omagee";
          if(sizeof($imagesPath) >= 1){
            $this->database->createEvent($_SESSION['username'],$eventName,$locationEvent,$date,$startTime,$endTime,$size,$category,$type,$price,$details,$teaserVDO,$preCondition,$postCondition,$organizerName,$contactName,$email,$phone,$latitude,$longitude,$imagesPath[0],0,$imagesPath[1]);
          }else{
            $this->database->createEvent($_SESSION['username'],$eventName,$locationEvent,$date,$startTime,$endTime,$size,$category,$type,$price,$details,$teaserVDO,$preCondition,$postCondition,$organizerName,$contactName,$email,$phone,$latitude,$longitude,$imagesPath[0],0,$imagesPath[0]);
          }
          foreach ($imagesPath as $value) {
            $this->database->addPath('upload-files/files/upload/'.$maxIDEvent.$value);
            rename("../upload-files/files/".$value, "../upload-files/files/upload/".$maxIDEvent.$value);
          }
        } else {
          $this->database->createEvent($_SESSION['username'],$eventName,$locationEvent,$date,$startTime,$endTime,$size,$category,$type,$price,$details,$teaserVDO,$preCondition,$postCondition,$organizerName,$contactName,$email,$phone,$latitude,$longitude,0);
        }
        $files = glob("../upload-files/files/thumbnail/*");
        foreach ($files as $file) {
            if (is_file($file)) {
              unlink($file);
            }
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


    
    function getDateFormatter() {
      return $date = date("Y-m-d");
  }
  
  function getTimeFormatter() {
      return $time = date("h:i:s");
  }


}

?>
