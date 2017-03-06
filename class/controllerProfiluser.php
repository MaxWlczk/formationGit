<?php 

class controllerProfilUser{
    public function Profiluser(){
        $managerUser = new UtilisateurManager;
        if(isset($_GET['id'])){
             $id = intval($_GET['id']);
             if($id !=0){
                $user = $managerUser->getUserprofile($id);
                require("vue/vueProfile.php");
             }else{
                 throw new Exception("l'identifiant n'est pas un entier");
             }

         }else{
             throw new Exception("il n'y a pas d'identifiant pour l'utilisateur demandé");
         }
    }

}


?>