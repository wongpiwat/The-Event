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
      echo "helloSun+++++++++++";
      
    }

    function login($username,$password){
      // echo "<br>";
      // echo $username,$password;
      // echo "<br>";
    
      $connect= $this->database->getConnect();
      $statement = $connect->query('SELECT * FROM account WHERE username='."'".$username."'".' and password='."'".$password."'");
      //var_dump($statement);
      $row = $statement->fetch(PDO::FETCH_BOTH);
      //echo $row["username"]." ".$row["password"]."-----";
      
      //------------------------------------
      //check if has user in database
      if($row["username"] == "" && $row["password"] == ""){
        echo "false";
      }else{
        echo "true";
        $statement->setFetchMode(PDO::FETCH_CLASS, 'Account'); 
        $this->user = $statement->fetch();
        var_dump($this->user);
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