<?php

namespace app\calsses;
require_once "./app/model/testModel.php";
use testModel\Model as Model;

class User{
    private $logine, $email, $password, $group, $email_cheker;
    public $stutus;

    function __construct($log = "unknow", $email= "unknow", $pass= "unknow", $group = 1, $email_cheker = "unknow"){
        $this->logine = $log;
        $this->email = $email;
        $this->password = $pass;
        $this->group = $group;
        $this->email_cheker = $email_cheker;
    }
    public function setLogine($temp){
        $this->logine = $temp;
    }
    public function setEmail($temp){
        $this->email = $temp;
    }
    public function setPassword($temp){
        $this->password = $temp;
    }
    public function setEmailcheker($temp){
        $this->email_cheker = $temp;
    }

    public function insert_to_db(){
        $_SESSION['logine'] = $this->logine;
        $_SESSION['email'] = $this->email;
        $_SESSION['password'] = $this->password;
        // $real_model->insert("INSERT INTO `test`(`logine`, `password`, `email`) VALUES ('".$_POST[$keys[2]]."','".$_POST[$keys[1]]."','".$_POST[$keys[0]]."')");
    }

    public function delete_in_db($id){

    }

    public function updata($id){

    }

    public static function check_session(){
        if(isset($_SESSION['logine']) and isset($_SESSION['email']) and isset($_SESSION['password'])){
            return true;
        }
        return false;
    }

    public function get_email_cheker($id){
        return true;
    }


}