<?php

namespace testModel;

require_once "./app/router/routers/testRouter.php";
use app\Router\Router as Router;

class Model{
    private $connect, $messages, $host, $login, $password, $dbname;
    public $status, $quantofrows; // для проверки количесва изменимых строк 
    function __construct()
    {
        $confige = require_once "./app/profile/confige.php";
        $this->host = $confige["db"]["host"];
        $this->login = $confige["db"]["login"];
        $this->password = $$confige["db"]["password"];
        $this->dbname = $confige["db"]["db_name"];
        try {
            $this->connect = new \PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->login, $this->password);
            $this->status = TRUE;
            # add mesagges to log file
        } catch (\PDOException $e) {
            $this->status = FALSE;
            # add mesagges to log file
        }
    }

    private function checkConnect(){
        try {
            $conn = new \PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->login, $this->password);
            $this->status = TRUE;
            $this->messages = "Sucssefuly";
            # add mesagges to log file
       } catch (\PDOException $e) {
            $this->status = FALSE;
            $this->messages = "Database error: " . $e->getMessage();
            # add mesagges to log file
       }
    }
    
    public function select_user_by_id($id){
        $this->checkConnect();
        if($this->status == TRUE){
            try {
                $data = $this->connect->query("select * from users WHERE logine =".$id);
                $this->status = TRUE;
                if ($data){
                    $result = $data->fetchAll();
                }
            } catch (\PDOException $e) { 
                $this->messages = "Database error: " . $e->getMessage();
                $this->status = FALSE;
                $result = "<div class='container pt-5 mt-5 mb-5 pb-5'><div class='alert alert-danger' role='alert'>".($e->getMessage() == true ? "Something went wrong" :  $e->getMessage())."</div></div>";
            }
        } else {
            return $this->messages;
        }
        return $result;
    }

    public function select_all_users(){
        $this->checkConnect();
        if($this->status == TRUE){
            try {
                $data = $this->connect->query("select * from users");
                if ($data){
                    $result = $data->fetchAll();
                }
                $this->status = TRUE;
            } catch (\PDOException $e) {
                $this->messages = "Database error: " . $e->getMessage();
                $this->status = FALSE;
                $result = "<div class='container pt-5 mt-5 mb-5 pb-5'><div class='alert alert-danger' role='alert'>".($e->getMessage() == true ? "Something went wrong" :  $e->getMessage())."</div></div>";
            }
            return $result;
        } else {
            return $this->messages;
        }
    }
    
    public function insert_user_to_bd($email, $login, $password){
        $this->checkConnect();
        if($this->status == TRUE){
            try {
                $this->quantofrows = $this->connect->exec("INSERT INTO `users` (`Login`, `Password`, `email`) VALUES ('".$login."','".$password."','".$email."')");
                $this->status = TRUE;
            } catch (\PDOException $e) {
                $this->status = FALSE;
                $this->messages = "Database error: " . $e->getMessage();
            }
        } else {
            return $this->messages;
        }
    }


    public function delete($id){
        $this->checkConnect();
        if($this->status == TRUE){
            try {
                $this->quantofrows = $this->connect->exec("DELETE FROM `users` WHERE `user_id` = {$id}");
                $this->status = TRUE;
                return TRUE;
            } catch (\PDOException $e) {
                $this->status = FALSE;
                $this->messages = "Database error: " . $e->getMessage();
            }
        } else {
            return $this->messages;
        }
    }

    public function updata($sql){
        $this->checkConnect();
        if($this->status == TRUE){
            try{
                $this->quantofrows = $this->connect->exec($sql);
                $this->status = TRUE;
            } catch (\PDOException $e){
                $this->status = FALSE;
                $this->messages = "Database error: " . $e->getMessage();
            }
        } else {
            return $this->messages;
        }
    }
}
// $confige = require_once "./app/profile/confige.php";
// $model = new Model($confige["db"]["host"],$confige["db"]["login"],$confige["db"]["password"],"test_discussion");

// if($model->status == TRUE){
//     echo "<br>";
//      $result = $model->select("SELECT * FROM Comments INNER JOIN Questions ON Comments.Questions_id = Questions.id;");
//      if($model->status == TRUE){
//          echo "<table><tr><th>Id</th><th>text</th><th>User_id</th><th>Question_id</th><th>likes</th></tr>";
//          while($row = $result->fetchAll()){
//             echo "<pre>";
//             print_r($row);
//             echo "</pre>";
//             echo "<tr>";
//             echo "<td>" . $row["id"] . "</td>";
//             echo "<td>" . $row["text"] . "</td>";
//             echo "<td>" . $row["date"] . "</td>";
//             echo "<td>" . $row["Questions_id"] . "</td>";
//             echo "<td>" . $row["likes"] . "</td>";
//             echo "</tr>";
//         }  
//         echo "</table>";
//     }
// }
?>
