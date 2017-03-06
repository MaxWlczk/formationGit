<?php 


class Video{
        
        use hydrateTrait;
        
        protected $id;
        protected $titre;
        protected $url;
        protected $dateajout;
        protected $nbvues;
        protected $iduser;
        protected $is_active;
        
        public function __construct($data = array()){
        
        
            if(!empty($data)){
                $this->hydrate($data);
            }

        }
        
        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setTitre($titre){
            $this->titre=$titre;
        }

        public function getTitre(){
            return $this->titre;
        }
        
        public function setUrl($url){
            $this->url = $url;
        }

        public function getUrl(){
            return $this->url;
        }

        public function setDateajout($dateajout){
            $this->dateajout = $dateajout;
        }
        
        public function getDateajout(){
            return $this->email;
        }

        public function getNbvues(){
            return $this->nbvues;
        }

        public function setNbvues($nbvues){
            $this->nbvues = $nbvues;
        }
    
        public function getIduser(){
            return $this->iduser;
        }

        public function setIduser($iduser){
            $this->iduser = $iduser;
        }

        public function getIs_active(){
            return $this->is_active;
        }
        
        public function setIs_active($is_active){
            $this->is_active = $is_active;
        }
    
        public function url(){
            return "index.php?action=video&id=".$this->getId();
        }
    
        public function getAuthor(){
//            return "jjj".$this->getIduser();
            $usermanager = new UtilisateurManager();
            $author = $usermanager->getUserprofile($this->getIduser());
            return $author;
//            die();
        }

        
    }



?>