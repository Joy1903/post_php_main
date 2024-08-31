<?php
namespace ControllerAdmine;

require_once "./app/model/testModel.php";
use testModel\Model as Model;
use app\Router\Router as Router;

class Controller_Admine{
    private $model;
    
    function __construct()
    {
        $this->model = new Model();
    }


    public function img_delete_by_id(){
        
    }

    public function delete_by_id($did){
        $id = $_GET['id'];
        $real_model = $this->model;
        $result = $real_model->delete($id);
        if ($result){
            Router::redirect("http://test/table");
            die();
        } 
        return $result;
    }

    public function all_users(){
        $real_model = $this->model;
        $result = $real_model->select_all_users();
        return $result;
        die();
    }

    public function ban_by_logine($name_of_key){
        
    }

    public function register($name_of_key){
        $keys = explode(" ",$name_of_key);
        $real_model = $this->model;
        $real_model->insert_user_to_bd($_POST[$keys[0]], $_POST[$keys[2]], $_POST[$keys[1]]);
        // $_SESSION[''];
        Router::redirect("http://test/check-page");
        die();
    }
}

