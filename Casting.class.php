<?php 
// include 'Type.class.php';
class Casting
{
	
	// Propriétés
    private $film ;
    private $acteur ;
    private $role ;
	
	// Méthodes
	// Liste des getters
	public function __construct(Film $film,Acteur $acteur,Role $role)
    {
        $this->film = $film;
        $this->acteur = $acteur;
        $this->role = $role;
        $acteur ->addCasting($this);
        $role ->addCasting($this);
        $film ->addCasting($this);
        // $this->role = $role;
        

    }

    public function getFilm(){
        return $this->film;
    }
    
    public function getRole(){
        return $this->role;
    }
    public function getActeur(){
        return $this->acteur;
    }
   
  
    
}
?>