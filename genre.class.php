<?php 

include 'Type.class.php';
class Genre extends Type
{
	
	// Propriétés
    private $film =[];
   
	
	
	// Méthodes
	// Liste des getters
	public function __construct($nom)
    {
        parent::__construct($nom);
        

    }
    public function getFilm()
    {
        return $this->film;
    }	
    public function addFilm(film $film){
		
        array_push($this->film,$film);
	}
    
}
?>