<?php 
class controllerVideo{
    public function video(){
        $managerVideo = new VideoManager;
        //function video($id_video){
        //     $video = getVideo($id_video);
        //    require("vue/vueVideo.php");
        //}
        if(isset($_GET['id'])){
             $id = intval($_GET['id']);
             if($id !=0){
               $video = $managerVideo->getVideo($id);
                require("vue/vueVideo.php");
             }else{
                 throw new Exception("l'identifiant n'est pas un entier");
             }

         }else{
             throw new Exception("il n'y a pas d'identifiant pour la video demandé");
         }
    }
}



?>