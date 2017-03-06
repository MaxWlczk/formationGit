<?php 

        class VideoManager extends DatabaseManager{
            
            public function getVideos($search = null, $limit = null){
//                $bdd=getBdd();
//                $requete = 'SELECT video.id, titre, url, dateajout, nbvues, iduser, pseudo FROM video INNER JOIN utilisateurs ON iduser = utilisateurs.id';
                $requete = 'SELECT video.id, titre, url, dateajout, nbvues, iduser FROM video';
                if($search != null && $limit != null){
                    $search = "%".$search."%";
                    $requete = $requete." WHERE titre LIKE '".$search."' LIMIT ".$limit."";
                }else if($limit !=null){
                    $requete = $requete." LIMIT ".$limit."";
                }else if($search != null){
                    $search = "%".$search."%";
                    $requete = $requete." WHERE titre LIKE '".$search."'";
                }
                $req = $this->bdd->prepare($requete);
                $req->execute();
                while($result = $req->fetch(PDO::FETCH_ASSOC)) {
                    $tableauVideo[] = new Video($result);
                }
//                $result = $req->fetchAll();
                return $tableauVideo;
            }

            public function getVideo($id_video){
//                $bdd=getBdd();
                $req = $this->bdd->prepare('SELECT * FROM video WHERE id= :id');
                $req->bindParam(':id', $id_video, PDO::PARAM_INT);
                $req->execute();
                var_dump($req->rowCount());
                if($req->rowCount() == 1){
                    $result = $req->fetch();
                    return new Video($result);
                }else{
                    throw new Exception("La video ".$id_video. " n'existe pas !");
                }

            }

            public function getVideobyprofile($id_user){
//                $bdd=getBdd();
                $req = $this->bdd->prepare('SELECT titre, url, nbvues, dateajout, iduser, video.id FROM `video` INNER JOIN utilisateurs ON iduser = utilisateurs.id WHERE iduser= :id');
                $req->bindParam(':id', $id_user, PDO::PARAM_INT);
                $req->execute();
//                $result = $req->fetchAll();
                while($result = $req->fetch(PDO::FETCH_ASSOC)) {
                    $tableauVideo[] = new Video($result);
                }
                return $tableauVideo;
            }
            
//            public function getVideoUser($id_user){
//                $req = $this->bdd->prepare('SELECT pseudo, utilisateurs.id FROM `video` INNER JOIN utilisateurs ON iduser = utilisateurs.id WHERE iduser= :id');
//                $req->bindParam(':id', $id_user, PDO::PARAM_INT);
//                $req->execute();
//                $result = $req->fetchAll();
//            }

            
        }




?>