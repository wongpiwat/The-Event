<?php
namespace KittichaiGarden;


class Account {
        private $username;
        private $password;
        private $firstName;
        private $surName;
        private $birthday;
        private $gender;
        private $email;
        private $phone;
        private $idCard;
        private $address;
        private $typeAccount;
        private $status;

        //constructor
        function __construct($username,$password,$firstname,$surname,$birthday,$gender,$birthday,$gender,$email,$phone,$idCard,$address,$typeAccount,$status){
            $this->username = $username;
            $this->password = $password;
            $this->firstName = $firstname;
            $this->surName = $surname;
            $this->birthday = $birthday;
            $this->gender = $gender;
            $this->email = $email;
            $this->phone = $phone;
            $this->idCard = $idCard;
            $this->address = $address;
            $this->typeAccoutn = $typeAccount;
            $this->status = $status;
        }


        //getter
        function getUsername(){
            return $this->username;
        }

        function getPassword(){
            return $this->password;
        }

        function getFirstName(){
            return $this->firstName;
        }

        function getSurName(){
            return $this->surName;
        }

        function getBirthday(){
            return $this->birthday;
        }
        
        function getGender(){
            return $this->gender;
        }

        function getEmail(){
            return $this->email;
        }

        function getPhone(){
            return $this->phone;
        }

        function getIdCard(){
            return $this->IdCard;
        }

        function getAddress(){
            return $this->address;
        }
        
        function getTypeAccount(){
            return $this->typeAccount;
        }

        function getStatus(){
            return $this->status;
        }

        //setter
        function setPassword($password){
            $this->password = $password;
        }

        function setFirstName($fname){
            $this->fisrtname = $fname
        }

        function setSurName($sname){
            $this->surname = $sname;
        }

        function setBirthday($b){
            $this->birthday = $b;
        }

        function setGender($g){
            $this->gender = $g;        
        }

        function setEmail($e){
            $this->email = $e;
        }

        function setPhone($p){
            $this->phone = $p;
        }

        function setIdCard($c){
            $this->idCard = $c;
        }

        function setTypeAccount($t){
            $this->typeAccount = $t;
        }

        function setStatus($s){
            $this->status = $s;
        }
}

?>