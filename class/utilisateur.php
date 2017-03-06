<?php 


    class Utilisateur{
        
        use hydrateTrait;
        
        protected $id;
        protected $pseudo;
        protected $password;
        protected $email;
        protected $typeuser;
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

        public function setPseudo($pseudo){
            $this->pseudo=$pseudo;
        }

        public function getPseudo(){
            return $this->pseudo;
        }
        
        public function setPassword($password){
            $this->password = $password;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setEmail($email){
            $this->email = $email;
        }
        
        public function getEmail(){
            return $this->email;
        }

        public function getTypeuser(){
            return $this->typeuser;
        }

        public function setTypeuser($typeuser){
            $this->typeuser = $typeuser;
        }

        public function getIs_active(){
            return $this->is_active;
        }
        
        public function setIs_active($is_active){
            $this->is_active = $is_active;
        }
        
        public function getUrl(){
            return 'index.php?action=profiluser&id='.$this->getId();
        }
        
        public function getVideo(){
            $videoManager = new videoManager();
            $videos = $videoManager->getVideobyprofile($this->getId());
            return $videos;
        }

        
    }



?>