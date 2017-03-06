<?php 
    //Charge notre base de donnée
    require('modele/modele.php');

function loadController($action = null){
    
    if(!isset($action)){
        $action = 'accueil';
    }
    if (file_exists("controller/controller".$action.".php")) {
                    
        require("controller/controller".$action.".php");

    } else {

        throw new Exception("Le controller est introuvable");
    }  
}

function erreur($erreur){
    require('vue/vueErreur.php');
}
?>