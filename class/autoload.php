<?php 


    class Autoloader{
        
        public static function register(){
            spl_autoload_register(array(__CLASS__, 'autoload'));
//            spl_autoload_register('controller');
        }
        
        
        public static function autoload($class){
            require("class/".$class.".php");
        }
        
//        public static function controller($action = null){
//            if(!isset($action)){
//                $action = 'accueil';
//            }
//            if (file_exists("controller/controller".$action.".php")) {
//
//                require("controller/controller".$action.".php");
//
//            } else {
//
//                throw new Exception("Le controller est introuvable");
//            }  
//        }
    }


?>