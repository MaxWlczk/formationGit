<?php 


    trait hydrateTrait{
        
        public function hydrate($data){
            foreach($data as $key => $oneData){
                $method = "set".ucfirst($key);
                if(method_exists($this, $method)){
                    $this->$method($oneData);
                }else{
                    echo "la methode ".$method." n'existe pas.";
                }
            }
        }
        
    }


?>