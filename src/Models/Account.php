<?php
namespace KittichaiGarden\Models;

class Account {
        private $username;
        private $password;
        private $email;
        private $firstName;
        private $surName;
        private $idNo;
        private $birthday;
        private $gender;
        private $address;
        private $phone;
        private $typeAccount;
        private $image;
        private $status;

        //constructor
        function __construct($username,$password,$email,$firstname,$surname,$id_No,$birthday,$gender,$address,$phone,$typeAccount,$image,$status){
            $this->username = $username;
            $this->password = $password;
            $this->firstName = $firstname;
            $this->surName = $surname;
            $this->birthday = $birthday;
            $this->gender = $gender;
            $this->email = $email;
            $this->phone = $phone;
            $this->idNo = $id_No;
            $this->address = $address;
            $this->typeAccount = $typeAccount;
            $this->status = $status;
            $this->image = $image;
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
        function getIdNo(){
            return $this->idNo;
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
        function getImage(){
            return $this->image;
        }
        //setter
        function setPassword($password){
            $this->password = $password;
        }

        function setFirstName($fname){
            $this->fisrtname = $fname;
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

        function setIdNo($c){
            $this->idNo = $c;
        }

        function setTypeAccount($t){
            $this->typeAccount = $t;
        }

        function setStatus($s){
            $this->status = $s;
        }
        function setImage($m){
            $this->image = $m;
        }
}

?>