<?php 
class Role extends Type
{
	
	// Propriétés
	private $nom ;
   
	
	
	// Méthodes
	// Liste des getters
	public function __construct($nom)
    {
        parent::__construct($nom);
        

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