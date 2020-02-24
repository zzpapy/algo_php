<?php 
    class Voiture
    {
        
        // Propriétés
        private $marque ;
        private $modele;
        private $nbPortes;
        private $vitesseActuelle;
        private $etat;
        
        
        // Méthodes
        // Liste des getters
        public function __construct($marque,$modele,$nbPortes,$vitesseActuelle=0,$etat=0)
        {
            $this->marque = $marque;
            $this->modele = $modele;
            $this->nbPortes = $nbPortes;
            $this->vitesseActuelle = $vitesseActuelle;
            $this->etat = $etat;
    
        }
    
        public function getMarque()
        {
            return $this->marque;
        }	
        public function getModele()
        {
            return $this->modele;
        }	
        public function getVitesseActuelle()
        {
            return $this->vitesseActuelle;
        }
        public function getEtat()
        {
            return $this->etat;
        }
        
        
    
        // Liste des setters
        
        
        
        public function setMarque($marque)
        {
            
            $this->marque = $marque;
        
        }
        public function setModele($modele)
        {
            $this->modele= $modele;		
        }
        public function setNbPortes($nbPortes)
        {
            
                $this->nbPortes = $nbPortes;
        }
        public function setVitesseActuelle($vitesseActuelle)
        {
            
                $this->vitesseActuelle = $vitesseActuelle;
        }
        public function setEtat($etat)
        {
            
                $this->etat = $etat;
        }
      
    
        public function __toString()
        {
            return "<table><tr><td>nom et modèle du véhicule : </td><td>".$this->marque." ".$this->modele."</td><tr><td>Nombres de portes : </td><td>".$this->nbPortes."</td><tr><tr><td> Sa vitesse actuelle est de : </td><td>".$this->getVitesseActuelle()."</table>";
        }
        public function vitesseEnCours()
        {
            if($this -> getEtat()==1){
                return "la vitesse actuelle du véhicule ".$this->getMarque()." ".$this->getModele()." est de ".$this->getVitesseActuelle();
            }
            else{
                return "le véhicule ".$this->getMarque()." ".$this->getModele()." est actuellement à l'arrêt.";
            }
        }
        public function etat()
        {
            $actuel=$this->getEtat();
            if($actuel==1){
                return "le véhicule est démarré<br>";
            }
            else{
                $this->setEtat(1);
                return "le véhicule est stoppé";
            }
        } 
        public function start()
        {
            $actuel=$this->getEtat();
            if($actuel==1){
                return "le véhicule est déjà démarrer";
            }
            else{
                $this->setEtat(1);
                return "le véhicule démarre";
            }
        } 
        public function stop()
        {
            $actuel=$this->getEtat();
            if($actuel==0){
                return "le véhicule est déjà arreter";
            }
            else{
                $this->setEtat(1);
                return "le véhicule s'arrete";
            }
        } 
        public function vitesse($vitesse)
        {
            $etat=$this-> getEtat();
            if(is_numeric ( $vitesse )){
                if($etat==1){
                    $vitesseActuelle=$this->getVitesseActuelle();
                    if($vitesseActuelle>$vitesse){
                        $this->setVitesseActuelle($vitesse);
                        return "la voiture veut décélérer de ".$vitesse."<br>la voiture ".$this -> getModele()." décélère de ".$vitesse;
                    }
                    elseif($vitesseActuelle<$vitesse){
                        $this->setVitesseActuelle($vitesse);
                        return "la voiture veut accélerer de ".$vitesse."<br> la voiture ".$this -> getModele()." accélère de ".$vitesse;
                    }
                }
                else{
                    return "pour accélerer il faut démarrer le véhicule".$this->getMarque()."";
                }
            }
            else{
                return "la valeure insérée n'est pas un nombre !!!";
            }

            return;
        }
        
    }
?>