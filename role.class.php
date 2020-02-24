<?php 
// include 'Type.class.php';
class Role extends Type
{
	
	// Propriétés
    private $acteur=[];
	private $film = [];
	
	// Méthodes
	// Liste des getters
	public function __construct($nom,$film)
    {
        parent::__construct($nom);
        

    }
    public function addActeur(Acteur $acteur){
		
        array_push($this->acteur,$acteur);
    }
    public function addFilm(Film $film){
		
        array_push($this->film,$film);
	}

  
    
}
?>