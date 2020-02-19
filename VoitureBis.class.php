<?php 

include 'voitureElec.class.php';
class VoitureBis
{
	
	// Propriétés
	private $marque ;
    private $modele;
	
	
	// Méthodes
	// Liste des getters
	public function __construct($marque,$modele)
    {
        $this->marque = $marque;
        $this->modele = $modele;

    }

    public function getMarque()
    {
        return $this->marque;
    }	
    public function getModele()
    {
        return $this->modele;
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

    //Méthodes

    public function getInfos(){
        return '<table><tr><td>'.$this->getMarque().'</td><td>'.$this->getModele().'</td></tr></table>';
    }
  
}
?>