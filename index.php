<?php
    require("class/autoload.php");
    Autoloader::register();
    require("controller/router.php");
$router = new Router();
$router->routerRequete();
// require controller/router.php

//    try{
//        if(isset($_GET['action'])){
//            loadController($_GET['action']);            
//        }else{
//            loadController();
//        }
//    }
//    catch(Exception $e){
//        erreur($e->getMessage());
//    }


?>
