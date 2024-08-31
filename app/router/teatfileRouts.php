<?php
require_once "./app/router/routers/testRouter.php";
use app\Router\Router as Router;
session_start();

Router::page("/","home");
Router::page("/register","register");
Router::page("/logine","logine");
Router::page("/table","choose");
Router::page("/check-page","check_page");
Router::page("/main_page","main_page");
Router::page("/user-show","user");

// Router for registration form
Router::post("/register-form","email password logine","ControllerAdmine","Controller_Admine","register");

Router::post("/check_login","login","ControllerBase","Controller_Base","check_logine");

Router::post("/check-user","login password","ControllerUser","Controller_User","check_user");

// Router::post("/user-show","login password","ControllerUser","Controller_User","check_user");

// Router for delete in admine panel
Router::get("/delete?id=","id","ControllerAdmine","Controller_Admine","delete_by_id");
Router::enable();