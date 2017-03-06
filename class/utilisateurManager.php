<?php 

        class UtilisateurManager extends DatabaseManager{
            
            public function getUserprofile($id_user){
//                $bdd=getBdd();
                $req = $this->bdd->prepare('SELECT * FROM utilisateurs WHERE id= :id');
                
                $req->bindParam(':id', $id_user, PDO::PARAM_INT);
                $req->execute();
//                var_dump($req->rowCount());
                if($req->rowCount() == 1){
                    $result = $req->fetch(PDO::FETCH_ASSOC);
                    $user = new Utilisateur($result);
//                    die();
                    return new Utilisateur($result);
                }else{
                    throw new Exception("L'utilisateur ".$id_user. " n'existe pas !");
                }
            }
            
            
            
        }




?>