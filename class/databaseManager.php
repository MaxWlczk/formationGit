<?php 


    class DatabaseManager{
        
        public $bdd;
        
        public function __construct(){
            $this->bdd = self::getBdd();
        }
    
        public static function getBdd(){
            try{
                return new PDO('mysql:host=localhost;dbname=partagetavideo;charset=utf8', 'root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }catch(Exception $e){
                throw new Exception("Un problème de connexion à la base est survenue");
            }
        }
        
        
    }


?>