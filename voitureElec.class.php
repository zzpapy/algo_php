<?php 


    class VoitureElec extends VoitureBis
    {
        
        // Propriétés
        private $autonomie ;
        
        
        // Méthodes
        // Liste des getters
        public function __construct($marque,$modele,$autonomie=0)
        {
            parent::__construct($marque,$modele);
            $this->autonomie = $autonomie;
    
        }
    
        public function getAutonomie()
        {
            return $this->autonomie;
        }	
    
        // Liste des setters       
        
        
        public function setAutonomie($autonomie)
        {
            
            $this->autonomie = $autonomie;
        
        }
        public function getInfos(){
            parent::getInfos();
            return '<table><tr><td>'.$this->getMarque().'</td>><td>'.$this->getModele().'</td><td>'.$this->getAutonomie().'</td></tr>';
        }
    }
?>