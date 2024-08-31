<?php
namespace ControllerUser;

// user_controller

require_once "./app/model/testModel.php";
use testModel\Model as Model;
use app\Router\Router as Router;

class Controller_User{
    private $model;

    function __construct()
    {
        $this->model = new Model();
    }

    public function delete_img_by_id($id){ 
        echo "<div class='container'>";
        echo "<h1>get method</h1>";
        echo $id;
        echo "</div>";
    }

    public function check_user($name_of_key){ 
        $keys = explode(" ",$name_of_key);

        echo "<div class='container'>";
        echo "<h1>get method</h1>";
        echo $keys;
        echo "</div>";
    }

    public function show_user_by_login($name_of_key){ 
        $keys = explode(" ",$name_of_key);
        echo "<div class='container'>";
        echo "<h1>get method</h1>";
        echo $keys;
        echo "</div>";
    }
    
    public function uload_img_by_user_id($id){ 
        echo "<div class='container'>";
        echo "<h1>post method</h1>";
        echo $id;
        echo "</div>";
    }
}