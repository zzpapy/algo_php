<?php 
class Type
{
	
	// Propriétés
	private $nom ;
   
	
	
	// Méthodes
	// Liste des getters
	public function __construct($nom)
    {
        $this->nom = $nom;
        

    }

    public function getNom()
    {
        return $this->nom;
    }	
    
	
	

	// Liste des setters
	
	
    
	public function setNom($nom)
	{
        
        $this->nom = $nom;
    
    }
    
}
?>