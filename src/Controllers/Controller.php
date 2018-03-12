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
          // $this->database->setConnect("3306","kittichai_garden","user","user");
          $this->database->setConnect("3306","kittichai_garden","users","user");
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
    function  signUp($username,$password,$email,$firstName,$lastName,$id_No,$birthday,$gender,$address,$phone,$check,$imageProfile){
        if($this->database->checkAccount($username,$email,$id_No,$phone)){
          if($check == 1){
            if ($imageProfile!=null) {
              rename("../upload-files/files/".$imageProfile, "../upload-files/files/profile/".$username.$imageProfile);
              $this->database->createAccount($username,$password,$email,$firstName,$lastName,$id_No,$birthday,$gender,$address,$phone,"user","unActivate",'upload-files/files/profile/'.$username.$imageProfile);
            } else {
              $this->database->createAccount($username,$password,$email,$firstName,$lastName,$id_No,$birthday,$gender,$address,$phone,"user","unActivate",'none');
            }
          }else if($check == 0){
            if ($imageProfile!=null) {
              rename("../upload-files/files/".$imageProfile, "../upload-files/files/profile/".$username.$imageProfile);
              $this->database->createAccount($username,$password,$email,$firstName,$lastName,$id_No,$birthday,$gender,$address,$phone,"admin","activate",'upload-files/files/profile/'.$username.$imageProfile);
            } else {
              $this->database->createAccount($username,$password,$email,$firstName,$lastName,$id_No,$birthday,$gender,$address,$phone,"admin","activate",'none');
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
            $this->database->createEvent($this->user->getUsername(),$eventName,$locationEvent,$date,$startTime,$endTime,$size,$category,$type,$price,$details,$teaserVDO,$preCondition,$postCondition,$organizerName,$contactName,$email,$phone,$latitude,$longitude,$imagesPath[0],0,$imagesPath[1]);
          }else{
            $this->database->createEvent($this->user->getUsername(),$eventName,$locationEvent,$date,$startTime,$endTime,$size,$category,$type,$price,$details,$teaserVDO,$preCondition,$postCondition,$organizerName,$contactName,$email,$phone,$latitude,$longitude,$imagesPath[0],0,$imagesPath[0]);
          }
          foreach ($imagesPath as $value) {
            $this->database->addPath('upload-files/files/upload/'.$maxIDEvent.$value);
            rename("../upload-files/files/".$value, "../upload-files/files/upload/".$maxIDEvent.$value);
          }
        } else {
          $this->database->createEvent($this->user->getUsername(),$eventName,$locationEvent,$date,$startTime,$endTime,$size,$category,$type,$price,$details,$teaserVDO,$preCondition,$postCondition,$organizerName,$contactName,$email,$phone,$latitude,$longitude,0);
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


    


}

?>
