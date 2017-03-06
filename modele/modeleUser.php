<?php 
//
//function getUserprofile($id_user){
//    $bdd=getBdd();
//    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE id= :id');
//    $req->bindParam(':id', $id_user, PDO::PARAM_INT);
//    $req->execute();
//    if($req->rowCount() == 1){
//        $result = $req->fetch(PDO::FETCH_ASSOC);
//        return $result;
//    }else{
//        throw new Exception("L'utilisateur ".$id_user. " n'existe pas !");
//    }
//}

?>