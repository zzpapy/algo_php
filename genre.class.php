<?php 

class Genre
{
	
	// Propriétés
    private $film =[];
    private $nom;
   
	
	
	// Méthodes
	// Liste des getters
	public function __construct($nom)
    {
        $this->nom = $nom;
        

    }
    public function getFilm()
    {
        return $this->film;
    }
    public function getNom()
    {
        return $this->nom;
    }	
    public function addFilm(Film $film){
		
        array_push($this->film,$film);
    }
    public function affichFilmGenre(){
        $txt = 'les films du genre '.$this->nom.' sont : <br>';
        foreach ($this->film as $key ) {
            $txt .=$key->getTitre().'<br>';
        }
        return $txt;
        // return $txt;
    }
    
}
?>