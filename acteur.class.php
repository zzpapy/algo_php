<?php 
class Acteur extends Personne
{
	
	// Propriétés
	private $nom ;
    private $prenom;
	private $date;
	private $film;
	
	
	// Méthodes
	// Liste des getters
	public function __construct($nom,$prenom,$date)
    {
		parent::__construct($nom,$prenom,$date);
		$this->film = [];

    }

    
	public function test()
	{
		$nom = $this->getNom();
		return $nom;
	}
	public function addFilm(film $film){
        array_push($this->film,$film);
    }

	

	// Liste des setters
	
	
    
	
}
?>