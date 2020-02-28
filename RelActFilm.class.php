<?php 
class RelActFilm 
{
	
	// Propriétés
    private $role ;
    private $film;
   
	
	
	// Méthodes
	// Liste des getters
	public function __construct($role,$film)
    {
        $this->role = $role;
        $this->film=[];
        

    }

    public function getRole()
    {
        return $this->role;
    }
    public function getFilm()
    {
        return $this->film;
    }	
    
	
	

	// Liste des setters
	
	
    
	public function addFilm(Film $film){
        array_push($this->film,$film);
    }
    public function addrole(role $role){
        array_push($this->role,$role);
    }
    
}
?>