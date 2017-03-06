<?php 

class controllerAccueil{
    public function accueil(){
        $managerVideo = new VideoManager;
        //methode 1, récupérer toutes les videos et tous les users et lors de l'afichage sélectionner l'user voulu.
        //methode 2, faire une fonction qui va créer un tableau de video pour chaque user.
        if(isset($_GET['limit']) && isset($_GET['search'])){
            $getVideos = $managerVideo->getVideos($_GET['search'],$_GET['limit']);

        //    $videos = getVideos($_GET['search'],$_GET['limit']);
        }else if(isset($_GET['search'])){
            $getVideos = $managerVideo->getVideos($_GET['search']);
        //    $videos = getVideos($_GET['search']);
        }else if(isset($_GET['limit'])){
            $getVideos = $managerVideo->getVideos('',$_GET['limit']);
        //    $videos = getVideos('',$_GET['limit']);
        }else{
            $getVideos = $managerVideo->getVideos();
        //    $videos = getVideos();
        }
        //$getUsers = $managerUser->getUserprofile($getVideos->getIduser());

        //Affichage de la vue
        require('vue/vueAccueil.php');
    }
}

?>