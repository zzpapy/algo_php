<?php 
class Realisateur extends Personne
{
	
	// Propriétés
	private $film;
	
	
	// Méthodes
	// Liste des getters
	public function __construct($nom,$prenom,$date)
    {
		parent::__construct($nom,$prenom,$date);
		$this->film = [];
	}
	

	public function getFilm()
	{
		return $this->film;
	}
	
	public function addFilm(film $film){
		
        array_push($this->film,$film);
	}
	public function affichFilm()
    {
		// var_dump($this->film);
		$txt = 'le réalisateur '.$this->getNom().'à rélisé '.count($this->film).' film(s)<br>';
		$i=0;
		foreach ($this->film as $key ) {
			$txt .=  'titre du film '.$i.': '.$key->getTitre().'<br>';
			$i++;
		}
		return $txt;
    }

	// Liste des setters
	
	
    
	
}
?>