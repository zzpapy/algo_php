<?php 
class relRealFilm 
{
	
	// Propriétés
    private $real ;
    private $film;
   
	
	
	// Méthodes
	// Liste des getters
	public function __construct($real,$film)
    {
        $this->real;
        $this->film=[];
        

    }

    public function getReal()
    {
        return $this->real;
    }
    public function getFilm()
    {
        return $this->film;
    }	
    
	
	

	// Liste des setters
	
	
    
	public function addFilm(Film $film){
        array_push($this->film,$film);
    }
    public function addReal(Real $real){
        array_push($this->real,$real);
    }
    
}
?>