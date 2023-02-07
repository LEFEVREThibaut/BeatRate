<?php
    require_once("Controller/Controller.class.php");
    if(isset($_POST["mdp"])) {
        $controller = new Controller($_POST);
        $controller->invoke();
    } 
    else{
        $controller = new Controller($_GET);
        $controller->invoke();
    } 
?>