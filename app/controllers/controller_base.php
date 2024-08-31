<?php
namespace ControllerBase;

// controller

require_once "./app/model/testModel.php";
use testModel\Model as Model;
use app\Router\Router as Router;

class Controller_Base{
    private $model;

    function __construct()
    {
        $this->model = new Model();
    }

    public function delete_item($key){ 
        echo "<div class='container'>";
        echo "<h1>get method</h1>";
        echo $key;
        echo "</div>";
    }

    public function view_all_img(){ 
        echo "<div class='container'>";
        echo "<h1>get method</h1>";
        echo "soon";
        echo "</div>";
    }

    public function view_all_User_img(){ 
        echo "<div class='container'>";
        echo "<h1>get method</h1>";
        echo "soon img";
        echo "</div>";
    }

    public function check_logine(){     
        $login = strtolower(htmlspecialchars($_POST["login"])); // Получаем логин, преобразуем ряд спецсимволов и приводим строку к нижнему регистру
        $model = $this->model; // Подключаемся к базе данных
        $result_set = $model->select_user_by_id($login); // Отправляем запрос
        echo $result_set != 0; // Если ничего не найдено, то выводим false, иначе true
    }
}