<?php 
namespace app\Router;
require_once "./app/controllers/controller_base.php";
require_once "./app/controllers/controller_user.php";
require_once "./app/controllers/controller_admine.php";

class Router{
    private static $list = [];

    public static function redirect($location){
        if(isset($location)){
            header("Location: ".$location);
        }
    }

    public static function page($uri, $filename="", $name_controller="", $class="", $method=""){
        self::$list[] = [
            "uri"=>$uri,
            "filename"=>$filename,
            'controller'=>$name_controller,
            "class"=>$class,
            "method"=>$method
        ];
    }
    public static function get($uri, $key, $name_controller, $class, $method){
        self::$list[] = [
            "uri"=>$uri,
            "key"=>$key,
            'controller'=>$name_controller,
            "class"=>$class,
            "method"=>$method,
            "get"=>true 
        ];
    }
    public static function post($uri, $key, $name_controller, $class, $method){
        self::$list[] = [
            "uri"=>$uri,
            "key"=>$key,
            'controller'=>$name_controller,
            "class"=>$class,
            "method"=>$method,
        ];
    }
    public static function enable(){
        $uri = $_SERVER['REQUEST_URI'];
        foreach(self::$list as $route){
            $key = $_GET[$route['key']];
            if(!empty($route['filename'])){
                if($route['uri'] === $uri){
                    require_once "./app/view/".$route['filename'].".php";
                    die();
                }
            }
            if(($_SERVER['REQUEST_METHOD'] === "POST") and ($route['uri'] ===$uri)){
                if (!empty($route['key'])){
                    $action = $route['controller']."\\".$route['class'];
                    $class = new $action;
                    $method = $route['method'];
                    $class->$method($route['key']);
                    die();
                }
            } else if($route['uri'].$key === $uri){
                if($route['get']){
                    $action = $route['controller']."\\".$route['class'];
                    $class = new $action;
                    $method = $route['method'];
                    $class->$method($key);
                    die();
                }
            }
        }
        require_once "./app/view/error.php";
    }
}
?>