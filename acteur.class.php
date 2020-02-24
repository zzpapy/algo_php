<?php 
class Acteur extends Personne
{
	
	// Propriétés
	private $film =[];
	private $role = [];
	
	
	// Méthodes
	// Liste des getters
	public function __construct($nom,$prenom,$date)
    {
		parent::__construct($nom,$prenom,$date);

    }

    
	public function test()
	{
		$nom = $this->getNom();
		return $nom;
	}
	public function addRole(role $role){
		
        array_push($this->role,$role);
	}
	public function addFilm(film $film){
		
        array_push($this->film,$film);
	}
	public function affichFilm()
    {
		foreach ($this->film as $key => $value) {
			echo "acteur : ".$this->getNom()."<br>titre du film : ".$value->getTitre();
			echo '<br>';
		}
    }
	
    
	
}
?>