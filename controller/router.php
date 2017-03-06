<?php 


    class Router{
        private $ctrlAccueil;
        private $ctrlProfilUser;
        private $ctrlVideo;
        
        
        
        public function __construct(){
            $this->ctrlAccueil = new controllerAccueil();
//            $this->ctrlProfilUser = new controllerProfilUser();
//            $this->ctrlVideo = new controllerVideo();
        }
        
        public function routerRequete(){
            try{
                if(isset($_GET['action'])){
                    $controller_name = "controller".ucfirst($_GET['action']);
                    //controllerProfilUser
                    $controller = new $controller_name();
//                    $test = "ctrl".$_GET['action'];
                    $method_action = ucfirst($_GET['action']);
                    $controller->$method_action();
////                    if($_GET['action'] == "profiluser"){
//                        $this->ctrlProfilUser->profilUser();
//                    }else if($_GET['action'] == "video"){
//                        $this->ctrlVideo->video();
//                    }else{
//                        throw new Exception('Action non valide : '.$_GET['action']);
//                    }
                }else{
                    $this->ctrlAccueil->accueil();
                }
            }catch(Exception $e){
                $this->erreur($e->getMessage());
            }
        }
        
        
        private function erreur($erreur){
//            $vue = new vue('Erreur');
            require('vue/vueErreur.php');
        }
    }


?>