<?php 

//function getVideos($search = null, $limit = null){
//    $bdd=getBdd();
//    $requete = 'SELECT video.id, titre, url, dateajout, nbvues, iduser, pseudo FROM video INNER JOIN utilisateurs ON iduser = utilisateurs.id';
//    if($search != null && $limit != null){
//        $search = "%".$search."%";
//        $requete = $requete." WHERE titre LIKE '".$search."' LIMIT ".$limit."";
//    }else if($limit !=null){
//        $requete = $requete." LIMIT ".$limit."";
//    }else if($search != null){
//        $search = "%".$search."%";
//        $requete = $requete." WHERE titre LIKE '".$search."'";
//    }
//    $req = $bdd->prepare($requete);
//    $req->execute();
//    $result = $req->fetchAll();
//    return $result;
//}
//
//function getVideo($id_video){
//    $bdd=getBdd();
//    $req = $bdd->prepare('SELECT * FROM video WHERE id= :id');
//    $req->bindParam(':id', $id_video, PDO::PARAM_INT);
//    $req->execute();
//    var_dump($req->rowCount());
//    if($req->rowCount() == 1){
//        $result = $req->fetch();
//        return $result;
//    }else{
//        throw new Exception("La video ".$id_video. " n'existe pas !");
//    }
//
//}
//
//function getVideobyprofile($id_user){
//    $bdd=getBdd();
//    $req = $bdd->prepare('SELECT pseudo, email, titre, url, nbvues, dateajout, iduser, video.id FROM `video` INNER JOIN utilisateurs ON iduser = utilisateurs.id WHERE iduser= :id');
//    $req->bindParam(':id', $id_user, PDO::PARAM_INT);
//    $req->execute();
//    $result = $req->fetchAll();
//    return $result;
//}





?>